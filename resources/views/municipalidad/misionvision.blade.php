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
                    <h4 class="main-slider__title" style="font-size: 40px;">MISIÓN Y VISIÓN.</h4>
                    <div class="main-slider__btn-box">
                        <a href="{{ url('/') }}" class="main-slider-two__btn thm-btn{{ Route::is('welcome')?'current':'' }}">Inicio</a>
                    </div>
                </div>
            </div>
        </div>

      

       

    </div>
</section>
<!-- Main Sllider Start -->
<section class="testimonial-one">
    <div class="testimonial-one__bg"
        style="background-image: url(assets/images/backgrounds/testimonial-one-bg.jpg);"></div>
    <div class="container">
        <div class="section-title text-center">
            <div class="section-title__icon">
                <span class="fa fa-star"></span>
            </div>
            <span class="section-title__tagline">Período fiscal 2023-2027</span>
            <h2 class="section-title__title">Misión y Visión
                <br> GADPCH</h2>
        </div>
        <div class="testimonial-one__bottom">
            <div class="testimonial-one__carousel thm-owl__carousel owl-theme owl-carousel" data-owl-options='{
                "items": 3,
                "margin": 30,
                "smartSpeed": 700,
                "loop":true,
                "autoplay": false,
                "nav":false,
                "dots":false,
                "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                "responsive":{
                    "0":{
                        "items":1
                    },
                    "768":{
                        "items":2
                    },
                    "992":{
                        "items": 2
                    }
                }
            }'>
                <!--Testimonial One Single Start-->
                <div class="item">
                    <div class="testimonial-one__single">
                        <div class="testimonial-one__single-inner">
                            <div class="testimonial-one__shape-1">
                                <img src="assets/images/shapes/testimonial-one-shape-1.png" alt="">
                            </div>
                            <div class="testimonial-one__shape-2">
                                <img src="assets/images/shapes/testimonial-one-shape-2.png" alt="">
                            </div>
                            <div class="testimonial-one__quote">
                                <span class="icon-quote"></span>
                            </div>
                            <div class="testimonial-one__client-content">
                                <h3 class="testimonial-one__client-name">Misión</h3>
                                <div class="testimonial-one__client-rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                
                               
                            </div>
                            <p class="testimonial-one__text">Promover, impulsar, fomentar, promocionar el desarrollo social, cultural, económico, productivo y ambiental, de manera coordinada y articulada con los órganos del Estado y de la sociedad civil, en cumplimiento de los objetivos parroquiales y disposiciones legales, sobre la base de principios de participación, sustentabilidad ambiental, gobernabilidad, corresponsabilidad, solidaridad, eficiencia – eficacia y transparencia.</p>
                            <div class="testimonial-one__client-info">
                                <div class="testimonial-one__client-img-box">
                                    <div class="testimonial-one__client-img">
                                        <img src="assets/images/misionyvision/mision.png" alt="">
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
                <!--Testimonial One Single End-->
                <!--Testimonial One Single Start-->
                <div class="item">
                    <div class="testimonial-one__single">
                        <div class="testimonial-one__single-inner">
                            <div class="testimonial-one__shape-1">
                                <img src="assets/images/shapes/testimonial-one-shape-1.png" alt="">
                            </div>
                            <div class="testimonial-one__shape-2">
                                <img src="assets/images/shapes/testimonial-one-shape-2.png" alt="">
                            </div>
                            <div class="testimonial-one__quote">
                                <span class="icon-quote"></span>
                            </div>
                            <div class="testimonial-one__client-content">
                                <h3 class="testimonial-one__client-name">Visión</h3>
                                <div class="testimonial-one__client-rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                               
                                
                            </div>
                            <p class="testimonial-one__text ">El Gad de Chiguaza al 2027 será un territorio ordenando y ecológicamente sustentable, posicionado a nivel provincial y regional como una parroquia que potencia sus recursos productivos y ecoturísticos, bajo un enfoque de economía social y solidaria, soberanía alimentaria, sustentada en la participación ciudadana, encadenamientos productivos, emprendimientos locales, y servicios e infraestructura social de calidad.</p>
                            <div class="testimonial-one__client-info">
                                <div class="testimonial-one__client-img-box">
                                    <div class="testimonial-one__client-img">
                                        <img src="assets/images/misionyvision/vision.png" alt="">
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!--Testimonial One Single End-->
                <!--Testimonial One Single Start-->
                
                <!--Testimonial One Single End-->
                <!--Testimonial One Single Start-->
                
                <!--Testimonial One Single End-->
            </div>
        </div>
    </div>
</section>
<!--Testimonial One End-->
<!--Page Header End-->
@endsection