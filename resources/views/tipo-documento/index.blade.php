@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <form action="{{ route('tipo-documento.store') }}" method="POST">
                @csrf
                <div class="card my-2">
                    <div class="card-header">
                        Nuevo tipo de documento
                    </div>
                    <div class="card-body">
                        <div class="form-floating mb-3">
                            <input type="text" name="nombre" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Nombre</label>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        <button type="submit" type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <div class="card my-2">
                <div class="card-header">
                    Listado
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tipoDocumentos as $item)
                                    <tr class="">
                                        <td scope="row">{{ $item->nombre }}</td>
                                        <td>
                                            <form action="{{ route('tipo-documento.destroy',$item) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">X</button>
                                            </form>
                                        </td>
                                    </tr>    
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection