 <!--Video One Start-->
 <section class="video-one">
    <div class="video-one__bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
        style="background-image: url({{ asset('assets/images/funcionarios/funcionarios.jpg') }});"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="video-one__inner">
                    <div class="video-one__video-link">
                        <a href="{{ $autoridad->url_video }}" class="video-popup">
                            <div class="video-one__video-icon">
                                <span class="fa fa-play"></span>
                                <i class="ripple"></i>
                            </div>
                        </a>
                    
                    </div>
                    <h5 class="video-one__video-title">Buzón de Quejas y Sugerencias</h5>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Video One End-->

<!--Documents One Start-->
<section class="documents-one">
    <div class="container">
        <div class="documents-one__inner">
            <div class="documents-one__left">
                <p>Ingreso y <br> Consultas</p>
            </div>
            <div class="documents-one__right">
                <ul class="documents-one__points list-unstyled">
                    <li>
                        <a href="{{ route('quejasSugerenciasIngresar') }}" class="">
                            <div class="documents-one__single">
                                <div class="documents-one__content">
                                    <div class="documents-one__icon">
                                        <span class="fas fa-arrow-right"></span>
                                        
                                    </div>
                                    <h3 class="documents-one__title">INGRESAR</h3>
                                    <p class="documents-one__text">Presenta una queja o sugerencia</p>
                                </div>
                                <div class="documents-one__icon-two">
                                    <span class="fas fa-plus"></span>
                                    
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('quejasSugerenciasConsultar') }}">
                            <div class="documents-one__single">
                                <div class="documents-one__content">
                                    <div class="documents-one__icon">
                                        <span class="fas fa-arrow-right"></span>
                                    </div>
                                    <h3 class="documents-one__title">Consultar</h3>
                                    <p class="documents-one__text">Consulta tu queja o sugerencia</p>
                                </div>
                                <div class="documents-one__icon-two">
                                    <span class="fas fa-search"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Documents One End-->

<!--Counter One Start-->
<section class="counter-one">
    <div class="counter-one__bg" style="background-image: url(assets/images/portada/parque.jpg);">
    </div>
    <div class="container">
        <div class="counter-one__inner">
            <ul class="counter-one__list list-unstyled">
                <li>
                    <div class="counter-one__count">
                        <h3 class="odometer" data-count="{{ App\Models\QuejaSugerencia::count() }}">00</h3>
                        <span class=""></span>
                    </div>
                    <p class="counter-one__text">Total <br> de ingresos</p>
                </li>
                <li>
                    <div class="counter-one__count">
                        <h3 class="odometer" data-count="{{ App\Models\QuejaSugerencia::where('quejasugerencia','Queja')->count() }}">00</h3>
                        <span class=""></span>
                    </div>
                    <p class="counter-one__text">Total <br> de Quejas</p>
                </li>
                <li>
                    <div class="counter-one__count">
                        <h3 class="odometer" data-count="{{ App\Models\QuejaSugerencia::where('quejasugerencia','Sugerencia')->count() }}">00</h3>
                        <span class=""></span>
                    </div>
                    <p class="counter-one__text">Total <br> de sugerencias</p>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--Counter One End-->