
  <!-- Titulo -->
  @extends('plantilla')
  
  @section('contenido')
  <div class="site-section mt-5">
    <div class="container-extend justify-content-center">
    <div class="mt-5">
      <div class="row">
        <div class="col-md-8">
          <h2 class="card-text">{{$titulo}}</h2>
        <p class="color-black-opacity-5">{{$subtitulo}}</p>
        </div>
  
        <div class="col-md-4" >
          <form class="form-inline md-form mr-auto mb-4 text-right">
            <input class="form-control mr-sm-1 " type="text" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-elegant btn-rounded btn-sm my-0"  type="submit">Buscar</button>
          </form>
        </div>
      </div>
    </div>
    </div>
  </div>
  
  <div class="container mb-5">
    <section class="mx-md-5 dark-grey-text text-center">
      <div class="row-card">
        @foreach ($mypes as $mype)
  
        <div class="col-md-4 mb-2 mt-5 mt-md-0">
          <!-- Card -->
          <div class="card card-cascade narrower card-ecommerce h-100">
            <!-- Card image -->
            <div class="view view-cascade overlay">
              @foreach ($mype->imagenmypes as $imagen)
              @if ($imagen->tipo_imagen_mype == 'logo') 
              <img src="../{{$imagen->enlace_imagen_mype}}" class="card-img-top"alt="sample photo">
              @endif
              @endforeach
              <a>
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
            <!-- Card image -->
            <!-- Card content -->
            <div class="card-body card-body-cascade text-center h-50">
              <!-- Category & Title -->
              <div class="mb-auto ">
              <h4 class="card-title my-2">
                <strong>
                  <a href=""  class="text-warning visita-user" id="visita-user{{$mype->id}}" data-number="{{$mype->id}}" onclick="trackClick('{{$mype->id}}')" value="Ver más"  aria-expanded="false"  data-toggle="modal" data-target="#mype{{$mype->id}}">{{$mype->nombre_fantasia_mype}}</a>
                </strong>
              </h4>
              <!-- Description -->
              <p class="card-text">{{str_limit($mype->descripcion_mype, $limit = 150, $end = '...') }}
              </p>
              </div>
              <!-- Card footer -->
              
            </div>
            <div class="card-body">
              <div class="card-footer mt-1 ">
                <span class="float-right">
                  @if (!is_null($mype->instagram_mype))
                <a href="{{$mype->instagram_mype}}" class="material-tooltip-main" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                      <i class="fab fa-instagram ml-3"></i>
                    </a>
                  @endif
                  @if (!is_null($mype->facebook_mype))
                    <a href="{{$mype->facebook_mype}}" class="material-tooltip-main" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                      <i class="fab fa-facebook-f ml-3"></i>
                    </a>
                  @endif
                  @if (!is_null($mype->pagina_mype))
                    <a href="{{$mype->pagina_mype}}" class="material-tooltip-main" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                      <i class="fas fa-globe ml-3"></i>
                    </a>
                  @endif
                </span>
              </div>
            </div>
            <!-- Card content -->
          </div>
          <!-- Card -->
        </div>
  
        <!-- Ventana Modal Vista Mype-->
      <div class="modal fade mt-5" id="mype{{$mype->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content rounded">
              <div class="modal-body">
                <div class="row">
                  <div class="col-lg-12 my-2">
                      <h2 class="h2-responsive product-name">
                          <strong>{{$mype->nombre_fantasia_mype}}</strong>
                      </h2>
                  </div>
                  <div class="col-lg-6">
                    <!--Carousel Wrapper-->
                    <div id="carousel-thumb{{$mype->id}}" class="carousel slide carousel-fade carousel-thumbnails"
                      data-ride="carousel">
                      <!--Slides-->
                      <div class="carousel-inner" role="listbox">
                        @foreach ($mype->imagenmypes as $imagen)  
                        @if ($imagen->tipo_imagen_mype == 'logo')  
                        <div class="carousel-item active">
                          <img class="d-block w-100" src="../{{$imagen->enlace_imagen_mype}}" alt="First slide">
                        </div>
                        @elseif($imagen->tipo_imagen_mype == 'galeria') 
                        <div class="carousel-item">
                          <img class="d-block w-100" src="../{{$imagen->enlace_imagen_mype}}" alt="Second slide">
                        </div>
                        @endif
                        @endforeach
                      </div>
                      <!--/.Slides-->
                      <!--Controls-->
                      <a class="carousel-control-prev" href="#carousel-thumb{{$mype->id}}" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                        <span class="sr-only white">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carousel-thumb{{$mype->id}}" role="button" data-slide="next">
                        <span class="carousel-control-next-icon " aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                      <!--/.Controls-->
                    </div>
                    <!--/.Carousel Wrapper-->
                  </div>
                  <div class="col-lg-6 secciones{{$mype->id}}">
                    


                    <div class="d-xl-inline-block">
                      <ul class="tabs js-clone-nav ml-auto list-unstyled d-flex text-right mb-0 " data-class="social">
                          <li><a href="#informacion{{$mype->id}}" class="pr-2 font-weight-bold"><u>Información</u> </a></li>
                          <li><a href="#fotos{{$mype->id}}" class="pr-2 font-weight-bold"><u>Fotos y videos</u></a></li>
                          <li><a href="#mapa{{$mype->id}}" class="pr-2 font-weight-bold"><u>ubicación</u> </a></li>
                      </ul>
                  </div>
                  <article id="informacion{{$mype->id}}">
                    <div class="card-text text-justify">
                    {{$mype->descripcion_mype}}
                      </div>
                  </article >
                  <article id="fotos{{$mype->id}}">
                    {{$mype->id}}
                  </article >
                  <article id="mapa{{$mype->id}}">
                  </article >


                    <!-- Add to Cart -->
                    
                    <!-- /.Add to Cart -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>


    </section>
  </div>
  
  @foreach($mypes as $mype)
  <script>
    $(document).ready(function(){
      
      $('#visita-user{{$mype->id}}').click(function(){
        $('.secciones{{$mype->id}} article').hide();
        $('.secciones{{$mype->id}} article:first').show();
      });

      $('ul.tabs li a').click(function(){
        $('this').addClass('active');
        $('.secciones{{$mype->id}} article').hide();

        var activeTab = $(this).attr('href');
        $(activeTab).show();
        return false;
        }
      );

    });
    </script>
    @endforeach
    
    <script type="text/javascript">
    
      function trackClick(link) {
        var data = 'mype_id';
        $.post({
          url: "{{ url('visita/post') }}",
          data:'mype_id='+link+'&_token={{csrf_token()}}',
        });
      }

    </script>
  @endsection
