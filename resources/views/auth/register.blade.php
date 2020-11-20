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
                            <div class="swiper-slide rounded shadow card-oficio-new d-flex flex-column justify-content-center align-items-center" style="background-image: url(/img/electricidad2.png);">
                                <div class="borde-circular mt-5">
                                    <img src="foco.svg" alt="" class="card-logo-oficio" width="55px" height="49px">
                                </div>
                                <div class="justify-content-center d-flex flex-column text-center">
                                    <span class="titulo-card">Electricidad</span>
                                    <span class="card-cantidad-prof"><strong>18</strong> prestadores</span>
                                </div>
                            </div>
                            <div class="swiper-slide rounded shadow card-oficio-new d-flex flex-column justify-content-center align-items-center" style="background-image: url(/img/plomeria2.png);">
                                <div class="borde-circular mt-5">
                                    <i class="fas fa-wrench card-logo-oficio"></i>
                                </div>
                                <div class="justify-content-center d-flex flex-column text-center">
                                    <span class="titulo-card">Plomería</span>
                                    <span class="card-cantidad-prof"><strong>15</strong> prestadores</span>
                                </div>
                            </div>
                            <div class="swiper-slide rounded shadow card-oficio-new d-flex flex-column justify-content-center align-items-center" style="background-image: url(/img/pinturas2.png);">
                                <div class="borde-circular mt-5">
                                    <i class="fas fa-paint-roller card-logo-oficio"></i>
                                </div>
                                <div class="justify-content-center d-flex flex-column text-center">
                                    <span class="titulo-card">Pinturas</span>
                                    <span class="card-cantidad-prof"><strong>9</strong> prestadores</span>
                                </div>
                            </div>
                            <div class="swiper-slide rounded shadow card-oficio-new d-flex flex-column justify-content-center align-items-center" style="background-image: url(/img/jardineria2.png);">
                                <div class="borde-circular mt-5">
                                    <i class="fab fa-pagelines card-logo-oficio ml-3"></i>
                                </div>
                                <div class="justify-content-center d-flex flex-column text-center">
                                    <span class="titulo-card">Jardinería</span>
                                    <span class="card-cantidad-prof"><strong>9</strong> prestadores</span>
                                </div>
                            </div>
                            <div class="swiper-slide rounded shadow card-oficio-new d-flex flex-column justify-content-center align-items-center" style="background-image: url(/img/exterminador.png);">
                                <div class="borde-circular mt-5">
                                    <i class="fas fa-spray-can card-logo-oficio"></i>
                                </div>
                                <div class="justify-content-center d-flex flex-column text-center">
                                    <span class="titulo-card">Exterminación de plagas</span>
                                    <span class="card-cantidad-prof"><strong>5</strong> prestadores</span>
                                </div>
                            </div>
                            <div class="swiper-slide rounded shadow card-oficio-new d-flex flex-column justify-content-center align-items-center" style="background-image: url(/img/cuidadora2.png);">
                                <div class="borde-circular mt-5">
                                    <i class="fas fa-heartbeat card-logo-oficio"></i>
                                </div>
                                <div class="justify-content-center d-flex flex-column text-center">
                                    <span class="titulo-card">Cuidado de personas</span>
                                    <span class="card-cantidad-prof"><strong>17</strong> prestadores</span>
                                </div>
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
