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
      <th scope="col"><a class="icon-action"  href="{{ route('localidades.storeLocalidad') }}" onclick="return confirm('¿Desea agregar el localidad?')" onkeypress="return confirm('¿agregar nueva localidad?')" data-toggle="tooltip" data-placement="top" title="nueva localidad">
        <i class="fa fa-plus"></i>
    </a></th>
    </tr>
  </thead>
  <tbody>
		@foreach($localidades as $localidad)
    <tr>
      <th scope="row">{{$localidad->id}}</th>
      <td>{{ $localidad->nombre }}</td>
      <td>
		    <a class="icon-action"  href="{{ route('localidades.destroyLocalidad', $localidad->id) }}" onclick="return confirm('¿Desea eliminar el localidad?')" onkeypress="return confirm('¿Desea eliminar el localidad?')" data-toggle="tooltip" data-placement="top" title="Eliminar">
						<i class="fa fa-remove"></i>
				</a>
			</td>
		</tr>
		@endforeach
  </tbody>
</table>

@endsection
