@extends('layouts.app')

@section('content')
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
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Título</th>
                                <th>Usuario</th>
                                <th>Vista</th>
                                <th class="text-end">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($noticias as $sl)
                            <tr>
                                <td>{{ $sl->titulo }}</td>
                                <td>{{ $sl->user->email }}</td>
                                <td>{{ $sl->vista }}</td>
                                <td class="text-end">
                                    <div class="d-flex justify-content-end gap-2">
                                        <a class="btn btn-sm button-secondary-premium" href="{{ route('noticias-admin.edit',$sl) }}">Editar</a>
                                        <form action="{{ route('noticias-admin.destroy',$sl) }}" method="post" class="mb-0">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm">Eliminar</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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
