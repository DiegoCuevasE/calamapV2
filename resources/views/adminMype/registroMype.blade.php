@extends('plantilla')



@section('contenido')
 


<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Registro de Negocio</div>
                      <div class="card-body">
                        <form action="{{ route('adminMype/registrarMype')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            
                            <div class="form-group row">
                                <input type="hidden" id="estado_mype" name="estado_mype" value="1"> 
                                <input type="hidden" id="user_id" name="user_id" value="{{Auth::id()}}">             
                                <label for="nombre_fantasia_mype" class="col-md-4 col-form-label text-md-right">Nombre de Fantasía</label>
                                <div class="col-md-6">
                                    <input type="text" name="nombre_fantasia_mype" id="nombre_fantasia_mype" value="" class="form-control " >  
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="razon_social_mype" class="col-md-4 col-form-label text-md-right">Razón social</label>
                                <div class="col-md-6">
                                    <input id="razon_social_mype" type="text" class="form-control " name="razon_social_mype" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                    <label for="direccion_mype" class="col-md-4 col-form-label text-md-right">Dirección</label>
                                    <div class="col-md-6">
                                        <input id="direccion_mype" type="text" class="form-control " name="direccion_mype" value="">
                                    </div>
                                </div>
                            <div class="form-group row">
                                    <label for="telefono_mype" class="col-md-4 col-form-label text-md-right">Teléfono</label>
                                <div class="col-md-6">
                                    <input id="telefono_mype" type="text" class="form-control " name="telefono_mype" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                    <label for="celular_mype" class="col-md-4 col-form-label text-md-right">Celular</label>
                                <div class="col-md-6">
                                    <input id="celular_mype" type="text" class="form-control " name="celular_mype" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                    <label for="correo_mype" class="col-md-4 col-form-label text-md-right">Correo</label>
                                <div class="col-md-6">
                                    <input id="correo_mype" type="text" class="form-control " name="correo_mype" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                    <label for="pagina_mype" class="col-md-4 col-form-label text-md-right">Página Principal</label>
                                <div class="col-md-6">
                                    <input id="pagina_mype" type="text" class="form-control " name="pagina_mype" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                    <label for="facebook_mype" class="col-md-4 col-form-label text-md-right">Facebook</label>
                                <div class="col-md-6">
                                    <input id="facebook_mype" type="text" class="form-control " name="facebook_mype" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                    <label for="instagram_mype" class="col-md-4 col-form-label text-md-right">Instragram</label>
                                <div class="col-md-6">
                                    <input id="instagram_mype" type="text" class="form-control " name="instagram_mype" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="horario_turistico" class="col-md-4 col-form-label text-md-right">Horario</label>
                                <div class="col-md-6">
                                  <div class="col-md-6 row">
                                    <select name="d1" id="d1" class="browser-default custom-select " >
                                        <option value="Lunes">Lunes</option>
                                        <option value="Martes">Martes</option>
                                        <option value="Miercoles">Miercoles</option>
                                        <option value="Jueves">Jueves</option>
                                        <option value="Viernes">Viernes</option>
                                        <option value="Sabado">Sabado</option>
                                        <option value="Domingo">Domingo</option>
                                    </select>
                                    <label for=" a ">{{' a '}}</label>
                                    <select name="d2" id="d2" class="browser-default custom-select  ">
                                        <option value="Lunes">Lunes</option>
                                        <option value="Martes">Martes</option>
                                        <option value="Miercoles">Miercoles</option>
                                        <option value="Jueves">Jueves</option>
                                        <option value="Viernes">Viernes</option>
                                        <option value="Sabado">Sabado</option>
                                        <option value="Domingo">Domingo</option>
                                      </select>
                                   </div>
                                  <div class="">
                                    <label for=" de ">{{' De '}}</label>
                                    <select name="h1" id="h1" class="browser-default custom-select  ">
                                        <option value="00:00">00:00</option>
                                        <option value="00:30">00:30</option>
                                        <option value="01:00">01:00</option>
                                        <option value="01:30">01:30</option>
                                        <option value="02:00">02:00</option>
                                        <option value="02:30">02:30</option>
                                        <option value="03:00">03:00</option>
                                        <option value="03:30">03:30</option>
                                        <option value="04:00">04:00</option>
                                        <option value="04:30">04:30</option>
                                        <option value="05:00">05:00</option>
                                        <option value="05:30">05:30</option>
                                        <option value="06:00">06:00</option>
                                        <option value="06:30">06:30</option>
                                        <option value="07:00">07:00</option>
                                        <option value="07:30">07:30</option>
                                        <option value="08:00">08:00</option>
                                        <option value="08:30">08:30</option>
                                        <option value="09:00">09:00</option>
                                        <option value="09:30">09:30</option>
                                        <option value="10:00">10:00</option>
                                        <option value="10:30">10:30</option>
                                        <option value="11:00">11:00</option>
                                        <option value="11:30">11:30</option>
                                        <option value="12:00">12:00</option>
                                        <option value="12:30">12:30</option>
                                        <option value="13:00">13:00</option>
                                        <option value="13:30">13:30</option>
                                        <option value="14:00">14:00</option>
                                        <option value="14:30">14:30</option>
                                        <option value="15:00">15:00</option>
                                        <option value="15:30">15:30</option>
                                        <option value="16:00">16:00</option>
                                        <option value="16:30">16:30</option>
                                        <option value="17:00">17:00</option>
                                        <option value="17:30">17:30</option>
                                        <option value="18:00">18:00</option>
                                        <option value="18:30">18:30</option>
                                        <option value="19:00">19:00</option>
                                        <option value="19:30">19:30</option>
                                        <option value="20:00">20:00</option>
                                        <option value="20:30">20:30</option>
                                        <option value="21:00">21:00</option>
                                        <option value="21:30">21:30</option>
                                        <option value="22:00">22:00</option>
                                        <option value="22:30">22:30</option>
                                        <option value="23:00">23:00</option>
                                        <option value="23:30">23:30</option>       
                                    </select>
                                    <label for=" Hrs a ">{{' Hrs a '}}</label>
                                    <select name="h2" id="h2" class="browser-default custom-select  ">
                                        <option value="00:00">00:00</option>
                                        <option value="00:30">00:30</option>
                                        <option value="01:00">01:00</option>
                                        <option value="01:30">01:30</option>
                                        <option value="02:00">02:00</option>
                                        <option value="02:30">02:30</option>
                                        <option value="03:00">03:00</option>
                                        <option value="03:30">03:30</option>
                                        <option value="04:00">04:00</option>
                                        <option value="04:30">04:30</option>
                                        <option value="05:00">05:00</option>
                                        <option value="05:30">05:30</option>
                                        <option value="06:00">06:00</option>
                                        <option value="06:30">06:30</option>
                                        <option value="07:00">07:00</option>
                                        <option value="07:30">07:30</option>
                                        <option value="08:00">08:00</option>
                                        <option value="08:30">08:30</option>
                                        <option value="09:00">09:00</option>
                                        <option value="09:30">09:30</option>
                                        <option value="10:00">10:00</option>
                                        <option value="10:30">10:30</option>
                                        <option value="11:00">11:00</option>
                                        <option value="11:30">11:30</option>
                                        <option value="12:00">12:00</option>
                                        <option value="12:30">12:30</option>
                                        <option value="13:00">13:00</option>
                                        <option value="13:30">13:30</option>
                                        <option value="14:00">14:00</option>
                                        <option value="14:30">14:30</option>
                                        <option value="15:00">15:00</option>
                                        <option value="15:30">15:30</option>
                                        <option value="16:00">16:00</option>
                                        <option value="16:30">16:30</option>
                                        <option value="17:00">17:00</option>
                                        <option value="17:30">17:30</option>
                                        <option value="18:00">18:00</option>
                                        <option value="18:30">18:30</option>
                                        <option value="19:00">19:00</option>
                                        <option value="19:30">19:30</option>
                                        <option value="20:00">20:00</option>
                                        <option value="20:30">20:30</option>
                                        <option value="21:00">21:00</option>
                                        <option value="21:30">21:30</option>
                                        <option value="22:00">22:00</option>
                                        <option value="22:30">22:30</option>
                                        <option value="23:00">23:00</option>
                                        <option value="23:30">23:30</option>       
                                    </select>
                                    <label for=" Hrs ">{{' Hrs '}}</label>
                                  </div>
                              </div>
                            </div>
      
                            <div class="form-group row">
                                <label for="rubro_mype" class="col-md-4 col-form-label text-md-right">Rubro</label>
      
                                <div class="col-md-6">
                                        <select name="rubro_mype" id="rubro_mype" onchange="getRubro(this)">
                                                <option value="0">Seleccione su rubro</option>
                                                <option value="Gastronomía">Gastronomía</option>
                                                <option value="Hotelería">Hotelería</option>
                                                <option value="Turismo">Turismo</option>
                                                <option value="Bazares">Bazares</option>
                                                <option value="Artesanía">Artesanía</option>
                                            </select>
                                </div>
                                
                            </div>

                            <div class="form-group row" id="serviciosH" style="display:none;">
                                            <label for="serviciosH" class="col-md-4 col-form-label text-md-right">Servicios</label>
                                            <div class="col-md-6">
                                            @foreach ($servicios as $servicio)
                                            @if ($servicio->tipo_servicio == "Hotelería")
                                            <input type="checkbox" name="servicioH[]" value="{{$servicio->id}}"/>{{$servicio->nombre_servicio}}<br/>
                                            @endif
                                            @endforeach
                                        </div>
                            </div>
                            <div class="form-group row" id="serviciosG" style="display:none;">
                                    <label for="serviciosG" class="col-md-4 col-form-label text-md-right">Servicios</label>
                                    <div class="col-md-6">
                                    @foreach ($servicios as $servicio)
                                    @if ($servicio->tipo_servicio == "Gastronomía")
                                    <input type="checkbox" name="servicioG[]" value="{{$servicio->id}}"/>{{$servicio->nombre_servicio}}<br/>
                                    @endif
                                    @endforeach
                                </div>
                            </div>

                            <div class="form-group row" id="serviciosT" style="display:none;">
                                    <label for="serviciosT" class="col-md-4 col-form-label text-md-right">Servicios</label>
                                    <div class="col-md-6">
                                    @foreach ($servicios as $servicio)
                                    @if ($servicio->tipo_servicio == "Turismo")
                                    <input type="checkbox" name="servicioT[]" value="{{$servicio->id}}"/>{{$servicio->nombre_servicio}}<br/>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
    
                            <div class="form-group row" id="serviciosB" style="display:none;">
                                    <label for="serviciosB" class="col-md-4 col-form-label text-md-right">Servicios</label>
                                    <div class="col-md-6">
                                    @foreach ($servicios as $servicio)
                                    @if ($servicio->tipo_servicio == "Bazares")
                                    <input type="checkbox" name="servicioB[]" value="{{$servicio->id}}"/>{{$servicio->nombre_servicio}}<br/>
                                    @endif
                                    @endforeach
                                </div>
                            </div>

                            <div class="form-group row" id="serviciosA" style="display:none;">
                                    <label for="serviciosA" class="col-md-4 col-form-label text-md-right">Servicios</label>
                                    <div class="col-md-6">
                                    @foreach ($servicios as $servicio)
                                    @if ($servicio->tipo_servicio == "Artesanía")
                                    <input type="checkbox" name="servicioA[]" value="{{$servicio->id}}"/>{{$servicio->nombre_servicio}}<br/>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="form-group row">
                                    <label for="idiomas_mype" class="col-md-4 col-form-label text-md-right">Idiomas</label>
          
                                    <div class="col-md-6">
                                            <select name="idioma_mype" id="idioma_mype" onchange="getIdioma(this)">
                                                    <option value="1">Solo español</option>
                                                    <option value="0">Español y otros idiomas</option>
                                                </select>
                                    </div>
                                    
                                </div>
    
                                <div class="form-group row" id="idiomas" style="display:none;">
                                                <div class="col-md-6">
                                                @foreach ($idiomas as $idioma)
                                                <input type="checkbox" name="idioma[]" value="{{$idioma->id}}"/>{{$idioma->nombre_idioma}}<br/>
                                                @endforeach
                                            </div>
                                </div>
                            <div class="form-group row">
                                <label for="descripcion_mype" class="col-md-4 col-form-label text-md-right">Descripción</label>
      
                                <div class="col-md-6">
                                    <textarea id="descripcion_mype" maxlength="255" class="form-control" name="descripcion_mype"></textarea>
                                    
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="enlace_imagen_mype" class="col-md-4 col-form-label text-md-right">Imagen Principal</label>
                                <div class="input-group col-md-6">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupFileAddon01">Subir</span>
                                  </div>
                                  <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="enlace_imagen_mype" id="enlace_imagen_mype" value="" accept="image/* aria-describedby="inputGroupFileAddon01">
                                    <input type="hidden" name="tipo_imagen_mype" id="tipo_imagen_mype" value='logo'>
                                    <label class="custom-file-label" for="inputGroupFile01">Seleccionar logo</label>
                                  </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="enlace_imagen_mype" class="col-md-4 col-form-label text-md-right">Galeria</label>
                                <div class="input-group col-md-6">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="inputGroupFileAddon01">Subir</span>
                                    </div>
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input " type="file" name="image[]" multiple="true" accept="image/*" aria-describedby="inputGroupFileAddon01">
                                      <label class="custom-file-label" for="inputGroupFile01">Seleccionar Imagenes</label>
                                    </div>
                                  </div>
                            </div>
                            <div class="form-group row mb-0 text-center">
                                <div class="col-md-6 offset-md-4 " style="">
                                    <button type="submit" class="btn btn-outline-success btn-rounded waves-effect">Agregar</button>
                                </div>
                            </div>
                        </form>
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