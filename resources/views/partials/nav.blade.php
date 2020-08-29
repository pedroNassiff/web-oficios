<section class="inner-header">
<nav class="navbar navbar-light navbar-expand-lg py-3 ">
    <div class="container">
        <a class="navbar-brand" href="">
            <img src="/img/logo.png" class="rounded" alt="Logo oficios">
        </a>
        <button class="navbar-toggler" type="button" 
        data-toggle="collapse" 
        data-target="#navbarSupportedContent" 
        aria-controls="navbarSupportedContent" 
        aria-expanded="false" 
        aria-label="{{ __('Toggle navigation')}}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link {{ setActive('home') }}" href="/">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ setActive('about') }}" href="/about">Acerca de</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ setActive('contact') }}" href="/contact">Contacto</a>
                </li>

                <li class="nav-item">
                    <li class="nav-item dropdown">
                        <a class="nav-link uppercase  outline" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            @auth
                            <a class="dropdown-item " href="">Hola {{ auth()->user()->name }} </a>
                            @if(auth()->user()->rol_id == 1)
                            <a class="dropdown-item" href="/admin/alta">Agregar usuario</a>
                            <a class="dropdown-item" href="/admin/usuarios">Lista de usuarios</a>
                            @endif
                            @if(auth()->user()->rol_id != 1)
                            <a class="dropdown-item " href="/perfil">Mi Perfil</a>
                            @endif
                            <a class="dropdown-item "  href="#"  onclick="
                                event.preventDefault();
                                document.getElementById('form-post').submit();">Salir</a>
                            @endauth

                            @guest
                                <a class="dropdown-item" href="/login">Ingresar</a>
                                <a class="dropdown-item" href="/register">Registrarse</a>
                            @endguest
                        </div>
                    </li>
                </li>

                
            </ul>
        </div>
    </div>
</nav>
		{{-- Formulario oculto que se ejecuta al hacer click en "Salir" 
		* Redirige a la ruta /logout con el método POST, ahí el controlador
		  del logout borra los datos de sesión 
		* Rediirige a la ruta /home con la sesión cerrada
	--}}
	<form id="form-post" action="/logout" method="POST" style="display: none;">
		@csrf
	</form>
</section>