@extends('layouts.cliente')

@section('content')
    <!-- Main Sllider Two Start -->
    <section class="main-slider-two">
        <div class="main-slider-two__carousel owl-carousel owl-theme thm-owl__carousel"
            data-owl-options='{"loop": true, "items": 1, "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"], "margin": 0, "dots": false, "nav": false, "animateOut": "slideOutDown", "animateIn": "fadeIn", "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 7000, "autoplayHoverPause": false}'>

            <div class="item main-slider-two__slide-1">
                <div class="main-slider-two__bg" style="background-image: url(assets/images/funcionarios/funcionarios.jpg);">
                </div><!-- /.slider-one__bg -->
                <div class="main-slider-two__shadow"
                    style="background-image: url(assets/images/shapes/main-slider-two-shadow.png);"></div>
                <div class="main-slider-two__sign">
                    <img src="" alt="">
                </div>
                <div class="main-slider-two__img-box">
                    <div class="main-slider-two__img-shape-1"></div>
                    <div class="main-slider-two__img-shape-2"></div>
                    <div class="main-slider-two__img">
                        <img src="assets/images/autoridades/presidente.png" alt="">
                    </div>
                </div>
                <div class="container">
                    <div class="main-slider-two__content">
                        <div class="main-slider-two__shape-1 float-bob-x">
                            <img src="assets/images/shapes/main-slider-two-shape-1.png" alt="">
                        </div>
                        <p class="main-slider-two__sub-title">“PRESIDENTE DEL GAD PARROQUIAL CHIGUAZA 2023-2027”</p>

                        <h2 class="main-slider-two__title">Sr.Julian Tii</h2>

                        <div class="main-slider-two__btn-box">

                            <a href="{{ url('/') }}"
                                class="main-slider-two__btn thm-btn{{ Route::is('welcome') ? 'current' : '' }}">Inicio</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Main Sllider Two Start -->
    <!--Team One Start-->
    <section class="team-one team-page">
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__icon">
                    <span class="fa fa-star"></span>
                </div>
                <span class="section-title__tagline">2023-2027</span>
                <h2 class="section-title__title">Funcionarios y sus funciones.
                </h2>
            </div>
            <div class="team-one__inner">
                <div class="row">
                    <!--Team One Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="team-one__single">
                            <div class="team-one__shape-1">
                                <img src="" alt="">
                            </div>
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="assets/images/funcionarios/antonio.jpg" alt="">
                                </div>
                            </div>
                            <div class="team-one__content">
                                <h3 class="team-one__name"><a href="">Lic.Antonio Tsentsak</a></h3>
                                <p class="team-one__sub-title">Tesorero del Gobierno Autonomo Parroquial de Chiguaza.</p>
                                <div class="team-one__social">
                                    <a target="_blank" href="https://www.facebook.com/NatividadSando"><i
                                            class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="https://www.facebook.com/NatividadSando"><i
                                            class="fab fa-facebook"></i></a>
                                    <a target="_blank" href="https://www.facebook.com/NatividadSando"><i
                                            class="fab fa-pinterest-p"></i></a>
                                    <a target="_blank" href="https://www.facebook.com/NatividadSando"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="team-one__single">
                            <div class="team-one__shape-2">
                                <img src="" alt="">
                            </div>
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="assets/images/funcionarios/pablo.jpg" alt="">
                                </div>
                            </div>
                            <div class="team-one__content">
                                <h3 class="team-one__name"><a href="">Ing.Pablo Chocho</a></h3>
                                <p class="team-one__sub-title">Técnico interno de proyectos</p>
                                <div class="team-one__social">
                                    <a target="_blank" href="https://www.facebook.com/pablo.chocho.9"><i
                                            class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="https://www.facebook.com/pablo.chocho.9"><i
                                            class="fab fa-facebook"></i></a>
                                    <a target="_blank" href="https://www.facebook.com/pablo.chocho.9"><i
                                            class="fab fa-pinterest-p"></i></a>
                                    <a target="_blank" href="https://www.facebook.com/pablo.chocho.9"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="team-one__single">
                            <div class="team-one__shape-3">
                                <img src="" alt="">
                            </div>
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="assets/images/funcionarios/gato.png" alt="">
                                </div>
                            </div>
                            <div class="team-one__content">
                                <h3 class="team-one__name"><a href="">Ing.Byron Remache</a></h3>
                                <p class="team-one__sub-title">Técnico externo de infraestructura civil y fiscalización
                                </p>
                                <div class="team-one__social">
                                    <a target="_blank" href="https://www.facebook.com/byron.remache"><i
                                            class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="https://www.facebook.com/byron.remache"><i
                                            class="fab fa-facebook"></i></a>
                                    <a target="_blank" href="https://www.facebook.com/byron.remache"><i
                                            class="fab fa-pinterest-p"></i></a>
                                    <a target="_blank" href="https://www.facebook.com/byron.remache"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="team-one__single">
                            <div class="team-one__shape-4">
                                <img src="" alt="">
                            </div>
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="assets/images/funcionarios/amalia.jpg" alt="">
                                </div>
                            </div>
                            <div class="team-one__content">
                                <h3 class="team-one__name"><a href="">Sr.Amalia Ushap</a></h3>
                                <p class="team-one__sub-title">Secretaria</p>
                                <div class="team-one__social">
                                    <a target="_blank" href="https://www.facebook.com/amalia.ushap"><i
                                            class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="https://www.facebook.com/amalia.ushap"><i
                                            class="fab fa-facebook"></i></a>
                                    <a target="_blank" href="https://www.facebook.com/amalia.ushap"><i
                                            class="fab fa-pinterest-p"></i></a>
                                    <a target="_blank" href="https://www.facebook.com/amalia.ushap"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="team-one__single">
                            <div class="team-one__shape-4">
                                <img src="" alt="">
                            </div>
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="assets/images/funcionarios/funcionarios1.jpg" alt="">
                                </div>
                            </div>
                            <div class="team-one__content">
                                <h3 class="team-one__name"><a href="s"> Obreros y Choferes</a></h3>
                                <p class="team-one__sub-title">Obreros del Gad Chiguaza</p>
                                <div class="team-one__social">
                                    <a target="_blank" href=""><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href=""><i class="fab fa-facebook"></i></a>
                                    <a target="_blank" href=""><i class="fab fa-pinterest-p"></i></a>
                                    <a target="_blank" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->


                </div>
            </div>
        </div>
    </section>
    <!--Team One End-->
@endsection
