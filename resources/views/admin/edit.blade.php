<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CKALAMA &mdash; Ciudad Oasis</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700"> 
    <link rel="stylesheet" href="{{ asset('template2/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('template2/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template2/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('template2/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('template2/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template2/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template2/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('template2/fonts/flaticon/font2/flaticon.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('template2/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('template2/css/style.css') }}">

  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar py-1" role="banner">
    <div class="container-fluid justify-content-center">
      <div class="row align-items-center">
        <div class="col-6 col-xl-2">
            <a href="/"><img src="{{ asset('template2/images/logockalamaweb.png') }}" alt="Image" class="img-fluid"></a>
        </div>
        <div class="col-10 col-md-8 d-none d-xl-block justify-content-center">
          <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">
            <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
              <li><a href="{{ route('hoteles') }}">¿Donde Dormir?</a></li>
              <li><a href="#">¿Que hacer?</a></li>
              <li><a href="{{ route('restaurantes') }}">¿Donde Comer?</a></li>
              <li><a href="#">¿Donde ir?</a></li>
            </ul>
          </nav>
        </div>
        <div class="col-6 col-xl-2 text-right">
          <div class="d-none d-xl-inline-block">
            <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">
              @if (Auth::check())
            <li>Hola {{Auth::user()->nombre}}</li>
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    @if (Auth::user()->tipo_usuario == '1')
                    <a class="dropdown-item" href="{{ route('adminMype') }}">Ver estadisticas</a>
                    @endif
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>

              @else
              <li><a href="../login" class="pl-3 pr-1 text-black">Iniciar sesión</a></li>
              <li><a href="../formulario2" class="pl-2 pr-3 text-black">Registrarse</a></li>
              @endif

            </ul>
          </div>
          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
        </div>
      </div>
    </div>
  </header>

<div class="container">

  <!-- Titulo -->
  <div class="row mb-5 mt-5">
    <div class="col-md-8 ">
      <h2 class=" card-text">Agregar Sitio Turistico</h2>
      <p class="color-black-opacity-5">Ingrese los datos solicitados</p>
    </div>
  </div>
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Modificación de Sitio Turistico</div>
                  <div class="card-body">
                    <form action="{{ route('admin.update',$sitio->id) }}" method="POST">
                      @csrf
                      @method('PUT')
                      {{ csrf_field() }}                        
                        <div class="form-group row">
                            <input type="hidden" name="id" id="id" value="">
                            <input type="hidden" name="user_id" id="user_id" value="1"> 
                            <label for="nombre_turistico" class="col-md-4 col-form-label text-md-right">Nombre</label>
                            <div class="col-md-6">
                                <input type="text" name="nombre_turistico" id="nombre_turistico" value="{{ old('nombre_turistico', $sitio->nombre_turistico) }}" class="form-control " >  
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tipo_turistico" class="col-md-4 col-form-label text-md-right">Entrada</label>
                            <div class="col-md-6">
                                <input id="tipo_turistico" type="text" class="form-control " name="tipo_turistico" value="{{ old('tipo_turistico', $sitio->tipo_turistico) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                          
                            <label for="horario_turistico" class="col-md-4 col-form-label text-md-right">Horario</label>
                            <div class="col-md-6 col-form-label text-md-right" >
                              {{ $sitio->horario_turistico}}<img src="{{ asset('template2/images/edit.png') }}" style="width:18px;height:18px;" onclick="getHorario()">
                          </div>
                        </div>
                            <div class="form-group row" id="horarios" style="display:none;">
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
                                <input id="direccion_turistico" type="text" class="form-control" name="direccion_turistico" value="{{ old('direccion_turistico', $sitio->direccion_turistico) }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="descripcion_turistico" class="col-md-4 col-form-label text-md-right">Descripción</label>
  
                            <div class="col-md-6">
                                <textarea id="descripcion_turistico" maxlength="255" class="form-control" name="descripcion_turistico" >{{ $sitio->descripcion_turistico}}</textarea>
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="enlace_imagen_turistico" class="col-md-4 col-form-label text-md-right">Imagen Principal</label>
                            <div class="col-md-6">
                            @forelse($sitio->imagenSitioTuristicos as $imagen)
                                @if ($imagen->tipo_imagen_turistico == "logo")
                                <img src="{{ $imagen->enlace_imagen_turistico }}" class="img-responsive">
                                <div class="col-md-6 col-form-label text-md-right" >
                                    <img src="{{ asset('template2/images/edit.png') }}" style="width:18px;height:18px;" onclick="getLogo()">
                                </div>
                                @endif
                                @empty
                            No image found
                        @endforelse
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="enlace_imagen_turistico" class="col-md-4 col-form-label text-md-right">Galeria</label>
                            @forelse($sitio->imagenSitioTuristicos as $imagen)
                            @if ($imagen->tipo_imagen_turistico == "galeria")
                            <div class="col-md-2">
                                <img src="{{ $imagen->thumbnail }}" class="img-responsive">
                            </div>
                            @endif
                            <img src="{{ asset('template2/images/edit.png') }}" style="width:18px;height:18px;" onclick="getGaleria()">
                        @empty
                            No image found
                        @endforelse
                        <img src="{{ asset('template2/images/edit.png') }}" style="width:18px;height:18px;" onclick="getGaleria()">
                        </div>
                        <div id="logos"  style="display:none;">
                        <div class="form-group row">
                            <label for="enlace_imagen_turistico" class="col-md-4 col-form-label text-md-right">Imagen Principal</label>
                            <div class="input-group col-md-6">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" name="enlace_imagen_turistico" id="enlace_imagen_turistico" value="" accept="image/* aria-describedby="inputGroupFileAddon01">
                                <input type="hidden" name="tipo_imagen_turistico" id="tipo_imagen_turistico" value='logo'>
                                <label class="custom-file-label" for="inputGroupFile01">Seleccionar imagen</label>
                              </div>
                            </div>
                          </div>
                        </div>
                          <div id="imagenes"  style="display:none;">
                        <div class="form-group row">
                            <label for="enlace_imagen_turistico" class="col-md-4 col-form-label text-md-right">Galeria</label>
                        <div class="input-group col-md-6">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input " type="file" name="image[]" multiple="true" accept="image/*" aria-describedby="inputGroupFileAddon01">
                              <label class="custom-file-label" for="inputGroupFile01">Seleccionar Imagenes</label>
                            </div>
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
</div>
</div>

<footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="mb-5">
            <h3 class="footer-heading mb-4">Sobre CKALAMA</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe pariatur reprehenderit vero atque, consequatur id ratione, et non dignissimos culpa? Ut veritatis, quos illum totam quis blanditiis, minima minus odio!</p>
          </div>      
        </div>
        <div class="col-lg-4 mb-5 mb-lg-0">
          <div class="row mb-5">
            <div class="col-md-12">
              <h3 class="footer-heading mb-4">Navigations</h3>
            </div>
            <div class="col-md-6 col-lg-6">
              <ul class="list-unstyled">
                <li><a href="#">Home</a></li>
                <li><a href="#">Destination</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">About</a></li>
              </ul>
            </div>
            <div class="col-md-6 col-lg-6">
              <ul class="list-unstyled">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Discounts</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-5 mb-lg-0">
          <div class="mb-5">
            <h3 class="footer-heading mb-2">Subscribe Newsletter</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit minima minus odio.</p>

            <form action="#" method="post">
              <div class="input-group mb-3">
                <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary text-white" type="button" id="button-addon2">Send</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        
      </div>
      <div class="row text-center">
        <div class="col-md-12">
          <div class="mb-5">
            <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
          </div>

          <p>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | Elaborada por <i class="icon-heart-o" aria-hidden="true"></i> por <a target="_blank" >Artic</a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>
    </div>
  </footer>
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
  <script>
      function getHorario(){

            document.getElementById("horarios").style.display = "block";

    }

  </script>

<script>
    function getLogo(){

          document.getElementById("logos").style.display = "block";

  }

</script>

<script>
    function getGaleria(){

          document.getElementById("imagenes").style.display = "block";

  }

</script>
  </body>
  </html>
    
    