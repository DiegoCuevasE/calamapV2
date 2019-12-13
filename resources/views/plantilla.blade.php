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
    <link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.1/mapsjs-ui.css" /> 
    <link rel="stylesheet" href="{{ asset('template2/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template2/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('template2/fonts/flaticon/font2/flaticon.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('template2/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('template2/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('template2/css/mdb.css') }}">

    <link rel="stylesheet" href="{{ asset('template2/owlcarousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('template2/owlcarousel/assets/owl.theme.default.min.css') }}">

    <script src="{{ asset('template2/vendors/vendors/jquery.min.js') }}"></script>
    <script defer src="{{ asset('template2/owlcarousel/owl.carousel.js') }}"></script>

    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-core.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-service.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Material Design Bootstrap -->
    <!--<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.2/css/mdb.css" rel="stylesheet">-->
    <style type="text/css">
      @media (min-width: 800px) and (max-width: 850px) {
        .navbar:not(.top-nav-collapse) {
          background: #1C2331 !important;
        }
      }
  
    </style>
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
    
    <header class="site-navbar py-1 navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar" role="banner">
    <div class="container-extend">
      <div class="row align-items-center justify-content-between">

        <div class="col-8 col-sm-6 col-md-5 col-xl-3 ">
            <a href="/"><img src="{{ asset('template2/images/logockalamaweb.png') }}" alt="Image" class="img-fluid"></a>
        </div>

        <div class="d-inline-block d-xl-none mr-3 " style="position: relative; top: 3px;">
          <a href="#" class="site-menu-toggle js-menu-toggle text-black">
            <span class="icon-menu h3"></span>
          </a>
        </div>

        <div class="col-md-6  d-none d-xl-block justify-content-center">
          <nav class="site-navigation position-relative text-center" role="navigation">
            <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block list-unstyled">
              <li><a href="{{ route('hoteles') }}">¿Dónde Dormir?</a></li>
              <li><a href="{{ route('portal') }}">¿Qué hacer?</a></li>
              <li><a href="{{ route('restaurantes') }}">¿Dónde Comer?</a></li>
              <li><a href="{{ route('sitios') }}">¿Dónde ir?</a></li>
            </ul>
          </nav>
        </div>

        <div class="col-md-3 d-none d-xl-block">
          <div class="site-navigation">
            <ul class="site-menu js-clone-nav mx-auto list-unstyled  mb-0 text-center" >
              @if (Auth::check())
              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    Hola  {{ Auth::user()->nombre }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  @if (Auth::user()->tipo_usuario == '1' )
                    <a class="dropdown-item" href="{{ route('historico') }}">Ver estadísticas</a>
                  @endif

                  @if (Auth::user()->tipo_usuario == '0' )
                    <a class="dropdown-item" href="{{ route('historico') }}">Gestionar</a>
                  @endif
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                    </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                </div>
              </li>
              @else
              <li><a href="login" >Iniciar sesión</a></li>
              <li><a href="formulario2" >Registrarse</a></li>
              @endif
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>
    <div>
    @yield('contenido')
    </div>
    <footer class="site-footer">
        <div class="container-extend">
          <div class=" ">
              <div class="row  justify-content-between">

                  <!-- Grid column -->
                  <div class="col-md-3 col-lg-4 col-xl-4 mb-4">
            
                    <!-- Content -->
                    <h6 class="text-uppercase text-white font-weight-bold">Calama Turística</h6>
                    <hr class="deep-orange accent-1 mb-4 mt-0 d-inline-block mx-auto" style="width: 80px;">
                    <p>Desde tiempos ancestrales, Calama ha sido un lugar de transito, descanso y activo comercio entre el Altiplano y la costa. Gracias a su proximidad con el Rio Loa, Calama es uno de los oasis habitados más grandes del mundo.</p>
            
                  </div>
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-4 mb-4">
            
                <!-- Content -->
                <h6 class="text-uppercase text-white font-weight-bold">Contacto</h6>
                <hr class="deep-orange accent-1 mb-4 mt-0 d-inline-block mx-auto" style="width: 80px;">
                <p><i class="fas fa-home mr-3"></i>Cámara de Comercio y <br> Turismo de Calama</p>
                <p><i class="fas fa-envelope mr-3"></i> secretariacccalama@gmail.com</p>
              </div>
          </div>
          
          <div class="row text-center">
            <div class="col-md-12">
              <div class="mb-1">
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
              </div>
  
              <p>
              <!-- Link back to owlorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | Elaborada por <a target="_blank" >Artic</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
            </div>
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
    <script src="{{ asset('template2/js/mdb.js') }}"></script>

    <script src="{{ asset('template2/vendors/highlight.js') }}"></script>
    <script src="{{ asset('template2/js/app.js') }}"></script>
    
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- MDB core JavaScript -->
    <!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.2/js/mdb.min.js"></script>-->
    
    <script>
    $(document).ready(function(){
      $('.test').owlCarousel({
        loop:true,
        margin:10,  
        responsive:{
            0:{
                items:1
            },
            700:{
                items:2
            },
            1000:{
                items:3
            }
        }
      })
    });
    </script>

    </body>
  </html>