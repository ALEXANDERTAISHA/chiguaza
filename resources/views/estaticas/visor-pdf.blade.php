@extends('layouts.cliente')
@section('content')
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url({{ asset('assets/images/autoridades1/vocal.png') }})"></div>
        <div class="container">
            <div class="page-header__inner">
                <h1 class="text-white">{{ $archivo->nombre }}</h1>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ route('welcome') }}">Inicio</a></li>
                    <li><span>/</span></li>
                    <li>Visor de documentos</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="card border-0 shadow-sm overflow-hidden">
                <div class="card-body p-3 p-md-4">
                    <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-3">
                        <div>
                            <h3 class="h5 mb-1">{{ $archivo->nombre }}</h3>
                            <p class="text-muted mb-0">Este documento se muestra directamente en el navegador para una lectura más cómoda.</p>
                        </div>
                        <a href="{{ route('descargarArchivoDownload', $archivo->id) }}" class="btn btn-primary rounded-pill">
                            <i class="fa fa-download me-2"></i>Descargar PDF
                        </a>
                    </div>

                    <div class="ratio ratio-16x9 rounded-3 overflow-hidden border">
                        <iframe src="{{ $pdfUrl }}" title="Visor de PDF" class="w-100 h-100"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
