@extends('admin/administracion')
@section('title', 'Localidades')
@section('content')

<section class="py-3 mb-5">
	<div class="container">
		<h2 class="my-4"> Localidades</h2>
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
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($localidades as $localidad)
        <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td>{{ $localidad->nombre }}</td>
          <td>
            <a class="icon-action" href="" data-toggle="tooltip" data-placement="top" title="Ver"><i class="fa fa-eye"></i></a> 
            <a class="icon-action" href="" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-edit"></i></a> 
            <a class="icon-action" href="" data-toggle="tooltip" data-placement="top" title="Cambiar contraseña"><i class="fa fa-key"></i></a>
            <a class="icon-action"  href="{{ route('localidades.destroyLocalidad', $localidad->id) }}" onclick="return confirm('¿Desea eliminar el usuario?')" onkeypress="return confirm('¿Desea eliminar el usuario?')" data-toggle="tooltip" data-placement="top" title="Eliminar">
                <i class="fa fa-remove"></i>
            </a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</section>

@endsection
