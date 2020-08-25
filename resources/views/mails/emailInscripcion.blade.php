<!DOCTYPE html>
<html>
<head>
	<title>Mensaje Recibido</title>
</head>
<body>
	<h2>Solicitud de Inscripción</h2>

	<p><strong>Nombre: </strong>{{ $datos['nombre'] }}</p>
	<p><strong>Apellido: </strong>{{ $datos['apellido'] }}</p>
	<p><strong>Dni: </strong>{{ $datos['dni'] }}</p>
	<p><strong>Dirección: </strong>{{ $datos['direccion'] }}</p>
	<p><strong>Localidad: </strong>{{ $datos['localidad'] }}</p>
	<p><strong>Email: </strong>{{ $datos['email'] }}</p>
	<p><strong>Teléfono: </strong>{{ $datos['telefono'] }}</p>
	<p><strong>Rubro: </strong>{{ $datos['rubro'] }}</p>
</body>
</html>