@extends('admin/dashboard')

@section('panel')

<div class="content">
  <div class="container">
    <div class="row">

      <!-- Boton agregar Sitio-->
      <div class="col-lg-4 col-md-6">
        <div class="card">
          <div class="card-header card-header-text card-header-warning">
            <div class="card-text">
              <div class="d-flex">
                <h4 class="card-title font-weight-bold"><i class="fas fa-monument"></i>Agregar Sitio Turístico</h4>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="d-flex align-items-center ">
              <p class="card-category">Si deseas añadir un nuevo Sitio Turístico ingresa aqui</p>
              <a href="{{'agregarSitio'}}">
                <button class="btn btn-warning btn-fab  btn-round">
                <i class="fas fa-plus"></i>
                </button>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Tabla vista previa-->
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-warning row">
            <div class="col-md-8">
              <div class="d-flex">
                  <i class="fas h4 fa-monument mr-2"></i>
                  <h4 class="card-title font-weight-bold">Sitios Turísticos de la ciudad</h4>
              </div>
                <p class="card-category">Esta lista es una vista previa de los Sitios Turísticos registrados en la plataforma</p>
            </div>
            <div class="col-md-4 justify-content-end">
              <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control " placeholder="Buscar...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                <i class="material-icons">search</i>
                <div class="ripple-container"></div>
                </button>
              </div>
              </form>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th class="font-weight-bold">
                    ID
                  </th>
                  <th class="font-weight-bold">
                    Nombre
                  </th>
                  <th class="font-weight-bold">
                    Dirección
                  </th>
                  <th class="font-weight-bold">
                    Horario
                  </th>
                  <th class="font-weight-bold">
                    Entrada
                  </th>
                  <th class="font-weight-bold">
                    Acciones
                  </th>
                </thead>
                  <tbody>
                    @foreach ($sitios as $sitio)
                    <tr>
                      <td>
                        {{$sitio->id}}
                      </td>
                      <td>
                        {{$sitio->nombre_turistico}}
                      </td>
                      <td>
                        {{$sitio->direccion_turistico}}
                      </td>
                      <td>
                        {{$sitio->horario_turistico}}
                      </td>
                      <td>
                        {{$sitio->entrada_sitio ? $sitio->precio_sitio : 'Liberada'}}
                      </td>
                      <td class="text-primary">
                        <div class="d-flex">
                          <button class="btn btn-info btn-fab btn-fab-mini btn-round" data-toggle="modal" data-target="#{{$sitio->id}}">
                            <i class="material-icons">remove_red_eye</i>
                          </button>
                          <a href="{{ route('admin.edit',$sitio->id) }}">
                            <button class="btn btn-success btn-fab btn-fab-mini btn-round" ><i class="material-icons">edit</i> </button>
                          </a>
                            {{ Form::open(array('url' => 'admin/' . $sitio->id)) }}
                            {{Form::hidden('_method', 'DELETE') }}
                            {{ Form::button('<i class="material-icons">delete</i>', ['type' => 'submit', 'class' => 'btn btn-rose btn-fab btn-fab-mini btn-round'] ),['onclick' => 'return confirm("¿Borrar?")']}}
                            {{ Form::close() }}
                        </div>
                      </td>
                    </tr>
                    
                    <!-- Ventana Modal vista Sitios-->
                    <div id="{{$sitio->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">{{$sitio->nombre_turistico}}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="row ">

                              <!-- Visualización de imágenes-->
                              <div class="row">
                                  @foreach ($sitio->imagenSitioTuristicos as $imagen)
                                  @if ($imagen->tipo_imagen_turistico == 'portada')        
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
                                  @if ($imagen->tipo_imagen_turistico == 'galeria')        
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

                              
                              <div class="mt-2 col-4">
                                <h5>Dirección</h5>
                                  <p class="card-text ">{{$sitio->direccion_turistico}}</p>
                              </div>
                              <div class="mt-2 col-4">
                                  <h5>Entrada</h5>
                                  <p class="card-text ">{{$sitio->entrada_sitio ? $sitio->precio_sitio : 'Liberada'}}</p>
                              </div>
                              <div class="mt-2 col-4">
                                <h5>Servicios</h5>
                                <p class="card-text">
                                    @foreach ($sitio->servicios as $servicio)
                                    {{$servicio->nombre_servicio}},
                                    @endforeach
                                </p>
                              </div>
                              <div class="mt-2 col-4">
                                <h5 class="">Horario</h5>
                                <p class="card-text"></p>
                              </div>
                              <div class="col-md-12">
                                <p class="card-text">{{$sitio->descripcion_turistico}}</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Fin Ventana Modal vista Sitios-->
                  @endforeach
                  </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection