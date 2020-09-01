@extends('layout')
@section('title', 'Prestador')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 my-3 py-3 shadow">
            <h1 class="titulo-detalle">Detalles del prestador</h1>
            <div class="ficha">
                <div class="avatar">
                    <div class="card" style="width: 18rem;">
                        <div class="user-avatar mx-auto">
                            <i class="fa fa-user user-avatar-icon"></i>
                        </div>
                        <div class="card-body">
                        <h2 class="card-title">$profesional->nombre }}  $profesional->apellido }}</h2>
                        <h5>Teléfono:  $profesional->telefono }}</h5>
                        <h5>Sitio Web:  $profesional->web }}</h5>
                        
                        </div>
                    </div>
                </div>
                <div class="datos-prestador">
                    <h2> $profesional->rubro }}</h2>
                    <p>Localidad:  $profesional->localidad }}</p>
                    <p>Direccion:  $profesional->direccion }}</p>
                    <p>Ubicación Actual: $profesional->ubicacion_actual }}</p>
                    <p class="card-text">Descripción:   $profesional->descripcion }}
                    </p>
                    <div class="botones">
                        <div class="opcion consultar">
                            <a class="btn" href=""><i class="fa fa-comment"></i>   Realizar una consulta</a>
                        </div>
                        <div class="opcion denunciar">
                            <a class="btn" href=""><i class="fa fa-user-times"></i>   Denunciar prestador</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <h2 class="titulo-detalle">Calificación y opiniones</h2>
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

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDuX4NPHQOStt_DHvGVDbkbAWfL8XiG01s&callback"
  type="text/javascript"></script>
<script type="text/javascript">
	//obtenemos la informacion de la base de datos enviada a traves de laravel
	const profesional = @json($profesional);

	//creamos un mapa y lo asignamos al div con id mapa
	var mapa = new google.maps.Map(document.getElementById('mapa'),{
		center: {lat: -27.450977, lng: -58.986980}, 
		scrollwheel: false,
	    zoom: 15,
	    zoomControl: true,
	    rotateControl : false,
	    mapTypeControl: true,
	    streetViewControl: false,
	})

	//instanciamos un marcador
	const marker = new google.maps.Marker();

	//instanciamos geocoder
	const geocoder = new google.maps.Geocoder();

	//obtenemos la direccion
	const address = profesional.direccion+" "+profesional.localidad + ' ' + 'chaco argentina';

	geocoder.geocode({'address': address}, function(results, status){
			if(status == 'OK')
			{
				marker.setPosition(results[0].geometry.location)
				marker.setMap(mapa)
				mapa.setCenter(results[0].geometry.location)
			}else{
				console.log('Ocurrio un error')
			}
		})



</script>
@endsection
