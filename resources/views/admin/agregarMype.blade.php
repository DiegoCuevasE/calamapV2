@extends('admin/dashboard')

@section('panel')

<div class="content">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-10">
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
              <div class="col-md-4">
                <div class="form-group">
                  <label for="user_id">Dueño MyPE</label>
                  <select class="form-control selectpicker" data-style="btn btn-link" id="user_id" name="user_id">
                    @foreach ($users as $user)
                    <option value="{{$user->id}}">{{$user->nombre}} {{$user->apellido_usuario}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>  

            <div class="row ">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="rubro_mype">Seleccione el Rubro</label>
                  <select class="form-control selectpicker"  id="rubro_mype" name="rubro_mype"data-style="btn btn-link" onchange="getRubro(this)">
                      <option value="Gastronomía">Gastronomía</option>
                      <option value="Hotelería">Hotelería</option>
                      <option value="Turismo">Turismo</option>
                      <option value="Bazares">Bazares</option>
                      <option value="Artesanía">Artesanía</option>
                  </select>
                </div>
              </div>
              <!-- Mostrar servicios de hotel-->
              <div class="col-md-6 align-content-center" id="serviciosH" style="display:none;">
                <label for="serviciosH" class="mb-2">Servicios</label>
                <div class="form-check">
                  @foreach ($servicios as $servicio)
                  @if ($servicio->tipo_servicio == "Hotelería")
                  <label class="form-check-label">
                    <input class="form-check-input" name="servicioH[]" type="checkbox" value="{{$servicio->id}}">
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
              <div class="col-md-6" id="serviciosG" style="display:none;">
                <label for="serviciosG" class="mb-2">Servicios</label>
                <div class="form-check">
                    @foreach ($servicios as $servicio)
                    @if ($servicio->tipo_servicio == "Gastronomía")
                    <label class="form-check-label">
                        <input class="form-check-input" name="servicioG[]" type="checkbox" value="{{$servicio->id}}">
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
              <div class="col-md-8" id="serviciosT" style="display:none;">
                <label for="serviciosT" class="mb-2">Servicios</label>
                <div class="form-check">
                  <div class="row">
                  @foreach ($servicios as $servicio)
                  @if ($servicio->tipo_servicio == "Turismo")
                  <div class="col-md-4 mt-1">
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
              <div class="col-md-6" id="serviciosB" style="display:none;">
                <label for="serviciosB" class="mb-2">Servicios</label>
                <div class="form-check">
                  @foreach ($servicios as $servicio)
                  @if ($servicio->tipo_servicio == "Bazares")
                  <label class="form-check-label">
                    <input class="form-check-input" name="servicioB[]" type="checkbox" value="{{$servicio->id}}">
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
              <div class="col-md-6" id="serviciosA" style="display:none;">
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

            <div class="row ">
              <div class="col-md-4">
                <div class="form-group">
                  <label class="bmd-label-floating">Nombre de la MyPE</label>
                  <input type="text" name="nombre_fantasia_mype" id="nombre_fantasia_mype" class="form-control" >
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label class="bmd-label-floating">Dirección</label>
                  <input type="text" id="direccion_mype" name="direccion_mype" class="form-control">
                </div>
              </div>
            </div> 

            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label class="bmd-label-floating">Página principal</label>
                  <input type="text" id="pagina_mype" name="pagina_mype" class="form-control">
                </div>
              </div> 
              <div class="col-md-4">
                <div class="form-group">
                  <label class="bmd-label-floating">Facebook</label>
                  <input type="text" id="facebook_mype" name="facebook_mype"class="form-control">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label class="bmd-label-floating">Instragram</label>
                  <input type="text" id="instagram_mype" name="instagram_mype"class="form-control">
                </div>
              </div>      
              <div class="col-md-4">
                <div class="form-group">
                  <label class="bmd-label-floating">Teléfono</label>
                  <input type="text" id="telefono_mype" name="telefono_mype" class="form-control">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label class="bmd-label-floating">Celular</label>
                  <input type="text" id="celular_mype" name="celular_mype" class="form-control">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label class="bmd-label-floating">Correo</label>
                  <input type="text" id="correo_mype" name="correo_mype" class="form-control">
                </div>
              </div>                              
            </div>

            <div class="row">
              <div class="row  align-items-center col-md-10">
                <div class="col-md-1">
                  <label class="label-primary">Lunes</label>
                </div>
                <div class="col-md-2 col-5">      
                  <div class="form-group">
                    <input type="text" class="form-control timepicker" />
                  </div>
                </div>
                <label class="label-primary">hasta</label>
                <div class="col-md-2 col-5">      
                  <div class="form-group">
                    <input type="text" class="form-control timepicker" />
                  </div>
                </div>  
                <div class="col-md-2 col-5">      
                  <div class="form-group">
                    <input type="text" class="form-control timepicker" />
                  </div>
                </div> 
                <label class="label-primary">hasta</label>
                <div class="col-md-2 col-5">      
                  <div class="form-group">
                    <input type="text" class="form-control timepicker" />
                  </div>
                </div>  
              </div>
              <div class="row align-items-center ">
                  <div class="col-md-1">
                    <label class="label-primary">Martes</label>
                  </div>
                  <div class="col-md-2 col-5">      
                    <div class="form-group">
                      <input type="text" class="form-control timepicker" />
                    </div>
                  </div>
                  <label class="label-primary">hasta</label>
                  <div class="col-md-2 col-5">      
                    <div class="form-group">
                      <input type="text" class="form-control timepicker" />
                    </div>
                  </div>  
                  <div class="col-md-2 col-5">      
                      <div class="form-group">
                        <input type="text" class="form-control timepicker" />
                      </div>
                    </div> 
                    <label class="label-primary">hasta</label>
                    <div class="col-md-2 col-5">      
                      <div class="form-group">
                        <input type="text" class="form-control timepicker" />
                      </div>
                    </div>  
                </div>
                <div class="row align-items-center ">
                    <div class="col-md-1">
                      <label class="label-primary">Miercoles</label>
                    </div>
                    <div class="col-md-2 col-5">      
                      <div class="form-group">
                        <input type="text" class="form-control timepicker" />
                      </div>
                    </div>
                    <label class="label-primary">hasta</label>
                    <div class="col-md-2 col-5">      
                      <div class="form-group">
                        <input type="text" class="form-control timepicker" />
                      </div>
                    </div>  
                    <div class="col-md-2 col-5">      
                        <div class="form-group">
                          <input type="text" class="form-control timepicker" />
                        </div>
                      </div> 
                      <label class="label-primary">hasta</label>
                      <div class="col-md-2 col-5">      
                        <div class="form-group">
                          <input type="text" class="form-control timepicker" />
                        </div>
                      </div>  
                  </div>
                  <div class="row align-items-center ">
                      <div class="col-md-1">
                        <label class="label-primary">Jueves</label>
                      </div>
                      <div class="col-md-2 col-5">      
                        <div class="form-group">
                          <input type="text" class="form-control timepicker" />
                        </div>
                      </div>
                      <label class="label-primary">hasta</label>
                      <div class="col-md-2 col-5">      
                        <div class="form-group">
                          <input type="text" class="form-control timepicker" />
                        </div>
                      </div>  
                      <div class="col-md-2 col-5">      
                          <div class="form-group">
                            <input type="text" class="form-control timepicker" />
                          </div>
                        </div> 
                        <label class="label-primary">hasta</label>
                        <div class="col-md-2 col-5">      
                          <div class="form-group">
                            <input type="text" class="form-control timepicker" />
                          </div>
                        </div>  
                    </div>
                    <div class="row align-items-center ">
                        <div class="col-md-1">
                          <label class="label-primary">Viernes</label>
                        </div>
                        <div class="col-md-2 col-5">      
                          <div class="form-group">
                            <input type="text" class="form-control timepicker" />
                          </div>
                        </div>
                        <label class="label-primary">hasta</label>
                        <div class="col-md-2 col-5">      
                          <div class="form-group">
                            <input type="text" class="form-control timepicker" />
                          </div>
                        </div>  
                        <div class="col-md-2 col-5">      
                            <div class="form-group">
                              <input type="text" class="form-control timepicker" />
                            </div>
                          </div> 
                          <label class="label-primary">hasta</label>
                          <div class="col-md-2 col-5">      
                            <div class="form-group">
                              <input type="text" class="form-control timepicker" />
                            </div>
                          </div>  
                      </div>
                      <div class="row align-items-center ">
                          <div class="col-md-1">
                            <label class="label-primary">Sabado</label>
                          </div>
                          <div class="col-md-2 col-5">      
                            <div class="form-group">
                              <input type="text" class="form-control timepicker" />
                            </div>
                          </div>
                          <label class="label-primary">hasta</label>
                          <div class="col-md-2 col-5">      
                            <div class="form-group">
                              <input type="text" class="form-control timepicker" />
                            </div>
                          </div>  
                          <div class="col-md-2 col-5">      
                              <div class="form-group">
                                <input type="text" class="form-control timepicker" />
                              </div>
                            </div> 
                            <label class="label-primary">hasta</label>
                            <div class="col-md-2 col-5">      
                              <div class="form-group">
                                <input type="text" class="form-control timepicker" />
                              </div>
                            </div>  
                        </div>
                        <div class="row align-items-center ">
                            <div class="col-md-1">
                              <label class="label-primary">Domingo</label>
                            </div>
                            <div class="col-md-2 col-5">      
                              <div class="form-group">
                                <input type="text" class="form-control timepicker" />
                              </div>
                            </div>
                            <label class="label-primary">hasta</label>
                            <div class="col-md-2 col-5">      
                              <div class="form-group">
                                <input type="text" class="form-control timepicker" />
                              </div>
                            </div>  
                            <div class="col-md-2 col-5">      
                                <div class="form-group">
                                  <input type="text" class="form-control timepicker" />
                                </div>
                              </div> 
                              <label class="label-primary">hasta</label>
                              <div class="col-md-2 col-5">      
                                <div class="form-group">
                                  <input type="text" class="form-control timepicker" />
                                </div>
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