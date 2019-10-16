@extends('admin/dashboard')

@section('panel')

<div class="content">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header card-header-rose">
            <div class="d-flex">
            <i class="material-icons mr-2">event</i>
            <h4 class="card-title font-weight-bold">Agregar Evento</h4>
            </div>
            <p class="card-category">Ingrese todos los datos solicitados para añadir el evento a la plataforma</p>
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
                        Fecha de inicio
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
                          Feldkirchen in Kärnten
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