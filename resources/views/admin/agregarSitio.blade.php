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
            <h4 class="card-title font-weight-bold">Agregar Sitio Turístico</h4>
            </div>
            <p class="card-category">Ingrese todos los datos solicitados para añadir el Sitio Turístico a la plataforma</p>
          </div>
          <div class="card-body">
            <form action="{{ url('/admin')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}  

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group {{$errors->has('nombre_turistico')?'has-danger':''}}">
                    <label class="bmd-label-floating">Nombre del Sitio Turístico&nbsp;<span class="text-danger">*</span></label>
                    <input name="nombre_turistico" id="nombre_turistico" type="text" class="form-control" value="{{ old('nombre_turistico')}}">
                    {!! $errors->first('nombre_turistico','<div class="invalid-feedback" style="display:block">:message</div>') !!}
                  </div>
                </div>
                <div class="col-md-6 mb-auto">
                  <div class="form-group {{$errors->has('direccion_turistico')?'has-danger':''}}">
                    <label class="bmd-label-floating">Dirección&nbsp;<span class="text-danger">*</span></label>
                    <input name="direccion_turistico" id="direccion_turistico" type="text" class="form-control" value="{{ old('direccion_turistico')}}">
                    {!! $errors->first('direccion_turistico','<div class="invalid-feedback" style="display:block">:message</div>') !!}
                  </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                      <select class="form-control selectpicker" data-style="btn btn-link" id="entrada_turistico" name="entrada_turistico" onchange="getPrecio(this)">
                        <option selected disabled>Entrada&nbsp;<span class="text-danger">*</span></option>
                        <option value="0">Liberada</option>
                        <option value="1">Con valor</option>
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
              
              <div class="row mt-2 justify-content-center">
                
                <!-- Mostrar servicios de hotel-->
                <div class="col-md-12 " id="servicioS">
                  <label for="servicioS" class="mb-2">Servicios&nbsp;<span class="text-danger">*</span></label>
                  {!! $errors->first('servicioS','<div class="invalid-feedback">:message</div>') !!}
                  <div class="form-check">
                    <div class="row">
                    @foreach ($servicios as $servicio)
                    @if ($servicio->tipo_servicio == "Sitio")
                    <div class="col-md-3 mt-1">
                    <label class="form-check-label">
                      <input class="form-check-input" name="servicioS[]" type="checkbox" value="{{$servicio->id}}" {{ (is_array(old('servicioT')) and in_array($servicio->id, old('servicioT'))) ? 'checked' : '' }}>
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

              <div>
                <div class=" row ">
                    <div class="form-group col-md-6">
                      <label for="horario_sitio " class="bmd-label-floating">Horario</label>
                      {!! $errors->first('horario','<div class="invalid-feedback">:message</div>') !!}
                      <select class="form-control selectpicker" data-style="btn btn-link" name="horario_sitio" id="horario_sitio" onchange="getHorario(this)">
                        <option value="Siempre abierto" {{ old('horario_sitio') == "Siempre abierto" ? 'selected' : '' }}>Siempre abierto</option>
                        <option value="Personalizado" {{ old('horario_sitio') == "Personalizado" ? 'selected' : '' }}>Personalizado</option>
                      </select>
                  </div>
                </div>   
                    
                <div id="horario" {{ old('horario_sitio') == "Personalizado" ? 'style=display:block;' : 'style=display:none;' }}>
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
              <div class="row mt-3">
                <div class="form-group form-file-upload form-file-multiple col-md-4">
                  <input type="file" multiple="" class="inputFileHidden" name="enlace_imagen_turistico">
                  <input type="hidden" name="tipo_imagen_turistico" id="tipo_imagen_turistico" value=''>
                    <div class="input-group">
                      <input type="text" class="form-control inputFileVisible" placeholder="Foto de Portada *">
                      <span class="input-group-btn">
                      <button type="button" class="btn btn-fab btn-round btn-primary">
                      <i class="material-icons">attach_file</i>
                      </button>
                      </span>
                    </div>
                    {!! $errors->first('enlace_imagen_turistico','<div class="invalid-feedback" style="display:block">:message</div>') !!}
                  </div>
                  <div class="form-group form-file-upload form-file-multiple col-md-8">
                    <input type="file" multiple="" class="inputFileHidden" name="image[]">
                    <div class="input-group">
                      <input type="text" class="form-control inputFileVisible" placeholder="Galeria de Imágenes *" multiple>
                      <span class="input-group-btn">
                      <button type="button" class="btn btn-fab btn-round btn-info">
                        <i class="material-icons">layers</i>
                      </button>
                      </span>
                    </div>
                    {!! $errors->first('image','<div class="invalid-feedback" style="display:block">:message</div>') !!}
                  </div> 
                  
                <div class="col-md-12">
                  <div class="form-group {{$errors->has('descripcion_sitio')?'has-danger':''}}">
                    <label>Descripción&nbsp;<span class="text-danger">*</span></label>
                    <div class="form-group">
                      <label class="bmd-label-floating"> Agrege la información necesaria para que el publico conosca detalladamente el evento</label>
                      <textarea name="descripcion_turistico" id="descripcion_turistico" class="form-control" rows="5" value="{{ old('descripcion_turistico')}}"></textarea>
                      {!! $errors->first('descripcion_turistico','<div class="invalid-feedback" style="display:block">:message</div>') !!}
                    </div>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-warning pull-right">Agregar Sitio</button>
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

@endsection