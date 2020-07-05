<h2>{{ $profesional->nombre }} {{ $profesional->apellido }}</h2>

<p>Rubro: {{ $profesional->rubro }}</p>
<p>Localidad: {{ $profesional->localidad }}</p>
<p>Direccion: {{ $profesional->direccion }}</p>
<p>Ubicación Actual: {{ $profesional->ubicacion_actual }}</p>
<p>Teléfono: {{ $profesional->telefono }}</p>
<p>Sitio Web: {{ $profesional->web }}</p>

<div id="mapa" style="width: 450px; height: 350px;"> </div>

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