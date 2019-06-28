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
    <div class="container-fluid justify-content-center">
      <div class="row align-items-center">
        <div class="col-6 col-xl-2">
            <img src="{{ asset('template2/images/logockalamaweb.png') }}" alt="Image" class="img-fluid">
        </div>
        <div class="col-10 col-md-8 d-none d-xl-block justify-content-center">
          <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">
            <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
              <li><a href="#">¿Donde Dormir?</a></li>
              <li><a href="#">¿Que hacer?</a></li>
              <li><a href="#">¿Donde Comer?</a></li>
              <li><a href="#">¿Donde ir?</a></li>
            </ul>
          </nav>
        </div>
        <div class="col-6 col-xl-2 text-right">
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
  
  <div class="row mb-5 mt-5 ">
    <div class="col-md-8 ">
      <h2 class=" card-text">Busca el mejor lugar para descanzar</h2>
      <p class="color-black-opacity-5">Descubre los hoteles y hospedajes disponibles en ciudad</p>
    </div>
    <div class="col-md-4 text-right justify-content-end align-items-center" >
      <form class="form-inline md-form mr-auto mb-4 text-right">
        <input class="form-control mr-sm-1 " type="text" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-elegant btn-rounded btn-sm my-0"  type="submit">Buscar</button>
      </form>
    </div>
  </div>

        
  <!-- Sitios MyPES 2-->
  @foreach($datos as $mype)
<div class="card promoting-card mt-5">        
  <div class="card-body d-flex flex-row ">
    <div class="row">
      <h4 class="card-title font-weight-bold mb-2 text-center">{{$mype->nombre_fantasia_mype}}</h4>
      
    </div>
    
  </div>

  <div class="row ml-3 mr-3">
    <div class="view overlay col-lg-2 collapsed "style="height: 100px; width: 100px;" data-toggle="collapse" href="#collapseContent1" aria-expanded="false" aria-controls="collapseContent1">
            @foreach ($mype->imagenMypes as $imagen)
            @if ($imagen->tipo_imagen_mype == 'logo') 
      <img class="card-img-top rounded-0 " style="width:100%; height:100%; " src="{{$imagen->enlace_imagen_mype}}" alt="Card image cap">
      <a href="#!">
            @endif
            @endforeach
      <div class="mask rgba-white-slight" ></div>
      </a>
    </div>
    <div class="view overlay col-lg-10 " data-toggle="collapse" href="#collapseContent1" aria-expanded="false" aria-controls="collapseContent1">
         <p class="card-text ">{{$mype->descripcion_mype}}</p>
         <a href="{{ url('/moduloMype/'.$mype->id.'/edit') }}" >Editar</a> 
            
                <form method="post" action="{{url('/moduloMype/'.$mype->id)}}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }} 
                <button type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>  
                </form> 
    </div>
  </div>
    <!-- Sitios MyPES 2 collapse-->
  <div class="card-body justify-content-center">
    <div class="collapse-content justify-content-center">
      <div class="row justify-content-center text-center ">
            <div class="col-md-12 justify-content-center row mt-3 mb-3" >
                @foreach ($mype->imagenMypes as $imagen)
                @if ($imagen->tipo_imagen_mype == 'galeria')
                <div class="col-md-3 justify-content-center" >
                <img class="card-img-top rounded-0 " style="width:100%; height:100%; " src="{{$imagen->enlace_imagen_mype}}" alt="Card image cap ">
                </div>
                @endif
                @endforeach
            </div>
        <div class="col-md-3">
          <p class="card-text collapse" id="collapseContent1">Servicios</p>
          <p class="card-text collapse" id="collapseContent1">{{$mype->direccion_mype}}</p>
        </div>
        <div class="col-md-3">
          <p class="card-text collapse" id="collapseContent1">Horario</p>
          <p class="card-text collapse" id="collapseContent1">{{$mype->horario_mype}}</p>
        </div>
        <div class="col-md-3">
          <p class="card-text collapse" id="collapseContent1">Dirección</p>
          <p class="card-text collapse" id="collapseContent1">{{$mype->direccion_mype}}</p>
        </div>     
        <div class="col-md-3">
          <p class="card-text collapse" id="collapseContent1">Contacto</p>
          <p class="card-text collapse" id="collapseContent1">{{$mype->telefono_mype}}</p>
          <p class="card-text collapse" id="collapseContent1">{{$mype->celular_mype}}</p>
          <p class="card-text collapse" id="collapseContent1">{{$mype->correo_mype}}</p>
            
        </div>
      </div>
      <i class="fas icon-instagram text-muted float-right p-1 my-1" data-toggle="tooltip" data-placement="top" title="Share this post"><a href="{{$mype->instagram_mype}}"></a></i>
      <i class="fas icon-facebook text-muted float-right p-1 my-1 mr-3" data-toggle="tooltip" data-placement="top" title="I like it"><a href="{{$mype->facebook_mype}}"></a></i>
      
    </div>
  </div>
</div>
@endforeach
  <!-- Paginacion -->


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
      $('.carousel-3d-controls').mdbCarousel3d();
    });
  </script>
    
  </body>
</html>

