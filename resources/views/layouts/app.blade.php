<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>{{ config('app.name') }}</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">



    <!-- Bootstrap core CSS -->
  <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="{{ asset('admin/dashboard.css') }}" rel="stylesheet">

    {{-- file --}}
    <link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>


  </head>
  <body>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="{{url('/')}}">{{ config('app.name') }}</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  {{-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> --}}
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">


      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <a class="nav-link px-3" href="{{route('logout')}}" onclick="event.preventDefault();
        this.closest('form').submit();">Salir</a>
    </form>


    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Route::is('dashboard')?'active':'' }}" aria-current="page" href="{{ route('dashboard') }}">
              <span data-feather="home"></span>
              Inicio
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Route::is('empresa*')?'active':'' }}" href="{{ route('empresa.index') }}">
              <span data-feather="shopping-cart"></span>
              Empresa
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Route::is('autoridad*')?'active':'' }}" href="{{ route('autoridad.index') }}">
              <span data-feather="shopping-cart"></span>
              Autoridad
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Route::is('slider*')?'active':'' }}" href="{{ route('slider.index') }}">
              <span data-feather="file"></span>
              Slider
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Route::is('noticias-admin*')?'active':'' }}" href="{{ route('noticias-admin.index') }}">
              <span data-feather="layers"></span>
              Noticias
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Route::is('carpetas*')?'active':'' }}" href="{{ route('carpetas.index') }}">
              <span data-feather="bar-chart-2"></span>
              Carpetas
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Route::is('admin.quejasSugerencias*')?'active':'' }}" href="{{ route('admin.quejasSugerencias') }}">
              <span data-feather="layers"></span>
              Quejas y Sugerencias
            </a>
          </li>





        </ul>


      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

      @include('layouts.alert')

      @yield('content')
    </main>
  </div>
</div>


    <script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/fileinput.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/locales/es.js"></script>



  </body>
</html>
