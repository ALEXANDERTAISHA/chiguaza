@if ($carpeta->archivos && $carpeta->archivos->count())
    <div class="mt-4">
        @foreach ($carpeta->archivos as $ar)
        <div class="file-item">
            <div class="d-flex align-items-center gap-3">
                <span class="badge folder-badge">PDF</span>
                <div class="file-name">{{ $ar->nombre }}</div>
            </div>
            <div class="file-actions">
                <a class="btn btn-sm btn-outline-primary" href="{{ Storage::url($ar->url) }}" target="_blank">Descargar</a>
                <a class="btn btn-sm btn-outline-danger" href="{{ route('eliminarArchivo',$ar->id) }}">Eliminar</a>
            </div>
        </div>
        @endforeach
    </div>
@else
    <div class="alert alert-info mb-0">No hay archivos en esta carpeta aún.</div>
@endif