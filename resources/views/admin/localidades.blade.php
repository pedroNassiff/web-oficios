@extends('layout')

@section('title', 'Localidades')
@section('content')
@if (session()->has('message'))
	<div class="alert alert-{{ session('typealert') }}">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		{!! session('message') !!}
	</div>
@endif

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
    </tr>
  </thead>
  <tbody>
		@foreach($localidades as $localidad)
    <tr>
      <th scope="row">1</th>
      <td>{{ $localidad->nombre }}</td>
      <td>
		    <a class="icon-action"  href="{{ route('localidades.destroyLocalidad', $localidad->id) }}" onclick="return confirm('¿Desea eliminar el usuario?')" onkeypress="return confirm('¿Desea eliminar el usuario?')" data-toggle="tooltip" data-placement="top" title="Eliminar">
						<i class="fa fa-remove"></i>
				</a>
			</td>
		</tr>
		@endforeach
  </tbody>
</table>

@endsection
