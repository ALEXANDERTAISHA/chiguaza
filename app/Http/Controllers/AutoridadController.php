<?php

namespace App\Http\Controllers;

use App\Models\Autoridad;
use Illuminate\Http\Request;

class AutoridadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('autoridad.index',['autoridad'=>Autoridad::first()]);
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
        $au=Autoridad::first();
        if(!$au){
            $au=Autoridad::create($request->all());
        }else{
            $au->update($request->all());
        }
        if($request->foto){
            $path = $request->foto->storeAs('public/autoridad/foto', now().'.'.$request->foto->extension());
            $au->foto=$path;
            $au->save();
        }

        if($request->foto2){
            $path = $request->foto2->storeAs('public/autoridad/foto2', now().'.'.$request->foto2->extension());
            $au->foto2=$path;
            $au->save();
        }
        
        return redirect()->route('autoridad.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Autoridad $autoridad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Autoridad $autoridad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Autoridad $autoridad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Autoridad $autoridad)
    {
        //
    }
}
