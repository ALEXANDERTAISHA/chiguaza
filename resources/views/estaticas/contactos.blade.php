@extends('layouts.cliente')
@section('content')
      <!--Page Header Start-->
      <section class="page-header">
        <div class="page-header-bg" style="background-image: url({{ asset('assets/images/autoridades1/vocal.png') }})">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h1 class="text-white">Contacto</h1>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{route('welcome')}}">Inicio</a></li>
                    <li><span>/</span></li>
                    <li>2023-2027</li>
                </ul>
            </div>
        </div>
    </section>

    <!--Page Header End-->


    <!--Contact Page Start-->
    <section class="contact-page">
        <div class="container">
            <div class="contact-page__top">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="contact-page__left">
                            <div class="contact-page__img-box">
                                <div class="contact-page__img">
                                    <img src="{{ asset('assets/images/autoridades/autoridades.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="contact-page__right">
                            <div class="section-title text-left">
                                <div class="section-title__icon">
                                    <span class="fa fa-star"></span>
                                </div>
                                <span class="section-title__tagline">{{ config('app.name') }}</span>
                                <h2 class="section-title__title">
                                    {{ $empresa->descripcion }}
                                </h2>
                            </div>
                            
                            <ul class="list-unstyled contact-page__contact-list">
                                <li>
                                    <div class="icon">
                                        <span class="icon-telephone"></span>
                                    </div>
                                    <div class="content">
                                        <p>¿Tiene alguna pregunta?</p>
                                        <h4><a href="tel:{{ $empresa->telefono }}"> {{ $empresa->telefono }}</a></h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-email"></span>
                                    </div>
                                    <div class="content">
                                        <p>Escribe email</p>
                                        <h4><a href="mailto:{{ $empresa->email }}">{{ $empresa->email }}</a></h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-pin"></span>
                                    </div>
                                    <div class="content">
                                        <p>Visite en cualquier momento</p>
                                        <h4>{{ $empresa->direccion }}</h4>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-page__bottom">
                <div class="contact-page__bottom-left">
                    <div class="contact-page__bottom-icon">
                        <span class="icon-clock"></span>
                    </div>
                    <ul class="contact-page__bottom-content list-unstyled">
                        <li>
                            <span>Lunes - Viernes</span>
                            <p>8:00 am to 5:00 pm</p>
                        </li>
                    </ul>
                </div>
                <div class="contact-page__bottom-right">
                    <div class="contact-page__social">
                        <div class="contact-page__social-shape-1 float-bob-x">
                            <img src="assets/images/shapes/contact-page-shape-1.png" alt="">
                        </div>
                        <span>Medios de comunicación social</span>
                        @if ($empresa->facebook)
                        <a href="{{ $empresa->facebook }}" target="_blanck"><i class="fab fa-facebook"></i></a>    
                        @endif
                        @if ($empresa->twitter)
                            <a href="{{ $empresa->twitter }}" target="_blanck"><i class="fab fa-twitter"></i></a>    
                        @endif
                        @if ($empresa->instagram)
                            <a href="{{ $empresa->instagram }}" target="_blanck"><i class="fab fa-instagram"></i></a>    
                        @endif
                        @if ($empresa->youtube)
                            <a href="{{ $empresa->youtube }}" target="_blanck"><i class="fab fa-youtube"></i></a>    
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Page End-->

    <!--Google Map Start-->
    <section class="google-map">
        
        <iframe class="google-map__one" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d141126.61106288462!2d-78.07732754894377!3d-2.0426316616507996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d2212e95cc2efb%3A0x2a9ef926028bab0!2sGAD%20Parroquial%20de%20Chiguaza!5e0!3m2!1ses!2sec!4v1691782391496!5m2!1ses!2sec" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </section>
    <!--Google Map End-->

    <!--Contact One Start-->
    <section class="contact-one">
        <div class="contact-one__bg" style="background-image: url(assets/images/backgrounds/contact-one-bg.png);">
        </div>
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__icon">
                    <span class="fa fa-star"></span>
                </div>
                <span class="section-title__tagline">CONTÁCTENOS</span>
                <h2 class="section-title__title">No dude en ponerse en contacto</h2>
            </div>
            <div class="contact-one__form-box">
                <form method="POST" action="{{ route('contactoEnviar') }}" class="contact-one__form ">
                    @csrf
                    
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="contact-one__input-box">
                                <input type="text" class="form_control" placeholder="Nombres y apellidos" name="name" required>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="contact-one__input-box">
                                <input type="email" class="form_control" placeholder="Correo Electrónico" name="email" required>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="contact-one__input-box">
                                <input type="text" class="form_control" placeholder="Número teléfonico" name="number" required>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="contact-one__input-box">
                                <input type="text" class="form_control" placeholder="Asunto" name="subject" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="contact-one__input-box text-message-box">
                                <textarea class="form_control" rows="3" placeholder="Detalle su mensaje" name="message"></textarea>
                            </div>
                            <div class="contact-one__btn-box">
                                <button type="submit" class="thm-btn contact-one__btn">Enviar mensaje</button>
                            </div>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
    </section>
    <!--Contact One End-->
@endsection