@extends('layouts.app')

@section('content')
<style>
    /* Estilos para tarjetas de sliders */
    .slider-cards-grid {
        display: grid !important;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)) !important;
        gap: 1.5rem !important;
    }

    .slider-card {
        display: flex !important;
        flex-direction: column !important;
        height: 100% !important;
        border-radius: 8px !important;
        overflow: hidden !important;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1) !important;
        transition: transform 0.3s ease, box-shadow 0.3s ease !important;
        background: white !important;
    }

    .slider-card:hover {
        transform: translateY(-5px) !important;
        box-shadow: 0 4px 16px rgba(0,0,0,0.15) !important;
    }

    .slider-card-img {
        width: 100% !important;
        height: 180px !important;
        overflow: hidden !important;
        background: #f0f0f0 !important;
        position: relative !important;
    }

    .slider-card-img img {
        width: 100% !important;
        height: 100% !important;
        object-fit: cover !important;
        display: block !important;
    }

    .slider-card-badge {
        position: absolute !important;
        top: 0.75rem !important;
        right: 0.75rem !important;
        padding: 0.35rem 0.75rem !important;
        border-radius: 4px !important;
        font-size: 0.75rem !important;
        font-weight: 600 !important;
    }

    .slider-card-badge.active {
        background-color: #d4edda !important;
        color: #155724 !important;
    }

    .slider-card-badge.inactive {
        background-color: #f8d7da !important;
        color: #721c24 !important;
    }

    .slider-card-body {
        padding: 1rem !important;
        display: flex !important;
        flex-direction: column !important;
        flex: 1 !important;
    }

    .slider-card-title {
        font-size: 1.05rem !important;
        font-weight: 600 !important;
        margin-bottom: 0.25rem !important;
        line-height: 1.3 !important;
        color: #333 !important;
        display: -webkit-box !important;
        -webkit-line-clamp: 2 !important;
        -webkit-box-orient: vertical !important;
        overflow: hidden !important;
    }

    .slider-card-subtitle {
        font-size: 0.9rem !important;
        color: #666 !important;
        margin-bottom: 0.5rem !important;
        display: -webkit-box !important;
        -webkit-line-clamp: 1 !important;
        -webkit-box-orient: vertical !important;
        overflow: hidden !important;
    }

    .slider-card-description {
        font-size: 0.85rem !important;
        color: #777 !important;
        margin-bottom: 1rem !important;
        display: -webkit-box !important;
        -webkit-line-clamp: 2 !important;
        -webkit-box-orient: vertical !important;
        overflow: hidden !important;
    }

    .slider-card-actions {
        display: flex !important;
        gap: 0.5rem !important;
        margin-top: auto !important;
        flex-wrap: wrap !important;
    }

    .slider-card-actions .btn {
        flex: 1 !important;
        min-width: 80px !important;
        padding: 0.5rem !important;
        font-size: 0.85rem !important;
    }

    .slider-card-actions select {
        flex: 1 !important;
        min-width: 80px !important;
    }

    @media (max-width: 768px) {
        .slider-cards-grid {
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)) !important;
            gap: 1rem !important;
        }

        .slider-card-img {
            height: 150px !important;
        }
    }

    @media (max-width: 575px) {
        .slider-cards-grid {
            grid-template-columns: 1fr !important;
        }
    }
</style>

<div class="page-header-premium">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h1>Slider</h1>
            <p>Administra las diapositivas del homepage con una interfaz clara y organizada.</p>
        </div>
        <div class="col-md-4 text-md-end mt-3 mt-md-0">
            <a href="{{ url()->previous() }}" class="btn button-secondary-premium">Volver</a>
        </div>
    </div>
</div>

<div class="row g-4">
    <div class="col-12">
        <div class="card premium-card">
            <div class="card-header">Crear nueva diapositiva</div>
            <div class="card-body">
                <form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label"><strong>Título</strong></label>
                                <input type="text" name="titulo_1" value="{{ old('titulo_1') }}" class="form-control" id="titulo_1">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label"><strong>Sub título</strong></label>
                                <input type="text" name="titulo_2" value="{{ old('titulo_2') }}" class="form-control" id="titulo_2">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label"><strong>Descripción</strong></label>
                                <input type="text" name="descripcion" value="{{ old('descripcion') }}" class="form-control" id="descripcion">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label"><strong>Url Explorar más</strong></label>
                                <input type="url" name="url_explorar_mas" value="{{ old('url_explorar_mas') }}" class="form-control" id="url_explorar_mas">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong>Imagen de fondo</strong></label>
                        <input type="file" name="fondo" class="form-control" id="fondo">
                        <div class="form-text">Formato: ancho 1894 x alto 731. PNG/JPG/JPEG.</div>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn button-primary-premium">Guardar Slider</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="card premium-card">
            <div class="card-header">Diapositivas existentes</div>
            <div class="card-body">
                <div class="slider-cards-grid">
                    @foreach ($sliders as $sl)
                    <article class="slider-card">
                        <div class="slider-card-img">
                            <img src="{{ Storage::url($sl->fondo) }}" alt="Slider {{ $sl->titulo_1 }}" loading="lazy">
                            <span class="slider-card-badge {{ $sl->vista === 'SI' ? 'active' : 'inactive' }}">
                                {{ $sl->vista === 'SI' ? 'Activo' : 'Oculto' }}
                            </span>
                        </div>
                        <div class="slider-card-body">
                            <h3 class="slider-card-title">{{ $sl->titulo_1 }}</h3>
                            <p class="slider-card-subtitle">{{ $sl->titulo_2 }}</p>
                            <p class="slider-card-description">{{ $sl->descripcion }}</p>
                            <div class="slider-card-actions">
                                <a class="btn btn-sm button-secondary-premium" href="{{ $sl->url_explorar_mas }}" target="_blank">Abrir</a>
                                <form action="{{ route('slider.destroy',$sl) }}" method="post" class="mb-0" style="flex: 1;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm w-100">Eliminar</button>
                                </form>
                                <form action="{{ route('slider.update',$sl) }}" method="POST" class="mb-0" style="flex: 1;">
                                    @csrf
                                    @method('PUT')
                                    <select class="form-select form-select-sm" onchange="this.form.submit()">
                                        <option value="SI" {{ $sl->vista==='SI'?'selected':'' }}>Activo</option>
                                        <option value="NO" {{ $sl->vista==='NO'?'selected':'' }}>Oculto</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function cambiarVista(arg){
        $(arg).submit();
    }
</script>
@endsection
