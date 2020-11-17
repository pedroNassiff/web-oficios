@extends('layout')

@section('title', 'Registrarse')

@section('content')
<section class="py-4">

    <div class="container">
        <div class="row">
            <div class="col">
                 <div class="card-register">
                    <div class="swiper-container register-swiper">
                            <div class="swiper-wrapper">
                                    
                                <div class="swiper-slide rounded shadow" style="background-image: url(/img/electricidad.png);">
                                    <h2 class="titulo-card" >Electricidad</h2>
                                    <h3 class="nombre-card">Roberto Díaz</h3>
                                </div>
                                <div class="swiper-slide rounded shadow" style="background-image: url(/img/cuidadora.png);">
                                    <h2 class="titulo-card" >Cuidado de personas</h2>
                                    <h3 class="nombre-card">Belén Perez</h3>
                                </div>
                                <div class="swiper-slide rounded shadow" style="background-image: url(/img/albanileria.png);">
                                    <h2 class="titulo-card" >Albañilería</h2>
                                    <h3 class="nombre-card">Pablo Ruíz</h3>
                                </div>
                                <div class="swiper-slide rounded shadow" style="background-image: url(/img/electronica.png);">
                                    <h2 class="titulo-card" >Electrónica</h2>
                                    <h3 class="nombre-card">Gonzalo Baéz</h3>
                                </div>
                                <div class="swiper-slide rounded shadow" style="background-image: url(/img/tapiceria.png);">
                                    <h2 class="titulo-card" >Tapicería</h2>
                                    <div class="text-center">
                                        <h3 class="nombre-card">Diana Ortiz</h3>
                                    </div>
                                </div>
                            <div class="swiper-slide rounded shadow" style="background-image: url(/img/mecanica.png);">
                                <h2 class="titulo-card" >Mecánica de autos</h2>
                                <h3 class="nombre-card">Franco Lopez</h3>
                            </div>
                            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>      
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card-register espacio">
                    <h2 class="text-center">Registrarse</h2>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row">
                                <div class="col">

                                
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                
                            </div>

                            <div class="col">

                                
                                    <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus placeholder="Apellido">

                                    @error('lastname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">

                                
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col">

                                
                                    <input id="celular" type="tel" class="form-control @error('celular') is-invalid @enderror" name="celular" value="{{ old('celular') }}" required autocomplete="celular" placeholder="Celular">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Contraseña">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder=" Confirmar contraseña"> 
                                </div>
                            </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn hw-btn btn-default hvr-sweep-to-right" id="boton-registrar">
                                        {{ __('Registrarte') }}
                                    </button>
                                </div>
                                <div class="login-links text-center">
                                    <span>¿Ya tenés una cuenta?</span>
                                    <a class="links-formulario" href="{{ route('login') }}">Iniciar sesión</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> 
            </div>
        </div>

</section>

<script>
		window.onload = function() {
			setTimeout(function() {
				document.getElementById('hero-background').style.width = '100%';
			})
		}
	</script>

 <!-- Inicio slider -->
 <script>
    var swiper = new Swiper ('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
	  
      pagination: {
        el: '.swiper-pagination',
      },
	  autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
    });
  </script>
    
@endsection
