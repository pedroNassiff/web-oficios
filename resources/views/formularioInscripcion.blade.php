<h2>Dejanos tu datos</h2>

@if(Session::has('mensaje'))
	<p>{{ Session::get('mensaje') }}</p>
@endif

<form action="/inscripcion/enviar" method="POST" enctype="multipart/form-data">
	<label>Nombres</label> <br>
	<input type="text" name="nombre" required> <br>
	<label>Apellido</label> <br>
	<input type="text" name="apellido" required> <br>
	<label>Dni</label> <br>
	<input type="text" name="dni" required> <br>
	<label>Dirección</label> <br>
	<input type="text" name="direccion" required> <br>
	<label>Localidad</label> <br>
	<input type="text" name="localidad" required> <br>
	<label>Rubro</label> <br>
	<input type="text" name="rubro" required> <br>
	<label>Email</label> <br>
	<input type="text" name="email" required> <br>
	<label>Teléfono</label> <br>
	<input type="text" name="telefono" required> <br>
	<input type="submit" name="Enviar">
	@csrf
</form>