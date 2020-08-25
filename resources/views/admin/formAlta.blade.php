@extends('layout')
@section('title', 'Nuevo usuario')

@section('content')

<section class="py-4">
	<div class="container">
		<h2>Alta de Usuario</h2>
		@if(Session::has('mensaje'))
				<div class="alert alert-success">
					{{ Session::get('mensaje') }}
				</div>	
			@endif
		<div class="row mt-3 mb-3 justify-content-center">
			
			<div class="col-md-8">
				<form action="/admin/alta" method="POST">
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Nombre de usuario:</label>
						<div class="col-sm-9">
						<input type="text" name="nombre" required class="form-control" id="inputEmail3" placeholder="Nombre de usuario">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputEmail3" class="col-sm-3 col-form-label">Email:</label>
						<div class="col-sm-9">
						<input type="email" name="email" required class="form-control" id="inputEmail3" placeholder="Email">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword3" class="col-sm-3 col-form-label">Contraseña:</label>
						<div class="col-sm-9">
						<input type="text" name="password" required class="form-control" id="inputPassword3" placeholder="Contraseña">
						</div>
					</div>
			</div>
			<div class="col-md-8 mt-2" style="text-align: right;">
						<button class="btn mx-auto" type="submit">Guardar</button>
					</div>
					
					@csrf
				</form>
		</div>
	</div>
</section>
@endsection
