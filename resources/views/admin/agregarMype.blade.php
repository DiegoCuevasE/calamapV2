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
            
            <div class="row justify-content-center">  
              <div class="col-md-6">
                <div class="form-group">
                  <label for="user_id">Dueño MyPE</label>
                  <select class="form-control selectpicker" data-style="btn btn-link" id="user_id" name="user_id">
                    @foreach ($users as $user)
                    <option value="{{$user->id}}">{{$user->nombre}} {{$user->apellido_usuario}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="rubro_mype">Seleccione el Rubro</label>
                  <select class="form-control selectpicker"  id="rubro_mype" name="rubro_mype"data-style="btn btn-link" onchange="getRubro(this)">
                      <option value="Gastronomía" selected>Restaurant</option>
                      <option value="Hotelería">Hotelería</option>
                      <option value="Turismo">Turismo</option>
                      <option value="Bazares">Comercio</option>
                      <option value="Artesanía">Artesanía</option>
                  </select>
                </div>
              </div>
            </div>  

            <div class="row justify-content-center mt-2">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="bmd-label-floating">Nombre de la MyPE</label>
                  <input type="text" name="nombre_fantasia_mype" id="nombre_fantasia_mype" class="form-control" >
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label class="bmd-label-floating">Dirección</label>
                  <input type="text" id="direccion_mype" name="direccion_mype" class="form-control">
                </div>
              </div>
            </div> 

            <div class="row mt-2 justify-content-center">
              
              <!-- Mostrar servicios de hotel-->
              <div class="col-md-12 " id="serviciosH" style="display:none;">
                <label for="serviciosH" class="mb-2">Servicios</label>
                <div class="form-check">
                  <div class="row">
                  @foreach ($servicios as $servicio)
                  @if ($servicio->tipo_servicio == "Hotelería")
                  <div class="col-md-3 mt-1">
                  <label class="form-check-label">
                    <input class="form-check-input" name="servicioH[]" type="checkbox" value="{{$servicio->id}}">
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
              <div class="col-md-12" id="serviciosG" >
                <label for="serviciosG" class="mb-2">Servicios</label>
                <div class="form-check">
                    <div class="row">
                    @foreach ($servicios as $servicio)
                    @if ($servicio->tipo_servicio == "Gastronomía")
                    <div class="col-md-3 mt-1">
                    <label class="form-check-label">
                        <input class="form-check-input" name="servicioG[]" type="checkbox" value="{{$servicio->id}}">
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
              <div class="col-md-12" id="serviciosT" style="display:none;">
                <label for="serviciosT" class="mb-2">Servicios</label>
                <div class="form-check">
                  <div class="row">
                  @foreach ($servicios as $servicio)
                  @if ($servicio->tipo_servicio == "Turismo")
                  <div class="col-md-3 mt-1">
                  <label class="form-check-label">
                    <input class="form-check-input" name="servicioT[]" type="checkbox" value="{{$servicio->id}}">
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
              <div class="col-md-12" id="serviciosB" style="display:none;">
                <label for="serviciosB" class="mb-2">Servicios</label>
                <div class="form-check">
                  <div class="row">
                  @foreach ($servicios as $servicio)
                  @if ($servicio->tipo_servicio == "Bazares")
                  <div class="col-md-3 mt-1">
                  <label class="form-check-label">
                    <input class="form-check-input" name="servicioB[]" type="checkbox" value="{{$servicio->id}}">
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
              <div class="col-md-12" id="serviciosA" style="display:none;">
                <label for="serviciosA" class="mb-2">Servicios</label>
                <div class="form-check">
                  <div class="row">
                  @foreach ($servicios as $servicio)
                  @if ($servicio->tipo_servicio == "Artesanía")
                  <div class="col-md-3 mt-1">
                  <label class="form-check-label">
                    <input class="form-check-input" name="servicioA[]" type="checkbox" value="{{$servicio->id}}">
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
                    <select class="form-control selectpicker" data-style="btn btn-link" name="idioma_mype" id="idioma_mype" onchange="getIdioma(this)">
                      <option value="1" selected>Solo español</option>
                      <option value="0">Español y otros idiomas</option>
                    </select>
                </div>
              </div>   
              
              <div class="col-md-6" >
                <div class="form-check" id="idiomas" style="display:none;">
                  <div class="row">
                    @foreach ($idiomas as $idioma)
                    <div class="col-md-4 mt-1">
                      <label class="form-check-label">
                      <input class="form-check-input" name="idioma[]" type="checkbox" value="{{$idioma->id}}">
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
              <div class="row align-items-center">
                <label class="label-primary col-md-1">Lun</label>
                <div class="d-flex col-md-4 align-items-center">
                  <div class="col">      
                    <div class="form-group">
                      <input type="text" id="lunInicio" name="lunInicio" class="form-control timepicker" />
                    </div>
                  </div>
                <label class="label-primary">Hasta</label>
                  <div class="col">      
                    <div class="form-group">
                      <input type="text" id="lunTermino" name="lunTermino" class="form-control timepicker" />
                    </div>
                  </div>
                </div>
                <a href="#" class="mostrarHorario"><i class="fas fa-plus align-items-center"></i></a>
                <div class="expandir col-md-4" style="display:none">
                  <div class="d-flex align-items-center">
                    <div class="col">      
                      <div class="form-group">
                        <input type="text" id="lunInicio2" name="lunInicio2" class="form-control timepicker" />
                      </div>
                    </div>
                  <label class="label-primary">Hasta</label>
                    <div class="col">      
                      <div class="form-group">
                        <input type="text" id="lunTermino2" name="lunTermino2" class="form-control timepicker" />
                      </div>
                    </div>
                  </div>
                </div> 
              </div>
              <div class="row align-items-center">
                <label class="label-primary col-md-1">Mar</label>
                <div class="d-flex col-md-4 align-items-center">
                  <div class="col">      
                    <div class="form-group">
                      <input type="text" id="marInicio" name="marInicio" class="form-control timepicker" />
                    </div>
                  </div>
                <label class="label-primary">Hasta</label>
                  <div class="col">      
                    <div class="form-group">
                      <input type="text" id="marTermino" name="marTermino" class="form-control timepicker" />
                    </div>
                  </div>
                </div>
                <a href="#" class="mostrarHorario"><i class="fas fa-plus align-items-center"></i></a>
                <div class="expandir col-md-4" style="display:none">
                  <div class="d-flex align-items-center">
                    <div class="col">      
                      <div class="form-group">
                        <input type="text" id="marInicio2" name="marInicio2" class="form-control timepicker" />
                      </div>
                    </div>
                  <label class="label-primary">Hasta</label>
                    <div class="col">      
                      <div class="form-group">
                        <input type="text" id="marTermino2" name="marTermino2" class="form-control timepicker" />
                      </div>
                    </div>
                  </div>
                </div> 
              </div>
              <div class="row align-items-center">
                <label class="label-primary col-md-1">Mie</label>
                <div class="d-flex col-md-4 align-items-center">
                  <div class="col">      
                    <div class="form-group">
                      <input type="text" id="mieInicio" name="mieInicio" class="form-control timepicker" />
                    </div>
                  </div>
                <label class="label-primary">Hasta</label>
                  <div class="col">      
                    <div class="form-group">
                      <input type="text" id="mieTermino" name="mieTermino" class="form-control timepicker" />
                    </div>
                  </div>
                </div>
                <a href="#" class="mostrarHorario"><i class="fas fa-plus align-items-center"></i></a>
                <div class="expandir col-md-4" style="display:none">
                  <div class="d-flex align-items-center">
                    <div class="col">      
                      <div class="form-group">
                        <input type="text" id="mieInicio2" name="mieInicio2" class="form-control timepicker" />
                      </div>
                    </div>
                  <label class="label-primary">Hasta</label>
                    <div class="col">      
                      <div class="form-group">
                        <input type="text" id="mieTermino2" name="mieTermino2" class="form-control timepicker" />
                      </div>
                    </div>
                  </div>
                </div> 
              </div>
              <div class="row align-items-center">
                <label class="label-primary col-md-1">jue</label>
                <div class="d-flex col-md-4 align-items-center">
                  <div class="col">      
                    <div class="form-group">
                      <input type="text" id="jueInicio" name="jueInicio" class="form-control timepicker" />
                    </div>
                  </div>
                <label class="label-primary">Hasta</label>
                  <div class="col">      
                    <div class="form-group">
                      <input type="text" id="jueTermino" name="jueTermino" class="form-control timepicker" />
                    </div>
                  </div>
                </div>
                <a href="#" class="mostrarHorario"><i class="fas fa-plus align-items-center"></i></a>
                <div class="expandir col-md-4" style="display:none">
                  <div class="d-flex align-items-center">
                    <div class="col">      
                      <div class="form-group">
                        <input type="text" id="jueInicio2" name="jueInicio2" class="form-control timepicker" />
                      </div>
                    </div>
                  <label class="label-primary">Hasta</label>
                    <div class="col">      
                      <div class="form-group">
                        <input type="text" id="jueTermino2" name="jueTermino2" class="form-control timepicker" />
                      </div>
                    </div>
                  </div>
                </div> 
              </div>
              <div class="row align-items-center">
                <label class="label-primary col-md-1">Vie</label>
                <div class="d-flex col-md-4 align-items-center">
                  <div class="col">      
                    <div class="form-group">
                      <input type="text" id="vieInicio" name="vieInicio" class="form-control timepicker" />
                    </div>
                  </div>
                <label class="label-primary">Hasta</label>
                  <div class="col">      
                    <div class="form-group">
                      <input type="text" id="vieTermino" name="vieTermino" class="form-control timepicker" />
                    </div>
                  </div>
                </div>
                <a href="#" class="mostrarHorario"><i class="fas fa-plus align-items-center"></i></a>
                <div class="expandir col-md-4" style="display:none">
                  <div class="d-flex align-items-center">
                    <div class="col">      
                      <div class="form-group">
                        <input type="text" id="vieInicio2" name="vieInicio2" class="form-control timepicker" />
                      </div>
                    </div>
                  <label class="label-primary">Hasta</label>
                    <div class="col">      
                      <div class="form-group">
                        <input type="text" id="vieTermino2" name="vieTermino2" class="form-control timepicker" />
                      </div>
                    </div>
                  </div>
                </div> 
              </div>
              <div class="row align-items-center">
                <label class="label-primary col-md-1">Sab</label>
                <div class="d-flex col-md-4 align-items-center">
                  <div class="col">      
                    <div class="form-group">
                      <input type="text" id="sabInicio" name="sabInicio" class="form-control timepicker" />
                    </div>
                  </div>
                <label class="label-primary">Hasta</label>
                  <div class="col">      
                    <div class="form-group">
                      <input type="text" id="sabTermino" name="sabTermino" class="form-control timepicker" />
                    </div>
                  </div>
                </div>
                <a href="#" class="mostrarHorario"><i class="fas fa-plus align-items-center"></i></a>
                <div class="expandir col-md-4" style="display:none">
                  <div class="d-flex align-items-center">
                    <div class="col">      
                      <div class="form-group">
                        <input type="text" id="sabInicio2" name="sabInicio2" class="form-control timepicker" />
                      </div>
                    </div>
                  <label class="label-primary">Hasta</label>
                    <div class="col">      
                      <div class="form-group">
                        <input type="text" id="sabTermino2" name="sabTermino2" class="form-control timepicker" />
                      </div>
                    </div>
                  </div>
                </div> 
              </div>
              <div class="row align-items-center">
                <label class="label-primary col-md-1">  Dom</label>
                <div class="d-flex col-md-4 align-items-center">
                  <div class="col">      
                    <div class="form-group">
                      <input type="text" id="domInicio" name="domInicio" class="form-control timepicker" />
                    </div>
                  </div>
                <label class="label-primary">Hasta</label>
                  <div class="col">      
                    <div class="form-group">
                      <input type="text" id="domTermino" name="domTermino" class="form-control timepicker" />
                    </div>
                  </div>
                </div>
                <a href="#" class="mostrarHorario"><i class="fas fa-plus align-items-center"></i></a>
                <div class="expandir col-md-4" style="display:none">
                  <div class="d-flex align-items-center">
                    <div class="col">      
                      <div class="form-group">
                        <input type="text" id="domInicio2" name="domInicio2" class="form-control timepicker" />
                      </div>
                    </div>
                  <label class="label-primary">Hasta</label>
                    <div class="col">      
                      <div class="form-group">
                        <input type="text" id="domTermino2" name="domTermino2" class="form-control timepicker" />
                      </div>
                    </div>
                  </div>
                </div> 
              </div>
            </div>

            <hr>
            <div class="row mt-1">
              
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
              <div class="col-md-12">
                <div class="form-group">
                  <label>Descripción</label>
                  <div class="form-group">
                    <label class="bmd-label-floating"> Agrege la información necesaria para que el publico conosca detalladamente su MyPE</label>
                    <textarea class="form-control" rows="5" id="descripcion_mype" name="descripcion_mype"></textarea>
                  </div>
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