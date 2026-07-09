@extends('layouts.cliente')
@section('content')
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url({{ asset('assets/images/autoridades1/vocal.png') }})"></div>
        <div class="container">
            <div class="page-header__inner">
                <div class="row align-items-end gy-4">
                    <div class="col-lg-8">
                        <span class="badge rounded-pill bg-light text-primary px-3 py-2 mb-3">Portal de transparencia</span>
                        <h1 class="text-white">{{ $titulo ?? config('app.name') }}</h1>
                        <p class="text-white-50 mb-0">Acceda a la información institucional, documentos y archivos públicos organizados por categorías para una consulta ágil, clara y segura.</p>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <div class="rounded-4 p-4 text-white" style="background: rgba(255,255,255,0.12); backdrop-filter: blur(8px);">
                            <div class="small text-uppercase fw-semibold">Gestión 2023-2027</div>
                            <div class="h4 mb-0">{{ $carpeta->nombre ?? 'Transparencia' }}</div>
                        </div>
                    </div>
                </div>
                <ul class="thm-breadcrumb list-unstyled mt-4">
                    <li><a href="{{ route('welcome') }}">Inicio</a></li>
                    <li><span>/</span></li>
                    <li>2023-2027</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
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