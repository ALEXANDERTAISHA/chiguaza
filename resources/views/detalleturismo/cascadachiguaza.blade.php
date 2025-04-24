@extends('layouts.cliente')

@section('content')

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url(assets/images/turismo/volcan.jpg)">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>Detalle Cascada de Chiguaza-Purisima</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{route('turismo')}}">Retornar</a></li>
                <li><span>/</span></li>
                <li>2023-2027</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->
<!--Team Details Start-->
 <section class="team-details">
    <div class="container">
        <div class="team-details__top">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="team-details__left">
                        <div class="team-details__img">
                            <img src="assets/images/turismo/cascadaa.jpg" alt="">

                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="team-details__right">
                        <div class="text-justify">
                            <h3 class="team-details__top-name">Cascada de Chiguaza</h3>

                            <p class="text-justify">Lugares mágicos, contacto con la naturaleza🌳
                                Esta cascada esta ubicado a pocos metros de la comunidad Purísima en la parroquia Chiguaza.</p>
                            <div class="team-details__contact">
                                <p><span>Sitios de interés:</span> Los lugares que puede visitar el turista son: las cascadas y una naturaleza acogedora.</p>
                                <p><span>Ubicación:</span> Se localiza en la parroquia Chiguaza en la comunidad de San Pedro y Purisima.</p>
                                <p><span>Accesibilidad:</span> Se camina por el sendero unos 10 min </p>

                            </div>

                            </div>
                    </div>
                </div>
            </div>
        </div>


</section>
<!--Team Details End-->


@endsection
