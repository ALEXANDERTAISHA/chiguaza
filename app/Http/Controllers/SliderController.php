<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('slider.index',['sliders'=>Slider::get()]);
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
        $slider=Slider::create($request->all());
        
        if($request->fondo){
            $path = $request->fondo->storeAs('public/slider', $slider->id.'.'.$request->fondo->extension());
            $slider->fondo=$path;
            $slider->save();
        }
        
        return redirect()->route('slider.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slider $slider)
    {
        if($slider->vista==='SI'){
            $slider->vista='NO';
        }else{
            $slider->vista='SI';
        }
        $slider->save();
        return redirect()->route('slider.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();
        if(Storage::exists($slider->fondo)){
            Storage::delete($slider->fondo);
        }
        return redirect()->route('slider.index');
    }
}
