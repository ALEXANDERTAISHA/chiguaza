<li>
    @include('carpetas.crear',['carpeta'=>$sub_carpeta])
</li>
@include('carpetas.archivos',['carpeta'=>$sub_carpeta])

@if ($sub_carpeta->carpetas)
    <ul>
        @foreach ($sub_carpeta->carpetas as $subCarpeta_s)
            @include('carpetas.sub', ['sub_carpeta' => $subCarpeta_s])
        @endforeach
    </ul>
@endif