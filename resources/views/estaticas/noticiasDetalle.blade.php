@extends('layouts.cliente')
@section('content')
     <!--Page Header Start-->
     <section class="page-header">
        <div class="page-header-bg" style="background-image: url({{ asset('assets/images/autoridades1/vocal.png') }})">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>Detalle de la noticia</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ route('noticias') }}">Noticias</a></li>
                    <li><span>/</span></li>
                    <li>Detalle</li>
                </ul>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--News Details Start-->
    <section class="news-details">
        <div class="container">
            <style>
                .news-detail-row{ display:flex; gap:30px; align-items:flex-start; }
                .news-detail-left{ flex:0 0 45%; }
                .news-detail-right{ flex:1 1 55%; }
                .news-detail-left .img-wrap{ display:flex; align-items:center; justify-content:center; max-height:520px; overflow:hidden; border-radius:10px; background:#f8fafc; padding:12px; }
                .news-detail-left img{ max-width:100%; max-height:496px; object-fit:contain; display:block; }
                .news-detail-card{ background:#ffffff; border-radius:12px; padding:18px; box-shadow:0 12px 30px rgba(2,24,58,0.04); }
                .news-detail-meta{ display:flex; gap:14px; align-items:center; color:#6b7280; margin-bottom:8px; }
                .news-detail-meta .author{ font-weight:600; color:#0b2e66; }
                .news-details__date p{ background:linear-gradient(90deg,#0d6efd,#6c63ff); color:#fff; display:inline-block; padding:8px 12px; border-radius:8px; }
                .share-buttons a, .share-buttons button{ margin-right:8px; }
                @media(max-width:991px){ .news-detail-row{ display:block; } .news-detail-left{ width:100%; margin-bottom:18px } }
            </style>

            <div class="news-detail-row">
                <div class="news-detail-left">
                    <div class="img-wrap">
                        <a href="{{ $noticia->foto_link }}" class="news-detail-lightbox">
                            <img src="{{ $noticia->foto_link }}" alt="{{ $noticia->titulo }}">
                        </a>
                    </div>
                    <div style="margin-top:12px;">
                        <div class="news-details__date">
                            <p>{{ $noticia->created_at->format('Y-m-d') }}</p>
                        </div>
                    </div>
                </div>

                <div class="news-detail-right">
                    <div class="news-detail-card">
                        <div class="news-detail-meta">
                            <div class="author">{{ $noticia->user->name }}</div>
                        </div>
                        <h3 class="news-details__title-1">
                            <p>{{ $noticia->titulo }}</p>
                        </h3>

                        <div class="share-buttons" style="margin-bottom:16px;">
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank" class="btn btn-sm btn-primary">Facebook</a>
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($noticia->titulo) }}" target="_blank" class="btn btn-sm btn-info">Twitter</a>
                            <a href="https://api.whatsapp.com/send?text={{ urlencode($noticia->titulo . ' ' . url()->current()) }}" target="_blank" class="btn btn-sm btn-success">WhatsApp</a>
                            <button type="button" class="btn btn-sm btn-secondary" id="copyLinkBtn" data-url="{{ url()->current() }}">Copiar enlace</button>
                        </div>

                        <div class="news-details__body text-justify">
                            {!! $noticia->detalle !!}
                        </div>

                        {{-- related news removed per request --}}

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--News Details End-->

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            if (window.jQuery && jQuery.magnificPopup) {
                jQuery('.news-detail-lightbox').magnificPopup({ type: 'image', gallery: { enabled: true } });
                jQuery('.news-lightbox').magnificPopup({ type: 'image', gallery: { enabled: true } });
            }

            var copyBtn = document.getElementById('copyLinkBtn');
            if (copyBtn && navigator.clipboard) {
                copyBtn.addEventListener('click', function () {
                    var url = this.getAttribute('data-url');
                    navigator.clipboard.writeText(url).then(function () { alert('Enlace copiado al portapapeles'); });
                });
            }
        });
    </script>

@endsection