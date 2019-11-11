

  <!-- Titulo -->
@extends('plantilla')

@section('contenido')
<div class="site-section mt-5">
  <div class="container-extend justify-content-center">
  <div class="mt-5">
    <div class="row">
      <div class="col-md-8">
        <h2 class="card-text">Busca el mejor lugar para descanzar</h2>
        <p class="color-black-opacity-5">Descubre los hoteles y hospedajes disponibles en ciudad</p>
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
          <div class="card-body card-body-cascade text-center">
            <!-- Category & Title -->
            <div class="mb-auto">
            <a href="" class="text-muted">
              <h5>{{$mype->rubro_mype}}</h5>
            </a>
            <h4 class="card-title my-4">
              <strong>
                <a href=""  class="text-warning visita-user" id="visita-user{{$mype->id}}" data-number="{{$mype->id}}" value="Ver más"  aria-expanded="false"  data-toggle="modal" data-target="#mype{{$mype->id}}">{{$mype->nombre_fantasia_mype}}</a>
              </strong>
            </h4>
            <!-- Description -->
            <p class="card-text">{{str_limit($mype->descripcion_mype, $limit = 150, $end = '...') }}
            </p>
            </div>
            <!-- Card footer -->
            <div class="card-footer px-1 align-self-end">
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
      <div id="mype{{$mype->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
              <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
                <!--Indicadores-->
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                  <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                  <li data-target="#carousel-example-1z" data-slide-to="3"></li>
                </ol>
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                  @foreach ($mype->imagenmypes as $imagen)
                  @if ($imagen->tipo_imagen_mype == 'logo')  
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="../{{$imagen->enlace_imagen_mype}}" alt="First slide">
                  </div>
                  @endif
                  @if ($imagen->tipo_imagen_mype == 'galeria')  
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../{{$imagen->enlace_imagen_mype}}" alt="Second slide">
                  </div>
                  @endif
                  @endforeach
                </div>
                <!--Flechas-->
                <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
              <div class="modal-header">
                <h5 class="modal-title font-weight-bold">{{$mype->nombre_fantasia_mype}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                <div class="modal-body">
                  <div class="row my-auto">
                    @if (!is_null($mype->celular_mype))
                      <div class="col-md-6 d-flex text-right">
                        <i class="fas fa-mobile-alt fa-lg mr-2"></i>
                        <p class="card-title">{{$mype->celular_mype}}</p>
                      </div>
                    @endif
                    @if (!is_null($mype->telefono_mype))
                      <div class="col-md-6 d-flex text-right">
                        <i class="fas fa-phone fa-lg mr-2"></i>
                        <p class="card-title">{{$mype->telefono_mype}}</p>
                      </div>
                    @endif
                    @if (!is_null($mype->correo_mype))
                      <div class="col-md-6 d-flex text-right">
                        <i class="fas fa-envelope fa-lg mr-2"></i>
                        <p class="card-title">{{$mype->correo_mype}}</p>
                      </div>
                    @endif
                    @if (!is_null($mype->direccion_mype))
                      <div class="col-md-6 d-flex text-right">
                        <i class="fas fa-map-marker-alt fa-lg mr-2"></i>
                        <p class="card-title">{{$mype->direccion_mype}}</p>
                      </div>
                    @endif
                  </div>
                  <div class="card-text">
                    <p>
                        {{$mype->descripcion_mype}}
                    </p>                                
                  </div>
                </div>

          </div>
        </div>
      </div>

      @endforeach
    </div>
  </section>
</div>


  
  
  <script type="text/javascript">

  
  $('.progress-form').submit(function(e){
  
    var url = "{{ url('visita/post') }}"; 
    var data = $(this).serialize(); 
  
    $.ajax({
      type: "POST",
      url: url,
      data:data+'&_token={{csrf_token()}}',
      success: function(data)
      {
          
      }
    });
  e.preventDefault();
  });
  </script>



@endsection

