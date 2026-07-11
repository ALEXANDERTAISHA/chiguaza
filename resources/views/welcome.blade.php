@extends('layouts.cliente')

@section('content')

{{-- slider --}}
@include('sections.slider',['sliders'=>$sliders])


{{-- departamento --}}
@include('sections.departament')


{{-- autoridad --}}
@include('sections.autoridad',['autoridad'=>$autoridad])



<!--Services One Start-->
<section class="services-one" style="background: linear-gradient(135deg, #07182e 0%, #113b6e 100%); padding: 90px 0 60px; position: relative; color: #f8fafc;">
    <div style="position:absolute; inset:0; background-image: radial-gradient(circle at 18% 18%, rgba(59,130,246,0.18), transparent 16%), radial-gradient(circle at 82% 12%, rgba(16,185,129,0.15), transparent 20%); pointer-events:none;"></div>
    <div class="container" style="position:relative; z-index:1;">
        <div style="display:grid; grid-template-columns: 1.15fr 0.95fr; gap:2rem; align-items:center;">
            <div style="position:relative;">
                <div style="border-radius:34px; overflow:hidden; background: rgba(255,255,255,0.05); border:1px solid rgba(255,255,255,0.14); box-shadow: 0 35px 70px rgba(0,0,0,0.25);">
                    <img src="{{ asset('assets/images/resources/services-one-img-1.png') }}" alt="consulta trámites" style="width:100%; display:block; object-fit:cover; min-height:580px;">
                </div>
                <div style="position:absolute; left:2rem; bottom:2rem; background: rgba(5,30,70,0.92); border:1px solid rgba(255,255,255,0.12); border-radius:28px; padding:1.5rem 1.6rem; width:calc(100% - 4rem); backdrop-filter: blur(16px);">
                    <h2 style="margin:0 0 0.6rem; font-size:2.15rem; color:#ffffff; font-weight:800;">Consulta trámites</h2>
                    <p style="margin:0; color:#cbd5e1; line-height:1.8;">Un panel de acceso rápido para tus recursos más importantes.</p>
                </div>
            </div>
            <div style="padding:2.2rem 2.4rem; border-radius:34px; background: #ffffff; box-shadow: 0 35px 80px rgba(0,0,0,0.12); min-height:640px; display:flex; flex-direction:column; justify-content:space-between;">
                <div>
                    <div style="display:flex; align-items:flex-start; gap:1rem; margin-bottom:1.8rem;">
                        <div style="width:72px; height:72px; border-radius:22px; background: linear-gradient(135deg, #2563eb 0%, #10b981 100%); display:flex; align-items:center; justify-content:center; color:#ffffff; font-size:1.4rem;">
                            <i class="fas fa-folder-open"></i>
                        </div>
                        <div>
                            <p style="margin:0 0 0.85rem; color:#0f172a; text-transform:uppercase; letter-spacing:0.22em; font-size:0.82rem; font-weight:700;">Documentos recientes</p>
                            <h3 style="margin:0; font-size:2.35rem; line-height:1.05; color:#0f172a; font-weight:800;">Los 4 últimos documentos subidos</h3>
                        </div>
                    </div>
                    <p style="margin:0 0 2rem; color:#64748b; font-size:1rem; line-height:1.85;">Accede a tus archivos oficiales desde un listado limpio y con la experiencia premium de Chiguaza.</p>
                    <div style="display:flex; flex-wrap:wrap; gap:1rem; align-items:center; margin-bottom:2rem;">
                        <a href="https://gadchiguaza.gob.ec/tramites" style="padding:1rem 1.6rem; border-radius:999px; background: linear-gradient(90deg, #2563eb 0%, #0ea5e9 100%); color:#ffffff; font-weight:700; text-decoration:none; box-shadow: 0 24px 46px rgba(16,101,242,0.24);">Ver trámites</a>
                        <span style="display:inline-flex; align-items:center; gap:0.55rem; color:#64748b; font-size:0.95rem;"><span style="width:10px; height:10px; border-radius:999px; background:#10b981;"></span>Documentos actualizados</span>
                    </div>
                </div>
                <div style="display:grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap:1rem;">
                    @foreach ($archivos->sortByDesc('created_at')->take(4) as $ar)
                    <a href="#" class="ver-pdf-btn" data-pdf="{{ Storage::url($ar->url) }}" data-nombre="{{ Str::limit($ar->nombre, 58, '...') }}" style="display:flex; flex-direction:column; justify-content:space-between; gap:1rem; padding:1.4rem 1.35rem; border-radius:24px; background:#f8fbff; border:1px solid rgba(59,130,246,0.16); text-decoration:none; color:#0f172a; transition: transform .18s ease, box-shadow .18s ease; min-height:140px;">
                        <div style="display:flex; align-items:center; gap:0.95rem;">
                            <span style="flex-shrink:0; width:48px; height:48px; display:flex; align-items:center; justify-content:center; border-radius:16px; background:rgba(37,99,235,0.12); color:#2563eb; font-size:1.2rem;"><i class="fas fa-file-pdf"></i></span>
                            <div style="min-width:0;">
                                <p style="margin:0 0 0.45rem; color:#0f172a; font-size:0.95rem; font-weight:700; line-height:1.35; overflow:hidden; text-overflow:ellipsis; white-space:nowrap;">{{ Str::limit($ar->nombre, 56, '...') }}</p>
                                <span style="color:#64748b; font-size:0.85rem;">{{ $ar->created_at->format('d/m/Y') }}</span>
                            </div>
                        </div>
                        <span style="display:inline-flex; align-items:center; justify-content:center; padding:0.75rem 1rem; border-radius:999px; background: rgba(37,99,235,0.08); color:#2563eb; font-size:0.85rem; font-weight:700; width:max-content;">Abrir documento</span>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!--Services One End-->

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
        if (!modalEl || typeof bootstrap === 'undefined') return;
        var modal = new bootstrap.Modal(modalEl);
        var iframe = modalEl.querySelector('iframe');
        var titleEl = modalEl.querySelector('.modal-title');
        var downloadBtn = document.getElementById('pdfDownloadBtn');

        document.querySelectorAll('.ver-pdf-btn').forEach(function (btn) {
            btn.addEventListener('click', function (event) {
                event.preventDefault();
                var url = btn.getAttribute('data-pdf');
                var nombre = btn.getAttribute('data-nombre') || 'Documento';
                if (!url) return;
                iframe.src = url;
                titleEl.textContent = nombre;
                if (downloadBtn) downloadBtn.href = url;
                modal.show();
            });
        });

        modalEl.addEventListener('hidden.bs.modal', function () {
            iframe.src = '';
        });
    });
</script>

<!--quejas sugerencias-->
@include('sections.quejassugerencias',['autoridad'=>$autoridad])
<!--quejas sugerencias End-->



<!--News One Start-->
<section class="news-one">
    <div class="container">
        <div class="section-title text-center">
            <div class="section-title__icon">
                <span class="fa fa-star"></span>
            </div>
            <span class="section-title__tagline">ÚLTIMAS NOTICIAS</span>
            <h2 class="section-title__title">Últimas noticias
                <br> de la semana</h2>
        </div>
        <style>
            /* Equal height and image ratio for news cards */
            .news-one__single{ display:flex; flex-direction:column; height:100%; border-radius:12px; overflow:hidden; background:#fff; transition: transform .18s ease, box-shadow .18s ease; }
            .news-one__single:hover{ transform: translateY(-8px); box-shadow: 0 20px 40px rgba(2,24,58,0.08); }
            .news-one__img img{ width:100%; height:260px; object-fit:cover; display:block; }
            .news-one .row > [class*="col-"]{ display:flex; }
            .news-one__content{ display:flex; flex-direction:column; padding:20px; }
            .news-one__btn{ margin-top:auto; }
        </style>

        <div class="row">
            @foreach ($noticias as $no)
            <div class="col-xl-4 col-lg-4">
                <div class="news-one__single" style="cursor:pointer;" onclick="window.location='{{ route('noticiasDetalle',$no->id) }}'">
                    <div class="news-one__img-box">
                        <div class="news-one__img">
                            <a href="{{ Storage::url($no->foto) }}" class="news-lightbox">
                                <img src="{{ Storage::url($no->foto) }}" alt="">
                            </a>
                        </div>
                        <div class="news-one__date">
                            <p>{{ $no->created_at->format('Y-m-d') }}</p>
                        </div>
                    </div>
                    <div class="news-one__content">
                        <div class="news-one__user-and-meta">
                            <div class="news-one__user">
                                <div class="news-one__user-img">
                                    
                                </div>
                                <div class="news-one__user-text">
                                    <p>Publicado por</p>
                                </div>
                            </div>
                            <div class="news-one__meta">
                                <div class="icon">
                                    <span class="fas fa-user"></span>
                                </div>
                                <div class="text">
                                    <p>{{ $no->user->name }}</p>
                                </div>
                            </div>
                        </div>
                        <h3 class="news-one__title"><a href="{{ route('noticiasDetalle',$no->id) }}">
                            {{ Str::limit($no->titulo, 45, '...') }}
                        </a>
                        </h3>
                        <div class="news-one__btn">
                            <a href="{{ route('noticiasDetalle',$no->id) }}">Leer más<i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>    
            @endforeach
            
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            if (window.jQuery && jQuery.magnificPopup) {
                jQuery('.news-lightbox').magnificPopup({ type: 'image', gallery: { enabled: true } });
            }
            // Prevent clicks on the image lightbox from bubbling to the card onclick
            document.querySelectorAll('.news-lightbox').forEach(function(el){
                el.addEventListener('click', function(e){ e.stopPropagation(); });
            });
        });
    </script>
    </div>
</section>
<!--News One End-->
@endsection