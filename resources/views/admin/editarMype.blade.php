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
            <h4 class="card-title font-weight-bold">Editar MyPE</h4>
            </div>
            <p class="card-category">Ingrese todos los datos que desea modificar a la MyPE de la plataforma</p>
          </div>
          <div class="card-body">
            <form action="{{ route('updateMype',$mypes->id) }}" method="POST">
                @csrf
                @method('PUT')
                {{ csrf_field() }} 
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="hidden" name="user_id" id="user_id" value="{{$mypes->user->id}}">
                  <label for="user_id">Dueño MyPE</label>
                  <select class="form-control selectpicker" data-style="btn btn-link" id="user_id" name="user_id " disabled>
                    <option value="{{$mypes->user->id}}">{{$mypes->user->nombre}} {{$mypes->user->apellido_usuario}}</option>
                  </select>
                </div>
              </div>
            </div>  

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="rubro_mype">Seleccione el Rubro</label>
                  <select class="form-control selectpicker"  id="rubro_mype" name="rubro_mype"data-style="btn btn-link" onchange="getRubro(this)">
                    @switch($mypes->rubro_mype)
                        @case('Gastronomía')
                        <option selected value="Gastronomía">Gastronomía</option>
                        <option value="Hotelería">Hotelería</option>
                        <option value="Turismo">Turismo</option>
                        <option value="Bazares">Bazares</option>
                        <option value="Artesanía">Artesanía</option>
                          @break
                        @case('Hotelería')
                        <option value="Gastronomía">Gastronomía</option>
                        <option selected value="Hotelería">Hotelería</option>
                        <option value="Turismo">Turismo</option>
                        <option value="Bazares">Bazares</option>
                        <option value="Artesanía">Artesanía</option>
                          @break
                        @case('Turismo')
                        <option value="Gastronomía">Gastronomía</option>
                        <option value="Hotelería">Hotelería</option>
                        <option selected value="Turismo">Turismo</option>
                        <option value="Bazares">Bazares</option>
                        <option value="Artesanía">Artesanía</option>
                          @break
                        @case('Bazares')
                        <option value="Gastronomía">Gastronomía</option>
                        <option value="Hotelería">Hotelería</option>
                        <option value="Turismo">Turismo</option>
                        <option selected value="Bazares">Bazares</option>
                        <option value="Artesanía">Artesanía</option>
                          @break
                        @case('Artesanía')
                        <option value="Gastronomía">Gastronomía</option>
                        <option value="Hotelería">Hotelería</option>
                        <option value="Turismo">Turismo</option>
                        <option value="Bazares">Bazares</option>
                        <option selected value="Artesanía">Artesanía</option>
                          @break
                            
                    @endswitch
                  </select>
                </div>
              </div>
              <!-- Mostrar servicios de hotel-->
              <div class="col-md-6 align-content-center" id="serviciosH" @if ($mypes->rubro_mype == "Hotelería") style="display:display;"@else style="display:none;" @endif >
                <label for="serviciosH" class="mb-2">Servicios</label>
                <div class="form-check">
                  @foreach ($servicios as $servicio)
                  @if ($servicio->tipo_servicio == "Hotelería")
                  <label class="form-check-label">
                    <input class="form-check-input" name="servicioH[]" type="checkbox" value="{{$servicio->id}}"
                    @foreach ($mypes->servicios as $servicioMype)
                     @if ($servicioMype->nombre_servicio==$servicio->nombre_servicio)
                     checked
                     @endif
                    @endforeach
                    >
                    {{$servicio->nombre_servicio}}
                    <span class="form-check-sign">
                      <span class="check"></span>
                    </span>
                  </label>
                  @endif
                  @endforeach
                </div>
              </div>
              <!-- Mostrar servicios de restaurant-->
              <div class="col-md-6" id="serviciosG" @if ($mypes->rubro_mype == "Gastronomía") style="display:display;"@else style="display:none;" @endif>
                <label for="serviciosG" class="mb-2">Servicios</label>
                <div class="form-check">
                    @foreach ($servicios as $servicio)
                    @if ($servicio->tipo_servicio == "Gastronomía")
                    <label class="form-check-label">
                        <input class="form-check-input" name="servicioG[]" type="checkbox" value="{{$servicio->id}}"
                        @foreach ($mypes->servicios as $servicioMype)
                          @if ($servicioMype->nombre_servicio==$servicio->nombre_servicio)
                          checked
                          @endif
                        @endforeach
                        >
                        {{$servicio->nombre_servicio}}
                        <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                    </label>
                    @endif
                    @endforeach
                </div>
              </div>
              <!-- Mostrar servicios de turismo-->
              <div class="col-md-6" id="serviciosT" @if ($mypes->rubro_mype == "Turismo") style="display:display;" @else style="display:none;" @endif>
                <label for="serviciosT" class="mb-2">Servicios</label>
                <div class="form-check">
                  <div class="row">
                  @foreach ($servicios as $servicio)
                  @if ($servicio->tipo_servicio == "Turismo")
                  
                  <div class="col-md-6 mt-1">
                  <label class="form-check-label">
                    <input class="form-check-input" name="servicioT[]" type="checkbox" value="{{$servicio->id}}"
                    @foreach ($mypes->servicios as $servicioMype)
                     @if ($servicioMype->nombre_servicio==$servicio->nombre_servicio)
                     checked
                     @endif
                    @endforeach
                    >
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
              <div class="col-md-6" id="serviciosB"  @if ($mypes->rubro_mype == "Bazares") style="display:display;"@else style="display:none;" @endif>
                <label for="serviciosB" class="mb-2">Servicios</label>
                <div class="form-check">
                  @foreach ($servicios as $servicio)
                  @if ($servicio->tipo_servicio == "Bazares")
                  <label class="form-check-label">
                    <input class="form-check-input"  name="servicioB[]" type="checkbox" value="{{$servicio->id}}"
                    @foreach ($mypes->servicios as $servicioMype)
                     @if ($servicioMype->nombre_servicio==$servicio->nombre_servicio)
                     checked
                     @endif
                    @endforeach
                    >
                    {{$servicio->nombre_servicio}}
                    <span class="form-check-sign">
                      <span class="check"></span>
                    </span>
                  </label>
                  @endif
                  @endforeach
                </div>
              </div>
              <!-- Mostrar servicios de Artesanias-->
              <div class="col-md-6" id="serviciosA" @if ($mypes->rubro_mype == "Artesanía") style="display:display;"@else style="display:none;" @endif>
                <label for="serviciosA" class="mb-2">Servicios</label>
                <div class="form-check">
                  @foreach ($servicios as $servicio)
                  @if ($servicio->tipo_servicio == "Artesanía")
                  <label class="form-check-label">
                    <input class="form-check-input" name="servicioA[]" type="checkbox" value="{{$servicio->id}}">
                    {{$servicio->nombre_servicio}}
                    <span class="form-check-sign">
                      <span class="check"></span>
                    </span>
                  </label>
                  @endif
                  @endforeach
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Nombre de la MyPE</label>
                  <input type="text" name="nombre_fantasia_mype" id="nombre_fantasia_mype" value="{{ old('nombre_fantasia_mype', $mypes->nombre_fantasia_mype) }}" class="form-control" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Dirección</label>
                  <input type="text" id="direccion_mype" name="direccion_mype" value="{{ old('direccion_mype', $mypes->direccion_mype) }}" class="form-control">
                </div>
              </div>
            </div> 

            <div class="row mt-5">
              <div class="col-md-4">
                <div class="form-group">
                  <label class="bmd-label-floating">Página principal</label>
                  <input type="text" id="pagina_mype" name="pagina_mype" value="{{ old('pagina_mype', $mypes->pagina_mype) }}" class="form-control">
                </div>
              </div> 
              <div class="col-md-4">
                <div class="form-group">
                  <label class="bmd-label-floating">Facebook</label>
                  <input type="text" id="facebook_mype" name="facebook_mype" value="{{ old('facebook_mype', $mypes->facebook_mype) }}" class="form-control">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label class="bmd-label-floating">Instragram</label>
                  <input type="text" id="instagram_mype" name="instagram_mype" value="{{ old('instagram_mype', $mypes->instagram_mype) }}" class="form-control">
                </div>
              </div>      
              <div class="col-md-4">
                <div class="form-group">
                  <label class="bmd-label-floating">Teléfono</label>
                  <input type="text" id="telefono_mype" name="telefono_mype" value="{{ old('telefono_mype', $mypes->telefono_mype) }}" class="form-control">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label class="bmd-label-floating">Celular</label>
                  <input type="text" id="celular_mype" name="celular_mype" value="{{ old('celular_mype', $mypes->celular_mype) }}" class="form-control">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label class="bmd-label-floating">Correo</label>
                  <input type="text" id="correo_mype" name="correo_mype" value="{{ old('correo_mype', $mypes->correo_mype) }}" class="form-control">
                </div>
              </div>                              
            </div>     
                
            <div class="row mt-5">
              <div class="form-group form-file-upload form-file-multiple col-md-6">
                <input type="file" multiple="" name="enlace_imagen_mype"  class="inputFileHidden">
                  <div class="input-group">
                    <input type="text" class="form-control inputFileVisible" placeholder="Foto de Portada">
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
                  <input type="text" class="form-control inputFileVisible" placeholder="Galería de Imágenes" multiple>
                  <span class="input-group-btn">
                  <button type="button" class="btn btn-fab btn-round btn-info">
                    <i class="material-icons">layers</i>
                  </button>
                  </span>
                </div>
              </div> 
              <div class="col-md-6">      
                <div class="form-group">
                  <label class="label-control">Fecha de inicio</label>
                  <input type="text" id="horario_mype" name="horario_mype" class="form-control datetimepicker" value="21/06/2018"/>
                </div>
              </div>
              <div class="col-md-6">      
                <div class="form-group">
                  <label class="label-control">Fecha de Termino</label>
                  <input type="text" class="form-control datetimepicker" value="21/06/2018"/>
                </div>
              </div>  
              <div class="col-md-12">
                <div class="form-group">
                  <label>Descripción</label>
                  <div class="form-group">
                    <textarea class="form-control" rows="5"  id="descripcion_mype" name="descripcion_mype"> {{$mypes->descripcion_mype }} </textarea>
                  </div>
                </div>
              </div>
            </div>

            <button type="submit" class="btn btn-warning pull-right">Editar</button>
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