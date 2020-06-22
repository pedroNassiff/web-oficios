<section class="pt-5 pb-5 inner-header" style="background-color: #252533;">
<nav class="navbar navbar-light navbar-expand-lg py-3 ">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home')}}">
            <img src="/svg/logo.png" class="rounded"
                    alt="">
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
</section>