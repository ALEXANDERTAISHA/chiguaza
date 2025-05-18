@extends('layouts.app')

@section('content')
<div class="container mt-2">
    <div class="row">
        <div class="col-md-6">
            
             <div class="card">
                <div class="card-header">
                   <b>Crear Noticia</b> 
                </div>
                <div class="card-body">
                    <form action="{{ route('noticias-admin.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                      
                        <div class="form-group">
                            <label for="titulo_1"><b>Título</b></label>
                            <input type="text" name="titulo_1" value="{{ old('titulo_1') }}" class="form-control" id="titulo_1" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="detalle"><b>Detalle</b></label>
                            <textarea class="form-control" id="detalle" name="detalle">{!! html_entity_decode(old('detalle')) !!}</textarea>
                        </div>
                        
                        
                        
                        <div class="form-group">
                            <label for="foto"><b>Foto</b></label>
                            <input type="file" name="foto" class="form-control-file" id="foto">
                            <i>Formato: Anchura=370,Altura=304|.png .jpg .jpeg</i>
                        </div>
                        
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </form>
                </div>
                
            </div>
        </div>
        <div class="col-md-6">
        
            <div class="card">
                <div class="card-header">
                    Listado
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Título</th>
                                    
                                    <th scope="col">Usuario</th>
                                    <th scope="col">Vista</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($noticias as $sl)
                                <tr class="">
                                    
                                    <td>{{ $sl->titulo }}</td>
                                    
                                    <td>{{ $sl->user->email }}</td>
                                    <td>
                                        {{ $sl->vista }}
                                    </td>
                                    <td>
                                        <a class="btn btn-success" href="{{ route('noticias-admin.edit',$sl) }}">Editar</a>
                                        <form action="{{ route('noticias-admin.destroy',$sl) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm">X</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    {{ $noticias->links() }}
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
