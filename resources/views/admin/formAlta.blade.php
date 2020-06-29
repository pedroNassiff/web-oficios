<h2>Alta de Usuario</h2>

@if(Session::has('mensaje'))
	<p>{{ Session::get('mensaje') }}</p>
@endif

<form action="/admin/alta" method="POST">
	<label>Nombre</label> <br>
	<input type="text" name="nombre" placeholder="Ingrese el nombre del usuario"> <br>
	<label>Email</label> <br>
	<input type="email" name="email" required placeholder="Ingrese el email del usuario"> <br>
	<label>Contraseña</label> <br>
	<input type="text" name="password" required placeholder="Ingrese la contraseña"> <br>
	<input type="submit" value="Guardar">
	@csrf
</form>