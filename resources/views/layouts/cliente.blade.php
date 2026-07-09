<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> {{ config('app.name') }} </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicons/apple-touch-icon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicons/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('assets/images/favicons/favicon-16x16.png') }}" />
    <link rel="manifest" href="{{ asset('assets/images/favicons/site.webmanifest') }}" />
    <meta name="description" content="{{ config('app.name') }} " />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/animate/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/animate/custom-animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/jarallax/jarallax.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.pips.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/odometer/odometer.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/swiper/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/govity-icons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/tiny-slider/tiny-slider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/reey-font/stylesheet.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/bxslider/jquery.bxslider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-select/css/bootstrap-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/vegas/vegas.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-ui/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/timepicker/timePicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/nice-select/nice-select.css') }}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/govity.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/govity-responsive.css') }}" />
    
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>





    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->


    <div class="page-wrapper">
        @php
            $empresah = \App\Models\Empresa::first();
        @endphp
        <header class="main-header">
            <nav class="main-menu">
                <div class="main-menu__wrapper">
                    <div class="main-menu__wrapper-inner">
                        <div class="main-menu__logo">
                            <a href="{{ url('/') }}">
                                <img src="{{ Storage::url($empresah->logo) }}" alt="" width="95px" height="45px">
                            </a>
                        </div>
                        <div class="main-menu__top">
                            <div class="main-menu__top-inner">
                                <div class="main-menu__top-left">
                                    <div class="main-menu__social">
                                        @if ($empresah->facebook)
                                            <a href="{{ $empresah->facebook }}" target="_blanck"><i
                                                    class="fab fa-facebook"></i></a>
                                        @endif
                                        @if ($empresah->twitter)
                                            <a href="{{ $empresah->twitter }}" target="_blanck"><i
                                                    class="fab fa-twitter"></i></a>
                                        @endif
                                        @if ($empresah->instagram)
                                            <a href="{{ $empresah->instagram }}" target="_blanck"><i
                                                    class="fab fa-instagram"></i></a>
                                        @endif
                                        @if ($empresah->youtube)
                                            <a href="{{ $empresah->youtube }}" target="_blanck"><i
                                                    class="fab fa-youtube"></i></a>
                                        @endif

                                    </div>
                                </div>
                                <div class="main-menu__top-right">
                                    <ul class="list-unstyled main-menu__contact-list">
                                        <li>
                                            <div class="icon">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                            <div class="text">
                                                <p><a href="mailto:needhelp@company.com">{{ $empresah->email }}</a>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="fas fa-phone"></i>
                                            </div>
                                            <div class="text">
                                                <p>{{ $empresah->telefono }}</p>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="list-unstyled main-menu__top-menu">
                                        <li><a href="{{ route('login') }}">Ingresar</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="main-menu__bottom">
                            @include('layouts.menu')
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        {{-- contenido --}}
        @include('layouts.alert')
        @yield('content')

        <!--Site Footer Start-->
        <footer class="site-footer bg-dark text-light" style="background: linear-gradient(180deg,#0b1220,#0d0f14);">
            <div class="container py-5">
                <div class="row gy-4 align-items-start">
                    <div class="col-lg-4">
                        <a href="{{ url('/') }}" class="d-inline-block mb-3">
                            <img src="{{ Storage::url($empresah->logo) }}" alt="Logo" style="height:60px;" />
                        </a>
                        <p class="text-muted small">GAD Parroquial Chiguaza - Promoviendo transparencia y servicio público.</p>
                        <ul class="list-unstyled mt-3">
                            <li class="mb-2"><i class="fa fa-envelope me-2 text-primary"></i><a class="text-muted" href="mailto:{{ $empresah->email }}">{{ $empresah->email }}</a></li>
                            <li class="mb-2"><i class="fa fa-phone me-2 text-primary"></i><span class="text-muted">{{ $empresah->telefono }}</span></li>
                        </ul>
                        <div class="mt-3">
                            <a href="{{ $empresah->facebook }}" class="btn btn-outline-light btn-sm rounded-circle me-2"><i class="fab fa-facebook-f"></i></a>
                            <a href="{{ $empresah->twitter }}" class="btn btn-outline-light btn-sm rounded-circle me-2"><i class="fab fa-twitter"></i></a>
                            <a href="{{ $empresah->instagram }}" class="btn btn-outline-light btn-sm rounded-circle me-2"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <h5 class="text-white fw-bold">Enlaces</h5>
                        <ul class="list-unstyled mt-3">
                            <li class="mb-2"><a class="text-muted" href="{{ route('resenahistorica') }}">Parroquia</a></li>
                            <li class="mb-2"><a class="text-muted" href="{{ route('quejasSugerencias') }}">Servicios</a></li>
                            <li class="mb-2"><a class="text-muted" href="{{ route('noticias') }}">Noticias</a></li>
                            <li class="mb-2"><a class="text-muted" href="{{ route('contactos') }}">Contacto</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3">
                        <h5 class="text-white fw-bold">Visítanos</h5>
                        <p class="text-muted small mt-3">Chiguaza - Huamboya, Ecuador. Horario de atención: Lun - Vie 08:30 - 16:30</p>
                    </div>

                    <div class="col-lg-3">
                        <h5 class="text-white fw-bold">Suscríbete</h5>
                        <p class="text-muted small">Recibe novedades y documentos importantes por correo.</p>
                        <form class="d-flex" action="#" method="POST">
                            <input type="email" name="email" placeholder="Tu correo electrónico" class="form-control form-control-sm me-2" required>
                            <button class="btn btn-primary btn-sm rounded-pill">Suscribirse</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="site-footer__bottom py-3" style="border-top:1px solid rgba(255,255,255,0.04);">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 text-muted small">&copy; {{ date('Y') }} GAD Parroquial Chiguaza. Todos los derechos reservados.</div>
                        <div class="col-md-6 text-md-end">
                            <a href="#" class="text-muted small me-3">Política de privacidad</a>
                            <a href="#" class="text-muted small">Términos</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="assets/images/resources/logo-1.png"
                        width="94" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@packageName__.com">needhelp@govity.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-right-arrow"></i></a>


    <script src="{{ asset('assets/vendors/jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jarallax/jarallax.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/odometer/odometer.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/swiper/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/tiny-slider/tiny-slider.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/wnumb/wNumb.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/wow/wow.js') }}"></script>
    <script src="{{ asset('assets/vendors/isotope/isotope.js') }}"></script>
    <script src="{{ asset('assets/vendors/countdown/countdown.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bxslider/jquery.bxslider.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/vegas/vegas.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/vendors/timepicker/timePicker.js') }}"></script>
    <script src="{{ asset('assets/vendors/circleType/jquery.circleType.js') }}"></script>
    <script src="{{ asset('assets/vendors/circleType/jquery.lettering.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/nice-select/jquery.nice-select.min.js') }}"></script>




    <!-- template js -->
    <script src="{{ asset('assets/js/govity.js') }}"></script>
</body>

</html>
