<div class="btn-group action-menu">
    <button class="btn btn-sm button-secondary-premium dropdown-toggle" type="button" id="folderDropdown{{ $carpeta->id }}" data-bs-toggle="dropdown" aria-expanded="false">
        {{ $carpeta->nombre }}
    </button>
    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="folderDropdown{{ $carpeta->id }}">
        <li><button class="dropdown-item" type="button" onclick="abrirModal2('{{ $carpeta->id }}','{{ addslashes($carpeta->nombre) }}')">Añadir item</button></li>
        <li><button class="dropdown-item" type="button" onclick="abrirModal('{{ $carpeta->id }}','{{ addslashes($carpeta->nombre) }}')">Subir archivo</button></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item text-danger" href="{{ route('carpetas.show',$carpeta) }}">Eliminar carpeta</a></li>
    </ul>
</div>

