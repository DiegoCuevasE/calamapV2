@extends('plantillaMype')
      

@section('contenido')
      
<div class="container">

  <!-- Titulo -->
  <div class="row mb-5 mt-5">
    <div class="col-md-8 ">
      <h2 class=" card-text">Modificar Sitio Turistico</h2>
      <p class="color-black-opacity-5">Ingrese los nuevos datos</p>
    </div>
  </div>

</div>
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-9">
          <div class="card mb-4">
              <div class="card-header">Registro de Sitio Turistico</div>
                <div class="card-body">
                    <form action="{{ url('/sitioTuristico/'.$sitioturistico->id)}}"method="post" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      {{ method_field('PATCH')}}                     
                      <div class="form-group row">

                          <input type="hidden" name="id" id="id" value="{{ $sitioturistico->id }}" disabled="disabled">
                          <input type="hidden" name="user_id" id="user_id" value="{{ $sitioturistico->user_id}}" disabled="disabled">
                          
                          <label for="nombre_turistico" class="col-md-4 col-form-label text-md-right">Nombre</label>
                          <div class="col-md-6">
                              <input type="text" name="nombre_turistico" id="nombre_turistico" value="{{ $sitioturistico->nombre_turistico }}" class="form-control " >  
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="tipo_turistico" class="col-md-4 col-form-label text-md-right">Entrada</label>
                          <div class="col-md-6">
                              <input id="tipo_turistico" type="text" class="form-control " name="tipo_turistico" value="{{ $sitioturistico->tipo_turistico }}">
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
                          <label for="direccion_turistico" class="col-md-4 col-form-label text-md-right">Dirección</label>

                          <div class="col-md-6">
                              <input id="direccion_turistico" type="text" class="form-control" name="direccion_turistico" value="{{ $sitioturistico->direccion_turistico }}">
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="descripcion_turistico" class="col-md-4 col-form-label text-md-right">Descripción</label>

                          <div class="col-md-6">
                              <textarea id="descripcion_turistico"  class="form-control" name="descripcion_turistico">{{ $sitioturistico->descripcion_turistico }}</textarea>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="enlace_imagen_turistico" class="col-md-4 col-form-label text-md-right">Imágen Principal</label>

                          <div class="col-md-6 row">
                              @foreach ($sitioturistico->imagensitioturistico as $imagen) 
                              @if ($imagen->tipo_imagen_turistico == 'logo')
                            <div class="col-md-8 mt-2 mb-2">
                              <img class="card-img-top" src="{{'/'.$imagen->enlace_imagen_turistico}}" alt="Card image cap">
                              <input type="hidden" name="enlace_imagen_turistico" id="enlace_imagen_turistico" value={{$imagen->enlace_imagen_turistico}}>
                              <input type="hidden" name="tipo_imagen_turistico" id="tipo_imagen_turistico" value={{$imagen->tipo_imagen_turistico}}>
                            </div>
                              @endif
                              @endforeach
                              <input type="file" name="enlace_imagen_turistico" id="enlace_imagen_turistico2" value="">
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="enlace_imagen_turistico" class="col-md-4 col-form-label text-md-right">Galeria</label>
                          <div class="col-md-6 row">
                              @foreach ($sitioturistico->imagensitioturistico as $imagen) 
                              @if ($imagen->tipo_imagen_turistico == 'galeria')
                            <div class="col-md-5 mt-2 mb-2">
                              <img class="card-img-top" src="{{'/'.$imagen->enlace_imagen_turistico}}" alt="Card image cap">
                              <input type="hidden" name="enlace_imagen_turistico" id="enlace_imagen_turistico" value={{$imagen->enlace_imagen_turistico}}>
                              <input type="hidden" name="tipo_imagen_turistico" id="tipo_imagen_turistico" value={{$imagen->tipo_imagen_turistico}}>
                            </div>
                              @endif
                              @endforeach
                              <input type="file" name="image[]"  multiple="true">
                          </div>
                      </div>
                      <div class="form-group row mb-0">
                          <div class="col-md-6 offset-md-4 " style="">
                              <input type="submit" value="Editar">
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
</div>
</div>

  
  <script src="{{ asset('template2/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('template2/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('template2/js/jquery-ui.js') }}"></script>
  <script src="{{ asset('template2/js/popper.min.js') }}"></script>
  <script src="{{ asset('template2/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('template2/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('template2/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('template2/js/jquery.countdown.min.js') }}"></script>
  <script src="{{ asset('template2/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('template2/js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('template2/js/aos.js') }}"></script>
  <script src="{{ asset('template2/js/main.js') }}"></script>
  <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.2/js/mdb.min.js"></script>


  
  <script>
    $(document).ready(function(){
        $('.secciones article').hide();
        $('.secciones article:first').show();

        $('ul.tabs li a').click(function(){
            $('this').addClass('active');
            $('.secciones article').hide();

            var activeTab = $(this).attr('href');
            $(activeTab).show();
            return false;

        });
    });
  </script>
    
@endsection

        
