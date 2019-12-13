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
                  <div class="form-group {{$errors->has('titulo_evento')?'has-danger':''}}">
                    <label class="bmd-label-floating">Nombre del evento&nbsp;<span class="text-danger">*</span></label>
                    <input type="text" id="titulo_evento" name="titulo_evento" class="form-control" value="{{ old('titulo_evento')}}">
                      {!! $errors->first('titulo_evento','<div class="invalid-feedback" style="display:block">:message</div>') !!}
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group {{$errors->has('direccion_evento')?'has-danger':''}}">
                    <label class="bmd-label-floating">Dirección&nbsp;<span class="text-danger">*</span></label>
                    <input type="text" id="direccion_evento" name="direccion_evento" class="form-control" value="{{ old('titulo_evento')}}">
                    {!! $errors->first('direccion_evento','<div class="invalid-feedback" style="display:block">:message</div>') !!}
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
                  <div class="form-group {{$errors->has('fecha_inicio_evento')?'has-danger':''}}">
                    <label class="label-control">Fecha de Inicio&nbsp;<span class="text-danger">*</span></label>
                    <input type="text" id="fecha_inicio_evento" name="fecha_inicio_evento" class="form-control datepicker" value="{{ old('fecha_inicio_evento')}}"/>
                    {!! $errors->first('fecha_inicio_evento','<div class="invalid-feedback" style="display:block">:message</div>') !!}

                  </div>
                </div>
                <div class="col-md-3">      
                  <div class="form-group">
                    <label class="label-control">Fecha de Término</label>
                    <input type="text" id="fecha_termino_evento" name="fecha_termino_evento" class="form-control datepicker" />
                  </div>
                </div>
                <div class="col-md-3">      
                  <div class="form-group {{$errors->has('hora_inicio_evento')?'has-danger':''}}">
                    <label class="label-control">Hora de Inicio&nbsp;<span class="text-danger">*</span></label>
                    <input type="text" id="hora_inicio_evento" name="hora_inicio_evento" class="form-control timepicker" value="{{ old('hora_inicio_evento')}}"/>
                    {!! $errors->first('hora_inicio_evento','<div class="invalid-feedback" style="display:block">:message</div>') !!}
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
                      <input type="text" class="form-control inputFileVisible" placeholder="Foto de Portada *">
                      <span class="input-group-btn">
                      <button type="button" class="btn btn-fab btn-round btn-primary">
                      <i class="material-icons">attach_file</i>
                      </button>
                      </span>
                    </div>
                    {!! $errors->first('enlace_imagen_evento','<div class="invalid-feedback" style="display:block">:message</div>') !!}
                  </div>
                  
                  <div class="form-group form-file-upload form-file-multiple col-md-6">
                    <input type="file" name="image[]" multiple="" class="inputFileHidden">
                    <div class="input-group">
                      <input type="text" class="form-control inputFileVisible" placeholder="Galería de Imagenes *" multiple>
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
                    <div class="form-group {{$errors->has('descripcion_evento')?'has-danger':''}}">
                      <label class="bmd-label-floating"> Agrege la información necesaria para que el publico conosca detalladamente el evento</label>
                      <textarea class="form-control" id="descripcion_evento" name="descripcion_evento" rows="5" value="{{ old('descripcion_evento')}}"></textarea>
                        {!! $errors->first('descripcion_evento','<div class="invalid-feedback" style="display:block">:message</div>') !!}
                    </div>
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

@endsection