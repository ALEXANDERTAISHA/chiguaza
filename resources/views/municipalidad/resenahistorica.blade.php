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
                    <h2 class="main-slider__title"class="main-slider__title" style="font-size: 40px;">RESEÑA HISTORICA</h2>
                    <div class="main-slider__btn-box">
                        <a href="{{ url('/') }}" class="main-slider-two__btn thm-btn{{ Route::is('welcome')?'current':'' }}">Inicio</a>
                    </div>
                </div>
            </div>
        </div>





    </div>
</section>
 <!--History One Start-->
 <section class="history-one">
    <div class="history-one__top">
        <div class="container">
            <div class="text-center section-title">
                <div class="section-title__icon">
                    <span class="fa fa-star"></span>
                </div>
                <h2 class="section-title__title">Reseña Histórica GADPCH</h2>
            </div>
        </div>
    </div>
    <div class="history-one__bottom">
        <div class="history-one__wrap">
            <div class="history-one__shape-1">
                <img src="assets/images/autoridades/logo1.png" alt="">
            </div>
            <div class="container">
                <div class="history-one__inner">
                    <div class="history-one__slider">

                        <div class="history-one__thumb-box">
                            <div class="swiper-container" id="history-one__thumb">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="history-one__date-box">
                                            <div class="history-one__circle-one">
                                                <div class="history-one__circle-two">
                                                    <div class="history-one__circle-three"></div>
                                                </div>
                                            </div>
                                            <p class="history-one__date">HISTORIA</p>
                                        </div>
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <div class="history-one__date-box">
                                            <div class="history-one__circle-one">
                                                <div class="history-one__circle-two">
                                                    <div class="history-one__circle-three"></div>
                                                </div>
                                            </div>
                                            <p class="history-one__date">LÍMITES</p>
                                        </div>
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <div class="history-one__date-box">
                                            <div class="history-one__circle-one">
                                                <div class="history-one__circle-two">
                                                    <div class="history-one__circle-three"></div>
                                                </div>
                                            </div>
                                            <p class="history-one__date">CLIMA</p>
                                        </div>
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <div class="history-one__date-box">
                                            <div class="history-one__circle-one">
                                                <div class="history-one__circle-two">
                                                    <div class="history-one__circle-three"></div>
                                                </div>
                                            </div>
                                            <p class="history-one__date">SUELO</p>
                                        </div>
                                    </div><!-- /.swiper-slide -->

                                </div><!-- /.swiper-wrapper -->
                            </div><!-- /#testimonials-one__thumb.swiper-container -->
                            <div class="history-one__nav">
                                <div class="swiper-button-prev" id="history-one__swiper-button-next">
                                    <i class="icon-left-arrow"></i>
                                </div>
                                <div class="swiper-button-next" id="history-one__swiper-button-prev">
                                    <i class="icon-right-arrow"></i>
                                </div>
                            </div>
                        </div>

                        <div class="history-one__main-content">
                            <div class="swiper-container" id="history-one__carousel">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="history-one__content">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6">
                                                    <div class="history-one__content-left">
                                                        <h4 class="history-one__content-title">Historia</h4>
                                                        <p class="text-justify">La Parroquia Rural Chiguaza se encuentra dentro de la Región Amazónica, en la Provincia de Morona Santiago, Cantón Huamboya. Tiene una extensión de 47.180,76 hectáreas. Cuenta con una población de 6.077 habitantes.
                                                            <p class="text-justify">La parroquia se encuentra a una altitud entre 2900 msnm y 3800 msnm. Su clima está dentro de los rangos de lluvioso y húmedo; tiene una temperatura que varía entre los 16 ͦC y 24 ͦC.</p>

                                                            <p class="text-justify">El nombre de Chiguaza viene de la expresión shuar castellanizada de Chiwias, nominativo del rio y de una gallinácea llamada Chiwias (pava del monte) que hace más de 12 décadas era abundante en este sector.</p>
                                                         </p>
                                                        <ul class="list-unstyled history-one__poins">
                                                            <li>
                                                                <div class="icon">
                                                                    <i class="fa fa-check"></i>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Fuente: GAD Chiguaza,PDOT</p>
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6">
                                                    <div class="history-one__content-right">
                                                        <div class="history-one__content-img">
                                                            <img src="assets/images/autoridades1/presidente.jpg"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.swiper-slide -->

                                    <div class="swiper-slide">
                                        <div class="history-one__content">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6">
                                                    <div class="text-justify">
                                                        <h4 class="history-one__content-title">Límites</h4>
                                                        <p class="text-justify">El Gobierno Autónomo Descentralizado de la Parroquia Chiguaza fue creado el 20 de diciembre del 1920, la misma que cuenta con una extensión de  47.180,76 ha. (CONALI; 2018), actualmente su población acorde al censo realizado en el 2020 es de 6.077 habitantes total.</p>
                                                         <p class="text-justify">Por otra parte la parroquia limita al norte con la Parroquia Huamboya (Cabecera Cantonal) y el Cantón Pablo VI  al sur con las Parroquias Sinaí, Sevilla y Cuchaenza,al este con la Provincia de Pastaza y el Cantón Taisha y al oeste con  .de la provincia de Morona Santiago en las coordenadas 733P+C5F, bañada al sur por el Rio Nayanamaca y Río Palora y al este por el Rio Pastaza; y, al este el Cantón Pablo VI y la Parroquia Sinaí.</p>

                                                         <ul class="list-unstyled history-one__poins">
                                                            <li>
                                                                <div class="icon">
                                                                    <i class="fa fa-check"></i>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Fuente: GAD Chiguaza,PDOT</p>
                                                                </div>
                                                            </li>

                                                        </ul>

                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6">
                                                    <div class="history-one__content-right">
                                                        <div class="history-one__content-img">
                                                            <img src="assets/images/mapa/mapa.jpg"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.swiper-slide -->

                                    <div class="swiper-slide">
                                        <div class="history-one__content">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6">
                                                    <div class="text-justify">
                                                        <h4 class="history-one__content-title">Clima</h4>
                                                        <p class="text-justifytext-justify">El clima es el Conjunto de condiciones atmosféricas propias de un lugar, constituido por la cantidad y frecuencia de lluvias, la humedad, la temperatura, los vientos, etc., y cuya acción compleja influye en la existencia de los seres sometidos a ella.</p>
                                                         <p>En la Parroquia rural de Chiguaza existen dos tipos de climas, Mega térmico Lluviosos y Tropical Mega térmico Húmedo. En la tabla 2.1.7, se puede observar que el clima Mega térmico lluviosos es el que predomina en la zona de estudio con un área de 32.025,8 ha correspondiente al 66,82 % de total del territorio parroquial.</p>

                                                         <ul class="list-unstyled history-one__poins">
                                                            <li>
                                                                <div class="icon">
                                                                    <i class="fa fa-check"></i>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Fuente: GAD Chiguaza,PDOT</p>
                                                                </div>
                                                            </li>

                                                        </ul>

                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6">
                                                    <div class="history-one__content-right">
                                                        <div class="history-one__content-img">

                                                            <img src="assets/images/turismo/cascada1.jpg"
                                                            alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.swiper-slide -->

                                    <div class="swiper-slide">
                                        <div class="history-one__content">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6">
                                                    <div class="history-one__content-left">
                                                        <h4 class="history-one__content-title">Suelo</h4>
                                                        <p class="text-justify">La mayor parte del territorio parroquial hacia la zona central, presenta pendientes que varía entre los 5 a 12 %, estas pendientes ocupan 34.889,66 hectáreas, lo que equivale a 73,94 % del total de la superficie parroquial. Los relieves escarpados o montañosos con pendientes > 100 y 150 % y los relieves muy escarpados con pendientes > 150 y 200 % se localizan en la zona este de la parroquia en la cordillera del Kutukú-Shaimi y en la zona oeste en el Parque Nacional Sangay.</p>
                                                         <p class="text-justify">En la parroquia Chiguaza, según el estudio realizado por   MAG “Memoria Técnica de Geo pedología y temáticas derivadas”, 2016. Se han determinado dos tipos de suelos:Suelo Andisols,Suelo Inceptisol.</p>
                                                         <ul class="list-unstyled history-one__poins">
                                                            <li>
                                                                <div class="icon">
                                                                    <i class="fa fa-check"></i>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Fuente: GAD Chiguaza,PDOT</p>
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6">
                                                    <div class="history-one__content-right">
                                                        <div class="history-one__content-img">
                                                            <img src="assets/images/mapa/mapa.jpg"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.swiper-slide -->



                                </div><!-- /.swiper-wrapper -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--History One End-->
@endsection
