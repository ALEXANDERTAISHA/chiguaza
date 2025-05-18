<?php

namespace App\Http\Controllers;

use App\Models\Archivo;
use App\Models\Carpeta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class CarpetaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carpetas = Carpeta::whereNull('carpeta_id')
        ->with('subCarpetas')
        ->get();

        $data = array(
            'carpetas'=>$carpetas
        );
        return view('carpetas.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $car=new Carpeta();
        $car->nombre=$request->nombre;
        $car->carpeta_id=$request->carpeta_id;
        $car->save();
        Session::flash('success','Carpeta ingresado');
        return redirect()->route('carpetas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Carpeta $carpeta)
    {
        try {
            $carpeta->delete();
            Session::flash('success','Carpeta eliminado');
        } catch (\Throwable $th) {
            Session::flash('info','Carpeta no eliminado');
        }
        return redirect()->route('carpetas.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Carpeta $carpeta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Carpeta $carpeta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carpeta $carpeta)
    {
        //
    }


    public function guardarArchivo(Request $request) {
        
        $ar=new Archivo();
        $ar->nombre=$request->nombre;
        
        $ar->carpeta_id=$request->carpeta_id;
        $ar->save();

        if ($request->hasFile('archivo')) {    
            $path = Storage::putFileAs(
                'public/archivos', $request->file('archivo'), $ar->id.'.'.$request->file('archivo')->getClientOriginalExtension()
            );
            $ar->url=$path;
            $ar->save();
            Session::flash('success','ARCHIVO SUBIDO');
        }else{
            Session::flash('info','NO SE PUDO SUBIR EL ARCHIVO');
        }

        return redirect()->route('carpetas.index');
    }

    public function eliminarArchivo(Request $request,$id) {
        $ar=Archivo::find($id);
        if(Storage::exists($ar->url??'noexiste.pngx')){
            Storage::delete($ar->url);
        }
        $ar->delete();
        Session::flash('success','Archivo eliminado');
        return redirect()->route('carpetas.index');
    }
}
