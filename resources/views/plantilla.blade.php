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
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.2/css/mdb.min.css" rel="stylesheet">

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
    <div class="container-extend justify-content-center">
      <div class="row align-items-center">
        <div class=" col-md-3 col-sm-6">
            <a href="/"><img src="{{ asset('template2/images/logockalamaweb.png') }}" alt="Image" class="img-fluid"></a>
        </div>
        <div class="col-md-6  d-none d-xl-block justify-content-center">
          <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">
            <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
              <li><a href="{{ route('hoteles') }}">¿Donde Dormir?</a></li>
              <li><a href="#">¿Que hacer?</a></li>
              <li><a href="{{ route('restaurantes') }}">¿Donde Comer?</a></li>
              <li><a href="{{ route('sitio') }}">¿Donde ir?</a></li>
            </ul>
          </nav>
        </div>
        <div class="col-md-3 col-sm-6 text-right">
          <div class="d-none d-xl-inline-block">
            <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">
              @if (Auth::check())
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    Hola  {{ Auth::user()->nombre }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    @if (Auth::user()->tipo_usuario == '1' )
                    <a class="dropdown-item" href="{{ route('historico') }}">Ver estadisticas</a>
                    @endif

                    @if (Auth::user()->tipo_usuario == '0' )
                    <a class="dropdown-item" href="{{ route('historico') }}">Gestionar</a>
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
              <li><a href="login" class="pl-3 pr-1 text-black">Iniciar sesión</a></li>
              <li><a href="formulario2" class="pl-2 pr-3 text-black">Registrarse</a></li>
              @endif

            </ul>
          </div>
          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
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
                  <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
            
                    <!-- Content -->
                    <h6 class="text-uppercase text-white font-weight-bold">Calama Turistica</h6>
                    <hr class="deep-orange accent-1 mb-4 mt-0 d-inline-block mx-auto" style="width: 80px;">
                    <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
                      consectetur
                      adipisicing elit.</p>
            
                  </div>
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
            
                <!-- Content -->
                <h6 class="text-uppercase text-white font-weight-bold">Contacto</h6>
                <hr class="deep-orange accent-1 mb-4 mt-0 d-inline-block mx-auto" style="width: 80px;">
                <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
                <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
              </div>
          </div>
          
          <div class="row text-center">
            <div class="col-md-12">
              <div class="mb-1">
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
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
      
    
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.2/js/mdb.min.js"></script>
    


    </body>
  </html>