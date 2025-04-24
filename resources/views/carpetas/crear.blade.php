<a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
<strong>{{ $carpeta->nombre }}</strong>
</a>
<ul class="dropdown-menu " aria-labelledby="navbarDarkDropdownMenuLink">
    <li><a class="dropdown-item" href="#!" type="button" onclick="abrirModal2('{{ $carpeta->id }}','{{ $carpeta->nombre }}')">Añadir item</a></li>
    <li><a class="dropdown-item" href="#!" type="button" onclick="abrirModal('{{ $carpeta->id }}','{{ $carpeta->nombre }}')">Subir Archivo</a></li>        
    <li><a class="dropdown-item" href="{{ route('carpetas.show',$carpeta) }}" type="button">Eliminar</a></li>        
</ul>

