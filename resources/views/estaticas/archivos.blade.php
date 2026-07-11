@if ($carpeta->archivos)
    <style>
        .premium-pdf-btn{
            background: linear-gradient(90deg,#0d6efd,#1d4ed8);
            border: none;
            color: #fff;
            padding: .45rem .95rem;
            box-shadow: 0 10px 30px rgba(13,110,253,0.18);
            transition: transform .18s ease, box-shadow .18s ease;
            font-weight:600;
        }
        .premium-pdf-btn:hover{ transform: translateY(-3px); box-shadow: 0 18px 40px rgba(13,110,253,0.22); }
        .file-item { background: #fff; }
    </style>

    <div class="list-group">
        @foreach ($carpeta->archivos as $ar)
            <div class="list-group-item file-item d-flex justify-content-between align-items-center border-0 rounded-3 mb-2 shadow-sm">
                <div class="d-flex align-items-center gap-3">
                    <div class="rounded-circle bg-primary-subtle text-primary d-flex align-items-center justify-content-center" style="width:40px;height:40px;">
                        <i class="fa fa-file-pdf"></i>
                    </div>
                    <div>
                        <div class="fw-semibold text-dark">{{ $ar->nombre }}</div>
                        <div class="text-muted small">Documento disponible para visualización</div>
                    </div>
                </div>
                <div>
                    <button type="button" class="btn premium-pdf-btn ver-pdf-btn" data-pdf-id="{{ $ar->id }}" data-nombre="{{ $ar->nombre }}">
                        <i class="fa fa-eye me-2"></i>Ver PDF
                    </button>
                </div>
            </div>
        @endforeach
    </div>
@endif