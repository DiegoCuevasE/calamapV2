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

      <div class="" style="position: absolute;left: 0;right: 0;bottom: 0px;margin: 0 auto; z-index:1;">      
        <div class="container-extend" >
          <div class="d-flex" >
            <div class="" >
              <a href="#" class="unit-1 text-center">
                <img src="{{ asset('template2/images/rutaHis.png') }}" alt="Image" class="img-fluid">
                <div class="unit-1-text">
                  <h3 class="unit-1-heading">Ruta Historica</h3>
                </div>
              </a>
            </div>
            <div class="">
              <a href="#" class="unit-1 text-center">
                <img src="{{ asset('template2/images/rutaGastro.png') }}" alt="Image" class="img-fluid">
                <div class="unit-1-text">
                  <h3 class="unit-1-heading">Ruta Gastronomica</h3>
                </div>
              </a>
            </div>
            <div class="">
              <a href="#" class="unit-1 text-center">
                <img src="{{ asset('template2/images/rutaAnc.png') }}" alt="Image" class="img-fluid">
                <div class="unit-1-text">
                  <h3 class="unit-1-heading">Ruta Ancestral</h3>
                </div>
              </a>
            </div>
            <div class="">
              <a href="#" class="unit-1 text-center">
                <img src="{{ asset('template2/images/rutaOasis.png') }}" alt="Image" class="img-fluid">
                <div class="unit-1-text">
                  <h3 class="unit-1-heading">Ruta Oasis</h3>
                </div>
              </a>
            </div>
          </div>
        </div>  
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
              <div class="unit-4-icon mr-4"><span class="orange-text flaticon-hotel"></span></div>
              <div class="h-100">
                <h3>Hoteles</h3>
                <p>Porque necesitas descanzar, te recomendamos los mejores hoteles de la ciudad.</p>
              </div>
            </div>
            <div class="align-self-end"><p><a href="{{ route('hoteles') }}">Ver más</a></p></div>
          </div>
          <div class="col-md-4 col-lg-3 col-xl-2 mb-4 mb-lg-0 flex-column d-flex">
            <div class="unit-4 d-flex mb-auto">
              <div class="unit-4-icon mr-4"><span class="orange-text flaticon-fork"></span></div>
              <div class="h-100">
                <h3>Restaurantes</h3>
                <p>Disfruta de una excelente comida de los platos típicos de la zona.</p>
              </div>
            </div>
            <div class="align-self-end"><p><a href="{{ route('restaurantes') }}">Ver más</a></p></div>
          </div>
          <div class="col-md-4 col-lg-3 col-xl-2 mb-4 mb-lg-0 flex-column d-flex">
            <div class="unit-4 d-flex mb-auto">
              <div class="unit-4-icon mr-4"><span class="orange-text flaticon-vase"></span></div>
              <div class="h-100">
                <h3>Artesanias</h3>
                <p>Conoce todo tipo de artesanias elaborada con materia prima de la zona</p>
              </div>
            </div>
            <div class="align-self-end"><p><a href="{{ route('artesanias') }}">Ver más</a></p></div>
          </div>
          <div class="col-md-4 col-lg-3 col-xl-2 mb-4 mb-lg-0 flex-column d-flex">
            <div class="unit-4 d-flex mb-auto">
              <div class="unit-4-icon mr-4"><span class="orange-text flaticon-bread"></span></div>
              <div class="h-100">
                <h3>Agencias de turismo</h3>
                <p>Conoce la historia y cultura de la ciudad mediante las agencia de turismo</p>
              </div>
            </div>
            <div class="align-self-end"><p><a href="{{ route('artesanias') }}">Ver más</a></p></div>
          </div>
          <div class="col-md-4 col-lg-3 col-xl-2 mb-4 mb-lg-0 flex-column d-flex">
            <div class="unit-4 d-flex mb-auto">
              <div class="unit-4-icon mr-4"><span class="orange-text flaticon-fork"></span></div>
              <div class="h-100">
                <h3>Comercio</h3>
                <p>Conoce los distintos locales de la ciudad que te ofrecen una varierdad de productos</p>
              </div>
            </div>
            <div class="align-self-end"><p><a href="{{ route('artesanias') }}">Ver más</a></p></div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section block-13 fondo-evento">
      <div class="container ">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h2 class="font-weight-light text-black">Eventos en CKALAMA</h2>
            <p class="color-black-opacity-5">Conoce los eventos culturales de la ciudad y sus alrededores</p>
          </div>
        </div>
        <div class="test owl-carousel owl-theme">
          <div class="item">
            <div class="mb-lg-0 mb-4" >
              <!--Featured image-->
              <div class="view overlay rounded z-depth-1">
                <img src="https://mdbootstrap.com/img/Photos/Others/images/58.jpg" class="img-fluid" alt="Sample project image">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!--Excerpt-->
              <div class="card-body pb-0">
                <div class=" "> 
                  <h4 class="font-weight-bold mt-1 mb-3">Limpieza de canales</h4>
                  <span class=" text-right">Jan 18, 2019</span>
                </div>
                <p class="grey-text">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe
                  eveniet ut et voluptates repudiandae.
                </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="mb-lg-0 mb-4" >
              <!--Featured image-->
              <div class="view overlay rounded z-depth-1">
                <img src="https://mdbootstrap.com/img/Photos/Others/images/58.jpg" class="img-fluid" alt="Sample project image">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!--Excerpt-->
              <div class="card-body pb-0">
                <h4 class="font-weight-bold mt-1 mb-3">Title of the news</h4>
                <p class="grey-text">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe
                  eveniet ut et voluptates repudiandae.
                </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="mb-lg-0 mb-4" >
              <!--Featured image-->
              <div class="view overlay rounded z-depth-1">
                <img src="https://mdbootstrap.com/img/Photos/Others/images/58.jpg" class="img-fluid" alt="Sample project image">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!--Excerpt-->
              <div class="card-body pb-0">
                <h4 class="font-weight-bold mt-1 mb-3">Title of the news</h4>
                <p class="grey-text">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe
                  eveniet ut et voluptates repudiandae.
                </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="mb-lg-0 mb-4" >
              <!--Featured image-->
              <div class="view overlay rounded z-depth-1">
                <img src="https://mdbootstrap.com/img/Photos/Others/images/58.jpg" class="img-fluid" alt="Sample project image">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!--Excerpt-->
              <div class="card-body pb-0">
                <h4 class="font-weight-bold mt-1 mb-3">Title of the news</h4>
                <p class="grey-text">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe
                  eveniet ut et voluptates repudiandae.
                </p>
              </div>
            </div>
          </div>

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
                  
                  <figure class="item">
                    <a href="https://mdbootstrap.com/img/Photos/Horizontal/Architecture/12-col/img%20(11).jpg"
                      class="z-depth-1 rounded" data-size="1600x1067">
                      <img src="https://mdbootstrap.com/img/Photos/Horizontal/Architecture/12-col/img%20(11).jpg" />
                    </a>
                  </figure>
                  <figure class="item">
                    <a href="https://mdbootstrap.com/img/Photos/Horizontal/Architecture/12-col/img%20(12).jpg"
                      class="z-depth-1 rounded" data-size="1600x1067">
                      <img src="https://mdbootstrap.com/img/Photos/Horizontal/Architecture/12-col/img%20(12).jpg" />
                    </a>
                  </figure>
                  <figure class="item">
                    <a href="https://mdbootstrap.com/img/Photos/Horizontal/Architecture/12-col/img%20(13).jpg"
                      class="z-depth-1 rounded" data-size="1600x1067">
                      <img src="https://mdbootstrap.com/img/Photos/Horizontal/Architecture/12-col/img%20(13).jpg" />
                    </a>
                  </figure>
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
            <p class="color-black-opacity-5">Registrate segun tu perfil</p>
          </div>
        </div>
        <div class="justify-content-center row">
          <div class="col-md-6 mb-4 mb-lg-4">
            <div class="unit-4"> 
              <div class="d-flex align-items-center">
                  <div class="col-6 view">
                      <img src="{{ asset('template2/images/turista.svg')}}" class="img-fluid" alt="smaple image">
                  </div>
                  <div class="col-6 ">
                    <h3>Registrate como turista</h3>
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
                    <img src="{{ asset('template2/images/turista.svg')}}" class="img-fluid" alt="smaple image">
                </div>
                <div class="col-6">
                  <h3>Registrate como MyPE</h3>
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