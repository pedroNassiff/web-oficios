<div class="sidebar shadow col-2">
    <div class="section-top">
        <div class="logo">
            <img src="{{ url('assets/images/logo-misia.svg') }}" class="img-fluid">
        </div>

        <div class="user">
            
            <div class="name">
                {{ Auth::user()->name }}
                    <a href=" {{ url('/logout') }}" data-toggle="tooltip" data-placement="top" title="Salir">
                        <i class="fas fa-sign-out-alt"></i>
                    </a>
            </div>
            <div class="email">{{ Auth::user()->email }}</div>

        </div>
    </div>

    <div class="main">
        <ul>
            <li>
                <a href="{{ url('/administracion') }}">Administración</a>
            </li>
            <li>
                <a href="{{ url('/admin/usuarios') }}"><i class="fas fa-box"></i>Usuarios</a>
            </li>
            <li>
                <a href="{{ url('/oficios') }}"><i class="fas fa-box"></i>Oficios</a>
            </li>
            <li>
                <a href="{{ url('/localidades') }}"><i class="fas fa-box"></i>Localidades</a>
            </li>
        </ul>
    </div>
</div>
