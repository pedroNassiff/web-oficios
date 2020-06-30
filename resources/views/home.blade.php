@extends('layout')
@section('title', 'Inicio')

@section('content')
<section class="py-3">
	<div class="container text-center">
		<h2 class="my-4"> ¿Qué estás buscando?</h2>
        <div class="row mb-5">
			<div class="col-md-4">
				<form action="/buscar" method="POST">
					
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<label for="categoria">Seleccioná un servicio</label>
					<select class="browser-default custom-select" name="rubro_id">
			
						@foreach ($rubros as $rubro)
							<option value="{{ $rubro->id }}">{{ $rubro->nombre }}</option>
						@endforeach
					</select>
			</div>
			<div class="col-md-4">
						<label for="localidad">Seleccioná una localidad</label>
						<select class="browser-default custom-select" name="localidad_id" placeholder="Localidades">
						@foreach ($localidades as $localidad)
							<option value="{{ $localidad->id }}">{{ $localidad->nombre }}</option>
						@endforeach
						</select>
			</div>
			<div class="col-md-4">			
						<button class="btn btn-default" style="margin-top: 8%;" type="submit">Buscar</button>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6" style="text-align: center;">
				<h2>Servicios</h2>
				<table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col" style="text-align: left;
						margin-left: 19%;">Nombre</th>
                        <th scope="col">Ver más</th>
                    </tr>
                    </thead>
                    <tbody>
					@foreach ($profesionales as $profesional)
						<tr>
							<th scope="row">{{ $profesional->id }}</th>
							<td style="text-align: left;
							margin-left: 19%;">{{ $profesional->nombre}} {{ $profesional->apellido}}</td>
							<td><a href="/profesional/{{ $profesional->id }}"><i class="fa fa-plus-circle" aria-hidden="true"></i></a></td>
						</tr>
					@endforeach
                    </tbody>
                </table>
			</div>
			<div class="col-md-6 mt-5">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1829375.5611834687!2d-61.557819432941336!3d-26.423504238923677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9440effae3c87247%3A0x4eaf96c0979eec95!2sChaco!5e0!3m2!1ses-419!2sar!4v1592342057768!5m2!1ses-419!2sar" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
		</div>
		<div class="row my-5">
			<div class="col-md-12">
				<img class="" style="width: 50%; border-radius: 1.25rem" src="/svg/brindar.png" alt="">
			</div>
			<br>
			<div class="col-md-12 my-auto">
				<a class="btn btn-default btn-lg" href="/inscripcion" style="margin-top: 2%;">¡Inscribite!</a>
				{{-- Formulario oculto que se ejecuta al hacer click en "Salir" 
					* Redirige a la ruta /logout con el método POST, ahí el controlador
					  del logout borra los datos de sesión 
					* Rediirige a la ruta /home con la sesión cerrada
				--}}
				<form id="form-post" action="/logout" method="POST" style="display: none;">
					@csrf
				</form>
			</div>
		</div>
</div>
</section>
    
@endsection

<!-- 	 -->
