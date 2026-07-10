@extends('layouts.app')

@section('content')
<div class="page-header-premium">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h1>Autoridad</h1>
            <p>Actualiza la información institucional y optimiza la administración con un diseño más moderno.</p>
        </div>
        <div class="col-md-4 text-md-end mt-3 mt-md-0">
            <a href="{{ url()->previous() }}" class="btn button-secondary-premium">Volver</a>
        </div>
    </div>
</div>

<div class="card premium-card mb-4">
    <div class="card-header">Datos de autoridad</div>
    <div class="card-body">
        <form action="{{ route('autoridad.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label"><strong>Nombres completos</strong></label>
                    <input type="text" name="nombres_completos" value="{{ old('nombres_completos',$autoridad->nombres_completos??'') }}" class="form-control" id="nombres_completos">
                </div>

                <div class="col-md-6">
                    <label class="form-label"><strong>Rol</strong></label>
                    <input type="text" name="rol" value="{{ old('rol',$autoridad->rol??'') }}" class="form-control" id="rol">
                </div>

                <div class="col-md-12">
                    <label class="form-label"><strong>Frase</strong></label>
                    <input type="text" name="frase" value="{{ old('frase',$autoridad->frase??'') }}" class="form-control" id="frase">
                </div>

                <div class="col-md-6">
                    <label class="form-label"><strong>Logro 1</strong></label>
                    <input type="text" name="logro_1" value="{{ old('logro_1',$autoridad->logro_1??'') }}" class="form-control" id="logro_1">
                </div>

                <div class="col-md-6">
                    <label class="form-label"><strong>Logro 2</strong></label>
                    <input type="text" name="logro_2" value="{{ old('logro_2',$autoridad->logro_2??'') }}" class="form-control" id="logro_2">
                </div>

                <div class="col-md-6">
                    <label class="form-label"><strong>Logro 3</strong></label>
                    <input type="text" name="logro_3" value="{{ old('logro_3',$autoridad->logro_3??'') }}" class="form-control" id="logro_3">
                </div>

                <div class="col-md-6">
                    <label class="form-label"><strong>Logro 4</strong></label>
                    <input type="text" name="logro_4" value="{{ old('logro_4',$autoridad->logro_4??'') }}" class="form-control" id="logro_4">
                </div>

                <div class="col-md-6">
                    <label class="form-label"><strong>Foto Principal</strong></label>
                    <input type="file" name="foto" class="form-control" id="foto">
                    <div class="form-text">Anchura=435, Altura=559. Formatos: .png .jpg .jpeg</div>
                </div>

                <div class="col-md-6">
                    <label class="form-label"><strong>Foto Secundaria</strong></label>
                    <input type="file" name="foto2" class="form-control" id="foto2">
                    <div class="form-text">Anchura=273, Altura=309. Formatos: .png .jpg .jpeg</div>
                </div>

                <div class="col-md-6">
                    <label class="form-label"><strong>Años de experiencia</strong></label>
                    <input type="number" name="anio_experiencia" value="{{ old('anio_experiencia',$autoridad->anio_experiencia??'') }}" class="form-control" id="anio_experiencia">
                </div>

                <div class="col-md-6">
                    <label class="form-label"><strong>URL de video</strong></label>
                    <input type="url" name="url_video" value="{{ old('url_video',$autoridad->url_video??'') }}" class="form-control" id="url_video">
                    <div class="form-text">Formato: https://www.youtube.com/watch?v=Get7rqXYrbQ</div>
                </div>
            </div>
            <div class="mt-4 text-end">
                <button type="submit" class="btn button-primary-premium">Guardar cambios</button>
            </div>
        </form>
    </div>
</div>
@endsection