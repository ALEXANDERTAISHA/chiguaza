@extends('layouts.cliente')
@section('content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url({{ asset('assets/images/autoridades1/vocal.png') }})">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h1 class="text-white">{{ $titulo??config('app.name') }}</h1>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{route('welcome')}}">Inicio</a></li>
                    <li><span>/</span></li>
                    <li>2023-2027</li>
                </ul>
            </div>
        </div>
    </section>

    <!--Page Header End-->

  


    @include('estaticas.carpeta',['carpeta'=>$carpeta])
    
@endsection