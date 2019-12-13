@extends('plantilla')

@section('contenido')
      
<div class="container-extend justify-content-center site-section mt-3">

  <!-- Titulo -->
  <div class="row mt-5">
    <div class="col-md-8 ">
      <h2 class=" card-text">Ruta Casco Historico</h2>
      <p class="color-black-opacity-5">Conoce las edificaciones mas imporantes de la ciudad</p>
    </div>
  </div>
  <!-- Listado Eventos -->
  

  
  <div class="row justify-content-center ">
      <div id="map" style="width:90%; height:400px"></div>
  </div>
</div>


<script>
     
  function addMarkerToGroup(group, coordinate, html) {
  var marker = new H.map.Marker(coordinate);
  // add custom data to the marker
  marker.setData(html);
  group.addObject(marker);
}

/**
 * Add two markers showing the position of Liverpool and Manchester City football clubs.
 * Clicking on a marker opens an infobubble which holds HTML content related to the marker.
 * @param  {H.Map} map      A HERE Map instance within the application
 */
function addInfoBubble(map) {
  var group = new H.map.Group();

  map.addObject(group);

  // add 'tap' event listener, that opens info bubble, to the group
  group.addEventListener('tap', function (evt) {
    // event target is the marker itself, group is a parent event target
    // for all objects that it contains
    var bubble =  new H.ui.InfoBubble(evt.target.getGeometry(), {
      // read custom data
      content: evt.target.getData()
    });
    // show info bubble
    ui.addBubble(bubble);
  }, false);

  addMarkerToGroup(group, {lat:-22.479859, lng:-68.929305},
  '<div style="width:200px"><img class="w-100" src="template2/images/Fondo2.jpg" ></div>  <div class="text-center"><h4>Parque el Loa</h4><p>Inaugurada en la década de 1960, ampliada en 1998, es un lugar diverso donde se venden frutas y verduras traídas de los pueblos de Alto el Loa...</p></div>'); 

  addMarkerToGroup(group, {lat:-22.462757, lng:-68.906366},' <h1>Cementerio Municipal</h1> ' );

  addMarkerToGroup(group, {lat:-22.459376, lng:-68.921395},'Estación de tren y Estadio' );

  addMarkerToGroup(group, {lat:-22.481065, lng: -68.942658},'Chunchurun');


}

/**
 * Boilerplate map initialization code starts below:
 */

// initialize communication with the platform
// In your own code, replace variable window.apikey with your own apikey
var platform = new H.service.Platform({
  'apikey': 'RMYfIbHj8enSZO2qI4ojFKC4clcClrGgMifRzrX5yAA'
});
var defaultLayers = platform.createDefaultLayers();

// initialize a map - this map is centered over Europe
var map = new H.Map(document.getElementById('map'),
  defaultLayers.vector.normal.map,{
  center: {lat:-22.466019, lng:-68.927445},
  zoom: 14,
  pixelRatio: window.devicePixelRatio || 1
});
// add a resize listener to make sure that the map occupies the whole container
window.addEventListener('resize', () => map.getViewPort().resize());

// MapEvents enables the event system
// Behavior implements default interactions for pan/zoom (also on mobile touch environments)
var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));

// create default UI with layers provided by the platform
var ui = H.ui.UI.createDefault(map, defaultLayers);

// Now use the map as required...
addInfoBubble(map); 

</script>
@endsection




