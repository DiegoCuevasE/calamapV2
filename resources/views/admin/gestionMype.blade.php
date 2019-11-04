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
                  <h4 class="card-title font-weight-bold"> <i class="material-icons mr-1">store</i>Agregar Socio</h4>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="d-flex align-items-center ">
                <p class="card-category">Si deseas agregar un nuevo Socio ingresa acá</p>
                <a href="{{'agregarMype'}}">
                <button class="btn btn-warning btn-fab  btn-round">
                <i class="fas fa-plus"></i>
                </button>
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Boton agregar membresia-->
        <div class="col-lg-4 col-md-6">
          <div class="card">
            <div class="card-header card-header-text card-header-warning">
              <div class="card-text">
                <div class="d-flex">
                  <h4 class="card-title font-weight-bold"> <i class="material-icons mr-2">store</i></i>Gestionar Membresias MyPES</h4>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="d-flex align-items-center ">
                <p class="card-category">¿Quieres agregar o extender el plazo de membresia de una MyPE? Ingresa acá</p>
              <a href="{{'gestionMembresia'}}">
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
                  <i class="material-icons mr-1">store</i>
                  <h4 class="card-title font-weight-bold">MyPES de la ciudad</h4>
                </div>
                <p class="card-category">Esta lista es una vista previa de las MyPES registradas en la plataforma</p>
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
                      Dueño MyPE
                    </th>
                    <th class="font-weight-bold">
                      Nombre MyPE
                    </th>
                    <th class="font-weight-bold">
                      Categoria
                    </th>
                    <th class="font-weight-bold">
                      Estado
                    </th>
                    <th class="font-weight-bold">
                      Acciones
                    </th>
                  </thead>
                  <tbody>
                    @foreach ($mypes as $mype)
                    <tr>
                      <td>
                        {{$mype->id}}
                      </td>
                      <td>
                        {{$mype->user->nombre}} {{$mype->user->apellido_usuario}}
                      </td>
                      <td>
                        {{$mype->nombre_fantasia_mype}}
                      </td>
                      <td>
                        {{$mype->rubro_mype}}
                      </td>
                      <td>

                        <div class="togglebutton">
                          <label>
                            <input type="checkbox" data-id="{{ $mype->id }}"   onclick="md.showNotification('top','right')" name="status" class="js-switch" {{ $mype->estado_mype == 1 ? 'checked' : '' }}>
                            <span class="toggle"></span>
                          </label>
                        </div>
                      </td>
                      <td class="text-primary">
                        <div class="d-flex">
                          <button class="btn btn-info btn-fab btn-fab-mini btn-round" data-toggle="modal" data-target="#{{$mype->id}}">
                            <i class="material-icons">remove_red_eye</i>
                          </button>
                          <a href="{{ route('editarMype',$mype->id) }}">
                            <button class="btn btn-success btn-fab btn-fab-mini btn-round" ><i class="material-icons">edit</i> </button>
                          </a>
                            {{ Form::open(array('url' => 'admin/eliminarMype' . $mype->id)) }}
                            {{Form::hidden('_method', 'DELETE') }}
                            {{ Form::button('<i class="material-icons">delete</i>', ['type' => 'submit', 'class' => 'btn btn-rose btn-fab btn-fab-mini btn-round'] ),['onclick' => 'return confirm("¿Borrar?")']}}
                            {{ Form::close() }}
                        </div>
                      </td>
                    </tr>

                    <!-- Ventana Modal Vista Mype-->
                    <div id="{{$mype->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
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

