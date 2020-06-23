<h2>Dejanos tu datos</h2>

<form action="/inscripcion/enviar" method="POST">
	<label>Nombres</label> <br>
	<input type="text" name="nombre"> <br>
	<label>Apellido</label> <br>
	<input type="text" name="apellido"> <br>
	<label>Dni</label> <br>
	<input type="text" name="dni"> <br>
	<label>Dirección</label> <br>
	<input type="text" name="direccion"> <br>
	<label>Localidad</label> <br>
	<input type="text" name="localidad"> <br>
	<label>Rubro</label> <br>
	<input type="text" name="rubro"> <br>
	<label>Email</label> <br>
	<input type="text" name="email"> <br>
	<label>Teléfono</label> <br>
	<input type="text" name="telefono"> <br>
	<label>Foto parte frontal del documento</label> <br>
	<input type="file" name="documento_front"> <br>
	<label>Foto parte trasera del documento</label> <br>
	<input type="file" name="documento_back"> <br>
	<input type="submit" name="Enviar">
	@csrf
</form>