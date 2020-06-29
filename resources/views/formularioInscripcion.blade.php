@extends('layout')
@section('title', 'Inscripción')

@section('content')

<section class="py-4">
	@if(Session::has('mensaje'))
			<p>{{ Session::get('mensaje') }}</p>
		@endif
	<div class="container">
		<h2>Dejanos tu datos</h2>
			<h5>Nos comunicaremos a la brevedad.</h5>
		<div class="row">
			
			<div class="col-md-12">
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
							<label for="rubro" class="">Tipo de servicio</label>
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
					<div class="col-md-12 mt-1 text-center">
						<button class="btn mx-auto" type="submit">Enviar</button>
				    </div>
					
					@csrf
					
                </div>
				<!--Grid row-->
				</form>	
			</div>
		</div>
	</div>



{{-- <div class="container">
	<div class="col-md-12 my-3 py-3">
		<h2>Dejanos tu datos</h2>
	</div>
	<div class="row">
		@if(Session::has('mensaje'))
			<p>{{ Session::get('mensaje') }}</p>
		@endif

		<div class="container">
		
			<form class="form-inline" action="/inscripcion/enviar" method="POST" enctype="multipart/form-data">
				<div class="row">
					<div  class="col-md-6">
						<label>Nombres</label>
						<input type="text" name="nombre" required>
						<label>Apellido</label> 
						<input type="text" name="apellido" required>
						<label>Dni</label>
						<input type="text" name="dni" required>
						<label>Dirección</label> 
						<input type="text" name="direccion" required>
					</div>
					<div  class="col-md-6">
							<label>Localidad</label>
							<input type="text" name="localidad" required>
							<label>Rubro</label>
							<input type="text" name="rubro" required>
							<label>Email</label>
							<input type="text" name="email" required>
							<label>Teléfono</label>
							<input type="text" name="telefono" required>
					</div>
					<input type="submit" name="Enviar">
					@csrf
				</div>
			</form>
		</div>
	</div>
</div> --}}
</section>
@endsection