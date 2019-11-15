@extends('admin/dashboard')

@section('panel')

<div class="content">
  <div class="container">
    
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="card">
            <div class="card-header card-header-text card-header-warning">
              <div class="card-text">
                <div class="d-flex">
                  <h4 class="card-title font-weight-bold"> <i class="material-icons mr-2">event</i>Agregar evento</h4>
                </div>
              </div>
            </div>
          <div class="card-body">
            <div class="d-flex align-items-center ">
              <p class="card-category">Si deseas añadir un nuevo evento ingresa aqui</p>
            <a href="{{'agregarEvento'}}">
              <button class="btn btn-warning btn-fab  btn-round">
              <i class="fas fa-plus"></i>
              </button>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-warning">
            <div class="d-flex">
            <i class="material-icons mr-2">event</i>
            <h4 class="card-title font-weight-bold">Evento de la ciudad</h4>
            </div>
            <p class="card-category">Esta lista es una vista previa de los eventos si desea ver uno en específico selecciónalo</p>
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
                        Fecha
                      </th>
                      <th class="font-weight-bold">
                        Entrada
                      </th>
                      <th class="font-weight-bold">
                        Modificar
                      </th>
                    </thead>
                    <tbody>
                      @foreach ($eventos as $evento)
                      <tr>
                        <td>
                          {{$evento->id}}
                        </td>
                        <td>
                          {{$evento->titulo_evento}}
                        </td>
                        <td>
                          {{$evento->direccion_evento}}
                        </td>
                        
                        <td>
                          {{date('d-m', strtotime($evento->fecha_inicio_evento))}} {{ $evento->fecha_termino_evento ? ' Hasta '.date('d-m-y', strtotime($evento->fecha_termino_evento)) : '' }}
                        </td>
                        <td>
                          {{$evento->entrada_evento ? $evento->precio_evento:'Liberada'}}
                        </td>
                        <td class="text-primary">
                          <div class="d-flex">
                            <button class="btn btn-info btn-fab btn-fab-mini btn-round" data-toggle="modal" data-target="#{{$evento->id}}">
                              <i class="material-icons">remove_red_eye</i>
                            </button>
                            <a href="{{ route('editarEvento',$evento->id) }}">
                              <button class="btn btn-success btn-fab btn-fab-mini btn-round" ><i class="material-icons">edit</i> </button>
                            </a>
                            {{ Form::open(array('url' => 'admin/eliminarEvento' . $evento->id)) }}
                            {{Form::hidden('_method', 'DELETE') }}
                            {{ Form::button('<i class="material-icons">delete</i>', ['type' => 'submit', 'class' => 'btn btn-rose btn-fab btn-fab-mini btn-round'] ),['onclick' => 'return confirm("¿Borrar?")']}}
                            {{ Form::close() }}
                          </div>
                        </td>
                      </tr>
                      <!-- Ventana Modal Vista Mype-->
                    <div id="{{$evento->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">{{$evento->titulo_evento}}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="row ">

                              <!-- Visualización de imágenes-->
                              <div class="row">
                                  @foreach ($evento->imageneventos as $imagen)
                                  @if ($imagen->tipo_imagen_evento == 'portada')        
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
                                  @if ($imagen->tipo_imagen_evento == 'galeria')        
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
                                <p class="card-text">{{$evento->descripcion_evento}}</p>
                              </div>
                              <div class="mt-2 col-4">
                                <h5>Dirección</h5>
                                  <p class="card-text ">{{$evento->direccion_evento}}</p>
                              </div>
                              <div class="mt-2 col-4">
                                <h5>Hashtag</h5>
                                <p class="card-text ">{{$evento->hashtag_evento}}</p>
                              </div>
                              <div class="mt-2 col-4">
                                <h5>Hora</h5>
                                <p class="card-text ">{{$evento->hora_inicio_evento}} Hasta las {{$evento->hora_termino_evento}}</p>
                            </div>
                              <div class="mt-2 col-4">
                                <h5>Fecha</h5>
                                <p class="card-text ">{{date('d-m-y', strtotime($evento->fecha_inicio_evento))}} {{ $evento->fecha_termino_evento ? ' Hasta '.date('d-m-y', strtotime($evento->fecha_termino_evento)) : '' }}</p>
                              </div>
                              <div class="mt-2 col-4">
                                <h5>entrada</h5>
                                <p class="card-text ">{{$evento->entrada_evento ? $evento->precio_evento:'Liberada'}}</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

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
</div>
</div>



@endsection