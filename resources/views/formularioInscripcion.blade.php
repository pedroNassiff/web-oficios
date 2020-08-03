@extends('layout')
@section('title', 'Inscripción')

@section('content')

<section class="py-4">
	@if(session()->has('mensaje'))
    <div class="alert alert-success">
    	 {{ session()->get('mensaje') }}
    </div>
	@endif
	<div class="container">
		<h2>Dejanos tu datos</h2>
		<div class="row justify-content-center">
			<div class="col-md-10">
				<form id="contact-form" name="contact-form" action="/inscripcion/enviar" method="POST" enctype="multipart/form-data">
					<!--Grid row-->
					<div class="row">
						<!--Grid column-->
						<div class="col-md-6">
							<div class="md-form mb-3">
								<label for="nombre" class="">Nombres</label>
								<input type="text" id="name" name="nombre" class="form-control" required>
							</div>
						</div>
						<!--Grid column-->

						<!--Grid column-->
						<div class="col-md-6">
							<div class="md-form mb-3">
								<label for="apellido" class="">Apellido</label>
								<input type="text" id="apellido" name="apellido" class="form-control" required>
							</div>
						</div>
						<!--Grid column-->
						<!--Grid column-->
						<div class="col-md-6">
							<div class="md-form mb-3">
								<label for="dni" class="">DNI</label>
								<input type="text" id="dni" name="dni" class="form-control" required>
						</div>
						</div>
						<!--Grid column-->
						<!--Grid column-->
						<div class="col-md-6">
							<div class="md-form mb-3">
								<label for="direccion" class="">Dirección</label>
								<input type="text" id="direccion" name="direccion" class="form-control" required>
							</div>
						</div>
						<!--Grid column-->
						<!--Grid column-->
						<div class="col-md-6">
							<div class="md-form mb-3">
								<label for="localidad" class="">Localidad</label>
								<input type="text" id="localidad" name="localidad" class="form-control" required>
							</div>
						</div>
						<!--Grid column-->
						<!--Grid column-->
						<div class="col-md-6">
							<div class="md-form mb-3">
								<label for="rubro" class="">Tipo de servicio (Rubro)</label>
								<input type="text" id="rubro" name="rubro" class="form-control" required>
							</div>
						</div>
						<!--Grid column-->
						<!--Grid column-->
						<div class="col-md-6">
							<div class="md-form mb-3">
								<label for="email" class="">Dirección de correo electrónico</label>
								<input type="text" id="email" name="email" class="form-control" required>
							</div>
						</div>
						<!--Grid column-->
						<!--Grid column-->
						<div class="col-md-6">
							<div class="md-form mb-3">
								<label for="telefono" class="">Teléfono</label>
								<input type="text" id="telefono" name="telefono" class="form-control" required>
							</div>
						</div>
					<!--Grid column-->
					<!--Grid column-->
					<div class="col-md-6">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" id="gridCheck">
							<label class="form-check-label" for="gridCheck">
							  He leído y acepto los <a href="/acuerdo">términos y condiciones.</a>
							</label>
						  </div>
					</div>
				<!--Grid column-->
					</div>
			</div>	
			<div class="col-md-10 mt-2" style="text-align: right;">
						<button class="btn mx-auto" type="submit">Enviar</button>
			</div>
					
					@csrf					
				<!--Grid row-->			
				</form>
		</div>
	</div>

</section>
@endsection