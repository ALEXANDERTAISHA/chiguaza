@extends('layouts.cliente')
@section('content')
    <style>
        .page-hero{ min-height:420px; padding:80px 0; }
        .page-hero .lead{ max-width:620px; }
        .hero-card{ position:relative; top:0; right:0; }
        @media (max-width: 991px){
            .page-hero{ padding:60px 0; min-height:360px; }
            .page-hero .display-3{ font-size:2.2rem; }
        }
    </style>
    <section class="page-hero d-flex align-items-center" style="background-image: linear-gradient(120deg, rgba(8,38,71,0.6), rgba(2,44,93,0.35)), url({{ asset('assets/images/autoridades1/vocal.png') }}); background-size: cover; background-position: center;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 text-white">
                    <span class="badge rounded-pill bg-white text-primary px-3 py-2 mb-3">Portal de transparencia</span>
                    <h1 class="display-3 fw-bold mb-3">{{ $titulo ?? config('app.name') }}</h1>
                    <p class="lead text-white-75 mb-4">Acceda a la información institucional y documentos públicos organizados por categorías. Navegación clara, segura y con acceso directo a descargas y visualizadores.</p>
                    <a href="#secciones" class="btn btn-lg btn-primary rounded-pill me-2">Ver secciones</a>
                    <a href="{{ route('contactos') }}" class="btn btn-lg btn-outline-light rounded-pill">Contacto</a>
                </div>
                <div class="col-lg-5 d-none d-lg-block">
                    <div class="hero-card p-4 rounded-4 shadow" style="background: rgba(255,255,255,0.06); backdrop-filter: blur(6px);">
                        <div class="small text-uppercase text-white-50">Gestión</div>
                        <div class="display-5 text-white fw-semibold">2023 - 2027</div>
                        <div class="mt-3 text-white-50">{{ $carpeta->nombre ?? 'Transparencia' }}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="secciones" class="py-5 bg-light">
        <div class="container">
            <div class="row g-4 align-items-stretch">
                <div class="col-lg-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="rounded-circle bg-primary-subtle text-primary d-flex align-items-center justify-content-center" style="width:48px;height:48px;">
                                    <i class="fa fa-file-alt"></i>
                                </div>
                                <span class="badge bg-primary-subtle text-primary">Actualizado</span>
                            </div>
                            <h5 class="mb-2">Información pública</h5>
                            <p class="text-muted small mb-0">Documentos oficiales, informes y archivos disponibles para consulta ciudadana.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="rounded-circle bg-success-subtle text-success d-flex align-items-center justify-content-center" style="width:48px;height:48px;">
                                    <i class="fa fa-shield-alt"></i>
                                </div>
                                <span class="badge bg-success-subtle text-success">Seguro</span>
                            </div>
                            <h5 class="mb-2">Acceso confiable</h5>
                            <p class="text-muted small mb-0">Información organizada y verificada para una navegación sencilla y transparente.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="rounded-circle bg-warning-subtle text-warning d-flex align-items-center justify-content-center" style="width:48px;height:48px;">
                                    <i class="fa fa-download"></i>
                                </div>
                                <span class="badge bg-warning-subtle text-warning">Descarga</span>
                            </div>
                            <h5 class="mb-2">Descarga directa</h5>
                            <p class="text-muted small mb-0">Cada documento se encuentra listo para ser descargado en un solo clic.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('estaticas.carpeta', ['carpeta' => $carpeta])
@endsection