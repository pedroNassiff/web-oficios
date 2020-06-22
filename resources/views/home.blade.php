<!DOCTYPE html>
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

			@foreach ($localidades as $localidad)
				<option value="{{ $localidad->id }}">{{ $localidad->nombre }}</option>
			@endforeach
		</select>
		<button type="submit">Buscar</button>
	</form>

	<h2>Profesionales</h2>
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
</html>