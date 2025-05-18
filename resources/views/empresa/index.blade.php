@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">
     <b>Empresa</b>  
        
    </div>
    <div class="card-body">
        <form action="{{ route('empresa.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
             <b><label for="email">Email</label></b> 
              <input type="email" name="email" value="{{ old('email',$empresa->email??'') }}" class="form-control" id="email">
            </div>
            <div class="form-group">
              <b><label for="telefono">Teléfono</label></b>  
                <input type="tel" name="telefono" value="{{ old('telefono',$empresa->telefono??'') }}" class="form-control" id="telefono">
            </div>
            <div class="form-group">
               <b> <label for="direccion">Dirección</label></b>
                <input type="text" name="direccion" value="{{ old('direccion',$empresa->direccion??'') }}" class="form-control" id="direccion">
            </div>
            <div class="form-group">
              <b><label for="facebook">Facebook</label></b>  
                <input type="url" name="facebook" value="{{ old('facebook',$empresa->facebook??'') }}" class="form-control" id="facebook">
            </div>
            <div class="form-group">
               <b><label for="twitter">Twitter</label></b> 
                <input type="url" name="twitter" value="{{ old('twitter',$empresa->twitter??'') }}" class="form-control" id="twitter">
            </div>
            <div class="form-group">
              <b> <label for="instagram">Instagram</label></b> 
                <input type="url" name="instagram" value="{{ old('instagram',$empresa->instagram??'') }}" class="form-control" id="instagram">
            </div>
            <div class="form-group">
              <b><label for="youtube">Youtube</label></b>  
                <input type="url" name="youtube" value="{{ old('youtube',$empresa->youtube??'') }}" class="form-control" id="youtube">
            </div>

            <div class="form-group">
              <b><label for="logo">Logo</label></b>  
                <input type="file" name="logo" class="form-control-file" id="logo">
                <br>
                <i>Tranparente Anchura=94,Altura=44|.png</i>
                <br>
                <a href="{{ Storage::url($empresa->logo??'') }}">
                    <img src="{{ Storage::url($empresa->logo??'') }}" width="45px" alt="">
                </a>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <input type="text" name="descripcion" value="{{ old('descripcion',$empresa->descripcion??'') }}" class="form-control" id="descripcion">
            </div>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
    
</div>
@endsection