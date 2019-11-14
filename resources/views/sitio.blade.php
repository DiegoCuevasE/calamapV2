@extends('plantilla')

@section('contenido')
      
<div class="container site-section mt-5">

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
      <div class=" row ">

      <div class="col-lg-8">
        <div class="card">
          <div class="view overlay">
            @foreach ($sitio->imagenSitioTuristicos as $imagen)
            @if ($imagen->tipo_imagen_turistico == 'portada')
            <img class="card-img-top" src="{{$imagen->enlace_imagen_turistico}}" alt="Card image cap">
            <a href="#!">
            <div class="mask rgba-white-slight"></div>
            </a>
            @endif
            @endforeach
          </div>
          <div class="card-body secciones">
              <div class="d-xl-inline-block">
                  <ul class="tabs js-clone-nav ml-auto list-unstyled d-flex text-right mb-0 " data-class="social">
                      <li><a href="#informacion" class="pr-2 font-weight-bold"><u>Información</u> </a></li>
                      <li><a href="#fotos" class="pr-2 font-weight-bold"><u>Fotos y videos</u></a></li>
                      <li><a href="#mapa" class="pr-2 font-weight-bold"><u>ubicación</u> </a></li>
                  </ul>
              </div>
              <article id="informacion">
                  <div class="row ">
                      <div class="mt-3 col-lg-6">
                          <h6 class=" mb-2 ">Dirección</h6>
                          <p class="card-text ">{{$sitio->direccion_turistico}}</p>
                      </div>
                      <div class="mt-3 col-lg-6">
                          <h6 class="card-tite mb-2">Servicios</h6>
                          <p class="card-text ">
                            @foreach ($sitio->servicios as $servicio)
                            {{$servicio->nombre_servicio}},
                            @endforeach
                          </p>
                      </div>
                      <div class="mt-3 col-lg-6">
                          <h6 class="card-title mb-2">Horario</h6>
                          <p class="card-text ">Lun-Vie 9:00-17:30 | Sab-Dom 10:00.17:30</p>
                      </div>
                      <div class="mt-3 col-lg-6">
                          <h6 class="card-title mb-2">Entrada</h6>
                          <p class="card-text ">{{$sitio->entrada_sitio}}</p>
                      </div>
                      <div class="mt-3 col-lg-12 ">
                          <h6 class=" mb-2 ">Sobre {{$sitio->nombre_turistico}}</h6>
                          <p class="card-text "> {{$sitio->descripcion_turistico}}</p>
                      </div>
                  </div>
              </article>
              <article id="fotos">
                  <div class="row ">
                      <div class="mt-3 col-12">
                          <h6 class=" mb-2 ">Descubre más de {{$sitio->nombre_turistico}}</h6>
                      </div>
                      <div class="mt-3 col-12 row">
                          @foreach ($sitio->imagenSitioTuristicos as $imagen)
                          @if ($imagen->tipo_imagen_turistico == 'galeria')   
                          <div class="col-lg-4 col-sm-4 col-md-4">
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
                <div class="row ">
                  <div class="mt-3 col-lg-12">
                    <h6 class=" mb-2 ">Encuetralo en la mapa!</h6>
                  </div>
                </div>
              </article>  
                  
          </div>
        </div>
      </div>

        <div class="col-lg-4">
          <div class="d-flex">
              <div class="col-4">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg" >
              </div>
              <div class=" col-8">
                <p class="card-text">El Topater</p>
              </div>
          </div>
        </div>
      </div>
     
    </div>


  </div>
  
  <script src="{{ asset('template2/js/jquery-3.3.1.min.js') }}"></script>

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