@extends('layouts.cliente')

@section('content')

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url(assets/images/turismo/volcan.jpg)">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>Detalle Caverna de la Anaconda</h2>
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
                            <img src="assets/images/turismo/cavernas.jpg" alt="">

                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="team-details__right">
                        <div class="text-justify">
                            <h3 class="team-details__top-name">Caverna de la Anaconda.</h3>

                            <p class="text-justify">Este sitio natural es un fenómeno espeleológico que se constituye como una muestra palpable de la constante actividad del planeta, las misma que consta de una caverna de 1km aproximadamente, en la que podemos observar formaciones de estalagmitas y estalactitas, las mismas que dan origen a la formación de imágenes rocosas singulares, este lugar es el hábitat de numerosas especies de peces, arañas y aves..</p>

                            <div class="team-details__contact">
                                <p><span>Sitios de interés:</span> pesca deportiva, caminatas nocturnas, Refrescante baño en las cristalinas aguas de la cascada Shuirpip (golondrina).  </p>
                                <p><span>Servicios:</span> hospedaje, alimentación, camping, servicio de guíanza, senderismo, artesanías, gastronomía shuar, danza shuar y shamanismo. </p>
                                <p><span>Ubicación:</span> Se encuentra situada a 18 km de la parroquia chiguaza en los límites de las comunidades Chayuk y Tsuntsuim. </p>
                                <p><span>Propietario:</span> Florentino Ankuash. </p>
                                <p><span>Correo:</span> friendship_florent@hotmail.com </p>
                                <p><span>Teléfono:</span> 0988557722 </p>


                            </div>

                            </div>
                    </div>
                </div>
            </div>
        </div>


</section>
<!--Team Details End-->
@endsection
