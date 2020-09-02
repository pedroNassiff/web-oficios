@extends('admin/administracion')
@section('content')

<section class="py-3 mb-5">
	<div class="container">
        <h2 class="my-4"> Añadir</h2>
        @if (session()->has('message'))
            <div class="alert alert-{{ session('typealert') }}">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {!! session('message') !!}
            </div>
        @endif
        
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

    </div>
</section>

@endsection 
