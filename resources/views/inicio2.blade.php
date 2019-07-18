
  
@extends('plantilla')



@section('contenido')
 
   

<div class="site-blocks-cover overlay inner-page-cover" style="background-image: url({{ secure_asset('template2/images/fondo1.jpg')}}); background-attachment: fixed;">
  <div class="container">
    <div class="row align-items-center justify-content-center text-center">

      <div class="col-md-7" data-aos="fade-up" data-aos-delay="400">
        <h2 class="text-white font-weight-light mb-5 h1">Vive Calama</h2>
        
      </div>
    </div>
  </div>
</div>


    <div class="site-section">      
      <div class="container subirImg">
        <div class="row">
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <a href="#" class="unit-1 text-center">
              <img src="{{ secure_asset('template2/images/rutaHis.png') }}" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <h3 class="unit-1-heading">Ruta Historica</h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <a href="#" class="unit-1 text-center">
              <img src="{{ secure_asset('template2/images/rutaGastro.png') }}" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <h3 class="unit-1-heading">Ruta Gastronomica</h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <a href="#" class="unit-1 text-center">
              <img src="{{ secure_asset('template2/images/rutaAnc.png') }}" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <h3 class="unit-1-heading">Ruta Ancestral</h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <a href="#" class="unit-1 text-center">
              <img src="{{ secure_asset('template2/images/rutaOasis.png') }}" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <h3 class="unit-1-heading">Ruta Oasis</h3>
              </div>
            </a>
          </div>
        </div>
      </div>  
    </div>
    <div class="site-section">
      <div class="container">
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-hotel"></span></div>
              <div>
                <h3>Hoteles</h3>
                <p>Visita los mejores Hoteles de la zona.</p>
              <p><a href="{{ route('hoteles') }}">Ver más</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-fork"></span></div>
              <div>
                <h3>Restaurantes</h3>
                <p>Disfruta de excelente comida de la zona.</p>
                <p><a href="{{ route('restaurantes') }}">Ver más</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-vase"></span></div>
              <div>
                <h3>Artesanias</h3>
                <p>Conoce todo tipo de artesania elaborada con materia prima de la zona</p>
                <p><a href="{{ route('artesanias') }}">Ver más</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-bread"></span></div>
              <div>
                <h3>Bazares</h3>
                <p>Disfruta de los platos tipicos del desierto de atacama</p>
                <p><a href="#">Ver más</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  <div class="site-section block-13 bg-light">
    <div class="container ">
      <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center">
          <h2 class="font-weight-light text-black">Eventos en CKALAMA</h2>
          <p class="color-black-opacity-5">Conoce los eventos turisticos de la ciudad y sus alrededores</p>
        </div>
      </div>
        <div class="nonloop-block-13 owl-carousel">
           <div class="item">
            <div class="row mb-3 align-items-stretch">
              <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="h-entry">
                  <img src="{{ secure_asset('template2/images/ayquina.jpg') }}" alt="Image" class="img-fluid">
                  <h2 class="font-size-regular"><a href="#">Fiesta de Ayquina</a></h2>
                  <div class="meta mb-4">Por Theresa Winston <span class="mx-2">&bullet;</span> Jan 18, 2019 at 2:00 pm <span class="mx-2">&bullet;</span> <a href="#">Eventos</a></div>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                </div> 
              </div>
              <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="h-entry">
                  <img src="{{ secure_asset('template2/images/feria.jpg') }}" alt="Image" class="img-fluid">
                  <h2 class="font-size-regular"><a href="#">Feria de artesanos</a></h2>
                  <div class="meta mb-4">Por Theresa Winston <span class="mx-2">&bullet;</span> Jan 18, 2019 at 2:00 pm <span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                </div> 
              </div>
              <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="h-entry">
                  <img src="{{ secure_asset('template2/images/taller.jpg') }}" alt="Image" class="img-fluid">
                  <h2 class="font-size-regular"><a href="#">Talleres de tejido</a></h2>
                  <div class="meta mb-4">Por Theresa Winston <span class="mx-2">&bullet;</span> Jan 18, 2019 at 2:00 pm <span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row mb-3 align-items-stretch">
              <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="h-entry">
                  <img src="{{ secure_asset('template2/images/ayquina.jpg') }}" alt="Image" class="img-fluid">
                  <h2 class="font-size-regular"><a href="#">Fiesta de Ayquina</a></h2>
                  <div class="meta mb-4">Por Theresa Winston <span class="mx-2">&bullet;</span> Jan 18, 2019 at 2:00 pm <span class="mx-2">&bullet;</span> <a href="#">Eventos</a></div>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                </div> 
              </div>
              <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="h-entry">
                  <img src="{{ secure_asset('template2/images/feria.jpg') }}" alt="Image" class="img-fluid">
                  <h2 class="font-size-regular"><a href="#">Feria de artesanos</a></h2>
                  <div class="meta mb-4">Por Theresa Winston <span class="mx-2">&bullet;</span> Jan 18, 2019 at 2:00 pm <span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                </div> 
              </div>
              <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="h-entry">
                  <img src="{{ secure_asset('template2/images/taller.jpg') }}" alt="Image" class="img-fluid">
                  <h2 class="font-size-regular"><a href="#">Talleres de tejido</a></h2>
                  <div class="meta mb-4">Por Theresa Winston <span class="mx-2">&bullet;</span> Jan 18, 2019 at 2:00 pm <span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="site-section">
      
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h2 class="font-weight-light text-black">Visita nuestros sitios turisticos</h2>
            <p class="color-black-opacity-5">Descubre los lugares turisticos de la ciudad</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="#" class="unit-1 text-center">
              <img src="{{ secure_asset('template2/images/cascada.png') }}" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <strong class="text-primary mb-2 d-block">Ver más</strong>
                <h3 class="unit-1-heading">Sector de la Cascada</h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="#" class="unit-1 text-center">
              <img src="{{ secure_asset('template2/images/parqueeolico.png') }}" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <strong class="text-primary mb-2 d-block">Ver más</strong>
                <h3 class="unit-1-heading">Parque Eolico</h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="#" class="unit-1 text-center">
              <img src="{{ secure_asset('template2/images/parqueelloa.png') }}" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <strong class="text-primary mb-2 d-block">Ver más</strong>
                <h3 class="unit-1-heading">Parque el Loa</h3>
              </div>
            </a>
          </div>
        </div>
      </div>
    
    </div>

    <!-- <div class="site-section bg-light">
      
    </div> -->


    <div class="site-blocks-cover overlay inner-page-cover" style="background-image: url({{ secure_asset('template2/images/fondo3.jpg')}}); background-attachment: fixed;">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-7" data-aos="fade-up" data-aos-delay="400">
            <a href="https://www.youtube.com/watch?v=MlwylhP5MsY" class="play-single-big mb-4 d-inline-block popup-vimeo"><span class="icon-play"></span></a>
            <h2 class="text-white font-weight-light mb-5 h1">Vive Calama</h2>
            
          </div>
        </div>
      </div>
    </div>  

    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h2 class="font-weight-light text-black">¿Quieres ser parte de nosotros?</h2>
            <p class="color-black-opacity-5">Registrate segun tu perfil</p>
          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
            <div class="unit-4 d-flex"> 
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-airplane"></span></div>
              <div>
                <h3>Registrate como turista</h3>
                <p>Obtén beneficios exclusivos.</p>
                <p><a href="formulario2">Registrarse</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-ship"></span></div>
              <div>
                <h3>Registrate como MyPE</h3>
                <p>Ingresa tu negocio para que todos puedan verlo.</p>
                <p><a href="registroDueno">Registrarse</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection