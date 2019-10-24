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
            <p class="card-category">Esta lista es una vista previa de los eventos si desea ver uno en especifico seleccionalo</p>
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
                      <tr>
                        <td>
                          1
                        </td>
                        <td>
                          Limpieza de Canales
                        </td>
                        <td>
                          Plaza Calama
                        </td>
                        
                        <td>
                          15 de Enero
                        </td>
                        <td>
                          Liberada
                        </td>
                        <td class="text-primary">
                            <button class="btn btn-info btn-fab btn-fab-mini btn-round">
                                <i class="material-icons">remove_red_eye</i>
                            </button>
                            <button class="btn btn-success btn-fab btn-fab-mini btn-round">
                                <i class="material-icons">edit</i>
                            </button>
                            <button class="btn btn-rose btn-fab btn-fab-mini btn-round">
                                <i class="material-icons">delete</i>
                            </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          2
                        </td>
                        <td>
                          Limpieza de Canales
                        </td>
                        <td>
                          Plaza Calama
                        </td>
                        
                        <td>
                          15 de Enero
                        </td>
                        <td>
                          Liberada
                        </td>
                        <td class="text-primary">
                            <button class="btn btn-info btn-fab btn-fab-mini btn-round">
                                <i class="material-icons">remove_red_eye</i>
                            </button>
                            <button class="btn btn-success btn-fab btn-fab-mini btn-round">
                                <i class="material-icons">edit</i>
                            </button>
                            <button class="btn btn-rose btn-fab btn-fab-mini btn-round">
                                <i class="material-icons">delete</i>
                            </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          3
                        </td>
                        <td>
                          Limpieza de Canales
                        </td>
                        <td>
                          Plaza Calama
                        </td>
                        
                        <td>
                          15 de Enero
                        </td>
                        <td>
                          Liberada
                        </td>
                        <td class="text-primary">
                            <button class="btn btn-info btn-fab btn-fab-mini btn-round">
                                <i class="material-icons">remove_red_eye</i>
                            </button>
                            <button class="btn btn-success btn-fab btn-fab-mini btn-round">
                                <i class="material-icons">edit</i>
                            </button>
                            <button class="btn btn-rose btn-fab btn-fab-mini btn-round">
                                <i class="material-icons">delete</i>
                            </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          4
                        </td>
                        <td>
                          Limpieza de Canales
                        </td>
                        <td>
                          Plaza Calama
                        </td>
                        
                        <td>
                          15 de Enero
                        </td>
                        <td>
                          Liberada
                        </td>
                        <td class="text-primary">
                            <button class="btn btn-info btn-fab btn-fab-mini btn-round">
                                <i class="material-icons">remove_red_eye</i>
                            </button>
                            <button class="btn btn-success btn-fab btn-fab-mini btn-round">
                                <i class="material-icons">edit</i>
                            </button>
                            <button class="btn btn-rose btn-fab btn-fab-mini btn-round">
                                <i class="material-icons">delete</i>
                            </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          5
                        </td>
                        <td>
                          Limpieza de Canales
                        </td>
                        <td>
                          Plaza Calama
                        </td>
                        
                        <td>
                          15 de Enero
                        </td>
                        <td>
                          Liberada
                        </td>
                        <td class="text-primary">
                            <button class="btn btn-info btn-fab btn-fab-mini btn-round">
                                <i class="material-icons">remove_red_eye</i>
                            </button>
                            <button class="btn btn-success btn-fab btn-fab-mini btn-round">
                                <i class="material-icons">edit</i>
                            </button>
                            <button class="btn btn-rose btn-fab btn-fab-mini btn-round">
                                <i class="material-icons">delete</i>
                            </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          6
                        </td>
                        <td>
                          Limpieza de Canales
                        </td>
                        <td>
                          Plaza Calama
                        </td>
                        
                        <td>
                          15 de Enero
                        </td>
                        <td>
                          Liberada
                        </td>
                        <td class="text-primary">
                            <button class="btn btn-info btn-fab btn-fab-mini btn-round">
                                <i class="material-icons">remove_red_eye</i>
                            </button>
                            <button class="btn btn-success btn-fab btn-fab-mini btn-round">
                                <i class="material-icons">edit</i>
                            </button>
                            <button class="btn btn-rose btn-fab btn-fab-mini btn-round">
                                <i class="material-icons">delete</i>
                            </button>
                        </td>
                      </tr>
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