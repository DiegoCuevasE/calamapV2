@extends('admin/dashboard')

@section('panel')

<div class="content">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-md-10 col-lg-10 col-xl-7  ">
        <div class="card">
          <div class="card-header card-header-warning">
            <div class="d-flex">
            <i class="material-icons mr-2">event</i>
            <h4 class="card-title font-weight-bold">Agregar MyPE</h4>
            </div>
            <p class="card-category">Ingrese todos los datos solicitados para añadir la MyPE a la plataforma</p>
          </div>
          <div class="card-body">
            <form action="{{ route('registrarMype')}}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}   
            
            <div class="row ">  
              @if(Auth::user()->tipo_usuario =='0')
              <div class="col-md-6">
                <div class="form-group">
                  <label for="user_id">Dueño MyPE&nbsp;<span class="text-danger">*</span></label>
                  <select class="form-control selectpicker" data-style="btn btn-link" id="user_id" name="user_id" >
                    @foreach ($users as $user)
                    <option  value="{{$user->id}}">{{$user->nombre}} {{$user->apellido_usuario}}</option >
                    @endforeach
                  </select>
                </div>
              </div>
              @elseif(Auth::user()->tipo_usuario ='1')
              <input type="hidden" id="user_id" name="user_id" value="{{Auth::user()->id}}">
              @endif
              <div class="col-md-6">
                <div class="form-group ">
                  <label for="rubro_mype">Seleccione el Rubro&nbsp;<span class="text-danger">*</span></label>

                  <select class="form-control selectpicker"  id="rubro_mype" name="rubro_mype"data-style="btn btn-link" onchange="getRubro(this)">
                      <option value="Gastronomía" {{ old('rubro_mype') == "Gastronomía" ? 'selected' : '' }}>Restaurant</option>
                      <option value="Hotelería" {{ old('rubro_mype') == "Hotelería" ? 'selected' : '' }}>Hotelería</option>
                      <option value="Turismo" {{ old('rubro_mype') == "Turismo" ? 'selected' : '' }}>Turismo</option>
                      <option value="Bazares" {{ old('rubro_mype') == "Bazares" ? 'selected' : '' }}>Comercio</option>
                      <option value="Artesanía" {{ old('rubro_mype') == "Artesanía" ? 'selected' : '' }}>Artesanía</option>
                  </select>
                </div>
              </div>
            </div>  

            <div class="row justify-content-center mt-2">
              <div class="col-md-12">
                <div class="form-group  {{$errors->has('nombre_fantasia_mype')?'has-danger':''}}">
                  <label class="bmd-label-floating">Nombre de la MyPE&nbsp;<span class="text-danger">*</span></label>
                <input type="text" name="nombre_fantasia_mype" id="nombre_fantasia_mype" class="form-control" value="{{ old('nombre_fantasia_mype')}}" >
                  {!! $errors->first('nombre_fantasia_mype','<div class="invalid-feedback" style="display:block">:message</div>') !!}
                  
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group {{$errors->has('direccion_mype')?'has-danger':''}}">
                  <label class="bmd-label-floating">Dirección&nbsp;<span class="text-danger">*</span></label>
                  <input type="text" id="direccion_mype" name="direccion_mype" class="form-control" value="{{ old('direccion_mype')}}">
                  {!! $errors->first('direccion_mype','<div class="invalid-feedback" style="display:block">:message</div>') !!}

                </div>
              </div>
            </div> 

            <div class="row mt-2 justify-content-center">
              
              <!-- Mostrar servicios de hotel-->
              <div class="col-md-12 " id="serviciosH" {{ old('rubro_mype') == "Hotelería" ? 'style=display:block;' : 'style=display:none;' }}>
                <label for="serviciosH" class="mb-2">Servicios&nbsp;<span class="text-danger">*</span></label>
                {!! $errors->first('servicioH','<div class="invalid-feedback">:message</div>') !!}
                <div class="form-check">
                  <div class="row">
                  @foreach ($servicios as $servicio)
                  @if ($servicio->tipo_servicio == "Hotelería")
                  <div class="col-md-3 mt-1">
                  <label class="form-check-label">
                    <input class="form-check-input" name="servicioH[]" type="checkbox" value="{{$servicio->id}}" {{ (is_array(old('servicioH')) and in_array($servicio->id, old('servicioH'))) ? 'checked' : '' }}>
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
              <!-- Mostrar servicios de restaurant-->
              <div class="col-md-12" id="serviciosG"  {{ old('rubro_mype') == "Gastronomía" ? 'style=display:block;' : 'style=display:none;' }}>
                <label for="serviciosG" class="mb-2">Servicios&nbsp;<span class="text-danger">*</span></label>
                {!! $errors->first('servicioG','<div class="invalid-feedback">:message</div>') !!}
                <div class="form-check">
                    <div class="row">
                    @foreach ($servicios as $servicio)
                    @if ($servicio->tipo_servicio == "Gastronomía")
                    <div class="col-md-3 mt-1">
                    <label class="form-check-label">
                        <input class="form-check-input" name="servicioG[]" type="checkbox" value="{{$servicio->id}}" {{ (is_array(old('servicioG')) and in_array($servicio->id, old('servicioG'))) ? 'checked' : '' }}>
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
              <!-- Mostrar servicios de turismo-->
              <div class="col-md-12" id="serviciosT" {{ old('rubro_mype') == "Turismo" ? 'style=display:block;' : 'style=display:none;' }}>
                <label for="serviciosT" class="mb-2">Servicios &nbsp;<span class="text-danger">*</span></label>
                {!! $errors->first('servicioT','<div class="invalid-feedback">:message</div>') !!}
                <div class="form-check">
                  <div class="row">
                  @foreach ($servicios as $servicio)
                  @if ($servicio->tipo_servicio == "Turismo")
                  <div class="col-md-3 mt-1">
                  <label class="form-check-label">
                    <input class="form-check-input" name="servicioT[]"  type="checkbox" value="{{$servicio->id}}" {{ (is_array(old('servicioT')) and in_array($servicio->id, old('servicioT'))) ? ' checked' : '' }}>
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
              <!-- Mostrar servicios de Bazar-->
              <div class="col-md-12" id="serviciosB" {{ old('rubro_mype') == "Bazares" ? 'style=display:block;' : 'style=display:none;' }}>
                <label for="serviciosB" class="mb-2">Servicios &nbsp;<span class="text-danger"> *</span></label>
                {!! $errors->first('servicioB','<div class="invalid-feedback">:message</div>') !!}
                <div class="form-check">
                  <div class="row">
                  @foreach ($servicios as $servicio)
                  @if ($servicio->tipo_servicio == "Bazares")
                  <div class="col-md-3 mt-1">
                  <label class="form-check-label">
                    <input class="form-check-input" name="servicioB[]" type="checkbox" value="{{$servicio->id}}" {{ (is_array(old('servicioB')) and in_array($servicio->id, old('servicioB'))) ? 'checked' : '' }}>
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
              <!-- Mostrar servicios de Artesanias-->
              <div class="col-md-12" id="serviciosA" {{ old('rubro_mype') == "Artesanía" ? 'style=display:block;' : 'style=display:none;' }}>
                <label for="serviciosA" class="mb-2">Servicios&nbsp;<span class="text-danger">*</span></label>
                {!! $errors->first('servicioA','<div class="invalid-feedback">:message</div>') !!}
                <div class="form-check">
                  <div class="row">
                  @foreach ($servicios as $servicio)
                  @if ($servicio->tipo_servicio == "Artesanía")
                  <div class="col-md-3 mt-1">
                  <label class="form-check-label">
                    <input class="form-check-input" name="servicioA[]" type="checkbox" value="{{$servicio->id}}" {{ (is_array(old('servicioA')) and in_array($servicio->id, old('servicioA'))) ? 'checked' : '' }}>
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

            <div class="row justify-content-center">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="bmd-label-floating">Página principal</label>
                  <input type="text" id="pagina_mype" name="pagina_mype" class="form-control">
                </div>
              </div> 
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Facebook</label>
                  <input type="text" id="facebook_mype" name="facebook_mype"class="form-control">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Instragram</label>
                  <input type="text" id="instagram_mype" name="instagram_mype"class="form-control">
                </div>
              </div>      
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Teléfono</label>
                  <input type="text" id="telefono_mype" name="telefono_mype" class="form-control">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Celular</label>
                  <input type="text" id="celular_mype" name="celular_mype" class="form-control">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label class="bmd-label-floating">Correo</label>
                  <input type="text" id="correo_mype" name="correo_mype" class="form-control">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                    <label for="idiomas_mype " class="bmd-label-floating">Idiomas</label>
                    {!! $errors->first('idioma','<div class="invalid-feedback">:message</div>') !!}
                    <select class="form-control selectpicker" data-style="btn btn-link" name="idioma_mype" id="idioma_mype" onchange="getIdioma(this)">
                      <option value="1" {{ old('idioma_mype') == "1" ? 'selected' : '' }}>Solo español</option>
                      <option value="0" {{ old('idioma_mype') == "0" ? 'selected' : '' }}>Español y otros idiomas</option>
                    </select>
                </div>
              </div>   
              
              <div class="col-md-6" >
                <div class="form-check" id="idiomas" {{ old('idioma_mype') == "0" ? 'style=display:block;' : 'style=display:none;' }}>
                  <div class="row">
                    @foreach ($idiomas as $idioma)
                    <div class="col-md-4 mt-1">
                      <label class="form-check-label">
                      <input class="form-check-input" name="idioma[]" type="checkbox" value="{{$idioma->id}}" {{ (is_array(old('idioma')) and in_array($idioma->id, old('idioma'))) ? 'checked' : '' }}>
                      {{$idioma->nombre_idioma}}
                      <span class="form-check-sign">
                      <span class="check"></span>
                      </span>
                      </label>
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>
                                   
            </div>

            <hr>
            <div>
              <div class="col-md-6">
                  <div class="form-group">
                    <label for="horario_mype " class="bmd-label-floating">Horario</label>
                    {!! $errors->first('horario','<div class="invalid-feedback">:message</div>') !!}
                    <select class="form-control selectpicker" data-style="btn btn-link" name="horario_mype" id="horario_mype" onchange="getHorario(this)">
                      <option value="Siempre abierto" {{ old('horario_mype') == "Siempre abierto" ? 'selected' : '' }}>Siempre abierto</option>
                      <option value="Personalizado" {{ old('horario_mype') == "Personalizado" ? 'selected' : '' }}>Personalizado</option>
                    </select>
                </div>
              </div>   
              <div id="horario" {{ old('horario_mype') == "Personalizado" ? 'style=display:block;' : 'style=display:none;' }}>
                @foreach ($horarios as $horario)
                <div class="row align-items-center" >
                <label class="label-primary col-2">{{$horario->dia}}</label>
                  <div class="d-flex col-md-4 align-items-center">
                    <div class="col">      
                      <div class="form-group">
                        <input type="text" id="{{$horario->id}}I" name="{{$horario->id}}I" class="form-control timepicker" />
                      </div>
                    </div>
                  <label class="label-primary">Hasta</label>
                    <div class="col">      
                      <div class="form-group">
                        <input type="text" id="{{$horario->id}}T" name="{{$horario->id}}T" class="form-control timepicker" />
                      </div>
                    </div>
                  </div>
                  <a href="#" class="mostrarHorario"><i class="fas fa-plus align-items-center"></i></a>
                  <div class="expandir col-md-4" style="display:none">
                    <div class="d-flex align-items-center">
                      <div class="col">      
                        <div class="form-group">
                          <input type="text" id="{{$horario->id}}II" name="{{$horario->id}}II" class="form-control timepicker" />
                        </div>
                      </div>
                    <label class="label-primary">Hasta</label>
                      <div class="col">      
                        <div class="form-group">
                          <input type="text" id="{{$horario->id}}TT" name="{{$horario->id}}TT" class="form-control timepicker" />
                        </div>
                      </div>
                    </div>
                  </div> 
                </div>
                @endforeach
              </div>
            </div>
            <hr>

            <div class="row mt-1">
              
              <div class="form-group form-file-upload form-file-multiple col-md-6">
                <input type="file" multiple="" name="enlace_imagen_mype"  class="inputFileHidden">
                  <div class="input-group">
                    <input type="text" class="form-control inputFileVisible" placeholder="Foto de Portada *">
                    <span class="input-group-btn">
                    <button type="button" class="btn btn-fab btn-round btn-primary">
                    <i class="material-icons">attach_file</i>
                    </button>
                    </span>
                  </div>
                  {!! $errors->first('enlace_imagen_mype','<div class="invalid-feedback" style="display:block">:message</div>') !!}
              </div>
              <div class="form-group form-file-upload form-file-multiple col-md-6">
                <input type="file" name="image[]" multiple="" class="inputFileHidden">
                <div class="input-group">
                  <input type="text" class="form-control inputFileVisible" placeholder="Galería de Imágenes *" multiple>
                  <span class="input-group-btn">
                  <button type="button" class="btn btn-fab btn-round btn-info">
                    <i class="material-icons">layers</i>
                  </button>
                  </span>
                </div>
                {!! $errors->first('image','<div class="invalid-feedback" style="display:block">:message</div>') !!}
              </div> 
              <div class="col-md-12">
                <div class="form-group">
                  <label>Descripción&nbsp;<span class="text-danger">*</span></label>
                  <div class="form-group {{$errors->has('descripcion_mype')?'has-danger':''}}">
                    <label class="bmd-label-floating"> Agrege la información necesaria para que el publico conosca detalladamente su MyPE</label>
                    <textarea class="form-control" rows="5" id="descripcion_mype" name="descripcion_mype">{{ old('descripcion_mype')}}</textarea>
                    {!! $errors->first('descripcion_mype','<div class="invalid-feedback" style="display:block">:message</div>') !!}
                  </div>
                </div>
                <label>Ubicación</label>
                    <div class="form-group">
                      <label class="bmd-label-floating"> Elija la ubicación del sitio en el mapa arrastrando el marcador</label>
                      <div id="map" style="width:100%; height:400px"></div>
                      <input name="coordenadas" id="coordenadas" type="hidden" value="POINT (-68.925093 -22.458678)"/> 
                    </div>
              </div>
            </div>

            <button type="submit" class="btn btn-warning pull-right font-weight-bold">Agregar Mype</button>
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

<script>

    function getHorario(select){
      var selectedString = select.options[select.selectedIndex].value;
      if(selectedString == "Personalizado")
      {
          document.getElementById("horario").style.display = "block";
      }else {
          document.getElementById("horario").style.display = "none";
      }
  
    }
</script>

<script>


  function getRubro(select){
    var selectedString = select.options[select.selectedIndex].value;
    if(selectedString == "Hotelería")
    {
        document.getElementById("serviciosH").style.display = "block";
    }else {
        document.getElementById("serviciosH").style.display = "none";
    }


    if(selectedString == "Gastronomía")
    {
        document.getElementById("serviciosG").style.display = "block";
    }else {
        document.getElementById("serviciosG").style.display = "none";
    }

    if(selectedString == "Turismo")
    {
        document.getElementById("serviciosT").style.display = "block";
    }else {
        document.getElementById("serviciosT").style.display = "none";
    }

    if(selectedString == "Bazares")
    {
        document.getElementById("serviciosB").style.display = "block";
    }else {
        document.getElementById("serviciosB").style.display = "none";
    }

    if(selectedString == "Artesanía")
    {
        document.getElementById("serviciosA").style.display = "block";
    }else {
        document.getElementById("serviciosA").style.display = "none";
    }
}
</script>



<script>

  function getIdioma(select){
    var selectedString = select.options[select.selectedIndex].value;
    if(selectedString == "0")
    {
        document.getElementById("idiomas").style.display = "block";
    }else {
        document.getElementById("idiomas").style.display = "none";
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
