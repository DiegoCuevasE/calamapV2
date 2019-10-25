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
                      <tr>
                        <td>
                          Dakota Rice
                        </td>
                        <td>
                          Los tres enanitos
                        </td>
                        <td>
                          Restaurant
                        </td>
                        <td>
                            <div class="togglebutton">
                                <label>
                                  <input type="checkbox" checked="">
                                  
                                  <span class="toggle"></span>
                                 
                                </label>
                              </div>
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