@extends('layouts.app')
@section('content')
    <div class="container mt-2">
        <div class="card">
            <div class="card-header">
                Listado de Quejas y Sugerencias
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">...</th>
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
                            @foreach ($qs as $q)
                            <tr class="">
                                <td>
                                    <a href="{{ route('admin.quejasSugerenciasVer',$q->id) }}">Ver</a>
                                </td>
                                <td>{{ $q->email }}</td>
                                <td>{{ $q->cedula }}</td>
                                <td>{{ $q->apellidosnombres }}</td>
                                <td>{{ $q->telefonocelular }}</td>
                                <td>{{ $q->quejasugerencia }}</td>
                                <td>{{ $q->dependencia }}</td>
                                <td>{{ $q->created_at }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer bg-transparent">
                {{ $qs->links() }}
            </div>
        </div>
        
    </div>
@endsection