<li class="mt-3">
    <div class="d-flex align-items-center gap-2 text-dark fw-semibold">
        <i class="fa fa-folder text-primary"></i>
        <span>{{ $sub_carpeta->nombre }}</span>
    </div>
    @include('estaticas.archivos', ['carpeta' => $sub_carpeta])
    @if ($sub_carpeta->carpetas)
        <ul class="list-unstyled ps-4 mt-3">
            @foreach ($sub_carpeta->carpetas as $subCarpeta_s)
                @include('estaticas.sub', ['sub_carpeta' => $subCarpeta_s])
            @endforeach
        </ul>
    @endif
</li>