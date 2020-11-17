@extends('layout')
@section('title', 'Inscripción')

@section('content')
    <section class="py-4" id="inscripcion">
        <div class="filters-container d-flex justify-content-center flex-column align-items-center" style="width: 100%; height: 205px; background-color: white;">
            <div class="filters-container d-flex justify-content-center flex-column align-items-center">
                <div class="row text-center">
                    <h3 class="filter-title">¿QUÉ OFICIOS ESTÁS BUSCANDO?</h3>
                </div>
                <div class="row d-flex justify-content-center w-75 mb-4">
        
                    <div class="col-md-4 col-sm-10 col-xs-11 d-flex justify-content-center">
                        <select class="form-control">
                            
                            @foreach ($localidades as $loc)
                                @if ($loc->id == $localidad)
                                <option value="{{ $loc->id }}" selected>{{ $loc->nombre }}</option>
                                @else
                                <option value="{{ $loc->id }}">{{ $loc->nombre }}</option>
                                @endif    
                            @endforeach
                        </select>
                    </div>
                        <div class="col-md-4 col-sm-10 col-xs-11 d-flex justify-content-center">
                            <select class="form-control" id="list_oficio">
                                <option value="" disabled selected>Seleccionar</option>
                                @foreach ($listaoficio as $lista)
                                    @if($lista['Oficio']->id == $oficio)
                                    <option value="{{$lista['Oficio']->id }}" selected>{{$lista['Oficio']->nombre }}</option>
                                    @else
                                    <option value="{{$lista['Oficio']->id }}">{{$lista['Oficio']->nombre }}</option>
                                    @endif
                                @endforeach
                            </select>					
                        </div>
                        <div class="col-md-4 col-sm-10 col-xs-11 d-flex justify-content-center">
                                <select id="list_especialidad" class="form-control">
                                </select>
                        </div>
                </div>		
                    
                <div class="row d-flex justify-content-center w-75 mb-4">
                        <div class="col-md-4 d-flex justify-content-center">
                            <input type="text" placeholder="Apellido" name="last_name" class="form-control" value="{{ $apellido }}">
                        </div>
                        <div class="col-md-4 d-flex justify-content-center">
						    <input type="text" placeholder="Nombre" name="name" class="form-control" value="{{ $nombre }}">
					    </div>
                        <div class="col-md-4 col-sm-10 col-xs-11 d-flex justify-content-center">
                            <button type="submit" class="btn hw-btn-orange hvr-sweep-to-right w-100" >Buscar</button>
                        </div>
                </div>  
            </div>
	</div>
    <div class="container" style="margin-bottom: 25px" id="results-cards-container">
		<div class="row">
			@if(count($resultados) == 0)
            <div class="alert alert-danger mt-4 ml-4" role="alert">
                No se encontraron resultados que coincidan con tu búsqueda :(
            </div>
            @else
            <div class="col-md-7 col-sm-10 col-xs-12 d-flex justify-content-center mt-3">
				<div class="row d-flex justify-content-center">
                    @foreach ($resultados as $resultado)
                    <a href="{{ url('/prestador/'.$resultado->prestadorID) }}" style="text-decoration: none;">
                        <div class="oficios-card pt-3">
                            <div class="card-img-container d-flex justify-content-center">
                                <div class="card-image"></div>
                            </div>
                            <div class="card-info-container d-flex flex-column align-items-center">
                                <span class="card-name">{{ $resultado->name}} {{ $resultado->lastname}}</span>
                                <span class="card-oficio">{{ $resultado->oficio}}</span>
                                <span class="card-localidad"> <img src="/location-icon.svg" width="9px" style="{margin-right: 2px;}"/>{{ $resultado->localidades}}</span>
                            </div>
                            <div class="card-overlay">
                                <button class="card-btn">ver perfil</button>
                            </div>
				        </div>
                    </a>
                    @endforeach
                </div>
			</div>
			<div class="col-md-4 map-container">
				<div id="mapa"></div>
			</div>
            @endif
		</div>
	</div>
    </section>

 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDuX4NPHQOStt_DHvGVDbkbAWfL8XiG01s&callback"
  type="text/javascript"></script>
<!-- select list_especialidad -->
<script  type="text/javascript">
	$(document).ready(function(){
		const listaoficio = @json($listaoficio);

		function loadEspecialidades() {
			$('#list_especialidad').find('option').remove();
			var list_oficio_id = $('#list_oficio').val();
			listaoficio.forEach(element => {
				if ($.trim(list_oficio_id) == element.Oficio.id) {
					$('#list_especialidad').append(`<option value="" selected>Seleccionar</option>`); 
					element.Especialidades.forEach(especialidad => {
						$('#list_especialidad').append(`<option value="${especialidad.id}">${especialidad.nombre}</option>`); 
					});
				}
			});
		}
		loadEspecialidades();
		$('#list_oficio').on('change', loadEspecialidades);
	})
</script>	
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
