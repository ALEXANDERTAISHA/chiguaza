@if ($carpeta->archivos)
{{-- <div class="table-responsive">
    <table class="table table-bordered">
        @foreach ($carpeta->archivos as $ar)
        <tbody>
            <tr class="">
                <td scope="row">{{ $ar->nombre }}</td>
                <td>
                    <a class="btn btn-link" href="{{ Storage::url($ar->url) }}">Descargar</a> 
                </td>
            </tr>
        </tbody>
     @endforeach
    </table>
</div> --}}

<ul class="list-group">
    @foreach ($carpeta->archivos as $ar)
    <li class="list-group-item d-flex justify-content-between align-items-start text-secondary">
      <div class="ms-2 me-auto">
        <div class="fw-bold">{{ $ar->nombre }}</div>
      </div>
      <a href="{{ route('descargarArchivo',$ar->id) }}">
        <span class="badge bg-primary rounded-pill">
        Descargar
        </span>
      </a>
    </li>
    @endforeach
</ul>

@endif