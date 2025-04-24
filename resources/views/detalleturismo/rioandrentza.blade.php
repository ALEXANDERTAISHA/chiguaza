@extends('layouts.cliente')

@section('content')

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url(assets/images/turismo/volcan.jpg)">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>Detalle Río Andrenza</h2>
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
                            <img src="assets/images/turismo/andrentza.jpg" alt="">

                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="team-details__right">
                        <div class="text-justify">
                            <h3 class="team-details__top-name">Río Andrentza</h3>

                            <p class="text-justify">Ubicado en la provincia de Morona Santiago, cantón Huamboya parroquia Chiguaza en la comunidad San Pedro , se encuentra en medio de un exuberante bosque primario subtropical en este Río de aguas cristalinas , podrá disfrutar de un energizante baño..</p>
                            <div class="team-details__contact">
                                <p><span>Sitios de interés:</span> Los lugares que puede visitar el turista son: El río y exelente vista de la naturaleza y podra acampar con el sonido de las aves del río y la naturaleza.</p>
                                <p><span>Ubicación:</span> Se localiza  en la Parroquia Chiguaza en la comunidad de San Pedro.</p>
                                <p><span>Accesibilidad:</span> Se llega con cualquier medio de transporte. </p>

                            </div>

                            </div>
                    </div>
                </div>
            </div>
        </div>


</section>
<!--Team Details End-->


@endsection
