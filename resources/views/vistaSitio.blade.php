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
<body class="site-wrap">
  <div class="site-wrap">
    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

  <!-- Menu superior -->
  <header class="site-navbar py-1" role="banner">
    <div class="container justify-content-center">
      <div class="row align-items-center">
        <div class="col-6 col-xl-3">
            <img src="{{ asset('template2/images/logockalamaweb.png') }}" alt="Image" class="img-fluid">
        </div>
        <div class="col-10 col-md-6 d-none d-xl-block justify-content-center">
          <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">
            <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
              <li><a href="#">¿Donde Dormir?</a></li>
              <li><a href="#">¿Que hacer?</a></li>
              <li><a href="#">¿Donde Comer?</a></li>
              <li><a href="#">¿Donde ir?</a></li>
            </ul>
          </nav>
        </div>
        <div class="col-6 col-xl-3 text-right">
          <div class="d-none d-xl-inline-block">
            <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">
              <li><a href="#" class="pl-3 pr-1 text-black">Iniciar sesión</a></li>
              <li><a href="#" class="pl-2 pr-3 text-black">Registrarse</a></li>
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
      <h2 class=" card-text">Conoce sobre el *nombre del sitio*</h2>
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
      <div class="card mb-4 col-lg-9 col-sm-12 col-md-12">
        <div class="view overlay mt-4 ml-3 mr-3">
          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg" alt="Card image cap">
          <a href="#!">
          <div class="mask rgba-white-slight"></div>
          </a>
        </div>
        <div class="card-body secciones">
            <div class="d-xl-inline-block">
                <ul class="tabs js-clone-nav ml-auto list-unstyled d-flex text-right mb-0 " data-class="social">
                    <li><a href="#informacion" class="pr-2 text-black">Información</a></li>
                    <li><a href="#fotos" class="pr-2 text-black">Fotos y videos</a></li>
                    <li><a href="#mapa" class="pr-2 text-black">ubicación</a></li>
                </ul>
            </div>
            <article id="informacion">
                <div class="row ">
                    <div class="mt-3 col-lg-12 ">
                        <h3 class=" mb-2 ">Sobre "Parque el Loa"</h3>
                        <p class="card-text "> Localizado en la ciudad de Calama, el Parque Nacional El Loa, presenta múltiples atractivos que grafican el desarrollo cultural de los pueblos de la zona. Junto con contar con terrazas, miradores, y lugares destinados a los visitantes, el parque cuenta con un Museo Arqueológico y Etnológico, en donde se exhibe la arquitectura y artesanía típica. Un ejemplo de ello es la reproducción a escala de la Iglesia de Chiu Chiu. Sobresale el Torreón Mirador –inspirado en los pukarás-, el cual está construido con piedra de cantera roja en sus 10 metros de altura. </p>
                    </div>
                    <div class="mt-3 col-lg-6">
                        <h3 class=" mb-2 ">Dirección</h3>
                        <p class="card-text ">Calama, Región de Antofagasta</p>
                    </div>
                    <div class="mt-3 col-lg-6">
                        <h3 class="card-tite mb-2">Servicios</h3>
                        <p class="card-text ">Botes, museo.</p>
                    </div>
                    <div class="mt-3 col-lg-6">
                        <h3 class="card-title mb-2">Horario</h3>
                        <p class="card-text ">Lun-Vie 9:00-17:30 | Sab-Dom 10:00.17:30</p>
                    </div>
                    <div class="mt-3 col-lg-6">
                        <h3 class="card-title mb-2">Locomoción</h3>
                        <p class="card-text ">Microbuses:177A | 177B</p>
                    </div>
                </div>
            </article>
            <article id="fotos">
                <div class="row " id="fotos">
                    <div class="mt-3 ">
                        <h3 class=" mb-2 ">Calgaldo</h3>
                    </div>
                    <div class="mt-3 col-lg-12 row">
                        <div class="card-deck col-lg-4 col-sm-4 col-md-4">
                            <div class="card mb-4">
                                <div class="view overlay">
                                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg" alt="Card image cap">
                                    <a href="#!">
                                    <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                        <div class="card-deck col-lg-4">
                            <div class="card mb-4">
                                <div class="view overlay">
                                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg" alt="Card image cap">
                                    <a href="#!">
                                    <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                        <div class="card-deck col-lg-4">
                            <div class="card mb-4">
                                <div class="view overlay">
                                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg" alt="Card image cap">
                                    <a href="#!">
                                    <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                        <div class="card-deck col-lg-4">
                            <div class="card mb-4">
                                <div class="view overlay">
                                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg" alt="Card image cap">
                                    <a href="#!">
                                    <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                            </div>      
                        </div>
                    </div>
                </div>
            </article>
            <article id="mapa">
                <div class="row " id="fotos">
                    <div class="mt-3 col-lg-12">
                        <h3 class=" mb-2 ">Calgaldo</h3>
                    </div>
                </div>
            </article>  
                
        </div>
      </div>
      <div class="card mb-4 col-lg-3">
        <div class="mt-3">
          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg" >
        </div>
        <div class="card-body col-lg-8">
          <h4 class="card-title">El Topater</h4>
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
    
  </body>
</html>