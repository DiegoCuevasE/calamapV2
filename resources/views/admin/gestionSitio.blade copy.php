@extends('admin/dashboard')

@section('panel')

<div class="content">
  <div class="container">
    
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="card">
            <div class="card-header card-header-text card-header-success">
              <div class="card-text">
                <div class="d-flex">
                  <h4 class="card-title font-weight-bold"><i class="fas fa-monument"></i>Agregar Sitio Turístico</h4>
                </div>
              </div>
            </div>
          <div class="card-body">
            <div class="d-flex align-items-center ">
              <p class="card-category">Si deseas añadir un nuevo Sitio Turístico ingresa aqui</p>
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
          <div class="card-header card-header-success">
            <div class="d-flex">
              <i class="fas h4 fa-monument mr-2"></i>
              <h4 class="card-title font-weight-bold">Sitios Turísticos de la ciudad</h4>
            </div>
            <p class="card-category">Esta lista es una vista previa de los Sitio Turísticos si deseas ver uno en especifico seleccionalo</p>
          </div>
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        ID
                      </th>
                      <th>
                        Nombre
                      </th>
                      <th>
                        Dirección
                      </th>
                      <th>
                        Horario
                      </th>
                      <th>
                        Entrada
                      </th>
                      <th>
                        Modificar
                      </th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          1
                        </td>
                        <td>
                          Dakota Rice
                        </td>
                        <td>
                          Niger
                        </td>
                        
                        <td>
                          Oud-Turnhout
                        </td>
                        <td>
                          Liberada
                        </td>
                        <td class="text-primary">
                            <button class="btn btn-rose btn-fab btn-fab-mini btn-round">
                                <i class="material-icons">delete</i>
                            </button>
                            <button class="btn btn-info btn-fab btn-fab-mini btn-round">
                                <i class="material-icons">edit</i>
                            </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          2
                        </td>
                        <td>
                          Minerva Hooper
                        </td>
                        <td>
                          Curaçao
                        </td>
                        <td>
                          Sinaai-Waas
                        </td>
                        <td>
                          Liberada
                        </td>
                        <td class="text-primary">
                            <button class="btn btn-rose btn-fab btn-fab-mini btn-round">
                                <i class="material-icons">delete</i>
                            </button>
                            <button class="btn btn-info btn-fab btn-fab-mini btn-round">
                                <i class="material-icons">edit</i>
                            </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          3
                        </td>
                        <td>
                          Sage Rodriguez
                        </td>
                        <td>
                          Netherlands
                        </td>
                        <td>
                          Baileux
                        </td>
                        <td>
                          Liberada
                        </td>
                        <td class="text-primary">
                            <button class="btn btn-rose btn-fab btn-fab-mini btn-round">
                                <i class="material-icons">delete</i>
                            </button>
                            <button class="btn btn-info btn-fab btn-fab-mini btn-round">
                                <i class="material-icons">edit</i>
                            </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          4
                        </td>
                        <td>
                          Philip Chaney
                        </td>
                        <td>
                          Korea, South
                        </td>
                        <td>
                          Overland Park
                        </td>
                        <td>
                          $9.990
                        </td>
                        <td class="text-primary">
                            <button class="btn btn-rose btn-fab btn-fab-mini btn-round">
                                <i class="material-icons">delete</i>
                            </button>
                            <button class="btn btn-info btn-fab btn-fab-mini btn-round">
                                <i class="material-icons">edit</i>
                            </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          5
                        </td>
                        <td>
                          Doris Greene
                        </td>
                        <td>
                          Malawi
                        </td>
                        <td>
                          Feldkirchen in 
                        </td>
                        <td>
                          Liberada
                        </td>
                        <td class="text-primary">
                            <button class="btn btn-rose btn-fab btn-fab-mini btn-round">
                                <i class="material-icons">delete</i>
                            </button>
                            <button class="btn btn-info btn-fab btn-fab-mini btn-round">
                                <i class="material-icons">edit</i>
                            </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          6
                        </td>
                        <td>
                          Mason Porter
                        </td>
                        <td>
                          Chile
                        </td>
                        <td>
                          Gloucester
                        </td>
                        <td>
                          Liberada
                        </td>
                        <td class="text-primary">
                            <button class="btn btn-rose btn-fab btn-fab-mini btn-round">
                                <i class="material-icons">delete</i>
                            </button>
                            <button class="btn btn-info btn-fab btn-fab-mini btn-round">
                                <i class="material-icons">edit</i>
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