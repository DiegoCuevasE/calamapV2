@extends('plantilla')

@section('contenido')

    <div style="">
      <div class="slide-one-item home-slider owl-carousel " style="z-index:0;">    
        <div class="site-blocks-cover overlay " style="background-image:url({{ asset('template2/images/Fondo1.jpg') }});" data-aos="fade" data-stellar-background-ratio="0.5">
          <div class="container">
            <div class="row align-items-center justify-content-center text-center ">
              <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
                <h1 class="text-white font-weight-light">Bienvenido a Calama</h1>
              </div>
            </div>
          </div>
        </div>  
        <div class="site-blocks-cover overlay " style="background-image: url({{ asset('template2/images/Fondo2.jpg') }}); " data-aos="fade" data-stellar-background-ratio="0.5">
          <div class="container">
            <div class="row align-items-center justify-content-center text-center">
              <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
                <h1 class="text-white font-weight-light">Disfruta de la ciudad</h1>              
              </div>
            </div>
          </div>
        </div>  
      </div>

      <div class="container mt-5" style="position: absolute;left: 0;right: 0;bottom: 0px;margin: 0 auto; z-index:1;">
        <section>
          <style>
            .news-tile .card-title {
              position: absolute;
              bottom: 15px;
              left: 40px;
            }
            .rgba-stylish-strong {
              background-color: rgba(62, 69, 81, .5);
            }
            .max-height{
              max-height: 200px;
            }
            
          </style>
          <div class="row">
            <div class="col-4">
              <div class="news-tile view zoom z-depth-1 rounded mb-4 max-height">
                <a href="{{route('vistaCascoHistorico')}}" class="text-white">
                  <img src="{{ asset('template2/images/rutaHis.png') }}"
                    class="img-fluid rounded-bottom" alt="sample image">
                  <div class="mask rgba-stylish-strong">
                    <div class="text-white text-center py-lg-5 py-0 my-0">
                      <div>
                        <h5 class=" font-weight-bold pt-2">
                          <strong>Ruta Casco Histórico</strong>
                        </h5>
                        <p class="mx-5 clearfix d-none d-md-block"></p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>

            <div class="col-4">
              <div class="news-tile view zoom z-depth-1 rounded mb-4 max-height">
                <a href="{{route('vistaAncestral')}}" class="text-white">
                  <img src="{{ asset('template2/images/rutaAnc.png') }}"
                    class="img-fluid rounded-bottom" alt="sample image">
                  <div class="mask rgba-stylish-strong">
                    <div class="text-white text-center py-lg-5 py-0 my-0">
                      <div>
                        <h4 class=" font-weight-bold pt-2">
                          <strong>Ruta Ancestral</strong>
                        </h4>
                        <p class="mx-5 clearfix d-none d-md-block"></p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-4">
              <div class="news-tile view zoom z-depth-1 rounded mb-4 max-height">
                <a href="{{route('vistaOasis')}}" class="text-white">
                  <img src="{{ asset('template2/images/rutaOasis.png') }}"
                    class="img-fluid rounded-bottom" alt="sample image">
                  <div class="mask rgba-stylish-strong">
                    <div class="text-white text-center py-lg-5 py-0 my-0">
                      <div>
                        <h5 class=" font-weight-bold pt-2">
                          <strong>Ruta Oasis</strong>
                        </h5>
                        <p class="mx-5 clearfix d-none d-md-block"></p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>

    <div class="site-section">
      <div class="container-fluid">
          <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center">
              <h2 class="font-weight-light text-black">Servicios de la ciudad</h2>
              <p class="color-black-opacity-5">Conoce los diferentes servicios de Calama que tenemos para ti</p>
            </div>
          </div>
        <div class="row align-items-stretch justify-content-center">
          <div class="col-md-4 col-lg-3 col-xl-2 mb-4 mb-lg-0 flex-column d-flex">
            <div class="unit-4 d-flex mb-auto">
              <div class="unit-4-icon mr-2"><span class="orange-text flaticon-hotel"></span></div>
              <div class="h-100">
                <h3>Hoteles</h3>
                <p>Porque necesitas descanzar, te recomendamos los mejores hoteles de la ciudad.</p>
              </div>
            </div>
            <div class="align-self-end"><p><a href="{{ route('hoteles') }}">Ver más</a></p></div>
          </div>
          <div class="col-md-4 col-lg-3 col-xl-2 mb-4 mb-lg-0 flex-column d-flex">
            <div class="unit-4 d-flex mb-auto">
              <div class="unit-4-icon mr-2"><span class="orange-text flaticon-fork"></span></div>
              <div class="h-100">
                <h3>Restaurantes</h3>
                <p>Disfruta de una excelente comida de los platos típicos de la zona.</p>
              </div>
            </div>
            <div class="align-self-end"><p><a href="{{ route('restaurantes') }}">Ver más</a></p></div>
          </div>
          <div class="col-md-4 col-lg-3 col-xl-2 mb-4 mb-lg-0 flex-column d-flex">
            <div class="unit-4 d-flex mb-auto">
              <div class="unit-4-icon mr-2"><span class="h1 orange-text flaticon-vase"></span></div>
              <div class="h-100">
                <h3>Artesanías</h3>
                <p>Conoce todo tipo de artesanías elaboradas con materia prima de la zona.</p>
              </div>
            </div>
            <div class="align-self-end"><p><a href="{{ route('artesanias') }}">Ver más</a></p></div>
          </div>
          <div class="col-md-4 col-lg-3 col-xl-2 mb-4 mb-lg-0 flex-column d-flex">
            <div class="unit-4 d-flex mb-auto">
              <div class="unit-4-icon mr-2"><span class="orange-text flaticon-turismo"></span></div>
              <div class="h-100">
                <h3>Agencias de turismo</h3>
                <p>Conoce la historia y cultura de la ciudad mediante las agencia de turismo.</p>
              </div>
            </div>
            <div class="align-self-end"><p><a href="{{ route('turismo') }}">Ver más</a></p></div>
          </div>
          <div class="col-md-4 col-lg-3 col-xl-2 mb-4 mb-lg-0 flex-column d-flex">
            <div class="unit-4 d-flex mb-auto">
              <div class="unit-4-icon mr-2"><span class="orange-text flaticon-tienda"></span></div>
              <div class="h-100">
                <h3>Comercio</h3>
                <p>Conoce los distintos locales de la ciudad que te ofrecen una varierdad de productos.</p>
              </div>
            </div>
            <div class="align-self-end"><p><a href="{{ route('comercio') }}">Ver más</a></p></div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section block-13 fondo-evento">
      <div class="container ">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h2 class="font-weight-light text-black">Eventos en CALAMA</h2>
            <p class="color-black-opacity-5">Conoce los eventos culturales de la ciudad y sus alrededores</p>
          </div>
        </div>
        <div class="test owl-carousel owl-theme">
          @if(!is_null($eventos))
          @foreach ($eventos as $evento)

          <div class="item  m-2">
            <div class="card mb-lg-0 mb-4" >
              <!--Featured image-->
              @foreach ($evento->imageneventos as $imagen)
              @if ($imagen->tipo_imagen_evento == 'portada')
              <div class="view overlay rounded z-depth-1" style= "height:170px ">
                <img src="{{$imagen->enlace_imagen_evento}}" class="img-fluid" alt="Sample project image ">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              @endif
              @endforeach
              <!--Excerpt-->
              <div class="card-body pb-0">
                <div class=" "> 
                    <a href="{{ url('evento'.$evento->id) }}"></a>
                  <h4 class="font-weight-bold mt-1 mb-3">{{$evento->titulo_evento}}</h4></a>
                  <i class="far fa-calendar-alt h3"></i>
                  <span class=" text-right h6">{{date('d/m/y', strtotime($evento->fecha_inicio_evento))}}  </span>
                </div>
                <p class="grey-text">{{str_limit($evento->descripcion_evento, $limit = 150, $end = '...') }}
                </p>
              </div>
            </div>
          </div>

          @endforeach
          @endif
        </div>
      </div>
    </div>


    <div class="site-section">    
      <div class="container ">
          <!--Section: Content-->
          <section class="dark-grey-text z-depth-1 p-5">
            <div class="row align-items-center">
              <div class="col-12">
                <h2 class="font-weight-normal mb-4 text-center">Sitios Turísticos</h2>
                <p class="lead text-muted text-center">Conoce los distintos lugares turísticos que ofrece la ciudad para ti.</p>
              </div>
              <div class="col-lg-12">
                <div id="mdb-lightbox-ui"></div>
                <div class="d-grid mdb-lightbox">
                  <div class="sitio owl-carousel owl-theme">
                      @if (!is_null($sitios))
                      @foreach ($sitios as $sitio)
                      @foreach ($sitio->imagenSitioTuristicos as $imagen)
                      @if ($imagen->tipo_imagen_turistico == 'portada')     
                    <div class="item">
                      <div class="row">
                        <div class="">
                          <div class="view overlay rounded z-depth-1" style= "height:170px ">
                            <img src="{{$imagen->enlace_imagen_turistico}}" class="img-fluid" >
                            <a>
                              <div class="mask rgba-white-slight"></div>
                            </a>
                          </div>
                          <a href="{{ url('sitio'.$sitio->id) }}"
                            class="z-depth-1 rounded" data-size="1600x1067">
                            <img src="{{$imagen->enlace_imagen_turistico}}" />
                          </a>
                        </div>
                      </div>
                    </div>
                  
                  @endif
                  @endforeach
                  @endforeach
                  @endif
                </div>
                </div>
              </div>
            </div>
          </section>
          <!--Section: Content-->
        </div>
      </div>
    </div>

    <div class="site-blocks-cover overlay inner-page-cover" style="background-image: url({{ asset('template2/images/fondo3.jpg')}}); background-attachment: fixed;">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-7" data-aos="fade-up" data-aos-delay="400">
            <a href="https://www.youtube.com/watch?v=MlwylhP5MsY" class="play-single-big mb-4 d-inline-block popup-vimeo"><span class="icon-play"></span></a>
            <h2 class="text-white font-weight-light mb-5 h1">Vive Calama</h2>
            
          </div>
        </div>
      </div>
    </div>  

    <div class="site-section ">
      <div class="container">
        <div class="col-md-12 justify-content-center mb-5">
          <div class="text-center">
            <h2 class="font-weight-light text-black">¿Quieres ser parte de nosotros?</h2>
            <p class="color-black-opacity-5">Regístrate según tu perfil</p>
          </div>
        </div>
        <div class="justify-content-center row">
          <div class="col-md-6 mb-4 mb-lg-4">
            <div class="unit-4"> 
              <div class="d-flex align-items-center">
                  <div class="col-6 view">
                      <img src="{{ asset('template2/images/turista1.svg')}}" class="img-fluid" alt="smaple image">
                  </div>
                  <div class="col-6 ">
                    <h3>Regístrate como turista</h3>
                    <p>Obtén beneficios exclusivos.</p>
                    <p><a href="formulario2">Registrarse</a></p>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4 mb-lg-4">
            <div class="unit-4 ">
              <div class="d-flex align-items-center">
                <div class="col-6 view">
                    <img src="{{ asset('template2/images/mypes.svg')}}" class="img-fluid" alt="smaple image">
                </div>
                <div class="col-6">
                  <h3>Regístrate como MyPE</h3>
                  <p>Ingresa tu negocio para que todos puedan verlo.</p>
                  <p><a href="registroDueno">Registrarse</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection