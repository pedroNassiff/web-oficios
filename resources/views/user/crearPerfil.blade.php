@extends('layout')
@section('title', 'Nuevo usuario')

@section('content')
<section class="py-4">
	<div class="container">
		<h2>Crea tu perfil</h2>
		
		<div class="row justify-content-center">
			<div class="col-md-10">
				<form action="/perfil/guardar" method="POST">
					<div class="row">
						<!--Grid column-->
						<div class="col-md-6">
							<div class="md-form mb-3">
								<label for="nombre" class="">Nombres</label>
								<input type="text" id="name" name="nombre" value="{{ auth()->user()->name }}" class="form-control" required>
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
								<label for="telefono" class="">Teléfono</label>
								<input type="text" id="telefono" name="telefono" class="form-control" required>
							</div>
						</div>
						<!--Grid column-->
						<!--Grid column-->
						<div class="col-md-6">
							<div class="md-form mb-3">
								<label for="email" class="">Email</label>
								<input type="text" id="email" name="email" value="{{ auth()->user()->email }}" class="form-control" required>
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
								<select class="browser-default custom-select" name="localidad_id">
									<option value="">Seleccionar:</option>
									@foreach ($localidades as $localidad)
										<option value="{{ $localidad->id }}">{{ $localidad->nombre }}</option>
									@endforeach
								</select>
							</div>
						</div>
						<!--Grid column-->
						<!--Grid column-->
						<div class="col-md-6">
							<div class="md-form mb-3">
								<label for="rubro" class="">Tipo de servicio (Rubro)</label>
								<select class="browser-default custom-select" name="rubro_id">
									<option value="">Seleccionar:</option>
									@foreach ($rubros as $rubro)
										<option value="{{ $rubro->id }}">{{ $rubro->nombre }}</option>
									@endforeach
								</select>
							</div>
						</div>
						<!--Grid column-->
						<!--Grid column-->
						<div class="col-md-6">
							<div class="md-form mb-3">
								<label for="web" class="">Página Web</label>
								<input type="text" id="web" name="web" class="form-control" required>
							</div>
						</div>
						<!--Grid column-->
					</div>
			</div>	
			<div class="col-md-10" style="text-align: right;">
				<button class="btn mx-auto" type="submit">Guardar</button>
			</div>
					
					@csrf
				</form>
		</div>
	</div>
</section>
@endsection