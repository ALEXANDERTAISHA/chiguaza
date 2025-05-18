@extends('layouts.app')
@section('content')
    <div class="container mt-2">
        <div class="card">
            <div class="card-header">
                Detalle de Quejas y Sugerencias
                <a href="{{ route('admin.quejasSugerencias') }}"> Retornar</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                
                                <th scope="col">Correo electrónico</th>
                                <th scope="col">Cédula de identidad</th>
                                <th scope="col">Apellidos y Nombres</th>
                                <th scope="col">Teléfono o Celular</th>
                                <th scope="col">Queja o Sugerencia</th>
                                <th scope="col">Dependencia</th>
                                <th scope="col">Fecha</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                            <tr class="">
                                
                                <td>{{ $qs->email }}</td>
                                <td>{{ $qs->cedula }}</td>
                                <td>{{ $qs->apellidosnombres }}</td>
                                <td>{{ $qs->telefonocelular }}</td>
                                <td>{{ $qs->quejasugerencia }}</td>
                                <td>{{ $qs->dependencia }}</td>
                                <td>{{ $qs->created_at }}</td>
                            </tr>
                            <tr>
                                <td colspan="7">
                                    <strong>Descripción:</strong>
                                    {!! $qs->descripcion !!}
                                </td>
                            </tr>
                          
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    </div>
@endsection