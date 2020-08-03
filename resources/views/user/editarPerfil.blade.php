@extends('layout')
@section('title', 'Editar perfil')

@section('content')


<section class="py-4">
	<div class="container">
		<div class="row mb-3">
			<div class="col-md-6" style="text-align: left;">
				<h2> Editar perfil </h2>
			</div>
		</div>

		<div class="row  justify-content-center">
			<div class="col-sm-4"><!--left col-->					
				<div class="text-center">
					<img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
					<h6>Cambiar foto de perfil</h6>
        			<input type="file" class="text-center center-block file-upload">
				</div></hr><br>	
			</div>

			<div class="col-sm-8">
				<div class="row justify-content-center">
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
					<div class="col-md-10" style="text-align: right;">
						<button class="btn mx-auto" type="submit">Guardar</button>
					</div>
							
							@csrf
						</form>
				</div>
			</div>
		</div>
	</div>
</section>					

{{-- <h2>Edita tu perfil</h2>

<form action="/perfil/actualizar/{{ auth()->user()->id }}" method="POST">
	<label>Nombres</label> <br>
	<input type="text" name="nombre" value="{{ $profesional->nombre }}" required=""> <br>
	<label>Apellido</label> <br>
	<input type="text" name="apellido" value="{{ $profesional->apellido }}" required=""> <br>
	<label>Teléfono</label> <br>
	<input type="text" name="telefono" value="{{ $profesional->telefono }}" required=""> <br>
	<label>Email</label> <br>
	<input type="text" name="email" value="{{ auth()->user()->email }}"required=""> <br>
	<label>Dirección</label> <br>
	<input type="text" name="direccion" value="{{ $profesional->direccion }}" required=""> <br>
	<label>Localidad</label> <br>
	<select name="localidad_id">
		@foreach ($localidades as $localidad)
			<option value="{{ $localidad->id }}">{{ $localidad->nombre }}</option>
		@endforeach
	</select> <br>
	<label>Rubro</label> <br>
	<select name="rubro_id">
		@foreach ($rubros as $rubro)
			<option value="{{ $rubro->id }}">{{ $rubro->nombre }}</option>
		@endforeach
	</select> <br>
	<label>Web</label> <br>
	<input type="text" name="web" value="{{ $profesional->web }}" required=""> <br>
	<input type="submit" value="Guardar">
	@csrf
</form> --}}

@endsection