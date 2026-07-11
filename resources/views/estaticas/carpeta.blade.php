<section class="service-details py-5">
    <div class="container">
        @if ($carpeta->carpetas->count() > 0)
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="card border-0 shadow-sm sidebar-card">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center gap-2 text-primary mb-3">
                                <i class="fa fa-folder-open"></i>
                                <span class="fw-semibold">Secciones disponibles</span>
                            </div>
                            <p class="text-muted small mb-3">Seleccione una categoría para ver los documentos publicados.</p>
                            <div class="list-group list-group-flush" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                @php $i = 0; @endphp
                                @foreach ($carpeta->carpetas as $tra)
                                    <button class="list-group-item list-group-item-action border-0 rounded-3 mb-2 {{ $i == 0 ? 'active' : '' }}"
                                            id="v-pills-{{ $tra->id }}-tab"
                                            data-bs-toggle="pill"
                                            data-bs-target="#v-pills-{{ $tra->id }}"
                                            type="button"
                                            role="tab"
                                            aria-controls="v-pills-{{ $tra->id }}"
                                            aria-selected="{{ $i == 0 ? 'true' : 'false' }}">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>{{ $tra->nombre }}</span>
                                            <i class="fa fa-chevron-right"></i>
                                        </div>
                                    </button>
                                    @php $i++; @endphp
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="tab-content" id="v-pills-tabContent">
                        @php $ii = 0; @endphp
                        @foreach ($carpeta->carpetas as $sub_carpeta)
                            <div class="tab-pane fade show {{ $ii == 0 ? 'active' : '' }}"
                                 id="v-pills-{{ $sub_carpeta->id }}"
                                 role="tabpanel"
                                 aria-labelledby="v-pills-{{ $sub_carpeta->id }}-tab">
                                <div class="card border-0 shadow-sm overflow-hidden">
                                    <div class="card-body p-4">
                                        <div class="d-flex align-items-start justify-content-between gap-3 mb-4">
                                            <div>
                                                <div class="text-primary fw-semibold small text-uppercase">Categoría</div>
                                                <h3 class="h4 mb-1">{{ $sub_carpeta->nombre }}</h3>
                                                <p class="text-muted mb-0">Archivos y documentos disponibles para la consulta pública.</p>
                                            </div>
                                            <div class="rounded-circle bg-primary-subtle text-primary d-flex align-items-center justify-content-center" style="width:48px;height:48px;">
                                                <i class="fa fa-file-alt"></i>
                                            </div>
                                        </div>

                                        @include('estaticas.archivos', ['carpeta' => $sub_carpeta])

                                        @if ($sub_carpeta->carpetas)
                                            <div class="mt-4">
                                                <div class="fw-semibold text-dark mb-2">Subcategorías</div>
                                                <ul class="list-unstyled ps-0">
                                                    @foreach ($sub_carpeta->carpetas as $subCarpeta_s)
                                                        @include('estaticas.sub', ['sub_carpeta' => $subCarpeta_s])
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @php $ii++; @endphp
                        @endforeach
                    </div>
                </div>
            </div>
        @else
            <div class="alert alert-primary" role="alert">
                <strong>No existe datos para {{ $carpeta->nombre }}</strong>
            </div>
        @endif
    </div>
</section>

<style>
    .service-details .list-group-item.active {
        background: linear-gradient(135deg, #0d6efd, #1d4ed8);
        color: #fff;
        box-shadow: 0 10px 30px rgba(13, 110, 253, 0.18);
    }

    .service-details .list-group-item-action:hover {
        transform: translateY(-2px);
        transition: 0.2s ease;
    }
    .service-details .sidebar-card {
        position: sticky;
        top: 90px;
        z-index: 5;
    }

    @media (max-width: 991px) {
        .service-details .sidebar-card {
            position: static;
            top: auto;
        }
    }

</style>

<!-- Modal PDF Viewer -->
<div class="modal fade" id="pdfViewerModal" tabindex="-1" aria-labelledby="pdfViewerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" style="max-width:1200px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="pdfViewerModalLabel">Documento</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="ratio ratio-16x9" style="min-height:70vh;">
                    <iframe src="" frameborder="0" class="w-100 h-100" aria-label="Visor PDF"></iframe>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-outline-secondary" id="pdfDownloadBtn" target="_blank">Descargar</a>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var modalEl = document.getElementById('pdfViewerModal');
        if (!modalEl) return;
        var modal = new bootstrap.Modal(modalEl);
        var iframe = modalEl.querySelector('iframe');
        var titleEl = modalEl.querySelector('.modal-title');
        var downloadBtn = document.getElementById('pdfDownloadBtn');

        document.querySelectorAll('.ver-pdf-btn').forEach(function (btn) {
            btn.addEventListener('click', function (e) {
                e.preventDefault();
                var archivoId = btn.getAttribute('data-pdf-id');
                var nombre = btn.getAttribute('data-nombre') || 'Documento';
                
                if (!archivoId) return;
                
                var pdfUrl = '/ver-archivo/' + archivoId;
                var downloadUrl = '/descargar-archivo/' + archivoId;
                
                iframe.src = pdfUrl;
                titleEl.textContent = nombre;
                if (downloadBtn) downloadBtn.href = downloadUrl;
                modal.show();
            });
        });

        modalEl.addEventListener('hidden.bs.modal', function () {
            iframe.src = '';
        });
    });
</script>