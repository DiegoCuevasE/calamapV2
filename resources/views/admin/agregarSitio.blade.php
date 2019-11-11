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
                <input type="hidden" name="id" id="id" value="">
                <input type="hidden" name="user_id" id="user_id" value="1"> 
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Nombre del Sitio Turístico</label>
                    <input name="nombre_turistico" id="nombre_turistico" type="text" class="form-control" >
                  </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Categoria del Sitio</label>
                      <input name="tipo_turistico" id="tipo_turistico" type="text" class="form-control" >
                    </div>
                  </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Dirección</label>
                    <input name="direccion_turistico" id="direccion_turistico" type="text" class="form-control">
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
                    <input name="horario_turistico" id="horario_turistico" type="text" class="form-control "/>
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
                    <label>Descripción</label>
                    <div class="form-group">
                      <label class="bmd-label-floating"> Agrege la información necesaria para que el publico conosca detalladamente el evento</label>
                      <textarea name="descripcion_turistico" id="descripcion_turistico" class="form-control" rows="5"></textarea>
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



@endsection