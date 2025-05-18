<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = array(
            'empresa'=>Empresa::first()
        );
        return view('empresa.index',$data);
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
        $empresa=Empresa::first();
        if(!$empresa){
            $empresa=Empresa::create($request->all());
        }else{
            $empresa->update($request->all());
        }
        
        if($request->logo){
            $path = $request->logo->storeAs('public/logo', now().'.'.$request->logo->extension());
            $empresa->logo=$path;
            $empresa->save();
        }
        Session::flash('success','Empresa actualizado.');
        return redirect()->route('empresa.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Empresa $empresa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empresa $empresa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empresa $empresa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empresa $empresa)
    {
        //
    }
}
