@if ($carpeta->archivos)
    <div class="list-group">
        @foreach ($carpeta->archivos as $ar)
            <div class="list-group-item d-flex justify-content-between align-items-center border-0 rounded-3 mb-2 shadow-sm">
                <div class="d-flex align-items-center gap-3">
                    <div class="rounded-circle bg-primary-subtle text-primary d-flex align-items-center justify-content-center" style="width:40px;height:40px;">
                        <i class="fa fa-file-pdf"></i>
                    </div>
                    <div>
                        <div class="fw-semibold text-dark">{{ $ar->nombre }}</div>
                        <div class="text-muted small">Documento disponible para visualización y descarga</div>
                    </div>
                </div>
                <div class="d-flex gap-2">
                    <a href="{{ route('descargarArchivo', $ar->id) }}" class="btn btn-sm btn-primary rounded-pill">Ver PDF</a>
                    <a href="{{ route('descargarArchivoDownload', $ar->id) }}" class="btn btn-sm btn-outline-secondary rounded-pill">Descargar</a>
                </div>
            </div>
        @endforeach
    </div>
@endif