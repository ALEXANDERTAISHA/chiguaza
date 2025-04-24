@extends('layouts.cliente')
@section('content')
    <!--Great Place Start-->
    <section class="great-place">
        <div class="great-place__bg" style="background-image: url({{ asset('assets/images/autoridades/presidente.png') }});">
        </div>
        <div class="container">

            

            <div class="row">
                <div class="col-xl-7 col-lg-7">
                    <div class="great-place__left">
                        <h3 class="great-place__title">Consulta de Quejas y Sugerencias</h3>
                        <div class="great-place__content-box">
                            <div class="great-place__img-box">
                                <div class="great-place__img">
                                    <img src="{{ asset('assets/images/mensaje/mensaje.png') }}" alt="">
                                </div>
                            </div>
                            <div class="great-place__text-box">
                                <p class="great-place__text">
                                    "Puede acceder al buzón de quejas y sugerencias ingresadas para obtener información sobre el estado de su retroalimentación."
                                </p>
                                <br>
                                <p class="great-place__text">
                                    "Para validar la información, por favor ingrese su correo electrónico y número de cédula de identidad."
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div class="great-place__right">
                        <div class="great-place__shape-1 zoominout">
                            <img src="{{ asset('assets/images/shapes/great-place-shape-1.png') }}" alt="">
                        </div>
                        <div class="great-place__shape-2 img-bounce">
                            <img src="{{ asset('assets/images/shapes/great-place-shape-2.png') }}" alt="">
                        </div>
                        <div class="great-place__right-inner mt-2">
                            <div class="section-title text-center mb-5">
                                <div class="section-title__icon">
                                    <span class="fa fa-star"></span>
                                </div>
                                <h2 class="section-title__title">Ingrese información</h2>
                                @include('layouts.alert')
                            </div>
                            <form action="{{ route('quejasSugerenciasConsultar') }}" method="get" class="contact-form-box__form">
                                
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="contact-form-box__input-box">
                                            <input type="text" placeholder="Cédula de identidad" name="cedula" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="contact-form-box__input-box">
                                            <input type="text" placeholder="Correo electrónico" name="email" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="contact-form-box__btn-box">
                                            <button type="submit" class="thm-btn contact-form-box__btn">Consultar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Great Place End-->

@endsection