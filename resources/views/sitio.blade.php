<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CKALAMA &mdash; Ciudad Oasis</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700"> 
    <link rel="stylesheet" href="{{ secure_asset('template2/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('template2/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('template2/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('template2/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('template2/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('template2/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('template2/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('template2/fonts/flaticon/font2/flaticon.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ secure_asset('template2/css/aos.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('template2/css/style.css') }}">

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
            <a href="/"><img src="{{ secure_asset('template2/images/logockalamaweb.png') }}" alt="Image" class="img-fluid"></a>
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
      <h2 class=" card-text">Conoce sobre {{$sitio->nombre_turistico}}</h2>
      <p class="color-black-opacity-5">Descubre los lugares turisticos de la ciudad</p>
    </div>
    <div class="col-md-4 float-right" >
      <form class="form-inline md-form mr-auto mb-4">
        <input class="form-control mr-sm-1 " type="text" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-elegant btn-rounded btn-sm my-0"  type="submit">Buscar</button>
      </form>
    </div>
  </div>

        
  <!-- Sitios turisticos -->
  <div class=" justify-content-center">
    <div class="card-deck row ">
      <div class="card mb-4 col-lg-9 col-sm-12 col-md-12"
      @foreach ($sitio->imagenSitioTuristicos as $imagen)
      @if ($imagen->tipo_imagen_turistico == 'logo')>
        <div class="view overlay mt-4 ml-3 mr-3 justify-content-center">
          <img class="card-img-top" src="/{{$imagen->enlace_imagen_turistico}}" alt="Card image cap">
          <a href="#!">
          <div class="mask rgba-white-slight"></div>
          </a>
        </div>
        @endif
        @endforeach
        <div class="card-body secciones">
            <div class="d-xl-inline-block">
                <ul class="tabs js-clone-nav ml-auto list-unstyled d-flex text-right mb-0 " data-class="social">
                    <li><a href="#informacion" class="pr-2 text-black"><strong>Información</strong></a></li>
                    <li><a href="#fotos" class="pr-2 text-black"><strong>Galeria de imagenes</strong></a></li>
                    <li><a href="#mapa" class="pr-2 text-black"><strong>Ubicación</strong></a></li>
                </ul>
            </div>
            <article id="informacion">
                <div class="row ">

                    <div class="mt-3 col-lg-12 ">
                    <h3 class=" mb-2 ">Sobre {{$sitio->nombre_turistico}}</h3>
                        <p class="card-text "> {{$sitio->descripcion_turistico}} </p>
                    </div>
                    <div class="mt-3 col-lg-6">
                        <h3 class=" mb-2 ">Ubicación</h3>
                        <p class="card-text ">{{$sitio->direccion_turistico}}</p>
                    </div>
                    <div class="mt-3 col-lg-6">
                        <h3 class="card-tite mb-2">Servicios</h3>
                        <p class="card-text ">Botes, museo.</p>
                    </div>
                    <div class="mt-3 col-lg-6">
                        <h3 class="card-title mb-2">Horario</h3>
                        <p class="card-text ">{{$sitio->horario_turistico}}</p>
                    </div>
                    <div class="mt-3 col-lg-6">
                        <h3 class="card-title mb-2">Locomoción</h3>
                        <p class="card-text ">Microbuses:177A | 177B</p>
                    </div>
                   
                </div>
            </article>
            <article id="fotos">
                <div class="row " id="fotos">
                    <div class="mt-3 row">
                        @foreach ($sitio->imagenSitioTuristicos as $imagen)
                        @if ($imagen->tipo_imagen_turistico == 'galeria')        
                        <div class="card-deck col-lg-4 col-sm-4 col-md-4">
                            <div class="card mb-4">
                                <div class="view overlay">
                                    <img data-enlargable class="card-img-top"  style="cursor: zoom-in;" src="/{{$imagen->enlace_imagen_turistico}}" alt="Card image cap">
                                    <a href="#!">
                                    <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </article>
            <article id="mapa">
                <div class="row " id="fotos">
                    <div class="mt-3 col-lg-12">
                        
                    </div>
                </div>
            </article>  
                
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


  <script src="{{ secure_asset('template2/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ secure_asset('template2/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ secure_asset('template2/js/jquery-ui.js') }}"></script>
  <script src="{{ secure_asset('template2/js/popper.min.js') }}"></script>
  <script src="{{ secure_asset('template2/js/bootstrap.min.js') }}"></script>
  <script src="{{ secure_asset('template2/js/owl.carousel.min.js') }}"></script>
  <script src="{{ secure_asset('template2/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ secure_asset('template2/js/jquery.countdown.min.js') }}"></script>
  <script src="{{ secure_asset('template2/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ secure_asset('template2/js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ secure_asset('template2/js/aos.js') }}"></script>
  <script src="{{ secure_asset('template2/js/main.js') }}"></script>
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
    
  </body>
</html>