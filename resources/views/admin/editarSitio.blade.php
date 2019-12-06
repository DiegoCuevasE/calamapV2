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
                  <div class="form-group">
                    <label class="bmd-label-floating">Nombre del Sitio Turístico</label>
                    <input name="nombre_turistico" id="nombre_turistico" value="{{ old('nombre_turistico', $sitio->nombre_turistico) }}" type="text" class="form-control" >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Dirección</label>
                    <input name="direccion_turistico" id="direccion_turistico" value="{{ old('direccion_turistico', $sitio->direccion_turistico) }}" type="text" class="form-control">
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
                  <div class="form-group">
                    <label>Descripción</label>
                    <div class="form-group">
                      <textarea name="descripcion_turistico" id="descripcion_turistico" class="form-control" rows="5">{{ $sitio->descripcion_turistico}}</textarea>
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

@endsection