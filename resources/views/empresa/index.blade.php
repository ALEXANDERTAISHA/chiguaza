@extends('layouts.app')
@section('content')
<div class="page-header-premium">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h1>Empresa</h1>
            <p>Configura los datos generales de la entidad con un panel limpio, moderno y fácil de usar.</p>
        </div>
        <div class="col-md-4 text-md-end mt-3 mt-md-0">
            <a href="{{ url()->previous() }}" class="btn button-secondary-premium">Volver</a>
        </div>
    </div>
</div>

<div class="card premium-card mb-4">
    <div class="card-header">Información de empresa</div>
    <div class="card-body">
        <form action="{{ route('empresa.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label"><strong>Email</strong></label>
                    <input type="email" name="email" value="{{ old('email',$empresa->email??'') }}" class="form-control" id="email">
                </div>
                <div class="col-md-6">
                    <label class="form-label"><strong>Teléfono</strong></label>
                    <input type="tel" name="telefono" value="{{ old('telefono',$empresa->telefono??'') }}" class="form-control" id="telefono">
                </div>
                <div class="col-md-6">
                    <label class="form-label"><strong>Dirección</strong></label>
                    <input type="text" name="direccion" value="{{ old('direccion',$empresa->direccion??'') }}" class="form-control" id="direccion">
                </div>
                <div class="col-md-6">
                    <label class="form-label"><strong>Facebook</strong></label>
                    <input type="url" name="facebook" value="{{ old('facebook',$empresa->facebook??'') }}" class="form-control" id="facebook">
                </div>
                <div class="col-md-6">
                    <label class="form-label"><strong>Twitter</strong></label>
                    <input type="url" name="twitter" value="{{ old('twitter',$empresa->twitter??'') }}" class="form-control" id="twitter">
                </div>
                <div class="col-md-6">
                    <label class="form-label"><strong>Instagram</strong></label>
                    <input type="url" name="instagram" value="{{ old('instagram',$empresa->instagram??'') }}" class="form-control" id="instagram">
                </div>
                <div class="col-md-6">
                    <label class="form-label"><strong>Youtube</strong></label>
                    <input type="url" name="youtube" value="{{ old('youtube',$empresa->youtube??'') }}" class="form-control" id="youtube">
                </div>
                <div class="col-md-6">
                    <label class="form-label"><strong>Logo</strong></label>
                    <input type="file" name="logo" class="form-control" id="logo">
                    <div class="form-text">Transparente. Anchura=94, Altura=44. Formatos: .png</div>
                    @if ($empresa->logo ?? false)
                        <a href="{{ Storage::url($empresa->logo) }}" class="d-inline-block mt-2">
                            <img src="{{ Storage::url($empresa->logo) }}" width="90" alt="Logo">
                        </a>
                    @endif
                </div>
                <div class="col-md-6">
                    <label class="form-label"><strong>Descripción</strong></label>
                    <input type="text" name="descripcion" value="{{ old('descripcion',$empresa->descripcion??'') }}" class="form-control" id="descripcion">
                </div>
            </div>
            <div class="mt-4 text-end">
                <button type="submit" class="btn button-primary-premium">Guardar cambios</button>
            </div>
        </form>
    </div>
</div>
@endsection