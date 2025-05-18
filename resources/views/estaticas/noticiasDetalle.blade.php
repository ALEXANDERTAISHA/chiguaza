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
                        <div class="news-details__img-box">
                            <div class="news-details__img">
                                <img src="{{ Storage::url($noticia->foto) }}" alt="">
                            </div>
                            <div class="news-details__date">
                                <p>{{ $noticia->created_at->format('Y-m-d') }}</p>
                                
                            </div>
                        </div>
                        <div class="text-justify news-details__content">
                            <ul class="news-details__meta list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-user-circle"></span>
                                    </div>
                                    <div class="text-justify">
                                        <p>{{ $noticia->user->name }}</p>
                                    </div>
                                </li>
                                
                            </ul>
                            <h3 class="news-details__title-1">
                                <p>{{ $noticia->titulo }}</p>
                            </h3>
                            {!! $noticia->detalle !!}
                        </div>
                       
                       
                    </div>
                </div>
              
            </div>
        </div>
    </section>
    <!--News Details End-->
@endsection