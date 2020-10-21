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
				<div class="row">
					<div class="col-md-10">
						<form action="/perfil/actualizar/{{ auth()->user()->id }}" method="POST">
							<div class="row">

								<div class="col-md-6">
									<div class="md-form mb-3">
										<label for="nombre" class="">Nombres</label>
										<input type="text" name="nombre" value="{{ $profesional->nombre }}" class="form-control" required="">
									</div>
								</div>

								<div class="col-md-6">
									<div class="md-form mb-3">
										<label for="apellido" class="">Apellido</label>
										<input type="text" id="apellido" name="apellido" value="{{ $profesional->apellido }}" class="form-control" required>
									</div>
								</div>

								<div class="col-md-6">
									<div class="md-form mb-3">
										<label for="dni" class="">DNI</label>
										<input type="text" id="dni" name="dni" value="{{ $profesional->dni }}" class="form-control" required>
									</div>
								</div>

								<div class="col-md-6">
									<div class="md-form mb-3">
										<label for="telefono" class="">Teléfono</label>
										<input type="text" id="telefono" name="telefono" value="{{ $profesional->telefono }}" class="form-control" required>
									</div>
								</div>

								<div class="col-md-6">
									<div class="md-form mb-3">
										<label for="email" class="">Email</label>
										<input type="text" id="email" name="email" value="{{ auth()->user()->email }}" class="form-control" required>
									</div>
								</div>

								<div class="col-md-6">
									<div class="md-form mb-3">
										<label for="direccion" class="">Dirección</label>
										<input type="text" id="direccion" name="direccion" value="{{ $profesional->direccion }}" class="form-control" required>
									</div>
								</div>

								<div class="col-md-6">
									<div class="md-form mb-3">
										<label for="localidad" class="">Localidad</label>
										<select class="browser-default custom-select" name="localidad_id">
											@foreach ($localidades as $localidad)
												<option value="{{ $localidad->id }}">{{ $localidad->nombre }}</option>
											@endforeach
										</select>
									</div>
								</div>

								<div class="col-md-6">
									<div class="md-form mb-3">
										<label for="rubro" class="">Tipo de servicio (Rubro)</label>
										<select class="browser-default custom-select" name="rubro_id">
											@foreach ($rubros as $rubro)
												<option value="{{ $rubro->id }}">{{ $rubro->nombre }}</option>
											@endforeach
										</select>
									</div>
								</div>

								<div class="col-md-6">
									<div class="md-form mb-3">
										<label for="web" class="">Sitio Web</label>
										<input type="text" id="web" name="web" value="{{ $profesional->web }}" class="form-control" required>
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