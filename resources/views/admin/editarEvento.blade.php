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
            <form action="{{ route('updateEvento',$evento->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              {{ csrf_field() }} 
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Nombre del evento</label>
                    <input type="text" id="titulo_evento" name="titulo_evento" value="{{ old('titulo_evento', $evento->titulo_evento) }}" class="form-control" >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Dirección</label>
                    <input type="text" id="direccion_evento" name="direccion_evento" value="{{ old('direccion_evento', $evento->direccion_evento) }}"class="form-control">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="entrada_evento">Entrada&nbsp;<span class="text-danger">*</span></label>
                    <select class="form-control selectpicker" data-style="btn btn-link" id="entrada_evento" name="entrada_evento" onchange="getPrecio(this)">
                      <option value="0" >Liberada</option>
                      <option value="1"{{ $evento->entrada_evento ?'selected':''}}>Con valor</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-6 " id="entrada" {{ old('entrada_evento') == "1" ? 'style=display:block;' : ($evento->entrada_evento?'style=display:block;':'style=display:none;' ) }}>
                  {!! $errors->first('precio_evento','<div class="invalid-feedback">:message</div>') !!}
                  <div class="form-group">
                    <label class="bmd-label-floating">Precio</label>
                    <input type="text" id="precio_evento" name="precio_evento" value="{{$evento->precio_evento}}" class="form-control">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Hashtag</label>
                    <input type="text" id="hashtag_evento" name="hashtag_evento" value="{{$evento->hashtag_evento}}" class="form-control">
                  </div>
                </div>
              </div> 
              
              <div class="row mt-5">  
                 
                <div class="col-md-3">      
                  <div class="form-group">
                    <label class="label-control">Fecha de Inicio</label>
                    <input type="text" id="fecha_inicio_evento" name="fecha_inicio_evento" value="{{$evento->fecha_inicio_evento}}" class="form-control datepicker" />
                  </div>
                </div>
                <div class="col-md-3">      
                  <div class="form-group">
                    <label class="label-control">Fecha de Término</label>
                    <input type="text" id="fecha_termino_evento" name="fecha_termino_evento" value="{{$evento->fecha_termino_evento}}" class="form-control datepicker" />
                  </div>
                </div>
                <div class="col-md-3">      
                  <div class="form-group">
                    <label class="label-control">Hora de Inicio</label>
                    <input type="text" id="hora_inicio_evento" name="hora_inicio_evento" value="{{$evento->hora_inicio_evento}}" class="form-control timepicker" />
                  </div>
                </div>
                <div class="col-md-3">      
                  <div class="form-group">
                    <label class="label-control">Horas de Término</label>
                    <input type="text" id="hora_termino_evento" name="hora_termino_evento" value="{{$evento->hora_termino_evento}}" class="form-control timepicker" />
                  </div>
                </div>                                  
              </div>     
                
              <div class="row mt-2">
                @foreach ($evento->imagenEventos as $imagen)
                @if ($imagen->tipo_imagen_evento == 'portada')        
                <div class="col-md-3">
                  <div class="card" style="margin-bottom: 5px;">
                    <img class="card-img" src="../../{{$imagen->thumbnail}}" alt="Card image">
                  </div>
                <span class="badge badge-pill badge-primary">{{$imagen->tipo_imagen_evento}}</span>
                </div>
                @endif
                @if ($imagen->tipo_imagen_evento == 'galeria')
                <div class="col-md-3">
                  <div class="card align-items-start" style="margin-bottom: 5px;">
                    <img class="card-img" src="../../{{$imagen->thumbnail}}" alt="Card image">
                  </div>
                  <span class="badge badge-pill badge-info" >{{$imagen->tipo_imagen_evento}}</span>
                </div>        
                @endif
                @endforeach
              </div>

              <div class="row mt-3">
                <div class="form-group form-file-upload form-file-multiple col-md-4">
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
                  
                  <div class="form-group form-file-upload form-file-multiple col-md-8">
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
                      <textarea class="form-control" id="descripcion_evento" name="descripcion_evento" rows="5">{{$evento->descripcion_evento}}</textarea>
                    </div>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-warning pull-right">Editar Evento</button>
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