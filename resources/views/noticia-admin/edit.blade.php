@extends('layouts.app')

@section('content')
<div class="container mt-2">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Editar Noticia <a href="{{ route('noticias-admin.index') }}">Atras</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('noticias-admin.update',$noticia) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                      
                        <div class="form-group">
                            <label for="titulo_1">Título</label>
                            <input type="text" name="titulo_1" value="{{ old('titulo_1',$noticia->titulo) }}" class="form-control" id="titulo_1" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="detalle">Detalle</label>
                            <textarea class="form-control" id="detalle" name="detalle">{!! html_entity_decode($noticia->detalle) !!}</textarea>
                        </div>
                        
                       
                        
                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="file" name="foto" class="form-control-file" id="foto">
                            <i>Formato: Anchura=350,Altura=250|.png .jpg .jpeg</i>
                            <br>
                            <a href="{{ Storage::url($noticia->foto) }}">
                                <img src="{{ Storage::url($noticia->foto) }}" alt="" width="45px">
                            </a>
                        </div>
                        
                        <div class="form-group">
                            <label for="vista">Vista</label>
                            <select class="form-control" name="vista" id="vista">
                                <option value="SI" {{ $noticia->vista==='SI'?'selected':'' }}>SI</option>
                                <option value="NO" {{ $noticia->vista==='NO'?'selected':'' }}>NO</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
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

<script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'detalle' );
</script>
@endsection
