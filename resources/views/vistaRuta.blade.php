@extends('plantilla')

@section('contenido')
      
<div class="container-extend justify-content-center site-section mt-3">

  <!-- Titulo -->
  <div class="row mt-5">
    <div class="col-md-8 ">
      <h2 class=" card-text">Ruta Casco Historico</h2>
      <p class="color-black-opacity-5">Descubre todas las actividades culturales que se realizan dentro de la ciudad de Calama</p>
    </div>
  </div>

  <!-- Listado Eventos -->

  <style>  #mapid { height: 50vh; width: 50vh; } </style>
  
  <div class=" ">
      <div id="mapid"></div>
  </div>

</div>

<script src="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.js"></script>
  
<script>
var mymap = L.map('mapid').setView([-22.440543, -68.919296], 12);
var marker = L.marker([-22.440543, -68.919296]).addTo(mymap);
marker.bindPopup("<b>Hello world!</b><br>I am a popup.").openPopup();


L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {

        
    }).addTo(mymap);

var popup = L.popup();

function onMapClick(marker) {
    popup
        .setLatLng(e.latlng)
        .setContent("You clicked the map at " + e.latlng.toString())
        .openOn(mymap);
}

mymap.on('click', onMapClick);
</script>
@endsection




