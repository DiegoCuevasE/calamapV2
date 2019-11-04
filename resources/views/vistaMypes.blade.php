

  <!-- Titulo -->
@extends('plantilla')

@section('contenido')
<div class="container-extend justify-content-center">
  <div class="site-section">
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

  <div class="site-section">
    <div class="card-deck">
      <div class="row">
        @foreach ($mypes as $mype)
        
        <div class="mb-4 col-md-4 col-lg-3">
          <!-- Card -->
          <div class="card h-100">
            <!--Card image-->
            @foreach ($mype->imagenmypes as $imagen)
            @if ($imagen->tipo_imagen_mype == 'logo') 
            <div class="view overlay">
              <img class="card-img-top" src="../{{$imagen->enlace_imagen_mype}}" alt="Card image cap">
              <a href="#!">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
            @endif
            @endforeach
            <!--Card content-->
            <div class="card-body">
              <!--Title-->
              <h5 class="card-title">{{$mype->nombre_fantasia_mype}}</h5>
              <!--Text-->
              <span class="tourInfo">
              <p class="card-text">{{$mype->descripcion_mype}}</p>
             </span>
              <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
            </div>
            <div class="text-right ">
                <input type="button" class="btn btn-primary visita-user" id="visita-user{{$mype->id}}" data-number="{{$mype->id}}" value="Ver más" data-toggle="collapse" href="#collapseContent{{$mype->id}}" aria-expanded="false" aria-controls="collapseContent{{$mype->id}}">
                <button class="btn" data-toggle="modal" data-target="#mype{{$mype->id}}">asd</button>
            </div>
          </div>
          <!-- Card -->
        </div>
        <div class="modal fade" id="myype{{$mype->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
        <!-- Ventana Modal Vista Mype-->
        <div id="mype{{$mype->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">{{$mype->nombre_fantasia_mype}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row ">

                  <!-- Visualización de imágenes-->
                  <div class="row">
                      @foreach ($mype->imagenmypes as $imagen)
                      @if ($imagen->tipo_imagen_mype == 'logo')        
                      <div class="col-3">
                          <div class="card">
                              <div class="view overlay">
                                  <img class="card-img-top" src="../{{$imagen->thumbnail}}" alt="Card image cap">
                                  <a href="#!">
                                  <div class="mask rgba-white-slight"></div>
                                  </a>
                              </div>
                          </div>
                      </div>
                      @endif
                      @if ($imagen->tipo_imagen_mype == 'galeria')        
                      <div class="col-3">
                          <div class="card">
                              <div class="view overlay">
                                  <img class="card-img-top" src="../{{$imagen->thumbnail}}" alt="Card image cap">
                                  <a href="#!">
                                  <div class="mask rgba-white-slight"></div>
                                  </a>
                              </div>
                          </div>
                      </div>
                      @endif
                      @endforeach
                  </div>
                  <!-- Fin Visualización de imágenes-->

                  <div class="col-md-12">
                    <p class="card-text">{{$mype->descripcion_mype}}</p>
                  </div>
                  <div class="mt-2 col-4">
                    <h5>Dirección</h5>
                      <p class="card-text ">{{$mype->direccion_mype}}</p>
                  </div>
                  <div class="mt-2 col-4">
                      <h5>Rubro</h5>
                      <p class="card-text ">{{$mype->rubro_mype}}</p>
                  </div>
                  <div class="mt-2 col-4">
                    <h5>Locomoción</h5>
                    <p class="card-text ">Hacer?</p>
                  </div>
                  <div class="mt-2 col-4">
                    <h5 class="">Servicios</h5>
                    @foreach ($mype->servicios as $servicio)
                    <p class="card-text ">{{$servicio->nombre_servicio}}</p>
                    @endforeach
                  </div>
                  <div class="mt-2 col-4">
                    <h5 class="">Horario</h5>
                    <p class="card-text">{{$mype->horario_mype}}</p>
                  </div>
                  <div class="mt-2 col-4">
                    <h5 class="">Contacto</h5>
                    <p class="card-text">{{$mype->correo_mype}}</p>
                    <p class="card-text">{{$mype->telefono_mype}}</p>
                    <p class="card-text">{{$mype->celular_mype}}</p>
                  </div>
                  <div class="mt-2 col-4">
                    <h5>Idiomas</h5>
                    @foreach ($mype->idiomas as $idioma)
                    <p class="card-text">{{$idioma->nombre_idioma}}</p>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>





@endsection

