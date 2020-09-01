@extends('layout')

@section('title', 'Especialidades')
@section('content')
    @if (session()->has('message'))
        <div class="alert alert-{{ session('typealert') }}">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {!! session('message') !!}
        </div>
    @endif
    <div>
        @foreach ($listaoficio as $oficio)
            <ul>
                <li>
                    {{ $oficio['Oficio']->nombre }}
                    @if ($oficio['Especialidades'])
                        @foreach ($oficio['Especialidades'] as $especialidad)
                            <ul>
                                <li>
                                    {{ $especialidad->nombre }}
                                    <a class="icon-action"  href="{{ route('especialidad.destroyEspecialidad', $especialidad->id) }}" onclick="return confirm('¿Desea eliminar el localidad?')" onkeypress="return confirm('¿Desea eliminar el localidad?')" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                        <i class="fa fa-remove"></i>
                                    </a>
                                    <ul>
                                        @if ($especialidad->descripcion)
                                            <li>
                                                {{ $especialidad->descripcion }}
                                            </li>
                                        @endif
                                    </ul>
                                </li>
                            </ul>
                        @endforeach
                    @endif
                </li>
            </ul>
        @endforeach
    </div>

    <div>
        <form id="contact-form" name="contact-form" action="/admin/storeEspecialidad" method="POST"
            enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="md-form mb-3">
                        <label for="oficio" class="">Oficio</label>
                        {{-- debe mandarse el nombre d la profesión a la que se agregara la especialidad  --}}
                        <input type="text" id="oficio" name="oficio" value='Plomería' readonly
                            class="form-control" required>
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
