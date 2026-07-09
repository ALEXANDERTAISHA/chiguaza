@if ($carpeta->archivos)
    <div class="list-group">
        @foreach ($carpeta->archivos as $ar)
            <a href="{{ route('descargarArchivo', $ar->id) }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center border-0 rounded-3 mb-2 shadow-sm">
                <div class="d-flex align-items-center gap-3">
                    <div class="rounded-circle bg-primary-subtle text-primary d-flex align-items-center justify-content-center" style="width:40px;height:40px;">
                        <i class="fa fa-file-pdf"></i>
                    </div>
                    <div>
                        <div class="fw-semibold text-dark">{{ $ar->nombre }}</div>
                        <div class="text-muted small">Documento disponible para descarga</div>
                    </div>
                </div>
                <span class="badge bg-primary-subtle text-primary rounded-pill px-3 py-2">Descargar</span>
            </a>
        @endforeach
    </div>
@endif