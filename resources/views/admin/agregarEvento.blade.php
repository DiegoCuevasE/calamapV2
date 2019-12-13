@extends('admin/dashboard')

@section('panel')

<div class="content">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header card-header-warning">
            <div class="d-flex">
            <i class="material-icons mr-2">event</i>
            <h4 class="card-title font-weight-bold">Agregar Evento</h4>
            </div>
            <p class="card-category">Ingrese todos los datos solicitados para añadir el evento a la plataforma</p>
          </div>
          <div class="card-body">
            <form action="{{ route('registrarEvento')}}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}   
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Nombre del evento</label>
                    <input type="text" id="titulo_evento" name="titulo_evento" class="form-control" >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Dirección</label>
                    <input type="text" id="direccion_evento" name="direccion_evento" class="form-control">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="entrada_evento">Entrada&nbsp;<span class="text-danger">*</span></label>
                    <select class="form-control selectpicker" data-style="btn btn-link" id="entrada_evento" name="entrada_evento" onchange="getPrecio(this)">
                      <option value="0">Liberada</option>
                      <option value="1">Con valor</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-6 " id="entrada" {{ old('entrada_evento') == "1" ? 'style=display:block;' : 'style=display:none;' }}>
                  {!! $errors->first('servicioH','<div class="invalid-feedback">:message</div>') !!}
                  <div class="form-group">
                    <label class="bmd-label-floating">Precio</label>
                    <input type="text" id="precio_evento" name="precio_evento" class="form-control">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Hashtag</label>
                    <input type="text" id="hashtag_evento" name="hashtag_evento" class="form-control">
                  </div>
                </div>
              </div> 

              <div class="row mt-5">  
                 
                <div class="col-md-3">      
                  <div class="form-group">
                    <label class="label-control">Fecha de Inicio</label>
                    <input type="text" id="fecha_inicio_evento" name="fecha_inicio_evento" class="form-control datepicker" />
                  </div>
                </div>
                <div class="col-md-3">      
                  <div class="form-group">
                    <label class="label-control">Fecha de Término</label>
                    <input type="text" id="fecha_termino_evento" name="fecha_termino_evento" class="form-control datepicker" />
                  </div>
                </div>
                <div class="col-md-3">      
                  <div class="form-group">
                    <label class="label-control">Hora de Inicio</label>
                    <input type="text" id="hora_inicio_evento" name="hora_inicio_evento" class="form-control timepicker" />
                  </div>
                </div>
                <div class="col-md-3">      
                  <div class="form-group">
                    <label class="label-control">Horas de Término</label>
                    <input type="text" id="hora_termino_evento" name="hora_termino_evento" class="form-control timepicker" />
                  </div>
                </div>                                  
              </div>     
                
              <div class="row">
                <div class="form-group form-file-upload form-file-multiple col-md-6">
                  <input type="file" id="enlace_imagen_evento" name="enlace_imagen_evento" multiple="" class="inputFileHidden">
                    <div class="input-group">
                      <input type="text" class="form-control inputFileVisible" placeholder="Foto Portada">
                      <span class="input-group-btn">
                      <button type="button" class="btn btn-fab btn-round btn-primary">
                      <i class="material-icons">attach_file</i>
                      </button>
                      </span>
                    </div>
                  </div>
                  
                  <div class="form-group form-file-upload form-file-multiple col-md-6">
                    <input type="file" name="image[]" multiple="" class="inputFileHidden">
                    <div class="input-group">
                      <input type="text" class="form-control inputFileVisible" placeholder="Galería de Imagenes" multiple>
                      <span class="input-group-btn">
                      <button type="button" class="btn btn-fab btn-round btn-info">
                        <i class="material-icons">layers</i>
                      </button>
                      </span>
                    </div>
                  </div> 
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Descripción</label>
                    <div class="form-group">
                      <label class="bmd-label-floating"> Agrege la información necesaria para que el publico conosca detalladamente el evento</label>
                      <textarea class="form-control" id="descripcion_evento" name="descripcion_evento" rows="5"></textarea>
                    </div>
                  </div>

                  <label>Ubicación</label>
                    <div class="form-group">
                      <label class="bmd-label-floating"> Elija la ubicación del sitio en el mapa arrastrando el marcador</label>
                      <div id="map" style="width:100%; height:400px"></div>
                      <input name="coordenadas" id="coordenadas" type="hidden" value=""/> 
                    </div>
                </div>
              </div>
              <button type="submit" class="btn btn-warning pull-right">Agregar Evento</button>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<script type="text/javascript">
  function getPrecio(select){
    var selectedString = select.options[select.selectedIndex].value;

    if(selectedString == "1")
    {
        document.getElementById("entrada").style.display = "block";
    }else {
        document.getElementById("entrada").style.display = "none";
    }

}
</script>
<script>
    
	      
    function addDraggableMarker(map, behavior){
    
      marketfinal = "no";
      var marker = new H.map.Marker({lat:-22.458678, lng:-68.925093}, {
        // mark the object as volatile for the smooth dragging
        volatility: true
      });
      // Ensure that the marker can receive drag events
      marker.draggable = true;
      map.addObject(marker);
    
      // disable the default draggability of the underlying map
      // and calculate the offset between mouse and target's position
      // when starting to drag a marker object:
      map.addEventListener('dragstart', function(ev) {
        var target = ev.target,
            pointer = ev.currentPointer;
        if (target instanceof H.map.Marker) {
          var targetPosition = map.geoToScreen(target.getGeometry());
          target['offset'] = new H.math.Point(pointer.viewportX - targetPosition.x, pointer.viewportY - targetPosition.y);
          behavior.disable();
          
        }
      }, false);
    
    
      // re-enable the default draggability of the underlying map
      // when dragging has completed
      map.addEventListener('dragend', function(ev) {
        var target = ev.target;
        if (target instanceof H.map.Marker) {
          behavior.enable();
          console.log(target.getGeometry())
          document.getElementById("coordenadas").value = target.getGeometry();
        }
      }, false);
      // Listen to the drag event and move the position of the marker
      // as necessary
       map.addEventListener('drag', function(ev) {
        var target = ev.target,
            pointer = ev.currentPointer;
        if (target instanceof H.map.Marker) {
          target.setGeometry(map.screenToGeo(pointer.viewportX - target['offset'].x, pointer.viewportY - target['offset'].y));
        }
      }, false);
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
    
    //Step 2: initialize a map - this map is centered over Boston
    var map = new H.Map(document.getElementById('map'),
      defaultLayers.vector.normal.map, {
      center: {lat:-22.458678, lng:-68.925093},
      zoom: 14,
      pixelRatio: window.devicePixelRatio || 1
    });
    // add a resize listener to make sure that the map occupies the whole container
    window.addEventListener('resize', () => map.getViewPort().resize());
    
    //Step 3: make the map interactive
    // MapEvents enables the event system
    // Behavior implements default interactions for pan/zoom (also on mobile touch environments)
    var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));
    
    // Step 4: Create the default UI:
    var ui = H.ui.UI.createDefault(map, defaultLayers, 'es-ES');
    
    // Add the click event listener.
    addDraggableMarker(map, behavior);
    
    
    </script>
@endsection