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
            <h4 class="card-title font-weight-bold">Editar Sitio Turístico</h4>
            </div>
            <p class="card-category">Modifique los datos que desea cambiar</p>
          </div>
          <div class="card-body">
            <form action="{{ route('admin.update',$sitio->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                {{ csrf_field() }}  
                <input type="hidden" name="id" id="id" value="">
                <input type="hidden" name="user_id" id="user_id" value="1"> 
              <div class="row mt-3">
                <div class="col-md-6">
                  <div class="form-group {{$errors->has('nombre_turistico')?'has-danger':''}}">
                    <label class="bmd-label-floating">Nombre del Sitio Turístico&nbsp;<span class="text-danger">*</span></label>
                    <input name="nombre_turistico" id="nombre_turistico" value="{{ old('nombre_turistico', $sitio->nombre_turistico) }}" type="text" class="form-control" >
                    {!! $errors->first('nombre_turistico','<div class="invalid-feedback" style="display:block">:message</div>') !!}
                  </div> 
                </div>
                <div class="col-md-6">
                  <div class="form-group {{$errors->has('direccion_turistico')?'has-danger':''}}">
                    <label class="bmd-label-floating">Dirección&nbsp;<span class="text-danger">*</span></label>
                    <input name="direccion_turistico" id="direccion_turistico" value="{{ old('direccion_turistico', $sitio->direccion_turistico) }}" type="text" class="form-control">
                    {!! $errors->first('direccion_turistico','<div class="invalid-feedback" style="display:block">:message</div>') !!}
                  </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                      <label for="entrada_evento">Entrada&nbsp;<span class="text-danger">*</span></label>
                      <select class="form-control selectpicker" data-style="btn btn-link" id="entrada_turistico" name="entrada_turistico" onchange="getPrecio(this)" value="{{ old('entrada_turistico', $sitio->entrada_sitio) }}">
                        <option value="0">Liberada</option>
                        <option value="1" {{ $sitio->entrada_sitio ?'selected':''}}>Con valor</option>
                      </select>
                    </div>
                  </div>
  
                  <div class="col-md-6 " id="entrada" {{ old('entrada_evento') == "1" ? 'style=display:block;' : 'style=display:none;' }}>
                    {!! $errors->first('servicioH','<div class="invalid-feedback">:message</div>') !!}
                    <div class="form-group">
                      <label class="bmd-label-floating">Precio</label>
                      <input type="text" id="precio_turistico" name="precio_turistico" class="form-control">
                    </div>
                  </div>                         
              </div>
              
              <div class="row mt-2">
                <!-- Mostrar servicios de hotel-->
                <div class="col-md-12" id="servicios">
                  <label for="serviciosS" class="mb-2">Servicios</label>
                  {!! $errors->first('servicioS','<div class="invalid-feedback">:message</div>') !!}
                  <div class="form-check">
                    <div class="row">
                        @foreach ($servicios as $servicio)
                        @if ($servicio->tipo_servicio == "Sitio")
                        <div class="col-md-3 mt-1">
                    <label class="form-check-label">
                      <input class="form-check-input" name="servicioS[]" type="checkbox" value="{{$servicio->id}}"
                      @foreach ($sitio->servicios as $servicioSitio)
                      @if ($servicioSitio->nombre_servicio==$servicio->nombre_servicio)
                      checked
                      @endif
                      @endforeach>
                      {{$servicio->nombre_servicio}}
                      <span class="form-check-sign">
                        <span class="check"></span>
                      </span>
                    </label>
                    </div>
                    @endif
                    @endforeach
                  </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                      <label for="horario_turistico " class="bmd-label-floating">Horario</label>
                      {!! $errors->first('horario','<div class="invalid-feedback">:message</div>') !!}
                      <select class="form-control selectpicker" data-style="btn btn-link" name="horario_turistico" id="horario_turistico" onchange="getHorario(this)">
                        <option value="Siempre abierto" {{ $sitio->horario_turistico == "Siempre abierto" ? 'selected' : '' }}>Siempre abierto</option>
                        <option value="Personalizado" {{ $sitio->horario_turistico == "Personalizado" ? 'selected' : '' }}>Personalizado</option>
                      </select>
                  </div>
                </div>   
                    
                <div class="col-12" id="horario" {{ $sitio->horario_turistico== "Personalizado" ? 'style=display:block;' : 'style=display:none;' }} >
                  @foreach($sitio->horarios as $horario)
                  
                  <div class="row align-items-center" >
                  <label class="label-primary col-md-2">{{$horario->dia}}</label>
                    <div class="d-flex col-md-4 align-items-center">
                      <div class="col">      
                        <div class="form-group">
                        <input type="text" id="{{$horario->id}}I" name="{{$horario->id}}I" value="{{$horario->pivot->hora_inicio}}" class="form-control timepicker" />
                        </div>
                      </div>
                    <label class="label-primary">Hasta</label>
                      <div class="col">      
                        <div class="form-group">
                          <input type="text" id="{{$horario->id}}T" name="{{$horario->id}}T" value="{{$horario->pivot->hora_termino}}" class="form-control timepicker" />
                        </div>
                      </div>
                    </div>
                    <a href="#" class="mostrarHorario"><i class="fas fa-plus align-items-center"></i></a>
                    <div class="expandir col-md-4">
                      <div class="d-flex align-items-center">
                        <div class="col">      
                          <div class="form-group">
                            <input type="text" id="{{$horario->id}}II" name="{{$horario->id}}II" value="{{$horario->pivot->hora_inicio_dos}}" class="form-control timepicker" />
                          </div>
                        </div>
                      <label class="label-primary">Hasta</label>
                        <div class="col">      
                          <div class="form-group">
                            <input type="text" id="{{$horario->id}}TT" name="{{$horario->id}}TT" value="{{$horario->pivot->hora_termino_dos}}" class="form-control timepicker" />
                          </div>
                        </div>
                      </div>
                    </div> 
                  </div>
                  @endforeach
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group {{$errors->has('descripcion_sitio')?'has-danger':''}}">
                    <label>Descripción&nbsp;<span class="text-danger">*</span></label>
                    <div class="form-group">
                      <textarea name="descripcion_turistico" id="descripcion_turistico" class="form-control" rows="5">{{ $sitio->descripcion_turistico}}</textarea>
                      {!! $errors->first('descripcion_turistico','<div class="invalid-feedback" style="display:block">:message</div>') !!}
                    </div>
                  </div>
                </div>      
                @foreach ($sitio->imagenSitioTuristicos as $imagen)
                @if ($imagen->tipo_imagen_turistico == 'portada')        
                <div class="col-md-3">
                  <div class="card align-items-start" style="margin-bottom: 5px;">
                    <img class="card-img" src="../../{{$imagen->thumbnail}}" alt="Card image">
                  </div>
                  <span class="badge badge-pill badge-primary" >{{$imagen->tipo_imagen_turistico}}</span>
                </div> 
                @endif
                @if ($imagen->tipo_imagen_turistico == 'galeria')        
                <div class="col-md-3">
                  <div class="card align-items-start" style="margin-bottom: 5px;">
                    <img class="card-img" src="../../{{$imagen->thumbnail}}" alt="Card image">
                  </div>
                  <span class="badge badge-pill badge-info" >{{$imagen->tipo_imagen_turistico}}</span>
                </div> 
                @endif
                @endforeach
              </div>  
                
              <div class="row mt-3">
                <div class="form-group form-file-upload form-file-multiple col-md-4">
                  <input type="file" multiple="" class="inputFileHidden" name="enlace_imagen_turistico">
                    <div class="input-group">
                      <input type="text" class="form-control inputFileVisible" placeholder="Foto de Portada">
                      <span class="input-group-btn">
                      <button type="button" class="btn btn-fab btn-round btn-primary">
                      <i class="material-icons">attach_file</i>
                      </button>
                      </span>
                    </div>
                  </div>
                
                  <div class="form-group form-file-upload form-file-multiple col-md-8">
                    <input type="file" multiple="" class="inputFileHidden" name="image[]">
                    <div class="input-group">
                      <input type="text" class="form-control inputFileVisible" placeholder="Galeria de Imágenes" multiple>
                      <span class="input-group-btn">
                      <button type="button" class="btn btn-fab btn-round btn-info">
                        <i class="material-icons">layers</i>
                      </button>
                      </span>
                    </div>

                  </div>
                  
                  

                  <div class="col-md-12">
                      <div class="form-group">
                          <label>Ubicación</label>
                          <div class="form-group">
                          <label class="bmd-label-floating"> Elija la ubicación del sitio en el mapa arrastrando el marcador.</label>
                          <div id="map" style="width:100%; height:400px"></div>
                          </div>
                          
                          <input name="coordenadas" id="coordenadas" type="hidden" value="POINT ({{$sitio->longitud_turistico}} {{$sitio->latitud_turistico}})"/> 
                        </div>
                    </div>
              </div>
              <button type="submit" class="btn btn-warning pull-right">Editar Sitio</button>
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
  function getLogo(){  document.getElementById("logos").style.display = "block";}
</script>

<script>
    function getGaleria(){document.getElementById("imagenes").style.display = "block";}
</script>
<script>
  var msg = '{{Session::get('alert')}}';
  var exist = '{{Session::has('alert')}}';
  if(exist){
    alert(msg);
  }
</script>

<script>
    
	      
function addDraggableMarker(map, behavior){

  marketfinal = "no";
  var marker = new H.map.Marker({lat:<?php echo $sitio->latitud_turistico; ?>, lng:<?php echo $sitio->longitud_turistico; ?>}, {
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
  center: {lat:<?php echo $sitio->latitud_turistico; ?>, lng:<?php echo $sitio->longitud_turistico; ?>},
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