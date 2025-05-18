@extends('layouts.cliente')
@section('content')
<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div>
      

    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(assets/images/autoridades1/vocal.png)">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h1 class="text-white">Noticia</h1>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{route('welcome')}}">Inicio</a></li>
                    <li><span>/</span></li>
                    <li>2023-2027</li>
                </ul>
            </div>
        </div>
    </section>

    <!--Page Header End-->

  



        <!--News Page Start-->
        <section class="news-page">
            <div class="container">
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
                {{ $noticias->links() }}
            </div>
        </section>
        <!--News Page End-->
@endsection