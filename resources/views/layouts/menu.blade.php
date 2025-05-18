<div class="main-menu__bottom-inner">
    <div class="main-menu__main-menu-box">
        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
        <ul class="main-menu__list">
            <li>
                <a href="{{ url('/') }}" class="{{ Route::is('welcome')?'current':'' }}">Inicio</a>
            </li>
            <li class="dropdown">
                
                <a href="#!">Parroquia</a>
                <ul class="sub-menu">
                    <li><a href="{{ route('autoridades') }}"class="{{ Route::is('autoridades')?'current':'' }}">Autoridades</a></li>
                    <li><a href="{{ route('funcionarios') }}"class="{{ Route::is('funcionarios')?'current':'' }}">Funcionarios</a></li>
                    <li ><a href="{{ route('resenahistorica') }}" class="{{ Route::is('resenahistorica')?'current':'' }}">Reseña Histórica</a></li>
                    <li><a href="{{ route('misionvision') }}"class="{{ Route::is('misionvision')?'current':'' }}">Misión y Visión</a></li>
                    
                    
                    <li><a href="{{ route('organigrama') }}"class="{{ Route::is('organigrama')?'current':'' }}">Organigrama</a></li>
                    <li><a href="{{ route('turismo') }}"class="{{ Route::is('turismo')?'current':'' }}">Turismo</a></li>
                   
                </ul>
            </li>
            
            <li class="dropdown ">
                <a href="#!">Servicios</a>
                <ul class="sub-menu">
                    <li ><a href="{{ route('tramites') }}" class="{{ Route::is('tramites')?'current':'' }}">Tramites</a></li>
                    <li><a href="{{ route('quejasSugerencias') }}" class="{{ Route::is('quejasSugerencias*')?'current':'' }}">Quejas y sujerencias</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#!" class="{{ Route::is('transparencia*')?'current':'' }}">Transparencia</a>
                <ul class="sub-menu">
                    @foreach (App\Models\Carpeta::where('nombre','TRANPARENCIA')->first()->carpetas as $tra)
                        <li><a href="{{ route('transparencia',$tra->id) }}">{{ $tra->nombre }}</a></li>
                    @endforeach
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="{{ Route::is('rendicionCuentas*')?'current':'' }}">Rendición de cuenta</a>
                <ul class="sub-menu">
                    @foreach (App\Models\Carpeta::where('nombre','RENDICIÓN DE CUENTAS')->first()->carpetas as $rc)
                        <li><a href="{{ route('rendicionCuentas',$rc->id) }}">{{ $rc->nombre }}</a></li>
                    @endforeach
                </ul>
            </li>
            <li>
                <a href="{{ route('noticias') }}" class="{{ Route::is('noticias*')?'current':'' }}">Noticias</a>
            </li>
            <li>
                <a href="{{ route('contactos') }}" class="{{ Route::is('contactos*')?'current':'' }}">Contacto</a>
            </li>
        </ul>
    </div>
</div>