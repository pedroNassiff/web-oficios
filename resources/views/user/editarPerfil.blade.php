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
<<<<<<< HEAD
			
=======
			<div class="col-sm-4"><!--left col-->					
				<div class="text-center">
					<div class="oficios-card oficios-card-perfil pt-3">
                        <div class="card-img-container d-flex justify-content-center">
                            <div class="card-image"></div>
                        </div>
                        <div class="card-info-container d-flex flex-column align-items-center">
                            <span class="card-name">Sebastián Rodriguez</span>
                            <span class="card-localidad"> <img src="/location-icon.svg" width="9px" style="{margin-right: 2px;}"/>Margarita Belén</span>
                        </div>
                        <div class="card-overlay">
                            <button class="card-btn">ver perfil</button>
                        </div>
				    </div>
					<h6>Cambiar foto de perfil</h6>
        			<input type="file" class="text-center center-block file-upload">
				</div>
			</div>
>>>>>>> de85d928c9235799e28839361d92eb571c6b4bbb
			
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
											<div class="col-md-12 col-1-perfil">
												<div class="col-md-6"><!--left col-->					
													<div class="text-center cont-fperfil">
														<img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
														<h6>Cambiar foto de perfil</h6>
														<input type="file" class="text-center center-block file-upload">
													</div>
												</div>
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
											</div>
										</div>
										<div class="col-form-perf">
										<div class="row">
											<div class="col-md-12 col-1-perfil">
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
											</div>
										</div>
										<div class="row">
											<div class="col-md-12 col-1-perfil">
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
											</div>
										</div>
										<div class="row">
											<div class="col-md-12 col-1-perfil">
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
												
											</div>
												<div class="col-md-6" id="web-perfil">
													<div class="md-form mb-3">
														<label for="web" class="">Sitio Web</label>
														<input type="text" id="web" name="web" value="profesional->web" class="form-control" required>
													</div>
												</div>
												</div>
												<!--Grid column-->
<<<<<<< HEAD
									</div>
=======
												<div class="col-md-6">
													<div class="md-form mt-3 text-center">
														<button class="btn hw-btn hvr-sweep-to-right mx-auto" type="submit">Guardar</button>
													</div>
												</div>
										</div>
>>>>>>> de85d928c9235799e28839361d92eb571c6b4bbb
								</div>	
							
										@csrf
										</form>
									</div>
								</div>
							<div role="tab-panel" class="tab-pane" id="seguridad">
								<h3>Seguridad</h3>
								<p>Cambiar contraseña:</p>	
								<div class="row">  
									<div class="col-md-12 col-md-offset-2">  
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

    <!-- Page header end -->

    <!-- Content wrapper start -->
    <div class="content-wrapper">

        <!-- Row start -->
        <div class="row gutters">

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                <div class="card m-0 margCard">

                    <!-- Row start -->
                    <div class="row no-gutters">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3">
                            <div class="users-container">
                                <div class="chat-search-box">
                                    <div class="input-group">
                                        <input class="form-control" placeholder="Buscar">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn-info btn hw-btn hvr-sweep-to-right">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <ul class="users">
                                    <li class="person" data-chat="person1">
                                        <div class="user">
                                            <img src="https://image.freepik.com/foto-gratis/alegre-mujer-mediana-edad-cabello-rizado_1262-20859.jpg" alt="Retail Admin">
                                            <span class="status busy"></span>
                                        </div>
                                        <p class="name-time">
                                            <span class="name">María Elena Perez</span>
                                            <span class="time">15/02/2019</span>
                                        </p>
                                    </li>
                                    <li class="person" data-chat="person1">
                                        <div class="user">
                                            <img src="https://image.freepik.com/foto-gratis/hombre-negocios-dueno-empresa-oficina_1303-15851.jpg" alt="Retail Admin">
                                            <span class="status offline"></span>
                                        </div>
                                        <p class="name-time">
                                            <span class="name">Steve Bangalter</span>
                                            <span class="time">15/02/2019</span>
                                        </p>
                                    </li>
                                    <li class="person active-user" data-chat="person2">
                                        <div class="user">
                                            <img src="../img/perfil_prueba.jpg" alt="Retail Admin">
                                            <span class="status away"></span>
                                        </div>
                                        <p class="name-time">
                                            <span class="name"> Patricia Alejandra Gonzalez</span>
                                            <span class="time">12/02/2019</span>
                                        </p>
                                    </li>
                                    <li class="person" data-chat="person3">
                                        <div class="user">
                                            <img src="https://image.freepik.com/foto-gratis/retrato-guapo-sonriente-elegante-joven-modelo-vestido-camisa-cuadros-roja-hombre-moda-posando_158538-4910.jpg" alt="Retail Admin">
                                            <span class="status busy"></span>
                                        </div>
                                        <p class="name-time">
                                            <span class="name">Joseph Larson</span>
                                            <span class="time">11/02/2019</span>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-9 col-9">
                            <div class="selected-user">
                                <span>To: <span class="name">Patricia Alejandra González</span></span>
                            </div>
                            <div class="chat-container">
                                <ul class="chat-box chatContainerScroll">
                                    <li class="chat-left">
                                        <div class="chat-avatar">
                                            <img src="../img/perfil_prueba.jpg" alt="Retail Admin">
                                            <div class="chat-name">Patricia</div>
                                        </div>
                                        <div class="chat-text">Hello, I'm Patricia.
                                            <br>How can I help you today?</div>
                                        <div class="chat-hour">08:55</div>
                                    </li>
                                    <li class="chat-right">
                                        <div class="chat-hour">08:56</div>
                                        <div class="chat-text">Hi, Patricia
                                            <br> I need more information about Developer Plan.</div>
                                        <div class="chat-avatar">
                                            <img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">
                                            <div class="chat-name">Sam</div>
                                        </div>
                                    </li>
                                    <li class="chat-left">
                                        <div class="chat-avatar">
                                            <img src="../img/perfil_prueba.jpg" alt="Retail Admin">
                                            <div class="chat-name">Patricia</div>
                                        </div>
                                        <div class="chat-text">Are we meeting today?
                                            <br>Project has been already finished and I have results to show you.</div>
                                        <div class="chat-hour">08:57</div>
                                    </li>
                                    <li class="chat-right">
                                        <div class="chat-hour">08:59</div>
                                        <div class="chat-text">Well I am not sure.
                                            <br>I have results to show you.</div>
                                        <div class="chat-avatar">
                                            <img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">
                                            <div class="chat-name">Sam</div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="form-group mt-3 mb-0 d-flex justify-content-center align-items-center">
									<textarea class="form-control w-75" rows="3" placeholder="Escribe un mensaje..."></textarea>
									<a class="send-msn ml-3" href="">
										<i class="fas fa-paper-plane"></i>
									</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Row end -->
                </div>

            </div>

        </div>
        <!-- Row end -->

    </div>
    <!-- Content wrapper end -->

							</div>
						</div>
						
					</div>
				</div>
				
		</div>
	</div>
</section>					

@endsection