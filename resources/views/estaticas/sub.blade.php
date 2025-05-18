<li class="text-dark"><strong>{{ $sub_carpeta->nombre }}</strong></li>
@include('estaticas.archivos',['carpeta'=>$sub_carpeta])
@if ($sub_carpeta->carpetas)
    <ul>
        @foreach ($sub_carpeta->carpetas as $subCarpeta_s)
            @include('estaticas.sub', ['sub_carpeta' => $subCarpeta_s])
        @endforeach
    </ul>
@endif