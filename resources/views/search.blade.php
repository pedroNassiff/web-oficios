@extends('layout')
@section('title', 'Inscripción')

@section('content')
    <section class="py-4" id="inscripcion">
        <div class="filters-container d-flex justify-content-center flex-column align-items-center" style="width: 100%; height: 205px; background-color: white;">
		<div class="row text-center">
			<h3 class="filter-title">¿QUÉ OFICIOS ESTÁS BUSCANDO?</h3>
		</div>
		<div class="row d-flex justify-content-center">
				<div class="col-md-4">
					<input type="text" placeholder="Nombre y Apellido" class="input-filter">
				</div>
				<div class="col-md-4">
					<select class="input-filter">
						<option value="value1">Option 1</option>
						<option value="value2">Option 2</option>
					</select>
				</div>
				<div class="col-md-4">
					<select class="input-filter">
						<option value="value1">Option 1</option>
						<option value="value2">Option 2</option>
					</select>					
				</div>
		</div>		
			
		<div class="row d-flex justify-content-center">
				<div class="col-md-4">
					<select class="input-filter" style="margin-right:394px">
						<option value="value1">Option 1</option>
						<option value="value2">Option 2</option>
					</select>
				</div>
				<div class="col-md-4">
					<button class="input-filter btn-filter-buscar">Buscar</button>
				</div>
		</div>
	</div>
    <div class="container" style="margin-bottom: 25px">
		<div class="row">
			<div class="col-md-7 d-flex justify-content-center mt-3">
				<div class="row">
                    <div class="oficios-card pt-3">
                        <div class="card-img-container d-flex justify-content-center">
                            <div class="card-image"></div>
                        </div>
                        <div class="card-info-container d-flex flex-column align-items-center">
                            <span class="card-name">Sebastián Rodriguez</span>
                            <span class="card-oficio">Electricista</span>
                            <span class="card-localidad"> <img src="/location-icon.svg" width="9px" style="{margin-right: 2px;}"/>Margarita Belén</span>
                        </div>
                        <div class="card-overlay">
                            <button class="card-btn">ver perfil</button>
                        </div>
				    </div>
                    <div class="oficios-card pt-3">
                        <div class="card-img-container d-flex justify-content-center">
                            <div class="card-image"></div>
                        </div>
                        <div class="card-info-container d-flex flex-column align-items-center">
                            <span class="card-name">Sebastián Rodriguez</span>
                            <span class="card-oficio">Electricista</span>
                            <span class="card-localidad"> <img src="/location-icon.svg" width="9px" style="{margin-right: 2px;}"/>Margarita Belén</span>
                        </div>
                        <div class="card-overlay">
                            <button class="card-btn">ver perfil</button>
                        </div>
				    </div>
                    <div class="oficios-card pt-3">
                        <div class="card-img-container d-flex justify-content-center">
                            <div class="card-image"></div>
                        </div>
                        <div class="card-info-container d-flex flex-column align-items-center">
                            <span class="card-name">Sebastián Rodriguez</span>
                            <span class="card-oficio">Electricista</span>
                            <span class="card-localidad"> <img src="/location-icon.svg" width="9px" style="{margin-right: 2px;}"/>Margarita Belén</span>
                        </div>
                        <div class="card-overlay">
                            <button class="card-btn">ver perfil</button>
                        </div>
				    </div>
                    <div class="oficios-card pt-3">
                        <div class="card-img-container d-flex justify-content-center">
                            <div class="card-image"></div>
                        </div>
                        <div class="card-info-container d-flex flex-column align-items-center">
                            <span class="card-name">Sebastián Rodriguez</span>
                            <span class="card-oficio">Electricista</span>
                            <span class="card-localidad"> <img src="/location-icon.svg" width="9px" style="{margin-right: 2px;}"/>Margarita Belén</span>
                        </div>
                        <div class="card-overlay">
                            <button class="card-btn">ver perfil</button>
                        </div>
				    </div>
                    <div class="oficios-card pt-3">
                        <div class="card-img-container d-flex justify-content-center">
                            <div class="card-image"></div>
                        </div>
                        <div class="card-info-container d-flex flex-column align-items-center">
                            <span class="card-name">Sebastián Rodriguez</span>
                            <span class="card-oficio">Electricista</span>
                            <span class="card-localidad"> <img src="/location-icon.svg" width="9px" style="{margin-right: 2px;}"/>Margarita Belén</span>
                        </div>
                        <div class="card-overlay">
                            <button class="card-btn">ver perfil</button>
                        </div>
				    </div>
                    <div class="oficios-card pt-3">
                        <div class="card-img-container d-flex justify-content-center">
                            <div class="card-image"></div>
                        </div>
                        <div class="card-info-container d-flex flex-column align-items-center">
                            <span class="card-name">Sebastián Rodriguez</span>
                            <span class="card-oficio">Electricista</span>
                            <span class="card-localidad"> <img src="/location-icon.svg" width="9px" style="{margin-right: 2px;}"/>Margarita Belén</span>
                        </div>
                        <div class="card-overlay">
                            <button class="card-btn">ver perfil</button>
                        </div>
				    </div>
                </div>
			</div>
			<div class="col-md-4 map-container">
				<div id="mapa"></div>
			</div>
		</div>
	</div>
    </section>

 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDuX4NPHQOStt_DHvGVDbkbAWfL8XiG01s&callback"
  type="text/javascript"></script>

  <script>
    var mapa = new google.maps.Map(document.getElementById('mapa'),{
		center: {lat: -27.450977, lng: -58.986980}, 
		scrollwheel: false,
	    zoom: 15,
	    zoomControl: true,
	    rotateControl : false,
	    mapTypeControl: true,
	    streetViewControl: false,
	})

	const geocoder = new google.maps.Geocoder();
  
  </script>

@endsection
