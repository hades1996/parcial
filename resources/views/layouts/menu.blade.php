<li class="nav-item {{ Request::is('marcas*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('marcas.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Marcas</span>
    </a>
</li>
<li class="nav-item {{ Request::is('modelos*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('modelos.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Modelos</span>
    </a>
</li>
<li class="nav-item {{ Request::is('servicios*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('servicios.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Servicios</span>
    </a>
</li>
<li class="nav-item {{ Request::is('matriculas*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('matriculas.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Matriculas</span>
    </a>
</li>

