@extends('plantilla')

@section('contenido')
      
<div class="container">

  <!-- Titulo -->
  <div class="row mb-5 mt-5">
    <div class="col-md-8 ">
      <h2 class=" card-text">Conoce sobre {{$sitios->nombre_turistico}}</h2>
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
      @foreach ($sitios->imagenSitioTuristicos as $imagen)
      @if ($imagen->tipo_imagen_turistico == 'logo')>
        <div class="view overlay mt-4 ml-3 mr-3 justify-content-center">
          <img class="card-img-top" src="{{$imagen->enlace_imagen_turistico}}" alt="Card image cap">
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
                    <h3 class=" mb-2 ">Sobre {{$sitios->nombre_turistico}}</h3>
                        <p class="card-text "> {{$sitios->descripcion_turistico}} </p>
                    </div>
                    <div class="mt-3 col-lg-6">
                        <h3 class=" mb-2 ">Dirección</h3>
                        <p class="card-text ">{{$sitios->direccion_turistico}}</p>
                    </div>
                    <div class="mt-3 col-lg-6">
                        <h3 class="card-tite mb-2">Servicios</h3>
                        <p class="card-text ">Botes, museo.</p>
                    </div>
                    <div class="mt-3 col-lg-6">
                        <h3 class="card-title mb-2">Horario</h3>
                        <p class="card-text ">{{$sitios->horario_turistico}}</p>
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
                        @foreach ($sitios->imagenSitioTuristicos as $imagen)
                        @if ($imagen->tipo_imagen_turistico == 'galeria')        
                        <div class="card-deck col-lg-4 col-sm-4 col-md-4">
                            <div class="card mb-4">
                                <div class="view overlay">
                                    <img class="card-img-top" src="{{$imagen->enlace_imagen_turistico}}" alt="Card image cap">
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


  </div>
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

  

