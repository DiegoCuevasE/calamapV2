@extends('plantilla')

@section('contenido')
      
<div class="container site-section mt-5">

  <!-- Titulo -->
  <div class="row mb-5 mt-5">
    <div class="col-md-8 ">
      <h2 class=" card-text">Conoce sobre {{$sitio->nombre_turistico}}</h2>
      <p class="color-black-opacity-5">Descubre los lugares turisticos de la ciudad</p>
    </div>
    <div class="col-md-4 float-right" >
      <form class="form-inline md-form mr-auto mb-4">
        <input class="form-control mr-sm-1 " type="text" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-elegant btn-rounded btn-sm my-0"  type="submit">Buscar</button>
      </form>
    </div>
  </div>

        
  <!-- Sitios turisticos -->
  <div class=" justify-content-center">
      <div class=" row ">

      <div class="col-lg-8">
        <div class="card">
          <div class="view overlay">
            @foreach ($sitio->imagenSitioTuristicos as $imagen)
            @if ($imagen->tipo_imagen_turistico == 'portada')
            <img class="card-img-top" src="{{$imagen->enlace_imagen_turistico}}" alt="Card image cap">
            <a href="#!">
            <div class="mask rgba-white-slight"></div>
            </a>
            @endif
            @endforeach
          </div>
          <div class="card-body secciones">
              <div class="d-xl-inline-block">
                  <ul class="tabs js-clone-nav ml-auto list-unstyled d-flex text-right mb-0 " data-class="social">
                      <li><a href="#informacion" class="pr-2 font-weight-bold"><u>Información</u> </a></li>
                      <li><a href="#fotos" class="pr-2 font-weight-bold"><u>Fotos y videos</u></a></li>
                      <li><a href="#mapa" class="pr-2 font-weight-bold"><u>ubicación</u> </a></li>
                  </ul>
              </div>
              <article id="informacion">
                  <div class="row ">
                      <div class="mt-3 col-lg-6">
                          <h6 class=" mb-2 ">Dirección</h6>
                          <p class="card-text ">{{$sitio->direccion_turistico}}</p>
                      </div>
                      <div class="mt-3 col-lg-6">
                          <h6 class="card-tite mb-2">Servicios</h6>
                          <p class="card-text ">
                            @foreach ($sitio->servicios as $servicio)
                            {{$servicio->nombre_servicio}},
                            @endforeach
                          </p>
                      </div>
                      <div class="mt-3 col-lg-6">
                          <h6 class="card-title mb-2">Entrada</h6>
                          <p class="card-text ">{{$sitio->entrada_sitio=="0" ? 'Liberada':'' }}</p>
                      </div>
                      <div class="mt-3 col-lg-12 ">
                          <h6 class=" mb-2 ">Sobre {{$sitio->nombre_turistico}}</h6>
                          <p class="card-text "> {{$sitio->descripcion_turistico}}</p>
                      </div>
                  </div>
              </article>
              <article id="fotos">
                  <div class="row ">
                      <div class="mt-3 col-12">
                          <h6 class=" mb-2 ">Descubre más de {{$sitio->nombre_turistico}}</h6>
                      </div>
                      <div class="mt-3 col-12 row">
                          @foreach ($sitio->imagenSitioTuristicos as $imagen)
                          @if ($imagen->tipo_imagen_turistico == 'galeria')   
                          <div class="col-lg-4 col-sm-4 col-md-4">
                              <div class="card mb-4">
                                  <div class="view overlay">
                                      <img class="card-img-top" src="{{$imagen->enlace_imagen_turistico}}" alt="Card image cap">
                                      <a href="#!">
                                      <div class="mask rgba-white-slight"></div>
                                      </a>
                                  </div>
                              </div>
                          </div>
                          @endif
                          @endforeach
                      </div>
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
      function addMarkersToMap(map) {
        var parisMarker = new H.map.Marker({lat:<?php echo $sitio->latitud_turistico; ?>, lng:<?php echo $sitio->longitud_turistico; ?>});
        map.addObject(parisMarker);
    
    }

    function calculateRouteFromAtoB (platform) {
      var router = platform.getRoutingService(),
        routeRequestParams = {
          mode: 'shortest;pedestrian',
          representation: 'display',
          waypoint0: '<?php echo $sitio->latitud_turistico; ?>,<?php echo $sitio->longitud_turistico; ?>', 
          waypoint1: '-22.458138,-68.922977',  // Tate Modern
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
      center: {lat:<?php echo $sitio->latitud_turistico; ?>, lng:<?php echo $sitio->longitud_turistico; ?>},
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