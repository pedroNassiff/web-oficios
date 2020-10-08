@extends('layout')
@section('title', 'Inscripción')

@section('content')
@if (session()->has('message'))
	<div class="alert alert-{{ session('typealert') }}">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		{!! session('message') !!}
	</div>
@endif
    <section class="py-4" id="inscripcion">
        @if (session()->has('mensaje'))
            <div class="alert alert-success">
                {{ session()->get('mensaje') }}
            </div>
        @endif
        <div class="container">
            <h2 class="text-center my-3">Sumate a nuestra red de prestadores</h2>
            <div class="justify-content-center d-flex">
                <p class="desc">Te pedimos que rellenes el formulario con tus datos, analizaremos tus solicitud lo más pronto posible y te enviaremos una respuesta al correo electrónico asociado a tu cuenta de usuario.</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <form id="contact-form" name="contact-form" action="/inscripcion/enviar" method="POST"
                        enctype="multipart/form-data">
                        <!--Grid row-->
                        <div class="row">
                            <input type="hidden" name="_id" value={{ auth()->user()->id }}>
                            <div class="col-md-6">
                                <div class="md-form mb-3">
                                    <label for="nombre" class="">Nombres</label>
                                    <input disabled type="text" id="name" name="nombre" value={{ auth()->user()->name }}
                                        class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-form mb-3">
                                    <label for="apellido" class="">Apellido</label>
                                    <input disabled type="text" id="lastname" name="lastname"
                                        value={{ auth()->user()->lastname }} class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-form mb-3">
                                    <label for="categoria">Seleccioná un oficio</label>
                                    <select class="browser-default custom-select" name="oficio_id"
                                        onchange="selectEspecialidadHandler(event.target.value);">
                                        <option value="" disabled selected>Seleccionar</option>
                                        @foreach ($listaoficio as $oficio)
                                            <option value="{{ $oficio['Oficio']->id }}">{{ $oficio['Oficio']->nombre }}</option>
                                        @endforeach
                                    </select>
                                    <a class="links-formulario" href="/OficioNuevo">¿No encontraste el oficio que buscabas?</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-form mb-3">
                                    <label for="categoria">Seleccioná una especialidad</label>
                                    <select id="selectoption" class="browser-default custom-select" name="especialidad_id" disabled>
                                        <option value=""disabled selected>Seleccionar</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-form mb-3">
                                    <label for="dni" class="">DNI</label>
                                <input type="text" id="dni" name="dni" class="form-control" value="{{old('dni')}}" required>
                                {!! $errors->first('dni', '<small>:message</small><br>') !!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-form mb-3">
                                    <label for="telefono" class="">Teléfono</label>
                                    <input type="text" id="telefono" name="telefono" class="form-control" value="{{old('telefono')}}" required>
                                    {!! $errors->first('telefono', '<small>:message</small><br>') !!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-form mb-3">
                                    <label for="web" class="">Sitio web</label>
                                    <input type="text" id="web" name="web" class="form-control" value="{{old('web')}}">
                                    {!! $errors->first('web', '<small>:message</small><br>') !!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-form mb-3">
                                    <label for="matricula" class="">Matrícula</label>
                                    <input type="text" id="matricula" name="matricula" class="form-control" value="{{old('matricula')}}">
                                    {!! $errors->first('matricula', '<small>:message</small><br>') !!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-form mb-5">
                                    <label for="descripcion" class="">Descripción del servicio que brindás:</label>
                                    <textarea name="descripcion" id="descripcion" cols="30" rows="5" class="form-control"
                                        required>{{old('descripcion')}}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        He leído y acepto los <a  class="links-formulario" href="/acuerdo">términos y condiciones.</a>
                                    </label>
                                </div>
                                <div class="centrar mt-5">
                                    <button class="btn hw-btn-orange hvr-sweep-to-right" type="submit">Enviar</button>
                                </div>
                            </div>
                        </div>
                </div>
                @csrf
                </form>
            </div>
        </div>

        <script>
            function selectEspecialidadHandler(id) {
                var lista = {!!json_encode($listaoficio, JSON_HEX_TAG) !!};

                var select = document.getElementById("selectoption");
                select.innerHTML='<option value=""disabled selected>Seleccionar</option>';
                lista.forEach(element => {
                    if (id == element.Oficio.id) {
                        element.Especialidades.forEach(especialidad => {
                            var opt = document.createElement('option');
                            opt.appendChild(document.createTextNode(especialidad.nombre));
                            opt.value = especialidad.id; 
                            select.appendChild(opt);
                        });
                    }
                });
                select.removeAttribute('disabled')
            }

        </script>

    </section>
@endsection
