@extends('layout')
@section('title', 'Prestador')
@section('content')

<section class="page-section">
    <div class="row d-flex flex-column align-items-center img-about justify-content-center">
    </div>
</section>
<section class="mb-5" id="prestador">
    <div class="container">
        <div class="row" id="prestador-contenedor">
            <div class="col-3 mx-2 placa">
                <div class="photo d-flex justify-content-center mt-3">
                    <img src="img/perfil_prueba.jpg" class="rounded-circle" alt="Foto de perfil">
                </div>
                <div class="name-prestador">
                    <h3 class="text-center">Patricia Alejandra González</h3>
                </div>
                <div class="opciones-prestador">
                    <div class="opc-prestador">
                        <a class="btn hw-btn hvr-sweep-to-right" href=""><i class="fa fa-comment"></i>   Realizar una consulta</a>
                    </div>
                    <div class="opc-prestador">
                        <a class="btn hw-btn hvr-sweep-to-right" href=""><i class="fa fa-user-times"></i>   Denunciar prestador</a>
                    </div>
                    <div class="calficaciones m-3">
                        <h4 class="">Calificación</h4>
                        <div class="ec-stars-wrapper">
                            <a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
                            <a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
                            <a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
                            <a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
                            <a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8 mx-2 placa">
                <div class="detalles-prestador">
                    <h1>INFORMACIÓN DEL PRESTADOR</h1>
                </div>
                <div class="info-prestador mt-3">
                    <h3>Costurería</h3>
                    <p>Arreglos en general</p>
                    <p class="text-justify">Confeccionamos y arreglamos todo tipo de prendas. Recibimos tu idea u orden de producción; si es necesario desarrollamos el diseño del producto; compramos o recibimos los materiales, los cortamos y los cosemos. Además, podemos, planchar, doblar, empacar y etiquetar el producto final para su venta al público.</p>
                </div>
                <div class="row">
                    <div class="col-4 contact-prestador">
                        <p><i class="fas fa-map-marker-alt"></i> Resistencia, Chaco</p>                      
                        <p><i class="fas fa-phone-alt"></i> 3624 123456</p>
                        <p><i class="fas fa-envelope-open-text"></i> patricia@gmail.com</p>
                    </div>
                    <div class="col-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3540.5588033653703!2d-58.987743385432495!3d-27.451857422515648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94450dfa218d60b1%3A0x5d28e8aeedb6460e!2sResistencia%20Chaco!5e0!3m2!1ses-419!2sar!4v1603202104333!5m2!1ses-419!2sar" width="300" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>                
            </div>
        </div>
    </div>
</section>

@endsection
