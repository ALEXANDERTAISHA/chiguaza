@extends('layouts.app')
@section('content')
<div class="page-header-premium">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h1>Carpetas</h1>
            <p>Organiza los documentos de la municipalidad con una vista de administración premium y mejor navegación.</p>
        </div>
        <div class="col-md-4 text-md-end mt-3 mt-md-0">
            <a href="{{ url()->previous() }}" class="btn button-secondary-premium">Volver</a>
        </div>
    </div>
</div>

<div class="card premium-card mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
        <div>Lista de carpetas</div>
        <button type="button" class="btn button-primary-premium btn-sm" onclick="abrirModal2(null,'Carpeta principal')">Nueva carpeta</button>
    </div>
    <div class="card-body">
        @foreach ($carpetas as $carpeta)
        <div class="card mb-3 folder-card">
            <div class="card-header d-flex flex-column flex-md-row justify-content-between align-items-center gap-3">
                <div>
                    <h5 class="mb-1">{{ $carpeta->nombre }}</h5>
                    <div class="folder-meta">
                        <span class="folder-badge">Subcarpetas: {{ $carpeta->subCarpetas->count() }}</span>
                        <span class="folder-badge">Archivos: {{ $carpeta->archivos->count() ?? 0 }}</span>
                    </div>
                </div>
                <div class="d-flex flex-wrap gap-2 align-items-center">
                    @include('carpetas.crear',['carpeta'=>$carpeta])
                    <button class="btn btn-sm button-secondary-premium" onclick="abrirModal({{ $carpeta->id }},'{{ addslashes($carpeta->nombre) }}')">Subir archivo</button>
                </div>
            </div>
            <div class="card-body">
                @include('carpetas.archivos',['carpeta'=>$carpeta])

                @if ($carpeta->subCarpetas)
                <div class="mt-3">
                    @foreach ($carpeta->subCarpetas as $subCarpeta)
                        @include('carpetas.sub', ['sub_carpeta' => $subCarpeta])
                    @endforeach
                </div>
                @endif
            </div>
        </div>
        @endforeach
    </div>
</div>

{{-- modal ingresar archivo --}}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-fullscreen-lg-down">
        <form action="{{ route('guardarArchivo') }}" method="POST" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @csrf
                    <input type="hidden" name="carpeta_id" id="carpeta_id_modal">
                    <div class="mb-3">
                        <label class="form-label"><strong>Nombre del archivo</strong></label>
                        <input type="text" name="nombre" class="form-control" id="formGroupExampleInput" placeholder="Ingrese nombre de archivo..." required>
                    </div>
                    <div class="file-loading">
                        <input id="input-b9" name="archivo" type="file" accept="application/pdf" required>
                    </div>
                    <div id="kartik-file-errors"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn button-primary-premium">Subir archivo</button>
                </div>
            </div>
        </form>
    </div>
</div>

{{-- modal ingresar item --}}
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-fullscreen-lg-down">
        <form action="{{ route('carpetas.store') }}" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @csrf
                    <input type="hidden" name="carpeta_id" id="carpeta_id_modal2">
                    <div class="mb-3">
                        <label class="form-label"><strong>Nombre</strong></label>
                        <input type="text" name="nombre" class="form-control" id="formGroupExampleInput" placeholder="Ingrese nombre de carpeta..." required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn button-primary-premium">Guardar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    $(document).ready(function() {
        $("#input-b9").fileinput({
            showPreview: false,
            showUpload: false,
            language: "es",
            elErrorContainer: '#kartik-file-errors',
            allowedFileExtensions: ["pdf"]
        });
    });
    function abrirModal(id,title){
        $('#carpeta_id_modal').val(id)
        $('#exampleModal').modal('show');
        $('#exampleModalLabel').html('Subir archivo PDF en: '+title)
    }

    function abrirModal2(id,title){
        $('#carpeta_id_modal2').val(id)
        $('#exampleModal2').modal('show');
        $('#exampleModalLabel2').html('Añadir item en: '+title)
    }
</script>
@endsection