<div class="subfolder-card card shadow-sm">
    <div class="card-body">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-start gap-3">
            <div>
                <h6 class="mb-1">{{ $sub_carpeta->nombre }}</h6>
                <div class="folder-meta">
                    <span class="folder-badge">Subcarpetas: {{ $sub_carpeta->carpetas->count() }}</span>
                    <span class="folder-badge">Archivos: {{ $sub_carpeta->archivos->count() ?? 0 }}</span>
                </div>
            </div>
            <div class="d-flex gap-2 align-items-center">
                @include('carpetas.crear',['carpeta'=>$sub_carpeta])
                <button class="btn btn-sm button-secondary-premium" onclick="abrirModal({{ $sub_carpeta->id }},'{{ addslashes($sub_carpeta->nombre) }}')">Subir archivo</button>
            </div>
        </div>

        @include('carpetas.archivos',['carpeta'=>$sub_carpeta])

        @if ($sub_carpeta->carpetas)
            @foreach ($sub_carpeta->carpetas as $subCarpeta_s)
                @include('carpetas.sub', ['sub_carpeta' => $subCarpeta_s])
            @endforeach
        @endif
    </div>
</div>