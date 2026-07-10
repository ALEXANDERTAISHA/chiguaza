@extends('layouts.app')
@section('content')
<div class="page-header-premium">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h1>Quejas y Sugerencias</h1>
            <p>Revisa los mensajes recibidos en una tabla ordenada y con un estilo más profesional.</p>
        </div>
        <div class="col-md-4 text-md-end mt-3 mt-md-0">
            <a href="{{ url()->previous() }}" class="btn button-secondary-premium">Volver</a>
        </div>
    </div>
</div>

<div class="card premium-card mb-4">
    <div class="card-header">Mensajes recibidos</div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="table-light">
                    <tr>
                        <th class="text-center">Acción</th>
                        <th>Correo electrónico</th>
                        <th>Cédula</th>
                        <th>Nombre</th>
                        <th>Teléfono</th>
                        <th>Mensaje</th>
                        <th>Dependencia</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($qs as $q)
                    <tr>
                        <td class="text-center">
                            <a href="{{ route('admin.quejasSugerenciasVer',$q->id) }}" class="btn btn-sm button-secondary-premium">Ver</a>
                        </td>
                        <td>{{ $q->email }}</td>
                        <td>{{ $q->cedula }}</td>
                        <td>{{ $q->apellidosnombres }}</td>
                        <td>{{ $q->telefonocelular }}</td>
                        <td>{{ Str::limit($q->quejasugerencia, 35) }}</td>
                        <td>{{ $q->dependencia }}</td>
                        <td>{{ $q->created_at->format('d/m/Y') }}</td>
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
@endsection