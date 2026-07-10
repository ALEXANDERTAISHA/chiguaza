@extends('layouts.app')

@section('content')
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
    <div class="col-lg-5">
        <div class="card premium-card h-100">
            <div class="card-header">Crear nueva diapositiva</div>
            <div class="card-body">
                <form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label"><strong>Título</strong></label>
                        <input type="text" name="titulo_1" value="{{ old('titulo_1') }}" class="form-control" id="titulo_1">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong>Sub título</strong></label>
                        <input type="text" name="titulo_2" value="{{ old('titulo_2') }}" class="form-control" id="titulo_2">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong>Descripción</strong></label>
                        <input type="text" name="descripcion" value="{{ old('descripcion') }}" class="form-control" id="descripcion">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong>Url Explorar más</strong></label>
                        <input type="url" name="url_explorar_mas" value="{{ old('url_explorar_mas') }}" class="form-control" id="url_explorar_mas">
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

    <div class="col-lg-7">
        <div class="card premium-card h-100">
            <div class="card-header">Diapositivas existentes</div>
            <div class="card-body">
                <div class="slider-preview-grid">
                    @foreach ($sliders as $sl)
                    <article class="slider-preview-card">
                        <div class="slider-preview-image">
                            <img src="{{ Storage::url($sl->fondo) }}" alt="Slider {{ $sl->titulo_1 }}" loading="lazy">
                            <span class="slider-status-pill {{ $sl->vista === 'SI' ? 'slider-status-active' : 'slider-status-inactive' }}">
                                {{ $sl->vista === 'SI' ? 'Activo' : 'Oculto' }}
                            </span>
                        </div>
                        <div class="slider-preview-body">
                            <div class="d-flex justify-content-between align-items-start gap-3 mb-2">
                                <div>
                                    <h3 class="slider-preview-title">{{ Str::limit($sl->titulo_1, 28) }}</h3>
                                    <p class="slider-preview-subtitle">{{ Str::limit($sl->titulo_2, 36) }}</p>
                                </div>
                            </div>
                            <p class="slider-preview-description">{{ Str::limit($sl->descripcion, 100) }}</p>
                            <div class="d-flex flex-wrap gap-2 align-items-center mt-3">
                                <a class="btn btn-sm button-secondary-premium" href="{{ $sl->url_explorar_mas }}" target="_blank">Abrir</a>
                                <form action="{{ route('slider.destroy',$sl) }}" method="post" class="mb-0">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </div>
                            <form action="{{ route('slider.update',$sl) }}" method="POST" class="mt-3">
                                @csrf
                                @method('PUT')
                                <label class="form-label"><strong>Visibilidad</strong></label>
                                <select class="form-select" onchange="this.form.submit()">
                                    <option value="SI" {{ $sl->vista==='SI'?'selected':'' }}>SI</option>
                                    <option value="NO" {{ $sl->vista==='NO'?'selected':'' }}>NO</option>
                                </select>
                            </form>
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
