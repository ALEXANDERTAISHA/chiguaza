@extends('layouts.app')
@section('content')
<div class="page-header-premium">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h1>Detalle de mensaje</h1>
            <p>Visualiza los datos completos de la queja o sugerencia con un diseño ordenado.</p>
        </div>
        <div class="col-md-4 text-md-end mt-3 mt-md-0">
            <a href="{{ route('admin.quejasSugerencias') }}" class="btn button-secondary-premium">Retornar</a>
        </div>
    </div>
</div>

<div class="card premium-card mb-4">
    <div class="card-header">Información del mensaje</div>
    <div class="card-body">
        <div class="row gy-3">
            <div class="col-md-6">
                <strong>Correo electrónico</strong>
                <p class="mb-0">{{ $qs->email }}</p>
            </div>
            <div class="col-md-6">
                <strong>Cédula</strong>
                <p class="mb-0">{{ $qs->cedula }}</p>
            </div>
            <div class="col-md-6">
                <strong>Apellidos y nombres</strong>
                <p class="mb-0">{{ $qs->apellidosnombres }}</p>
            </div>
            <div class="col-md-6">
                <strong>Teléfono o celular</strong>
                <p class="mb-0">{{ $qs->telefonocelular }}</p>
            </div>
            <div class="col-md-6">
                <strong>Dependencia</strong>
                <p class="mb-0">{{ $qs->dependencia }}</p>
            </div>
            <div class="col-md-6">
                <strong>Fecha</strong>
                <p class="mb-0">{{ $qs->created_at->format('d/m/Y H:i') }}</p>
            </div>
            <div class="col-12">
                <strong>Mensaje</strong>
                <div class="p-3 mt-2 bg-light rounded">
                    {!! nl2br(e($qs->quejasugerencia)) !!}
                </div>
            </div>
            @if ($qs->descripcion)
            <div class="col-12">
                <strong>Descripción adicional</strong>
                <div class="p-3 mt-2 bg-light rounded">
                    {!! $qs->descripcion !!}
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection