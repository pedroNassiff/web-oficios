<h2>Edita tu perfil</h2>

<form action="/perfil/actualizar/{{ auth()->user()->id }}" method="POST">
	<label>Nombres</label> <br>
	<input type="text" name="nombre" value="{{ $profesional->nombre }}" required=""> <br>
	<label>Apellido</label> <br>
	<input type="text" name="apellido" value="{{ $profesional->apellido }}" required=""> <br>
	<label>Teléfono</label> <br>
	<input type="text" name="telefono" value="{{ $profesional->telefono }}" required=""> <br>
	<label>Email</label> <br>
	<input type="text" name="email" value="{{ auth()->user()->email }}"required=""> <br>
	<label>Dirección</label> <br>
	<input type="text" name="direccion" value="{{ $profesional->direccion }}" required=""> <br>
	<label>Localidad</label> <br>
	<select name="localidad_id">
		@foreach ($localidades as $localidad)
			<option value="{{ $localidad->id }}">{{ $localidad->nombre }}</option>
		@endforeach
	</select> <br>
	<label>Rubro</label> <br>
	<select name="rubro_id">
		@foreach ($rubros as $rubro)
			<option value="{{ $rubro->id }}">{{ $rubro->nombre }}</option>
		@endforeach
	</select> <br>
	<label>Web</label> <br>
	<input type="text" name="web" value="{{ $profesional->web }}" required=""> <br>
	<input type="submit" value="Guardar">
	@csrf
</form>