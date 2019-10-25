@extends('plantilla')

@section('contenido')
      
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