<?php

namespace App\Http\Controllers;

use App\Models\QuejaSugerencia;
use Illuminate\Http\Request;

class QuejasSugerenciasController extends Controller
{
    public function index()  {
        $qs=QuejaSugerencia::latest()->paginate(20);
        $data = array(
            'qs'=>$qs
        );
        return view('quejas-sugerencias.index',$data);
    }
    public function ver($id) {
        $qs=QuejaSugerencia::find($id);
        $data = array(
            'qs'=>$qs
        );
        return view('quejas-sugerencias.ver',$data);
    }
}
