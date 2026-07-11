@extends('layouts.app')

@section('content')
<style>
    /* Estilos para tarjetas de noticias */
    .noticia-cards-grid {
        display: grid !important;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)) !important;
        gap: 1.5rem !important;
    }

    .noticia-card {
        display: flex !important;
        flex-direction: column !important;
        height: 100% !important;
        border-radius: 8px !important;
        overflow: hidden !important;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1) !important;
        transition: transform 0.3s ease, box-shadow 0.3s ease !important;
        background: white !important;
    }

    .noticia-card:hover {
        transform: translateY(-5px) !important;
        box-shadow: 0 4px 16px rgba(0,0,0,0.15) !important;
    }

    .noticia-card-img {
        width: 100% !important;
        height: 180px !important;
        overflow: hidden !important;
        background: #f0f0f0 !important;
    }

    .noticia-card-img img {
        width: 100% !important;
        height: 100% !important;
        object-fit: cover !important;
        display: block !important;
    }

    .noticia-card-body {
        padding: 1rem !important;
        display: flex !important;
        flex-direction: column !important;
        flex: 1 !important;
    }

    .noticia-card-title {
        font-size: 1.05rem !important;
        font-weight: 600 !important;
        margin-bottom: 0.5rem !important;
        line-height: 1.4 !important;
        color: #333 !important;
        display: -webkit-box !important;
        -webkit-line-clamp: 2 !important;
        -webkit-box-orient: vertical !important;
        overflow: hidden !important;
    }

    .noticia-card-meta {
        font-size: 0.85rem !important;
        color: #666 !important;
        margin-bottom: 1rem !important;
    }

    .noticia-card-meta span {
        margin-right: 1rem !important;
        display: inline-block !important;
    }

    .noticia-card-status {
        display: inline-block !important;
        padding: 0.25rem 0.75rem !important;
        border-radius: 4px !important;
        font-size: 0.75rem !important;
        font-weight: 600 !important;
        margin-bottom: 0.75rem !important;
    }

    .noticia-card-status.is-visible {
        background-color: #d4edda !important;
        color: #155724 !important;
    }

    .noticia-card-status.is-hidden {
        background-color: #f8d7da !important;
        color: #721c24 !important;
    }

    .noticia-card-actions {
        display: flex !important;
        gap: 0.5rem !important;
        margin-top: auto !important;
    }

    .noticia-card-actions .btn {
        flex: 1 !important;
        padding: 0.5rem !important;
        font-size: 0.85rem !important;
    }

    @media (max-width: 768px) {
        .noticia-cards-grid {
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)) !important;
            gap: 1rem !important;
        }

        .noticia-card-img {
            height: 150px !important;
        }
    }

    @media (max-width: 575px) {
        .noticia-cards-grid {
            grid-template-columns: 1fr !important;
        }
    }
</style>

<div class="page-header-premium">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h1>Noticias</h1>
            <p>Crea, edita y administra noticias con una vista premium más clara y profesional.</p>
        </div>
        <div class="col-md-4 text-md-end mt-3 mt-md-0">
            <a href="{{ url()->previous() }}" class="btn button-secondary-premium">Volver</a>
        </div>
    </div>
</div>

<div class="row g-4">
    <div class="col-12">
        <div class="card premium-card">
            <div class="card-header">Nueva noticia</div>
            <div class="card-body">
                <form action="{{ route('noticias-admin.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label"><strong>Título</strong></label>
                        <input type="text" name="titulo_1" value="{{ old('titulo_1') }}" class="form-control" id="titulo_1" autofocus>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong>Detalle</strong></label>
                        <textarea class="form-control" id="detalle" name="detalle" rows="8">{!! html_entity_decode(old('detalle')) !!}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong>Foto</strong></label>
                        <input type="file" name="foto" class="form-control" id="foto">
                        <div class="form-text">Formato: ancho 370 x alto 304. PNG/JPG/JPEG.</div>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn button-primary-premium">Guardar noticia</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="card premium-card">
            <div class="card-header">Listado de noticias</div>
            <div class="card-body">
                <div class="noticia-cards-grid">
                    @foreach ($noticias as $sl)
                    <article class="noticia-card">
                        <div class="noticia-card-img">
                            <img src="{{ $sl->foto_link }}" alt="{{ $sl->titulo }}" loading="lazy"
                                onerror="this.onerror=null;this.src='{{ asset('assets/images/blog/news-1-1.jpg') }}';">
                        </div>
                        <div class="noticia-card-body">
                            <h3 class="noticia-card-title">{{ $sl->titulo }}</h3>
                            <p class="noticia-card-meta">
                                <span><i class="fa fa-user"></i> {{ $sl->user->email }}</span>
                                <span><i class="fa fa-calendar"></i> {{ $sl->created_at->format('Y-m-d') }}</span>
                            </p>
                            <span class="noticia-card-status {{ $sl->vista === 'SI' ? 'is-visible' : 'is-hidden' }}">
                                {{ $sl->vista === 'SI' ? 'Visible' : 'Oculta' }}
                            </span>
                            <div class="noticia-card-actions">
                                <a class="btn btn-sm button-secondary-premium" href="{{ route('noticias-admin.edit',$sl) }}">Editar</a>
                                <form action="{{ route('noticias-admin.destroy',$sl) }}" method="post" class="mb-0" style="flex: 1;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm w-100">Eliminar</button>
                                </form>
                            </div>
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>
            <div class="card-footer bg-transparent">
                {{ $noticias->links() }}
            </div>
        </div>
    </div>
</div>

<script>
    function cambiarVista(arg){
        $(arg).submit();
    }
</script>

<script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('detalle');
</script>
@endsection
