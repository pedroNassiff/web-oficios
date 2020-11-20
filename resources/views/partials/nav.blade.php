<section class="inner-header">
<nav class="navbar navbar-dark navbar-expand-lg py-3 ">
    <div class="container">
        <a class="navbar-brand" href="/">
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
                @guest
                <li class="nav-item">
                    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                    aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content modal-content-color">
                                <div class="modal-header text-center">
                                    <h4 class="modal-title w-100 font-weight-bold">Iniciar sesión</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="modal-body mx-3">
                                        <div class="md-form mb-5">
                                            <div class="d-flex ">
                                                <i class="fa fa-envelope prefix"></i>
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror validate" name="email" value="{{ old('email') }}"  placeholder="Email" required>
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            
                                        </div>
                                    
                                        <div class="md-form mb-4">
                                            <div class="d-flex ">
                                                <i class="fa fa-lock prefix"></i>
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror validate" name="password" placeholder="Contraseña" required>
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                
                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Recordar') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer d-flex justify-content-center flex-column">
                                        <button type="submit" class="btn hw-btn hvr-sweep-to-right">Entrar</button>
                                        @if (Route::has('password.request'))
                                            <a class="btn-link links-formulario" href="{{ route('password.request') }}">
                                                {{ __('¿Olvidaste tu contraseña?') }}
                                            </a>
                                        @endif
                                    </div>
                                    <div class="login-links text-center">
                                        <span>¿Todavía no tenés una cuenta?</span>
                                        <a class="links-formulario" href="{{ route('register') }}">Registrate</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <a href="#" class="btn hvr-sweep-to-right outline" style="border: 1px solid  #e48f27; color:white;" data-toggle="modal" data-target="#modalLoginForm" role="button" aria-haspopup="true" aria-expanded="false" id="btn-logreg">Ingresar | Registrarse</a>
                    </div>
                </li>
                @endguest
                @auth
                <li class="nav-item dropdown">
                    <a class="btn hvr-sweep-to-right outline" style="border: 1px solid  #e48f27; color:white;"   data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">¡HOLA {{ auth()->user()->name }}!  <i class="fa fa-angle-down"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                @if(auth()->user()->rol_id == 2)
                                <a class="dropdown-item" href="/admin/inicio">Dashboard</a>
                                <a class="dropdown-item " href="/perfil/editar">Notificaciones <span class="badge">1</span></a>

                                @endif
                                @if(auth()->user()->rol_id != 2)
                                <a class="dropdown-item " href="/perfil/editar">Notificaciones <span class="badge">1</span></a>
                                <a class="dropdown-item " href="/perfil/editar">Mi Perfil</a>
                                @endif
                                <a class="dropdown-item "  href="#"  onclick="event.preventDefault(); document.getElementById('form-post').submit();">Salir</a>
                        </div>
                </li>
                @endauth
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