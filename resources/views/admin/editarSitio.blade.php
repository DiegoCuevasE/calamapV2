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
            <form action="{{ route('admin.update',$sitio->id) }}" method="POST">
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
                      <label class="bmd-label-floating">Categoria del Sitio</label>
                      <input name="tipo_turistico" id="tipo_turistico" value="{{ old('tipo_turistico', $sitio->tipo_turistico) }}" type="text" class="form-control" >
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
                    <label class="bmd-label-floating">Entrada</label>
                    <input name="entrada_turistico" id="entrada_turistico" type="text" class="form-control">
                  </div>
                </div>
                <div class="col-md-6">      
                  <div class="form-group">
                    <label class="label-control">Horario</label>
                    <input name="horario_turistico" id="horario_turistico" value=" {{$sitio->horario_turistico}}" type="text" class="form-control "/>
                  </div>
                </div>  
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Descripción</label>
                    <div class="form-group">
                      <textarea name="descripcion_turistico" id="descripcion_turistico" class="form-control" rows="5">{{ $sitio->descripcion_turistico}}</textarea>
                    </div>
                  </div>
                </div>                             
              </div>
              
              <div class="row">
                @foreach ($sitio->imagenSitioTuristicos as $imagen)
                @if ($imagen->tipo_imagen_turistico == 'portada')        
                <div class="col-3">
                    <div class="card">
                        <div class="view overlay">
                            <img class="card-img-top" src="../../{{$imagen->thumbnail}}" alt="Card image cap">
                            <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                    </div>
                </div>
                @endif
                @if ($imagen->tipo_imagen_turistico == 'galeria')        
                <div class="col-3">
                    <div class="card">
                        <div class="view overlay">
                            <img class="card-img-top" src="../../{{$imagen->thumbnail}}" alt="Card image cap">
                            <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
              </div>  
                
              <div class="row">
                <div class="form-group form-file-upload form-file-multiple col-md-4">
                  <input type="file" multiple="" class="inputFileHidden" name="enlace_imagen_turistico">
                  <input type="hidden" name="tipo_imagen_turistico" id="tipo_imagen_turistico" value=''>
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
                    <input type="file" multiple="" class="inputFileHidden" name="imagen[]">
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