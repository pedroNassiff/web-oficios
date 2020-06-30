@if(!$profesional)
	<p>Todavia no tienes tu perfil creado, crealo <a href="/perfil/crear">Aquí</a></p>	
@else
	<h2> Mi Perfil </h2>
	
	@if(Session::has('message'))
		<p>{{ Session::get('message') }}</p>
	@endif
	
	<p><strong>Nombres: </strong>{{ $profesional->nombre }}</p>
	<p><strong>Apellido: </strong>{{ $profesional->apellido }}</p>
	<p><strong>Rubro: </strong>{{ $profesional->rubro }}</p>
	<p><strong>Direccion: </strong>{{ $profesional->direccion }}</p>
	<p><strong>Localidad: </strong>{{ $profesional->localidad }}</p>
	<p><strong>Teléfono: </strong>{{ $profesional->telefono }}</p>
	<p><strong>Email: </strong>{{ auth()->user()->email }}</p>
	<p><strong>Web: </strong>{{ $profesional->web }}</p>

	<a href="/perfil/editar">Editar Perfil</a>
@endif




