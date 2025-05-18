@extends('layouts.cliente')

@section('content')

  <!-- Main Sllider Start -->
  <section class="main-slider">
    <div class="main-slider__carousel owl-carousel owl-theme thm-owl__carousel"
        data-owl-options='{"loop": true, "items": 1, "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"], "margin": 0, "dots": true, "nav": true, "animateOut": "slideOutDown", "animateIn": "fadeIn", "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 7000, "autoplayHoverPause": false}'>

        <div class="item main-slider__slide-1">
            <div class="main-slider__bg"
                style="background-image: url(assets/images/portada/parque.jpg);">
            </div><!-- /.slider-one__bg -->
            <div class="main-slider__shape-1">
                <img src="assets/images/shapes/main-slider-shape-1.png" alt="">
            </div>
           
           
            <div class="container">
                <div class="main-slider__content">
                    <p class="main-slider__sub-title">Administración 2023-2027.</p>
                    <h2 class="main-slider__title"class="main-slider__title" style="font-size: 40px;">ORGANIGRAMA INSTITUCIONAL</h2>
                    <div class="main-slider__btn-box">
                        <a href="{{ url('/') }}" class="main-slider-two__btn thm-btn{{ Route::is('welcome')?'current':'' }}">Inicio</a>
                    </div>
                </div>
            </div>    
        </div> 
    </div>
</section>



<!--About One Start-->
<section class="about-one" id="about">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                    <div class="footer-widget__column footer-widget__gallery">
                       
                        <ul class="footer-widget__gallery-list list-unstyled clearfix">
                            <li>
                                <div class="footer-widget__gallery-img1">
                                    <img src="assets/images/organigrama/organigrama.jpg" alt="">
                                    <a href="assets/images/organigrama/organigrama.jpg"
                                        class="img-popup"><span class="fab fa-instagram"></span></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-one__right">
                    <div class="section-title text-left">
                        <div class="section-title__icon">
                            <span class="fa fa-star"></span>
                        </div>
                        <h2 class="section-title__title">ORGANIGRAMA</h2>
                    </div>
                    <ul class="">
                        <li>
                            <p class="text-justify"><b>Que</b>, el Código Orgánico de Organización Territorial Autonomías y Descentralización en el <b>Artículo 338 dispone:</b>“Estructura administrativa. - Cada gobierno regional, provincial, metropolitano y municipal tendrá la estructura administrativa que requiera para el cumplimiento de sus fines y el ejercicio de sus competencias y funcionará de manera desconcentrada. La estructura administrativa será la mínima indispensable para la gestión eficiente, eficaz y económica de las competencias de cada nivel de gobierno, se evitará la burocratización y se sancionará el uso de cargos públicos para el pago de compromisos electorales. Cada gobierno autónomo descentralizado elaborará la normativa pertinente según las condiciones específicas de su circunscripción territorial, en el marco de la Constitución y la ley. El gobierno autónomo descentralizado parroquial rural tendrá una estructura administrativa mínima requerida para el cumplimiento de fines y el ejercicio de sus competencias.</p></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--About One End-->


@endsection