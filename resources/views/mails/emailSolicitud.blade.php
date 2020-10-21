<!DOCTYPE html>
<html>
<head>
	<title>Mensaje Recibido</title>
</head>
<body>
	<h2>Solicitud de Inscripción</h2>

	<p><strong>Nombre: </strong>{{ $user->name }}</p>
	<p><strong>Apellido: </strong>{{ $user->lastname }}</p>
	<p><strong>Email: </strong>{{ $user->email  }}</p>

</body>
</html>