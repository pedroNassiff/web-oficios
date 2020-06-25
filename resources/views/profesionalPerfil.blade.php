@extends('layout')
@section('title', 'Perfil')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 my-3 py-3 shadow">
            <div class="row text-center">
                <div class="col-md-6">
                    <img style="width: 70%;" src="/svg/oficios.jpg" alt="">
                </div>
                <div class="col-md-6" style="text-align: left;">
                    <h2>{{ $profesional->nombre }} {{ $profesional->apellido }}</h2>

                    <p>Rubro: {{ $profesional->rubro }}</p>
                    <p>Localidad: {{ $profesional->localidad }}</p>
                    <p>Direccion: {{ $profesional->direccion }}</p>
                    <p>Ubicación Actual: {{ $profesional->ubicacion_actual }}</p>
                    <p>Teléfono: {{ $profesional->telefono }}</p>
                    <p>Sitio Web: {{ $profesional->web }}</p>
                </div>
            </div>
        </div>
        
        <div class="col-md-12">
            <iframe class="text-center" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3540.648145948087!2d-58.98939968543273!3d-27.449074222396675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjfCsDI2JzU2LjciUyA1OMKwNTknMTQuMCJX!5e0!3m2!1ses-419!2sar!4v1593031662283!5m2!1ses-419!2sar" width="500" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <h2>Calificación y opiniones</h2>
            <div class="ec-stars-wrapper">
                <a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
                <a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
                <a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
                <a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
                <a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
            </div>
            <noscript>Necesitas tener habilitado javascript para poder votar</noscript>
        </div>

    </div>
</div>

@endsection