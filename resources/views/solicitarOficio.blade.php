@extends('layout')
@section('title', 'Nuevo oficio')

@section('content')
@if (session()->has('message'))
	<div class="alert alert-{{ session('typealert') }}">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		{!! session('message') !!}
	</div>
@endif
    <section class="py-4" id="solicitudOficio">
        @if (session()->has('mensaje'))
            <div class="alert alert-success">
                {{ session()->get('mensaje') }}
            </div>
        @endif
        <div class="container">
            <h2 class="text-center my-3">¿No encontraste el oficio que buscabas?</h2>
            <div class="justify-content-center d-flex">
                <p class="desc">Te pedimos que rellenes el formulario así podemos saber que servicio buscabas en la Red de Oficios y no lo tenemos, ya que con tu ayuda iremos ampliando nuestra oferta lo antes posible.</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <form id="contact-form" name="contact-form" action="/solicitarOficio/enviar" method="POST"
                        enctype="multipart/form-data">
                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="md-form mb-3">
                                    <label for="nombre" class="">Nombres *</label>
                                    @if (Auth::guest())
                                        <input type="text" id="name" name="nombre" class="form-control" required>   
                                    @else 
                                     <input disabled type="text" id="name" name="nombre" value={{ auth()->user()->name }} class="form-control" required> 
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-form mb-3">
                                    <label for="apellido" class="">Apellido *</label>
                                    @if (Auth::guest())
                                        <input type="text" id="lastname" name="lastname" class="form-control" required>   
                                    @else 
                                        <input disabled type="text" id="lastname" name="lastname"
                                        value={{ auth()->user()->lastname }} class="form-control" required>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-form mb-2">
                                    <label for="oficio">Ingresá un oficio *</label>
                                    <input type="text" id="oficio" name="oficio" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-form mb-3">
                                    <label for="categoria">Ingresá una especialidad</label>
                                    <input type="text" id="categoria" name="categoria" class="form-control">
                                </div>
                                <small>*Los campos marcados con asterísco (*) son obligatorios.</small>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="md-form mb-5">
                                    <label for="descripcion" class="">Descripción del oficio que desea ingresar</label>
                                    <textarea name="descripcion" id="descripcion" cols="30" rows="5" class="form-control"
                                        required>{{old('descripcion')}}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
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

    </section>
@endsection
