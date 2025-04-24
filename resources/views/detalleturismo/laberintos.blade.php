@extends('layouts.cliente')

@section('content')

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url(assets/images/turismo/volcan.jpg)">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>Detalle Laberintos de Chiguaza</h2>
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
                            <img src="assets/images/turismo/laberintos.jpg" alt="">

                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="team-details__right">
                        <div class="text-justify">
                            <h3 class="team-details__top-name">Laberintos de Chiguaza</h3>

                            <p class="text-justify">Es un fenómeno geológico y espeleológico ubicado en una pequeña meseta, se puede apreciar y comprobar la evolución de nuestro planeta Tierra, que con el paso de muchos millones de años de cambios gigantes de su transformación particularmente en este lugar ha quedado la muestra de ello dejando huellas del pasado, existen formaciones rocosas que forman caminos de piedra de hasta 5 metros de altura y en sus paredes de roca se puede apreciar claramente la presencia de fósiles marinos como conchas, caracoles, dólares de mar o galletas de arena, pepinos de mar, etc. Demostrando así la existencia del mar en este lugar hace millones de años.</p>
                            <div class="team-details__contact">
                                <p><span>Sitios de interés:</span> Los lugares que puede visitar el turista son: los laberintos, la huecada, cueva de los tayos, cueva de los murciélagos, zona de fósiles y la mina de gas natural donde además podrá el visitante observar flora y fauna, y la diversidad de aves que existe en este lugar con un guía especializado.  </p>
                                <p><span>Servicios:</span> Ofrece laberintos del Chiguaza son: hospedaje, alimentación, área de canoping, pesca deportiva, piscina, hidromasaje. </p>
                                <p><span>Ubicación:</span> Se localiza en la vía Macas - Puyo, aproximadamente  56 km de la ciudad de Macas y a 64 kilómetros de la ciudad del Puyo, en la confluencia de los ríos Pastaza y Chiguaza. </p>
                                <p><span>Accesibilidad:</span> Se en vehículo. </p>
                                <p><span>Propietario:</span> Ing. Rómulo Galarza. </p>
                                <p><span>Correo:</span> laberintoschiguaza@yahoo.es </p>
                                <p><span>Propietario:</span> laberintoschiguaza@yahoo.es </p>
                                <p><span>Página web:</span> http://www.chiguaza.com. </p>
                                <p><span>Teléfono:</span> 0995006282 </p>


                            </div>

                            </div>
                    </div>
                </div>
            </div>
        </div>


</section>
<!--Team Details End-->
@endsection
