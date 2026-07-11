@extends('layouts.app')

@section('content')
<style>
    .noticia-admin-item {
        grid-template-columns: 180px 1fr !important;
    }

    .noticia-admin-thumb {
        height: 115px !important;
        min-height: 115px !important;
        max-height: 115px !important;
    }

    .noticia-admin-thumb img {
        width: 100% !important;
        height: 100% !important;
        object-fit: cover !important;
        display: block !important;
    }

    @media (max-width: 575.98px) {
        .noticia-admin-item {
            grid-template-columns: 1fr !important;
        }

        .noticia-admin-thumb {
            height: 130px !important;
            min-height: 130px !important;
            max-height: 130px !important;
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
    <div class="col-xl-5">
        <div class="card premium-card h-100">
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

    <div class="col-xl-7">
        <div class="card premium-card h-100">
            <div class="card-header">Listado de noticias</div>
            <div class="card-body noticia-admin-body">
                <div class="noticia-admin-list">
                    @foreach ($noticias as $sl)
                    <article class="noticia-admin-item">
                        <div class="noticia-admin-thumb">
                            <img src="{{ Storage::url($sl->foto) }}" alt="{{ $sl->titulo }}" loading="lazy">
                        </div>
                        <div class="noticia-admin-content">
                            <div class="noticia-admin-top">
                                <h3 class="noticia-admin-title">{{ Str::limit($sl->titulo, 68, '...') }}</h3>
                                <span class="noticia-admin-status {{ $sl->vista === 'SI' ? 'is-visible' : 'is-hidden' }}">
                                    {{ $sl->vista === 'SI' ? 'Visible' : 'Oculta' }}
                                </span>
                            </div>
                            <p class="noticia-admin-meta">
                                <span><i class="fa fa-user"></i> {{ $sl->user->email }}</span>
                                <span><i class="fa fa-calendar"></i> {{ $sl->created_at->format('Y-m-d') }}</span>
                            </p>
                            <div class="noticia-admin-actions">
                                <a class="btn btn-sm button-secondary-premium" href="{{ route('noticias-admin.edit',$sl) }}">Editar</a>
                                <form action="{{ route('noticias-admin.destroy',$sl) }}" method="post" class="mb-0">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Eliminar</button>
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
