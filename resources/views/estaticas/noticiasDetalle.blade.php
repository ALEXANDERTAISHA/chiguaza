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
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="news-details__left">
                        <style>
                            .news-detail-card{ background:#ffffff; border-radius:14px; padding:28px; box-shadow:0 12px 30px rgba(2,24,58,0.06); }
                            .news-details__img img{ width:100%; height:480px; object-fit:cover; border-radius:10px; display:block; }
                            .news-detail-meta{ display:flex; gap:18px; align-items:center; color:#6b7280; margin-bottom:14px; }
                            .news-detail-meta .author{ font-weight:600; color:#0b2e66; }
                            .news-details__date p{ background:linear-gradient(90deg,#0d6efd,#6c63ff); color:#fff; display:inline-block; padding:8px 12px; border-radius:8px; }
                            .news-details__title-1 p{ font-size:28px; font-weight:700; color:#06203a; margin-bottom:18px; }
                            @media(max-width:767px){ .news-details__img img{ height:240px; } }
                        </style>

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
                                    @media(max-width:991px){ .news-detail-row{ display:block; } .news-detail-left{ width:100%; margin-bottom:18px } }
                                </style>

                                <div class="news-detail-row">
                                    <div class="news-detail-left">
                                        <div class="img-wrap">
                                            <a href="{{ Storage::url($noticia->foto) }}" class="news-detail-lightbox">
                                                <img src="{{ Storage::url($noticia->foto) }}" alt="{{ $noticia->titulo }}">
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
                                            <div class="news-details__body text-justify">
                                                {!! $noticia->detalle !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                jQuery('.news-detail-lightbox').magnificPopup({ type: 'image', gallery: { enabled: true } });
            }
        });
    </script>
@endsection