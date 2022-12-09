<header>
    <h1>Reservas</h1>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}" class="{{ request()-> routeIs('home') ? 'active': ''}}">Inicio</a>             
            </li>
            <li><a href="{{ route('eventos.index') }}" class="{{ request()-> routeIs('eventos.*') ? 'active': '' }}">Eventos</a> 
            </li>
            <li><a href="{{ route('clientes.index') }}" class="{{ request()-> routeIs('clientes.*') ? 'active': '' }}">Clientes</a> 
            </li>
        </ul>
    </nav>
</header>