<nav class="navbar navbar-light navbar-expand-lg py-3 shadow-sm ">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home')}}">
            {{ config('app.name')}}
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
                    <a class="nav-link" href="#">Entrar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Registrarse</a>
                </li>
            </ul>
        </div>
    </div>
</nav>