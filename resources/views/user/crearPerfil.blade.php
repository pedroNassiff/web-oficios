<h2>Crea tu perfil</h2>

<form action="/perfil/guardar" method="POST">
	<label>Nombres</label> <br>
	<input type="text" name="nombre" required=""> <br>
	<label>Apellido</label> <br>
	<input type="text" name="apellido" required=""> <br>
	<label>Dni</label> <br>
	<input type="text" name="dni" required=""> <br>
	<label>Teléfono</label> <br>
	<input type="text" name="telefono" required=""> <br>
	<label>Email</label> <br>
	<input type="text" name="email" value="{{ auth()->user()->email }}"required=""> <br>
	<label>Dirección</label> <br>
	<input type="text" name="direccion" required=""> <br>
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
	<input type="text" name="web" required=""> <br>
	<input type="submit" value="Guardar">
	@csrf
</form>