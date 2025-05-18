<?php

namespace App\Http\Controllers;
use App\Models\Autoridad;
use App\Http\Controllers\Controller;
use App\Models\Archivo;
use App\Models\Noticia;
use App\Models\Slider;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function index() {
        // Artisan::call('cache:clear');
        // Artisan::call('config:clear');
        // Artisan::call('config:cache');
        // Artisan::call('storage:link');
        // Artisan::call('key:generate');
        // Artisan::call('migrate:fresh --seed');

        $slider=Slider::where('vista','SI')->latest()->take(5)->get();

        $arhivos=Archivo::latest()->take(15)->get();
        $noticias=Noticia::latest()->take(6)->get();
        $data = array(
            'sliders'=>$slider,
            'autoridad'=>Autoridad::first(),
            'archivos'=>$arhivos,
            'noticias'=>$noticias

        );
        return view('welcome',$data);
    }

    function autoridades() {

        $aut=Autoridad::first();
        return view('municipalidad.autoridades',['autoridad'=>$aut]);
    }
    function funcionarios() {

        $aut=Autoridad::first();
        return view('municipalidad.funcionarios',['autoridad'=>$aut]);
    }
    function resenahistorica() {

        $aut=Autoridad::first();
        return view('municipalidad.resenahistorica',['autoridad'=>$aut]);
    }

    function misionvision() {

        $aut=Autoridad::first();
        return view('municipalidad.misionvision',['autoridad'=>$aut]);
    }

    function himno() {

        $aut=Autoridad::first();
        return view('municipalidad.himno',['autoridad'=>$aut]);
    }


    function organigrama() {

        $aut=Autoridad::first();
        return view('municipalidad.organigrama',['organigrama'=>$aut]);
    }
    function turismo() {

        $aut=Autoridad::first();
        return view('municipalidad.turismo',['turismo'=>$aut]);
    }




    function detallevocal() {

        $aut=Autoridad::first();
        return view('detallevocales.detallevocal',['detallevocal'=>$aut]);
    }
    function detallevocal1() {

        $aut=Autoridad::first();
        return view('detallevocales.detallevocal1',['detallevocal1'=>$aut]);
    }
    function detallevocal2() {

        $aut=Autoridad::first();
        return view('detallevocales.detallevocal2',['detallevocal2'=>$aut]);
    }

    function detallevocal3() {

        $aut=Autoridad::first();
        return view('detallevocales.detallevocal3',['detallevocal3'=>$aut]);
    }



  function laberintos() {

        $aut=Autoridad::first();
        return view('detalleturismo.laberintos',['laberintos'=>$aut]);
    }
    function cascadachiguaza() {

        $aut=Autoridad::first();
        return view('detalleturismo.cascadachiguaza',['cascadachiguaza'=>$aut]);
    }
    function riochiguaza() {

        $aut=Autoridad::first();
        return view('detalleturismo.riochiguaza',['riochiguaza'=>$aut]);
    }
    function rioandrentza() {

        $aut=Autoridad::first();
        return view('detalleturismo.rioandrentza',['rioandrentza'=>$aut]);
    }
    function lagunamarianita() {

        $aut=Autoridad::first();
        return view('detalleturismo.lagunamarianita',['lagunamarianita'=>$aut]);
    }
    function cavernaanaconda() {

        $aut=Autoridad::first();
        return view('detalleturismo.cavernaanaconda',['cavernaanaconda'=>$aut]);
    }

}
