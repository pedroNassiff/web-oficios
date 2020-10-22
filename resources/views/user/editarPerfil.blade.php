@extends('layout')
@section('title', 'Editar perfil')

@section('content')


<section class="py-4">
	<div class="container">
		<div class="row mb-3">
			<div class="col-md-6">
				<h2> Editar perfil </h2>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-4"><!--left col-->					
				<div class="text-center">
					<img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
					<h6>Cambiar foto de perfil</h6>
        			<input type="file" class="text-center center-block file-upload">
				</div>
			</div>
			
			<div class="col-sm-8">
				<div class="menu-perfil">
					<ul class="nav nav-tabs nav-tab-perfil">
						<li class="nav-item">
							<a class="nav-link .nav-perfil active" href="#">Configuración general</a>
						</li>
						<li class="nav-item">
							<a class="nav-link nav-perfil" href="#">Seguridad</a>
						</li>
						<li class="nav-item">
							<a class="nav-link nav-perfil" href="#">Documentos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link nav-perfil" href="#">Notificaciones</a>
						</li>
						<li class="nav-item">
							<a class="nav-link nav-perfil" href="#">Mensajes</a>
						</li>		
					</ul>
				</div>
				<div class="row">
					<div class="col-md-10">
						<form action="/perfil/actualizar/{{ auth()->user()->id }}" method="POST">
							<div class="row">

								<div class="col-md-6">
									<div class="md-form mb-3">
										<label for="nombre" class="">Nombres</label>
										<input type="text" name="nombre" value="profesionalnombre" class="form-control" required="">
									</div>
								</div>

								<div class="col-md-6">
									<div class="md-form mb-3">
										<label for="apellido" class="">Apellido</label>
										<input type="text" id="apellido" name="apellido" value="profesionalapellido " class="form-control" required>
									</div>
								</div>

								<div class="col-md-6">
									<div class="md-form mb-3">
										<label for="dni" class="">DNI</label>
										<input type="text" id="dni" name="dni" value="profesionaldni" class="form-control" required>
									</div>
								</div>

								<div class="col-md-6">
									<div class="md-form mb-3">
										<label for="telefono" class="">Teléfono</label>
										<input type="text" id="telefono" name="telefono" value="profesionaltelefono " class="form-control" required>
									</div>
								</div>

								<div class="col-md-6">
									<div class="md-form mb-3">
										<label for="email" class="">Email</label>
										<input type="text" id="email" name="email" value="" class="form-control" required>
									</div>
								</div>

								<div class="col-md-6">
									<div class="md-form mb-3">
										<label for="direccion" class="">Dirección</label>
										<input type="text" id="direccion" name="direccion" value="profesionaldireccion " class="form-control" required>
									</div>
								</div>

								<div class="col-md-6">
									<div class="md-form mb-3">
										<label for="localidad" class="">Localidad</label>
										<select class="browser-default custom-select" name="localidad_id">
												<option value=""> localidad->nombre </option>
										</select>
									</div>
								</div>

								<div class="col-md-6">
									<div class="md-form mb-3">
										<label for="rubro" class="">Tipo de servicio (Rubro)</label>
										<select class="browser-default custom-select" name="rubro_id">
												<option value="">rubro->nombre</option>
										</select>
									</div>
								</div>

								<div class="col-md-6">
									<div class="md-form mb-3">
										<label for="web" class="">Sitio Web</label>
										<input type="text" id="web" name="web" value="profesional->web" class="form-control" required>
									</div>
								</div>
								<!--Grid column-->
							</div>
					</div>	
					<div class="col-md-10 centrar-der">
						<button class="btn btn-own mx-auto" type="submit">Guardar</button>
					</div>
							
							@csrf
						</form>
				</div>
			</div>
		</div>
	</div>
</section>					

@endsection