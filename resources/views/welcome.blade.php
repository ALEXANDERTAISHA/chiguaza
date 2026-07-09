@extends('layouts.cliente')

@section('content')

{{-- Premium hero (replaces slider) --}}
<section class="home-hero-section" style="background-image: linear-gradient(120deg, rgba(2,24,58,0.6), rgba(13,37,80,0.45)), url('{{ asset('assets/images/autoridades1/vocal.png') }}'); background-size:cover; background-position:center; padding:120px 0;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 text-white">
                <h1 class="display-4 fw-bold">GAD Parroquial Chiguaza</h1>
                <p class="lead text-white-75">Transparencia, servicios y noticias de interés para la comunidad. Accede a documentos públicos, trámites y gestiones.</p>
                <div class="mt-4">
                    <a href="{{ route('transparencia',23) }}" class="btn btn-lg btn-primary rounded-pill me-2">Transparencia</a>
                    <a href="{{ route('noticias') }}" class="btn btn-lg btn-outline-light rounded-pill">Últimas noticias</a>
                </div>
            </div>
            <div class="col-lg-5 d-none d-lg-block">
                <div class="card shadow-lg" style="background: rgba(255,255,255,0.06); border:none;">
                    <div class="card-body p-4">
                        <h5 class="text-white">Consultas rápidas</h5>
                        <ul class="list-unstyled mt-3 text-white-75">
                            <li class="mb-2"><i class="fa fa-file-pdf me-2 text-primary"></i>Documentos públicos</li>
                            <li class="mb-2"><i class="fa fa-balance-scale me-2 text-primary"></i>Normativas</li>
                            <li class="mb-2"><i class="fa fa-phone me-2 text-primary"></i>Contacto y atención</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- departamento --}}
@include('sections.departament')


{{-- autoridad --}}
@include('sections.autoridad',['autoridad'=>$autoridad])



<!--Services One Start-->
<section class="services-one">
    <style>
        .home-hero-section .lead{ max-width:560px; }
        .news-one__single{ border-radius:12px; overflow:hidden; transition: transform .18s ease, box-shadow .18s ease; }
        .news-one__single:hover{ transform: translateY(-8px); box-shadow: 0 20px 40px rgba(2,24,58,0.12); }
        .news-one__img img{ height:220px; object-fit:cover; width:100%; }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <div class="services-one__left">
                    <div class="services-one__shape-2 img-bounce">
                        <img src="{{ asset('assets/images/shapes/services-one-shape-2.png') }}" alt="">
                    </div>
                    <div class="services-one__img-box">
                        <div class="services-one__img">
                            <img src="{{ asset('assets/images/resources/services-one-img-1.png') }}" alt="">
                            <div class="services-one__img-shadow"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="services-one__right">
                    <div class="services-one__shape-1 float-bob-x">
                        <img src="{{ asset('assets/images/shapes/services-one-shape-1.png') }}" alt="">
                    </div>
                    <div class="services-one__shape-3 float-bob-x">
                        <img src="{{ asset('assets/images/shapes/services-one-shape-3.png') }}" alt="">
                    </div>
                    <div class="services-one__points-title-box">
                        <p>Trámites Balcón de Servicios y Recursos en línea</p>
                    </div>
                    <div class="services-one__points-box">
                        <ul class="">
                            @foreach ($archivos as $ar)
                            <li>
                                <a target="_blank" href="{{ Storage::url($ar->url) }}">{{ $ar->nombre }}
                                    <i class="fas fa-file-pdf"></i>
                                </a>
                            </li>    
                            @endforeach
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Services One End-->

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
        <div class="row">
            @foreach ($noticias as $no)
            <div class="col-xl-4 col-lg-4">
                <div class="news-one__single">
                    <div class="news-one__img-box">
                        <div class="news-one__img">
                            <img src="{{ Storage::url($no->foto) }}" alt="">
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
</section>
<!--News One End-->
@endsection