@extends('layout')

@section('title', 'Inicio')

@section('content')

<div class="container my-5">
    <div class="filter-panel">
        <h3>¿Qué servicio estás buscando?</h3>
        <div class="row">
            <div class="col-6">
                <div>
                    {{-- <select class="browser-default custom-select">
                        <option selected>Categorías</option>
                        <option value="1">Oficios</option>
                        <option value="2">Títulos</option>
                        <option value="3">Ubicación y zona</option>
                    </select> --}}
                    <select class="browser-default custom-select"  name="cars" id="cars">
                        <option selected>Categorías</option>
                        <optgroup label="Oficios">
                          <option value="volvo">Electricidad</option>
                          <option value="saab">Plomeria</option>
                          <option value="saab">Carpintería</option>
                          <option value="saab">...</option>
                        </optgroup>
                        <optgroup label="Títulos">
                          <option value="mercedes">Abogados</option>
                          <option value="audi">Contadores</option>
                          <option value="audi">Odontologos</option>
                          <option value="saab">...</option>
                        </optgroup>
                      </select>
                </div>
            </div>
            <div class="col-6 lista2">
                <div style="width: 50%;">
                    <select class="browser-default custom-select" name="" id="">
                        <option selected>Ubicación</option>
                        <option value="1">Ubicación</option>
                        <option value="2"></option>
                        <option value="3"></option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row my-5 text-center">
            <div class="col-6">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Ver más</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td><i class="fa fa-plus-circle" aria-hidden="true"></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td><i class="fa fa-plus-circle" aria-hidden="true"></i></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1829375.5611834687!2d-61.557819432941336!3d-26.423504238923677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9440effae3c87247%3A0x4eaf96c0979eec95!2sChaco!5e0!3m2!1ses-419!2sar!4v1592342057768!5m2!1ses-419!2sar" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>

    </div>
</div>
    
@endsection