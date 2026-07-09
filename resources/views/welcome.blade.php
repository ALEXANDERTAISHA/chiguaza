@extends('layouts.cliente')

@section('content')

{{-- slider --}}
@include('sections.slider',['sliders'=>$sliders])


{{-- departamento --}}
@include('sections.departament')


{{-- autoridad --}}
@include('sections.autoridad',['autoridad'=>$autoridad])



<!--Services One Start-->
<section class="services-one">
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
                            <style>
                                .home-hero-section .lead{ max-width:560px; }
                                .news-one__single{ border-radius:12px; overflow:hidden; transition: transform .18s ease, box-shadow .18s ease; display:flex; flex-direction:column; height:100%; background:#fff; }
                                .news-one__single:hover{ transform: translateY(-8px); box-shadow: 0 20px 40px rgba(2,24,58,0.12); }
                                .news-one__img{ flex:0 0 auto; }
                                .news-one__img img{ height:260px; object-fit:cover; width:100%; display:block; }
                                .news-one__content{ flex:1 1 auto; display:flex; flex-direction:column; padding:20px; }
                                .news-one__title{ flex:1 1 auto; margin-bottom:12px; }
                                .news-one__btn{ margin-top:auto; }
                                /* grid adjustments to keep equal height columns */
                                .news-one .row > [class*="col-"]{ display:flex; }

                                /* Premium look tweaks */
                                .news-one__date p{ background:#0d6efd; color:#fff; display:inline-block; padding:6px 10px; border-radius:6px; font-size:13px; }
                                .news-one__content p{ color:#6b7280; }
                            </style>
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