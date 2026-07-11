<?php

namespace App\Http\Controllers;

use App\Mail\EnviarListadoQuejasSugerencias;
use App\Models\Archivo;
use App\Models\Autoridad;
use App\Models\Carpeta;
use App\Models\Empresa;
use App\Models\Noticia;
use App\Models\QuejaSugerencia;
use App\Models\User;
use App\Notifications\EnviarContacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class EstaticasController extends Controller
{
    public function tramites(){
        $data = array(
            'carpeta'=>Carpeta::where('nombre','TRAMITES')->first(),
            'titulo'=>'Tramites'
        );
        return view('estaticas.tramites',$data);
    }

    public function verArchivo($id) {
        $arc = Archivo::findOrFail($id);
        
        // Buscar el archivo en diferentes ubicaciones
        $filePath = null;
        
        // Intentar en public/uploads/archivos/ (nuevas rutas)
        if (Str::startsWith($arc->url, 'uploads/')) {
            $publicPath = public_path($arc->url);
            if (file_exists($publicPath)) {
                $filePath = $publicPath;
            }
        }
        
        // Intentar en public/storage/ (con symlink)
        if (!$filePath && Str::startsWith($arc->url, 'public/')) {
            $subPath = Str::after($arc->url, 'public/');
            $storagePath = public_path('storage/' . $subPath);
            if (file_exists($storagePath)) {
                $filePath = $storagePath;
            }
        }
        
        // Intentar en storage/app/public/ (rutas antiguas)
        if (!$filePath) {
            $storagePath = storage_path('app/' . $arc->url);
            if (file_exists($storagePath)) {
                $filePath = $storagePath;
            }
        }
        
        // Última opción: intentar como ruta pública directa
        if (!$filePath) {
            $publicPath = public_path($arc->url);
            if (file_exists($publicPath)) {
                $filePath = $publicPath;
            }
        }
        
        if (!$filePath || !file_exists($filePath)) {
            abort(404, 'Archivo no encontrado');
        }
        
        return response()->file($filePath, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $arc->nombre . '"'
        ]);
    }

    public function descargarArchivo($id) {
        $arc = Archivo::findOrFail($id);
        
        // Buscar el archivo en diferentes ubicaciones
        $filePath = null;
        
        // Intentar en public/uploads/archivos/ (nuevas rutas)
        if (Str::startsWith($arc->url, 'uploads/')) {
            $publicPath = public_path($arc->url);
            if (file_exists($publicPath)) {
                $filePath = $publicPath;
            }
        }
        
        // Intentar en public/storage/ (con symlink)
        if (!$filePath && Str::startsWith($arc->url, 'public/')) {
            $subPath = Str::after($arc->url, 'public/');
            $storagePath = public_path('storage/' . $subPath);
            if (file_exists($storagePath)) {
                $filePath = $storagePath;
            }
        }
        
        // Intentar en storage/app/public/ (rutas antiguas)
        if (!$filePath) {
            $storagePath = storage_path('app/' . $arc->url);
            if (file_exists($storagePath)) {
                $filePath = $storagePath;
            }
        }
        
        // Última opción: intentar como ruta pública directa
        if (!$filePath) {
            $publicPath = public_path($arc->url);
            if (file_exists($publicPath)) {
                $filePath = $publicPath;
            }
        }
        
        if (!$filePath || !file_exists($filePath)) {
            abort(404, 'Archivo no encontrado');
        }
        
        return response()->download($filePath, $arc->nombre, [
            'Content-Type' => 'application/pdf'
        ]);
    }

    public function carpeta($id) {
        $tra=Carpeta::find($id);
        
        $data = array(
            'carpeta'=>$tra,
            'titulo'=>$tra->nombre
        );
        return view('estaticas.tramites',$data);
    }

    public function quejasSugerencias(){
        $aut=Autoridad::first();
        return view('estaticas.quejasSugerencias',['autoridad'=>$aut]);
    }

    public function quejasSugerenciasIngresar(Request $request) {
        return view('estaticas.quejasSugerenciasIngresar');
    }

    public function quejasSugerenciasConsultar(Request $request) {
        if($request->email && $request->cedula){
            $qs=QuejaSugerencia::where(['email'=>$request->email,'cedula'=>$request->cedula])->get();
            if($qs->count()>0){
                $user=new User();
                $user->email=$request->email;
                Mail::to($user)->send(new EnviarListadoQuejasSugerencias($qs));

                Session::flash('success','Por razones de seguridad, se ha enviado un listado de las quejas y sugerencias ingresadas a su dirección de correo electrónico.');
                return redirect()->route('quejasSugerenciasConsultar');
            }else{
                Session::flash('info','Usted no tiene ingresado ninguna Queja o sugerencia.!');
            }
            
        }
        return view('estaticas.quejasSugerenciasConsultar');
    }
    public function enviarQuejaSugerencia(Request $request) {
        
        $request->validate([
            'email'=>'required|email|string|max:255',
            'cedula'=>'required|string|max:255',
            'apellidosnombres'=>'required|string|max:255',
            'telefonocelular'=>'required|digits:10',
            'quejasugerencia'=>'required',
            'dependencia'=>'required|string|max:255',
            'descripcion'=>'required',
            'termino'=>'required',
        ]);

        QuejaSugerencia::create($request->all());
        Session::flash('success','Gracias por presentar su '.$request->quejasugerencia.'. Queremos informarle que hemos recibido su retroalimentación y estamos trabajando en ello. Su caso ha sido registrado y será tratado con seriedad. Le mantendremos al tanto de cualquier avance.');
        return redirect()->route('quejasSugerenciasIngresar');
    }

    public function noticias() {
        $data = array(
            'noticias'=>Noticia::where('vista','SI')->latest()->paginate(6)
        );
        return view('estaticas.noticias',$data);
    }

    public function noticiasDetalle($id)  {
        $not=Noticia::where(['id'=>$id,'vista'=>'SI'])->firstOrFail();
        $related = Noticia::where('vista','SI')->where('id','!=',$id)->latest()->take(3)->get();
        $data = array(
            'noticia'=>$not,
            'related'=>$related
        );
        return view('estaticas.noticiasDetalle',$data);
    }

    public function contactos() {
        $data = array(
            'empresa'=>Empresa::first()
        );
        return view('estaticas.contactos',$data);
    }
    public function contactoEnviar(Request $request) {
        
        $user=new User();
        $empresa=Empresa::first();
        $user->email=$empresa->email;
        $user->notify(new EnviarContacto($request));
        Session::flash('success','Gracias por contactar con GAD Chiguaza. Nos comunicaremos con usted a la brevedad posible.');
        return redirect()->route('contactos');
    }
}
