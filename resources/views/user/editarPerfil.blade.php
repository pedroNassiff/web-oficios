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
					<div role="tabpanel">
					<ul class="nav nav-tabs nav-tab-perfil" role="tablist">
						<li class="nav-item" role="presentacion" id="nav-perfil">
							<a class="nav-link nav-perfil active" href="#configuracionGeneral" aria-controls="configuracionGeneral" data-toggle="tab" role="tab">Configuración general</a>
						</li>
						<li class="nav-item" role="presentacion">
							<a class="nav-link nav-perfil" href="#seguridad"  aria-controls="seguridad" data-toggle="tab" role="tab">Seguridad</a>
						</li>
						<li class="nav-item" role="presentacion">
							<a class="nav-link nav-perfil" href="#documentos"  aria-controls="documentos" data-toggle="tab" role="tab">Documentos</a>
						</li>
						<li class="nav-item" role="presentacion" >
							<a class="nav-link nav-perfil" href="#notificaciones"  aria-controls="notificaciones" data-toggle="tab" role="tab">Notificaciones</a>
						</li>
						<li class="nav-item" role="presentacion">
							<a class="nav-link nav-perfil" href="#mensajes"  aria-controls="mensajes" data-toggle="tab" role="tab">Mensajes</a>
						</li>		
					</ul>
					<div class="tab-content">
						<div role="tab-panel" class="tab-pane active" id="configuracionGeneral">
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
							<div role="tab-panel" class="tab-pane" id="seguridad">
								<h3>Seguridad</h3>
								<p>Cambiar contraseña:</p>	
								<div class="row">  
									<div class="col-md-8 col-md-offset-2">  
									  <div class="panel panel-default">  
										{{-- <div class="panel-heading">Cambiar contraseña:</div>   --}}
										<div class="panel-body">  
										  <form class="form-horizontal" method="POST" role="form" action="">  
											@if (count($errors) > 0)  
											  <div class="alert alert-danger">  
												<ul>  
												  @foreach ($errors->all() as $error)  
													<li>{{ $error }}</li>  
												  @endforeach  
												</ul>  
											  </div>  
											@endif  
											{{ csrf_field() }}  
											{{-- Current password --}}  
											<div class="form-group{{ $errors->has('current_password') ? ' has-error' : '' }}">  
											  <label for="current_password" class="col-md-4 control-label">Contraseña actual</label>  
								
											  <div class="col-md-6">  
												<input id="current_password" type="password" class="form-control" name="current_password" required autofocus>  
								
												@if ($errors->has('current_password'))  
												  <span class="help-block">  
												  <strong>{{ $errors->first('current_password') }}</strong>  
												</span>  
												@endif  
											  </div>  
											</div>  
								
											{{-- New password --}}  
											<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">  
											  <label for="password" class="col-md-4 control-label">Nueva contraseña</label>  
								
											  <div class="col-md-6">  
												<input id="password" type="password" class="form-control" name="password" required>  
								
												@if ($errors->has('password'))  
												  <span class="help-block">  
												  <strong>{{ $errors->first('password') }}</strong>  
												</span>  
												@endif  
											  </div>  
											</div>  
								
											{{-- Confirm new password --}}  
											<div class="form-group">  
											  <label for="password-confirm" class="col-md-6 control-label">Confirmar contraseña</label>  
								
											  <div class="col-md-6">  
												<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>  
											  </div>  
											</div>  
								
											{{-- Submit button --}}  
											<div class="form-group">  
											  <div class="col-md-6 col-md-offset-4">  
												<button type="submit" class="btn hw-btn hvr-sweep-to-right">  
												  Cambiar contraseña  
												</button>  
											  </div>  
											</div>  
								
										  </form>  
										</div>  
										{{-- <div class="panel-footer">Hello</div>   --}}
									  </div>  
									</div>  
								  </div>  							
							</div>
							<div role="tab-panel" class="tab-pane" id="documentos">
								<h3>Documentos</h3>
								<div class="row">  
									<div class="col-md-6">
										<table class="table table-hover">
											<thead>
											  <tr>
												<th>Certificaciones cargadas</th>
												<th>Acciones</th>
											  </tr>
											</thead>
											<tbody>
											  <tr>
												<td><a href="" target="blank">Matricula_Profesional.pdf</a></td>
												<td class="acciones"><a href=""><i class="far fa-trash-alt"></i></a></td>
											  </tr>
											  <tr>
												<td><a href="" target="blank">Curso_Electricidad.png</a></td>
											    <td class="acciones"><a href=""><i class="far fa-trash-alt"></i></a></td>
											  </tr>
											  <tr>
												<td><a href="" target="blank">Curso_de_Especializacion.pdf</a></td>
												<td class="acciones"><a href=""><i class="far fa-trash-alt"></i></a></td>
											  </tr>
											</tbody>
										  </table>
									</div>
									<div class="col-md-6 col-md-offset-2"> 
										<div class="panel panel-default">
											<div class="panel-body">
												<form>
													<div class="form-group">
														<p>Nuevo archivo de certificación</p>
														<input class="form-control" type="text" placeholder="Nombre del documento">
														<input type="file" class="form-control-file mt-3" id="exampleFormControlFile1">
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>	
							</div>
							<div role="tab-panel" class="tab-pane" id="notificaciones">
								<h3>Notificaciones</h3>
								<p>Seguridad  seguridadseguridadseguridadseguridad seguridad seguridad seguridad</p>
							</div>
							<div role="tab-panel" class="tab-pane" id="mensajes">
								<h3>Mensajes</h3>
								<p>Seguridad  seguridadseguridadseguridadseguridad seguridad seguridad seguridad</p>
							</div>
						</div>
						
					</div>
				</div>
				
		</div>
	</div>
</section>					

@endsection