@if ($carpeta->archivos)

<ul class="list-group">
    @foreach ($carpeta->archivos as $ar)
    <li class="list-group-item d-flex justify-content-start align-items-center">
        {{ $ar->nombre }}
        <a class="btn btn-link" href="{{ Storage::url($ar->url) }}"><span class="badge bg-primary rounded-pill">Descargar</span></a>
        <a class="btn btn-link text-danger" href="{{ route('eliminarArchivo',$ar->id) }}"><span class="badge bg-danger rounded-pill">X</span></a>
    </li>
    @endforeach
</ul>
@endif