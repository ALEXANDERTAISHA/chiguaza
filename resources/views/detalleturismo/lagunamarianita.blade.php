@extends('layouts.cliente')

@section('content')

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url(assets/images/turismo/volcan.jpg)">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>Detalle Laguna de Santa Marianita</h2>
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
                            <img src="assets/images/turismo/laguna.jpg" alt="">

                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="team-details__right">
                        <div class="text-justify">
                            <h3 class="team-details__top-name">Laguna de Santa Marianita</h3>

                            <p class="text-justify">En su entorno encontramos gran variedad de flora y fauna propia del lugar. Para los amantes de la pesca deportiva, sus 150.000 metros cuadrados de extensión permiten escoger el sitio ideal para disfrutar del paisaje, cuenta con un sendero natural y en su trayecto se puede apreciar la diversidad de la especie de flora y fauna del lugar.</p>
                            <p class="text-justify">En este sistema lacustre  existe una gran cantidad de peces, bagres pequeños, sus aguas son mansas, durante el trayecto se puede observar las cavernas y la cascada de Chayuk, además podrá disfrutar de un relajante baño en las piscinas naturales del rio tsemantsmain..</p>
                            <div class="team-details__contact">
                                <p><span>Sitios de interés:</span> Los lugares que puede visitar el turista son: los laberintos, la huecada, cueva de los tayos, cueva de los murciélagos, zona de fósiles y la mina de gas natural donde además podrá el visitante observar flora y fauna, y la diversidad de aves que existe en este lugar con un guía especializado.  </p>
                                <p><span>Servicios:</span> Ofrece laberintos del Chiguaza son: hospedaje, alimentación, área de canoping, pesca deportiva, piscina, hidromasaje. </p>
                                <p><span>Ubicación:</span> Se encuentra situada a 18 km de la parroquia chiguaza en los límites de las comunidades Chayuk y Tsuntsuim. </p>
                                <p><span>Accesibilidad:</span> hasta la comunidad Chayuk, se accede en vehículo, y posteriormente se camina por un sendero  natural hasta llegar a la laguna.. </p>



                            </div>

                            </div>
                    </div>
                </div>
            </div>
        </div>


</section>
<!--Team Details End-->
@endsection
