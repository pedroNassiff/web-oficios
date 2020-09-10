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
                    <a class="nav-link {{ setActive('home') }}" href="/">INICIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ setActive('about') }}" href="/about">ACERCA DE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ setActive('contact') }}" href="/contact">CONTACTO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ setActive('contact') }}" href="/ayuda">AYUDA</a>
                </li>

                

                <li class="nav-item">
                    <li class="nav-item dropdown">
                        <a class="btn hvr-sweep-to-right outline" style="border: 1px solid  #e48f27!important; color:white;"   data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" id="btn-logreg">Ingresar | Registrarse</i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            @auth
                            <a class="dropdown-item " href="">Hola {{ auth()->user()->name }} </a>
                            @if(auth()->user()->rol_id == 2)
                            <a class="dropdown-item" href="/admin/inicio">Dashboard</a>
                            @endif
                            @if(auth()->user()->rol_id != 2)
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