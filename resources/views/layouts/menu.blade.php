<li class="nav-item">
    <a href="{{ route('testteos.index') }}"
       class="nav-link {{ Request::is('testteos*') ? 'active' : '' }}">
        <p>Testteos</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('operadors.index') }}"
       class="nav-link {{ Request::is('operadors*') ? 'active' : '' }}">
        <p>Operadors</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('pddetalles.index') }}"
       class="nav-link {{ Request::is('pddetalles*') ? 'active' : '' }}">
        <p>Pddetalles</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('pedidos.index') }}"
       class="nav-link {{ Request::is('pedidos*') ? 'active' : '' }}">
        <p>Pedidos</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('productoTipos.index') }}"
       class="nav-link {{ Request::is('productoTipos*') ? 'active' : '' }}">
        <p>Producto Tipos</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('productos.index') }}"
       class="nav-link {{ Request::is('productos*') ? 'active' : '' }}">
        <p>Productos</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('tipoDocs.index') }}"
       class="nav-link {{ Request::is('tipoDocs*') ? 'active' : '' }}">
        <p>Tipo Docs</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('userclis.index') }}"
       class="nav-link {{ Request::is('userclis*') ? 'active' : '' }}">
        <p>Userclis</p>
    </a>
</li>


