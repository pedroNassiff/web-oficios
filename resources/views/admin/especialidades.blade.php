@extends('admin/administracion')

@section('title', 'Especialidades')
@section('content')
<section class="py-3 mb-5">
	<div class="container">
        <h2 class="my-4"> Oficios</h2>
        @if (session()->has('message'))
            <div class="alert alert-{{ session('typealert') }}">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {!! session('message') !!}
            </div>
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                  <th scope="col">Oficio</th>
                  <th scope="col">Especialidad</th>
                  <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listaoficio as $oficio)
                <tr>
                    <td> {{ $oficio['Oficio']->nombre }}</td>
                    <td>
                        @if ($oficio['Especialidades'])
                             @foreach ($oficio['Especialidades'] as $especialidad)
                                <option>
                                     <p>  
                                        <a class="btn-descripcion" data-toggle="collapse" href="#collapseExample" role="button"             aria-expanded="false" aria-controls="collapseExample">
                                         {{ $especialidad->nombre }}
                                            <a class="icon-action"  href="{{ route('especialidad.destroyEspecialidad', $especialidad->id) }}" onclick="return confirm('¿Desea eliminar la especialidad?')" onkeypress="return confirm('¿Desea eliminar la especialidad?')" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                            <i class="fa fa-remove"></i>
                                         </a>
                                        </a>
                                        
                                    </p>
                                        @if ($especialidad->descripcion)
                                             <div class="collapse" id="collapseExample">
                                                <div class="card card-body">
                                                    <li>
                                                         {{ $especialidad->descripcion }}
                                                    </li>
                                         @endif
                                                 </div>
                                            </div>
                                </option>
                              @endforeach                            
                        @endif
                    </td>
                    <td>
                        <a class="icon-action" href="" data-toggle="tooltip" data-placement="top" title="Cambiar contraseña"><i class="fas fa-plus-circle"></i></a>
                        <a class="icon-action"  href="" onclick="return confirm('¿Desea eliminar el localidad?')" onkeypress="return confirm('¿Desea eliminar el localidad?')" data-toggle="tooltip" data-placement="top" title="Eliminar">
                            <i class="fa fa-remove"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>


 {{-- agregar nueva la especialidad  --}}   
    <div>
        <form id="contact-form" name="contact-form" action="/admin/storeEspecialidad" method="POST"
            enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="md-form mb-3">
                        <label for="oficio" class="">Oficio</label>
                        {{-- debe mandarse el nombre d la profesión a la que se agregara la especialidad  --}}
                        <select class="browser-default custom-select" name="oficio" required>
							<option value="" selected disabled>Seleccionar un oficio</option>
							@foreach ($listaoficio as $oficio)
							    <option value="{{ $oficio['Oficio']->id}}">{{ $oficio['Oficio']->nombre }}</option>
						    @endforeach
						</select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form mb-3">
                        <label for="nombre" class="">Nombre de la Espacialiodad</label>
                        <input type="text" id="nombre" name="nombre" value=''
                            class="form-control" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form mb-3">
                        <label for="descripcion" class="">Descripcion de la Espacialiodad</label>
                        <input type="text" id="descripcion" name="descripcion" value=''
                            class="form-control" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="centrar mt-5">
                        <button class="btn" type="submit">Enviar</button>
                    </div>
                </div>

            </div>
    </div>
    @csrf
    </form>
    <div>
    @endsection
