<section class="about-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-one__left">
                    <div class="about-one__shape-1 float-bob-x">
                        <img src="{{ asset('assets/images/shapes/about-one-shape-1.png') }}" alt="">
                    </div>
                    <div class="about-one__shape-3 float-bob-y">
                        <img src="{{ asset('assets/images/shapes/about-one-shape-3.png') }}" alt="">
                    </div>
                    <div class="about-one__img-box">
                        <div class="about-one__img">
                            <img src="{{ Storage::url($autoridad->foto) }}" alt="">
                        </div>
                        <div class="about-one__img-2">
                            <img src="{{ Storage::url($autoridad->foto2) }}" alt="">
                        </div>
                        <div class="about-one__shape-2">
                            <img src="{{ asset('assets/images/shapes/about-one-shape-2.png') }}" alt="">
                        </div>
                        <div class="about-one__video-link">
                            <a href="{{ $autoridad->url_video }}" class="video-popup">
                                <div class="about-one__video-icon">
                                    <span class="fa fa-play"></span>
                                    <i class="ripple"></i>
                                </div>
                            </a>
                        </div>
                        <div class="about-one__call-box">
                            <div class="about-one__call-icon">
                                <span class="icon-government-1"></span>
                            </div>
                            <div class="about-one__call-box-content">
                                <p class="about-one__call-text">{{ $autoridad->rol }}</p>
                                <h4 class="about-one__call-number">
                                    {{ $autoridad->nombres_completos }} 
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-one__right">
                    <div class="section-title text-left">
                        <div class="section-title__icon">
                            <span class="fa fa-star"></span>
                        </div>
                        <span class="section-title__tagline">BIENVENIDO A {{ config('app.name') }}</span>
                        <h3 class="section-title__title">
                            {{ $autoridad->frase }}
                        </h3>
                    </div>
                    <div class="about-two__progress">
                        <div class="about-two__progress-single">
                            <h4 class="about-two__progress-title">{{ $autoridad->anio_experiencia }} años de experiencia</h4>
                            <div class="bar">
                                <div class="bar-inner count-bar" data-percent="100%">
                                    <div class="count-text">5</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if ($autoridad->logro_1)
                        <ul class="about-two__points list-unstyled">
                        <li>
                            <div class="about-two__points-title-box">
                                <div class="icon">
                                    <span class="fa fa-arrow-right"></span>
                                </div>
                                <div class="title">
                                    <h3>{{ $autoridad->logro_1 }}</h3>
                                </div>
                            </div>
                        </li>
                    </ul>
                    @endif

                    @if ($autoridad->logro_2)
                        <ul class="about-two__points list-unstyled">
                        <li>
                            <div class="about-two__points-title-box">
                                <div class="icon">
                                    <span class="fa fa-arrow-right"></span>
                                </div>
                                <div class="title">
                                    <h3>{{ $autoridad->logro_2 }}</h3>
                                </div>
                            </div>
                        </li>
                    </ul>
                    @endif

                    @if ($autoridad->logro_3)
                        <ul class="about-two__points list-unstyled">
                        <li>
                            <div class="about-two__points-title-box">
                                <div class="icon">
                                    <span class="fa fa-arrow-right"></span>
                                </div>
                                <div class="title">
                                    <h3>{{ $autoridad->logro_3 }}</h3>
                                </div>
                            </div>
                        </li>
                    </ul>
                    @endif

                    @if ($autoridad->logro_4)
                        <ul class="about-two__points list-unstyled">
                        <li>
                            <div class="about-two__points-title-box">
                                <div class="icon">
                                    <span class="fa fa-arrow-right"></span>
                                </div>
                                <div class="title">
                                    <h3>{{ $autoridad->logro_4 }}</h3>
                                </div>
                            </div>
                        </li>
                    </ul>
                    @endif
                    
                    <hr>
                    <div class="about-three__video-content">
                        <h3>{{ $autoridad->nombres_completos }}</h3>
                        <p>{{ $autoridad->rol }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>