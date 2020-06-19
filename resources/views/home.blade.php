<!DOCTYPE html>
<html>
<head>
	<title>Web Oficios</title>
</head>
<body>
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
</body>
</html>