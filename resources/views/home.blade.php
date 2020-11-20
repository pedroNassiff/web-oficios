@extends('layout')
@section('title', 'Inicio')

@section('content')
@if (session()->has('message'))
	<div class="alert alert-{{ session('typealert') }}">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		{!! session('message') !!}
	</div>
@endif

 <!-- Page Header -->
<section id="hero-container">
	<div id="hero-background"></div>
	<div id="hero-content" class="container h-100">
		<div class="row no-gutters h-100 d-flex">
			<div id="hero-text"class="col-md-6 text-light align-self-center">
				<h1 class="display-1  mb-4" id="titulo-header">RED DE OFICIOS</h1>
				<p class="lead mb-5 sub-principal" id="subtitulo1">¿Te gustaría Ofrecer o Contratar un oficio?</p>
				<a href="#oferta" id="boton1" class="btn hvr-sweep-to-right" style="border: 1px solid  #e48f27!important;">Ofrecer</a>
				<a href="#demanda" id="boton2" class="btn  hvr-sweep-to-right" style="border: 1px solid  #e48f27!important;">Contratar</a>
			</div>
			<div class="col-md-6">					
							 <!--Slider -->
				<div class="swiper-container">
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
	</div>
</section>

<section class="py-3 oficios-section" id="filter">
	<div class="filters-container d-flex justify-content-center flex-column align-items-center">
		<div class="row text-center">
			<h3 class="filter-title">¿QUÉ OFICIOS ESTÁS BUSCANDO?</h3>
		</div>
		<div class="row d-flex justify-content-center w-75 mb-4">
			<div class="col-md-4 d-flex justify-content-center">
				<input type="text" placeholder="Nombre y Apellido" class="form-control">
			</div>
			<div class="col-md-4 col-sm-10 col-xs-11 d-flex justify-content-center">
				<select class="form-control">
					<option value="value1">Option 1</option>
					<option value="value2">Option 2</option>
				</select>
			</div>
			<div class="col-md-4 col-sm-10 col-xs-11 d-flex justify-content-center">
				<select class="form-control">
					<option value="value1">Option 1</option>
					<option value="value2">Option 2</option>
				</select>					
			</div>
		</div>		
		<div class="row d-flex justify-content-center w-75 mb-4">
			<div class="col-md-4 col-sm-10 col-xs-11 d-flex justify-content-center">
				<select class="form-control">
					<option value="value1">Option 1</option>
					<option value="value2">Option 2</option>
				</select>
			</div>
			<div class="col-md-4 col-sm-10 col-xs-11 d-flex justify-content-center">
				<button class="btn hw-btn-orange hvr-sweep-to-right w-100">Buscar</button>
			</div>
		</div>	
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-6 btn-neo-container d-flex flex-column justify-content-center text-center">
				<h3 class="neo-title">
					¿NO ENCONTRASTE EL OFICIO QUE BUSCABAS?
				</h3>
				<a href="/OficioNuevo" class="btn hw-btn-blue neo-btn hvr-sweep-to-right w-50">Ingresá Aquí</a>
			</div>
			<div class="col-md-6 map-container">
				<div id="mapa"></div>
			</div>
		</div>
	</div>
</section>
			
<!-- Sección inscribite -->

<section class="shop-banner mb-5">
	<div class="container" id="oferta">
		<div class="sale-percent">Sumate a nuestra 
			<br> Red de prestadores
		</div>
		<p class="text-inscrip my-3">
			La promoción de tus servicios es fundamental para la gestión de futuros trabajos.
			Contanos dónde y cómo trabajás para que podamos acompañarte en tu vida laboral 
			 con espacios de <strong> promoción y comercialización. </strong> <br>
			Accedé a más contrataciones de acuerdo a tu especialidad y tu ubicación.
		</p>
		@if (Auth::guest())
			<a href="{{ route('register') }}" class="btn hw-btn hvr-sweep-to-right">Quiero ser parte</a>
		@else 
			<a href="/inscripcion" class="btn hw-btn hvr-sweep-to-right">Quiero ser parte</a>
        @endif
	</div>
</section>
			
<!-- ¿Como funciona la web? -->
<section class="how-work">
	<div class="container">
        <div class="row display-flex justify-content-center hw-title-container">
            <h2 class="hw-title">¿Cómo funciona la web?</h2>
        </div>
        <div class="row display-flex justify-content-center mt-4">
            <div class="col-9 col-md-3"> 
                <div class="card-question">
                    <div class="question-title">
                        <span class="">¿Necesito registrarme para ofrecer y/o contratar un servicio?</span>
                    </div>
                    <p class="question-body font-weight-light">You are employed by meploy and we pay your salary. Your paycheck will be send to your e-Boks.</p>
                </div>
            </div>
            <div class="col-9 col-md-3">
                <div class="card-question">
                    <div class="question-title">
                        <span class="">¿Cómo es el procedimiento para contratar un servicio?</span>
                    </div>
                    <p class="question-body font-weight-light">Yes! It's even free to upgrade your profile to Pro, which gives you access to our Community Bonus Program</p>
                </div>
            </div>
            <div class="col-9 col-md-3">
                <div class="card-question">
                    <div class="question-title">
                        <span class="">¿Cómo me incorporo a la red de oficios para ofrecer un servicio?</span>
                    </div>
                    <p class="question-body font-weight-light">The best way to increase your chances of finding work via meploy is to have an inviting and updated profile.</p>
                </div>
            </div>
            <div class="col-9 col-md-3">
                <div class="card-question">
                    <div class="question-title">
                        <span class="">¿Desde dónde puedo contratar/ofrecer un oficio?</span>
                    </div>
                    <p class="question-body font-weight-light">You have to be at least 18 years old to create an account on meploy</p>
                </div>
            </div>
        </div>
	</div>
	<div class="row d-flex justify-content-center mb-5 mt-5">
		<a href="/ayuda" class="mresp btn hw-btn-blue">Necesito Ayuda</a>
	</div>
</section>

	{{-- Formulario oculto que se ejecuta al hacer click en "Salir" 
					* Redirige a la ruta /logout con el método POST, ahí el controlador
					  del logout borra los datos de sesión 
					* Rediirige a la ruta /home con la sesión cerrada
				--}}
<form id="form-post" action="/logout" method="POST" style="display: none;">
	@csrf
</form>


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



<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDuX4NPHQOStt_DHvGVDbkbAWfL8XiG01s&callback"
  type="text/javascript"></script>
<script type="text/javascript">
	
	//const profesionales = @json($profesionales);

	var mapa = new google.maps.Map(document.getElementById('mapa'),{
		center: {lat: -27.450977, lng: -58.986980}, 
		scrollwheel: false,
	    zoom: 15,
	    zoomControl: true,
	    rotateControl : false,
	    mapTypeControl: true,
	    streetViewControl: false,
	})

	const geocoder = new google.maps.Geocoder();

	

	$(document).ready(function() {
  $("#myCarousel").on("slide.bs.carousel", function(e) {
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 3;
    var totalItems = $(".carousel-item").length;

    if (idx >= totalItems - (itemsPerSlide - 1)) {
      var it = itemsPerSlide - (totalItems - idx);
      for (var i = 0; i < it; i++) {
        // append slides to end
        if (e.direction == "left") {
          $(".carousel-item")
            .eq(i)
            .appendTo(".carousel-inner");
        } else {
          $(".carousel-item")
            .eq(0)
            .appendTo($(this).find(".carousel-inner"));
        }
      }
    }
  });
});

</script>
@endsection
