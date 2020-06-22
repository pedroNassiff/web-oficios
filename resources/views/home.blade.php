@extends('layout')

@section('title', 'Inicio')

@section('content')
<!-- <!DOCTYPE html>
<html>
<head>
	<title>Web Oficios</title>
</head>
<body>
	{{-- GUEST = invitado
		Pregunta si el usuario es un invitado (no está logueado) y en 
		caso de que se cumpla esa condición se muestra los links
		para logueo y registro
	 --}}
	@guest
		<ul>
			<li><a href="/login">Ingresar</a></li>
			<li><a href="/register">Registrate</a></li>
		</ul>
	@endguest
	{{-- Si el usuario está logueado muestra el link para crear/modificar perfil 
		y para salir
	--}}
	@auth
		<ul>
			<li><a href="#">Crear/Modificar Perfil</a></li>
			<li><a href="#" onclick="
				event.preventDefault();
				document.getElementById('form-post').submit();
				">Salir</a></li>
		</ul>
	@endauth
	<form action="/buscar" method="POST">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<label for="categoria">Selecciona un Rubro</label>
		<select name="rubro_id">
			
			@foreach ($rubros as $rubro)
				<option value="{{ $rubro->id }}">{{ $rubro->nombre }}</option>
			@endforeach
		</select>
		<label for="localidad">Selecciona una localidad</label>
		<select name="localidad_id" placeholder="Localidades">
 -->
<section class="py-4">

	<div class="container text-center">
		<h2 class="my-4"> ¿Qué servicio estás buscando?</h2>
        <div class="row mb-5">
			<div class="col-md-4">
				<form action="/buscar" method="POST">
					
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<label for="categoria">Selecciona un Rubro</label>
					<select class="browser-default custom-select" name="rubro_id">
			
						@foreach ($rubros as $rubro)
							<option value="{{ $rubro->id }}">{{ $rubro->nombre }}</option>
						@endforeach
					</select>
			</div>
			<div class="col-md-4">
						<label for="localidad">Selecciona una localidad</label>
						<select class="browser-default custom-select" name="localidad_id" placeholder="Localidades">

						@foreach ($localidades as $localidad)
							<option value="{{ $localidad->id }}">{{ $localidad->nombre }}</option>
						@endforeach
						</select>
			</div>
			<div class="col-md-4">			
						<button class="btn btn-default" style="margin-top: 8%;" type="submit">Buscar</button>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6" style="text-align: center;">
				<h2>Servicios</h2>
				<ul style="text-align: left;
				margin-left: 19%;">
					@foreach ($profesionales as $profesional)
					<li>
						<span>{{ $profesional->nombre}}</span> 
						<span>{{ $profesional->apellido}}</span>
						- <span><a href="/profesional/{{ $profesional->id }}">Ver Perfil</a></span>
					</li>
					@endforeach
				</ul>
			</div>
			<div class="col-md-6">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1829375.5611834687!2d-61.557819432941336!3d-26.423504238923677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9440effae3c87247%3A0x4eaf96c0979eec95!2sChaco!5e0!3m2!1ses-419!2sar!4v1592342057768!5m2!1ses-419!2sar" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
		</div>
		<div class="row my-5">
			<div class="col-md-12">
				<img class="" style="width: 50%; border-radius: 1.25rem" src="/svg/brindar.png" alt="">
			</div>
			<br>
			<div class="col-md-12 my-auto">
				<button style="margin-top: 2%;" type="button" class="btn btn-default btn-lg">¡Inscribite acá!</button>
			</div>
		</div>
</div>
</section>
    
@endsection

<!-- 	<h2>Profesionales</h2>
	<ul>
		@foreach ($profesionales as $profesional)
		<li>
			<span>{{ $profesional->nombre}}</span> 
			<span>{{ $profesional->apellido}}</span>
			- <span><a href="/profesional/{{ $profesional->id }}">Ver Perfil</a></span>
		</li>
		@endforeach
	</ul>

	{{-- Formulario oculto que se ejecuta al hacer click en "Salir" 
		* Redirige a la ruta /logout con el método POST, ahí el controlador
		  del logout borra los datos de sesión 
		* Rediirige a la ruta /home con la sesión cerrada
	--}}
	<form id="form-post" action="/logout" method="POST" style="display: none;">
		@csrf
	</form>
</body>
</html> -->
