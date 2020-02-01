@extends('plantilla')

@section('contenido')
      
<div class="container site-section mt-5">

  <!-- Titulo -->
  <div class="row mb-5 mt-5 justify-content-between">
    <div class="col-md-8 ">
      <h2 class=" card-text">Eventos en Ckalama</h2>
      <button onclick="getLocation()">Try It</button>
<p id="demo"></p>

      <p class="color-black-opacity-5">Descubre todas las actividades culturales que se realizan dentro de la ciudad de Calama</p>
    </div>
    <div class="col-md-4 justify-content-end" >
      <form class="form-inline md-form mr-auto mb-4">
        <input class="form-control mr-sm-1 " type="text" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-elegant btn-rounded btn-sm my-0"  type="submit">Buscar</button>
      </form>
    </div>
  </div>

  <!-- Listado Eventos -->
    <div class="">
      <div class=" mb-4">
        <div class="card-body secciones mb-2">
          <div class=" col-md-12 " >
            <div class="row mb-5 mt-3 justify-content-center">
              <button type="button" class="btn btn-amber btn-rounded col-md-2 col-sm-5">Primavera</button>
              <button type="button" class="btn btn-amber btn-rounded col-md-2 col-sm-5">Otoño</button>
              <button type="button" class="btn btn-amber btn-rounded col-md-2 col-sm-5">Invierno</button>
              <button type="button" class="btn btn-amber btn-rounded col-md-2 col-sm-5">Verano</button>
            </div>
          </div>
          
          <div class="row justify-content-around">
              <div class="col-md-5 ">
                <div class="list-group list-group-flush" id="list-tab" role="tablist">
                  @foreach($eventos as $tEvento)
                  <a class="list-group-item list-group-item-action " id="{{$tEvento->id}}" data-toggle="list" href="#{{$tEvento->id}}" role="tab" aria-controls="home">
                    <div class="d-flex justify-content-between">
                      <p class="mb-2 font-weight-bold ">{{$tEvento->titulo_evento}}</p>
                      <small>{{$tEvento->fecha_inicio_evento}}</small>
                    </div>
                  </a>
                  @endforeach
                </div>
              </div>
              <div class="col-md-5 ">
                <div class="tab-content" id="nav-tabContent">

                  <div class="tab-pane fade show active " id="{{$evento->id}}" >
                      <div class=" justify-content-center">
                          <div class="card-deck row ">
                            <div class="card">
                                <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
                                    <!--Indicadores-->
                                    <ol class="carousel-indicators">
                                      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                                      <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                                      <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                                      <li data-target="#carousel-example-1z" data-slide-to="3"></li>
                                    </ol>
                                    <!--Slides-->
                                    <div class="carousel-inner" role="listbox">
                                      @foreach ($evento->imageneventos as $imagen)  
                                      @if ($imagen->tipo_imagen_evento == 'portada')  
                                      <div class="carousel-item active">
                                        <img class="d-block w-100" src="../{{$imagen->enlace_imagen_evento}}" alt="First slide">
                                      </div>
                                      @elseif($imagen->tipo_imagen_evento == 'galeria') 
                                      <div class="carousel-item">
                                        <img class="d-block w-100" src="../{{$imagen->enlace_imagen_evento}}" alt="Second slide">
                                      </div>
                                      @endif
                                      @endforeach
                                    </div>
                                    <!--Flechas-->
                                    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Next</span>
                                    </a>
                                  </div>
                                
                              <div class="card-body secciones">
                                  <div class="d-xl-inline-block">
                                      <ul class="tabs js-clone-nav ml-auto list-unstyled d-flex text-right mb-0 " data-class="social">
                                          <li><a href="#informacion" class="pr-2 font-weight-bold"><u>Información</u> </a></li>
                                          <li><a href="#mapa" class="pr-2 font-weight-bold"><u>ubicación</u> </a></li>
                                      </ul>
                                  </div>

                                  <article id="informacion">
                                  <div class="">
                                  <p class="card-title h5">{{$evento->titulo_evento}}</p>
                                  </div>
                                  <div class="row my-auto">
                                    <div class="col-md-6 d-flex text-right">
                                      <i class="far fa-calendar-alt fa-lg mr-2"></i>
                                      <p class="card-title">{{$evento->fecha_inicio_evento}}</p>
                                    </div>
                                    <div class="col-md-6 d-flex text-right">
                                        <i class="fas fa-map-marker-alt fa-lg mr-2"></i>
                                        <p class="card-title">{{$evento->direccion_evento}}</p>
                                      </div>
                                  </div>
                                  <div class="card-text">
                                    <p>
                                        {{$evento->descripcion_evento}}
                                     </p>                                
                                  </div>
                                </article>
                                <article id="mapa">
                                  <div class="row ">
                                      <div class="mt-3 col-lg-12">
                                        <h6 class=" mb-2 ">Encuentralo en el mapa!</h6>
                                        <div id="map" style="width:100%; height:400px"></div>
                                        <div id="panel"></div>
                                      </div>
                                    </div>
                                </article>  
                              </div>
                            </div>
                          </div>
                        </div>
                  </div>

                  <div class="tab-pane fade" id="2"  >
                      <div class=" justify-content-center">
                          <div class="card-deck row ">
                            <div class="card">
                                <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
                                    <!--Indicadores-->
                                    <ol class="carousel-indicators">
                                      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                                      <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                                      <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                                    </ol>
                                    <!--Slides-->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="carousel-item active">
                                        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(141).jpg" alt="First slide">
                                      </div>
                                      <div class="carousel-item">
                                        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(136).jpg" alt="Second slide">
                                      </div>
                                      <div class="carousel-item">
                                        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(137).jpg" alt="Third slide">
                                      </div>
                                    </div>
                                    <!--Flechas-->
                                    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Next</span>
                                    </a>
                                  </div>
                                
                              <div class="card-body secciones">
                                  <div class="">
                                      <p class="card-title h5">Limpieza de canales</p>
                                  </div>
                                  <div class="row my-auto">
                                    <div class="col-md-6 d-flex text-right">
                                      <i class="far fa-calendar-alt fa-lg mr-2"></i>
                                      <p class="card-title">15 de Febrero</p>
                                    </div>
                                    <div class="col-md-6 d-flex text-right">
                                        <i class="fas fa-map-marker-alt fa-lg mr-2"></i>
                                        <p class="card-title">Plaza Calama</p>
                                      </div>
                                  </div>
                                  <div class="card-text">
                                    <p>
                                      Cupidatat quis ad sint excepteur laborum in esse qui. Et excepteur consectetur ex nisi eu do cillum ad
                                      laborum. Mollit et eu officia dolore sunt Lorem culpa qui commodo velit ex amet id ex. Officia anim
                                      incididunt laboris deserunt <br><br>
                                      anim aute dolor incididunt veniam aute dolore do exercitation. Dolor nisi
                                      culpa ex ad irure in elit eu dolore. Ad laboris ipsum reprehenderit irure non commodo enim culpa
                                      commodo veniam incididunt veniam. 
                                     </p>                                
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>  
                  </div>

                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
</div>
<script src="{{ asset('template2/js/jquery-3.3.1.min.js') }}"></script>

<script>
    $(document).ready(function(){
        $('.secciones article').hide();
        $('.secciones article:first').show();

        $('ul.tabs li a').click(function(){
            $('this').addClass('active');
            $('.secciones article').hide();

            var activeTab = $(this).attr('href');
            $(activeTab).show();
            return false;

        });

        
    });
  </script>

  <script>
    var x = document.getElementById("demo");
    var uLa = "nada";
    var uLo = "nada2";
    function getLocation() {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
        
      } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
      }
    }
    
    function showPosition(position) {

      var uLa = position.coords.latitude;
      var uLo = position.coords.longitude;

    }

  </script>

  <script>
    


    function addMarkersToMap(map) {
      var parisMarker = new H.map.Marker({lat:<?php echo $evento->latitud_evento; ?>, lng:<?php echo $evento->longitud_evento; ?>});
      map.addObject(parisMarker);
  
  }
  
  
  function calculateRouteFromAtoB (platform) {
    
    var router = platform.getRoutingService(),
      routeRequestParams = {
        mode: 'shortest;pedestrian',
        representation: 'display',
        waypoint0: '<?php echo $evento->latitud_evento; ?>,<?php echo $evento->longitud_evento; ?>', 
        waypoint1: uLa,uLo,  // Tate Modern
        routeattributes: 'waypoints,summary,shape,legs',
        maneuverattributes: 'direction,action'
      };
  
  
    router.calculateRoute(
      routeRequestParams,
      onSuccess,
      onError
    );
  }


  function onSuccess(result) {
    var route = result.response.route[0];
   /*
    * The styling of the route response on the map is entirely under the developer's control.
    * A representitive styling can be found the full JS + HTML code of this example
    * in the functions below:
    */
    addRouteShapeToMap(route);
    addManueversToMap(route);
  
    addWaypointsToPanel(route.waypoint);
    addManueversToPanel(route);
    addSummaryToPanel(route.summary);
    // ... etc.
  }
  
  /**
   * This function will be called if a communication error occurs during the JSON-P request
   * @param  {Object} error  The error message received.
   */
  function onError(error) {
    alert('Can\'t reach the remote server');
  }

  
  /**
   * Boilerplate map initialization code starts below:
   */
  
  //Step 1: initialize communication with the platform
  // In your own code, replace variable window.apikey with your own apikey
  var platform = new H.service.Platform({
    'apikey': 'RMYfIbHj8enSZO2qI4ojFKC4clcClrGgMifRzrX5yAA'
  });
  var defaultLayers = platform.createDefaultLayers();
  
  //Step 2: initialize a map - this map is centered over Europe
  var map = new H.Map(document.getElementById('map'),
    defaultLayers.vector.normal.map,{
    center: {lat:<?php echo $evento->latitud_evento; ?>, lng:<?php echo $evento->longitud_evento; ?>},
    zoom: 15,
    pixelRatio: window.devicePixelRatio || 1
  });
  // add a resize listener to make sure that the map occupies the whole container
  window.addEventListener('resize', () => map.getViewPort().resize());
  
  //Step 3: make the map interactive
  // MapEvents enables the event system
  // Behavior implements default interactions for pan/zoom (also on mobile touch environments)
  var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));
  
  // Create the default UI components
  var ui = H.ui.UI.createDefault(map, defaultLayers, 'es-ES');
  
  



  var bubble;

  /**
   * Opens/Closes a infobubble
   * @param  {H.geo.Point} position     The location on the map.
   * @param  {String} text              The contents of the infobubble.
   */
  function openBubble(position, text){
   if(!bubble){
      bubble =  new H.ui.InfoBubble(
        position,
        // The FO property holds the province name.
        {content: text});
      ui.addBubble(bubble);
    } else {
      bubble.setPosition(position);
      bubble.setContent(text);
      bubble.open();
    }
  }
  
  
  /**
   * Creates a H.map.Polyline from the shape of the route and adds it to the map.
   * @param {Object} route A route as received from the H.service.RoutingService
   */
  function addRouteShapeToMap(route){
    var lineString = new H.geo.LineString(),
      routeShape = route.shape,
      polyline;
  
    routeShape.forEach(function(point) {
      var parts = point.split(',');
      lineString.pushLatLngAlt(parts[0], parts[1]);
    });
  
    polyline = new H.map.Polyline(lineString, {
      style: {
        lineWidth: 4,
        strokeColor: 'rgba(0, 128, 255, 0.7)'
      }
    });
    // Add the polyline to the map
    map.addObject(polyline);
    // And zoom to its bounding rectangle
    map.getViewModel().setLookAtData({
      bounds: polyline.getBoundingBox()
    });
  }
  
  
  /**
   * Creates a series of H.map.Marker points from the route and adds them to the map.
   * @param {Object} route  A route as received from the H.service.RoutingService
   */
  function addManueversToMap(route){
    var svgMarkup = '<svg width="18" height="18" ' +
      'xmlns="http://www.w3.org/2000/svg">' +
      '<circle cx="8" cy="8" r="8" ' +
        'fill="#1b468d" stroke="white" stroke-width="1"  />' +
      '</svg>',
      dotIcon = new H.map.Icon(svgMarkup, {anchor: {x:8, y:8}}),
      group = new  H.map.Group(),
      i,
      j;
  
    // Add a marker for each maneuver
    for (i = 0;  i < route.leg.length; i += 1) {
      for (j = 0;  j < route.leg[i].maneuver.length; j += 1) {
        // Get the next maneuver.
        maneuver = route.leg[i].maneuver[j];
        // Add a marker to the maneuvers group
        var marker =  new H.map.Marker({
          lat: maneuver.position.latitude,
          lng: maneuver.position.longitude} ,
          {icon: dotIcon});
        marker.instruction = maneuver.instruction;
        group.addObject(marker);
      }
    }
  
    group.addEventListener('tap', function (evt) {
      map.setCenter(evt.target.getGeometry());
      openBubble(
         evt.target.getGeometry(), evt.target.instruction);
    }, false);
  
    // Add the maneuvers group to the map
    map.addObject(group);
  }
  
  
  /**
   * Creates a series of H.map.Marker points from the route and adds them to the map.
   * @param {Object} route  A route as received from the H.service.RoutingService
   */
  function addWaypointsToPanel(waypoints){
  
  
  
    var nodeH3 = document.createElement('h3'),
      waypointLabels = [],
      i;
  
  
     for (i = 0;  i < waypoints.length; i += 1) {
      waypointLabels.push(waypoints[i].label)
     }
  
     nodeH3.textContent = waypointLabels.join(' - ');
  
    routeInstructionsContainer.innerHTML = '';
    routeInstructionsContainer.appendChild(nodeH3);
  }
  
  /**
   * Creates a series of H.map.Marker points from the route and adds them to the map.
   * @param {Object} route  A route as received from the H.service.RoutingService
   */
  function addSummaryToPanel(summary){
    var summaryDiv = document.createElement('div'),
     content = '';
     content += '<b>Total distance</b>: ' + summary.distance  + 'm. <br/>';
     content += '<b>Travel Time</b>: ' + summary.travelTime.toMMSS() + ' (in current traffic)';
  
  
    summaryDiv.style.fontSize = 'small';
    summaryDiv.style.marginLeft ='5%';
    summaryDiv.style.marginRight ='5%';
    summaryDiv.innerHTML = content;
    routeInstructionsContainer.appendChild(summaryDiv);
  }
  
  /**
   * Creates a series of H.map.Marker points from the route and adds them to the map.
   * @param {Object} route  A route as received from the H.service.RoutingService
   */
  function addManueversToPanel(route){
  
  
  
    var nodeOL = document.createElement('ol'),
      i,
      j;
  
    nodeOL.style.fontSize = 'small';
    nodeOL.style.marginLeft ='5%';
    nodeOL.style.marginRight ='5%';
    nodeOL.className = 'directions';
  
       // Add a marker for each maneuver
    for (i = 0;  i < route.leg.length; i += 1) {
      for (j = 0;  j < route.leg[i].maneuver.length; j += 1) {
        // Get the next maneuver.
        maneuver = route.leg[i].maneuver[j];
  
        var li = document.createElement('li'),
          spanArrow = document.createElement('span'),
          spanInstruction = document.createElement('span');
  
        spanArrow.className = 'arrow '  + maneuver.action;
        spanInstruction.innerHTML = maneuver.instruction;
        li.appendChild(spanArrow);
        li.appendChild(spanInstruction);
  
        nodeOL.appendChild(li);
      }
    }
  
    routeInstructionsContainer.appendChild(nodeOL);
  }
  
  
  Number.prototype.toMMSS = function () {
    return  Math.floor(this / 60)  +' minutes '+ (this % 60)  + ' seconds.';
  }
  
  // Now use the map as required...
  calculateRouteFromAtoB (platform);


  window.onload = function () {
    addMarkersToMap(map);
  }
    </script>


@endsection