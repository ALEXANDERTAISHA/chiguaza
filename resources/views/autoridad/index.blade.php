@extends('layouts.app')
@section('content')
<div class="card my-3">
    <div class="card-header">
        <b>Autoridad</b>     
    </div>
    <div class="card-body">
        <form action="{{ route('autoridad.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
            <label for="nombres_completos"><b>Nombres Completos</b></label>
            <input type="text" name="nombres_completos" value="{{ old('nombres_completos',$autoridad->nombres_completos??'') }}" class="form-control" id="nombres_completos">
            </div>
            <div class="form-group">
                <label for="rol"><b>rol</b></label>
                <input type="text" name="rol" value="{{ old('rol',$autoridad->rol??'') }}" class="form-control" id="rol">
            </div>
            <div class="form-group">
                <label for="frase"><b>Frase</b></label>
                <input type="text" name="frase" value="{{ old('frase',$autoridad->frase??'') }}" class="form-control" id="frase">
            </div>
            <div class="form-group">
                <label for="logro_1"><b>Logro 1</b></label>
                <input type="text" name="logro_1" value="{{ old('logro_1',$autoridad->logro_1??'') }}" class="form-control" id="logro_1">
            </div>
            <div class="form-group">
                <label for="logro_2"><b>Logro 2</b></label>
                <input type="text" name="logro_2" value="{{ old('logro_2',$autoridad->logro_2??'') }}" class="form-control" id="logro_2">
            </div>
            <div class="form-group">
                <label for="logro_3"><b>Logro 3</b></label>
                <input type="logro_3" name="logro_3" value="{{ old('logro_3',$autoridad->logro_3??'') }}" class="form-control" id="logro_3">
            </div>
            <div class="form-group">
                <label for="logro_4"><b>Logro 4</b></label>
                <input type="logro_4" name="logro_4" value="{{ old('logro_4',$autoridad->logro_4??'') }}" class="form-control" id="logro_4">
            </div>

            <div class="form-group my-2">
                <label for="foto"><b>Foto</b></label>
                <input type="file" name="foto" class="form-control-file" id="foto">
                <br>
                <i>Anchura=435,Altura=559|.png .jpg .jpeg</i>
            </div>

            <div class="form-group my-2">
                <label for="foto"><b>Foto2</b></label>
                <input type="file" name="foto2" class="form-control-file" id="foto">
                <br>
                Anchura=273,Altura=309|.png .jpg .jpeg
            </div>

            <div class="form-group my-2">
                <label for="anio_experiencia"><b>Año de experiencia</b></label>
                <input type="number" name="anio_experiencia" value="{{ old('anio_experiencia',$autoridad->anio_experiencia??'') }}" class="form-control" id="anio_experiencia">
            </div>

            <div class="form-group my-2">
                <label for="url_video"><b>Url de video</b></label>
                <input type="url" name="url_video" value="{{ old('url_video',$autoridad->url_video??'') }}" class="form-control" id="url_video">
                <br>
                <i>Formato: https://www.youtube.com/watch?v=Get7rqXYrbQ</i>
            </div>


            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
</div>
@endsection