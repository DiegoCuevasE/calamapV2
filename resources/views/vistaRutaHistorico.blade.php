@extends('plantilla')

@section('contenido')
      
<div class="container-extend justify-content-center site-section mt-3">

  <!-- Titulo -->
  <div class="row mt-5">
    <div class="col-md-8 ">
      <h2 class=" card-text">Ruta Casco Histórico</h2>
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

  addMarkerToGroup(group, {lat:-22.458523, lng:-68.925174},
  '<div style="width:200px"><img class="w-100" src="template2/imagenRutas/feriaModelo.jpg" ></div>'+
  '<div class="text-center"><h4>Feria Modelo</h4><p>Inaugurada en la década de 1960, ampliada en 1998, es un lugar diverso donde se venden frutas y verduras traídas de los pueblos de Alto el Loa...</p></div>'); 

  addMarkerToGroup(group, {lat:-22.461230, lng:-68.925873},
  '<div style="width:200px"><img class="w-100" src="template2/imagenRutas/Mercado.jpg" ></div>'+
  '<div class="text-center"><h4>Mercado Municipal</h4><p>Principal calle comercial de la ciudad. El mercado central fue inaugurado en la década de 1930.</p></div>'); 
  addMarkerToGroup(group, {lat:-22.462375, lng:-68.927176},
  '<div style="width:200px"><img class="w-100" src="template2/imagenRutas/Plaza.jpg" ></div>'+
  '<div class="text-center"><h4>Plaza de Armas</h4><p>La Plaza 23 de marzo se alza como uno de los símbolos de la ciudad en la que se congrega en tono a diferentes manifestaciones culturales y artísticas</p></div>'); 

  addMarkerToGroup(group, {lat:-22.461960, lng:-68.926274},
  '<div style="width:200px"><img class="w-100" src="template2/imagenRutas/Paseo.jpg" ></div>'+
  '<div class="text-center"><h4>Paseo Ramírez</h4><p>Ubicado en céntrica calle Eleuterio Ramírez, es el centro del comercio de Calama. Debe su nombre al héroe nacional Eleuterio Ramírez Molina, conocido también como el León de Tarapacá.</p></div>'); 


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
  center: {lat:-22.459191, lng:-68.925947},
  zoom: 16,
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




