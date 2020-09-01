@extends('admin/administracion')

@section('title', 'Oficios')
@section('content')

<section class="py-3 mb-5">
	<div class="container">
        <h2 class="my-4"> Oficios</h2>
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
              {{-- @foreach() --}}
              <tr>
                <th scope="row">1</th>
                <td>---</td>
                <td>
                <a class="icon-action" href="" data-toggle="tooltip" data-placement="top" title="Ver"><i class="fa fa-eye"></i></a> 
                <a class="icon-action" href="" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-edit"></i></a> 
                <a class="icon-action" href="" data-toggle="tooltip" data-placement="top" title="Cambiar contraseña"><i class="fa fa-key"></i></a>
                <a class="icon-action"  href="" onclick="return confirm('¿Desea eliminar el usuario?')" onkeypress="return confirm('¿Desea eliminar el usuario?')" data-toggle="tooltip" data-placement="top" title="Eliminar">
                      <i class="fa fa-remove"></i>
                  </a>
                </td>
              </tr>
              {{-- @endforeach --}}
            </tbody>
          </table>
    </div>
</section>

@endsection
