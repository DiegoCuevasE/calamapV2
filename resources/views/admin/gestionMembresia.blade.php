@extends('admin/dashboard')

@section('panel')

<div class="content">
  <div class="container">
    <div class="row">
        <div class="col-lg-10 justify-content-start">
            <div class="card">  
              <div class="card-header card-header-warning">
                <div class="d-flex">
                <i class="material-icons mr-2">store</i>
                <h4 class="card-title font-weight-bold">Agregar MyPE a membresia</h4>
                </div>
                <p class="card-category">Busque la MyPE a añadir con los datos solicitados a continuación</p>
              </div>
              <div class="card-body">
                <form class="navbar-form ">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                          <select class="form-control selectpicker" data-style="btn btn-link" id="selectUser">
                          <option selected >Selecciona la Mype</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                          <option>5</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label class="bmd-label-floating">Cant. meses</label>
                        <input type="text" class="form-control" >
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label class="bmd-label-floating">Total</label>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                </div>
                </form>
              </div>
            </div>
          </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-warning row">
            <div class="col-md-8">
            <div class="d-flex">
                <i class="material-icons mr-1">store</i>
                <h4 class="card-title font-weight-bold">MyPES Premiun</h4>
            </div>
            <p class="card-category">Esta lista es una vista previa de las MyPES con membresias en la plataforma</p>
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
                        Fecha de Caducidad
                      </th>
                      <th class="font-weight-bold">
                        Añadir Meses
                      </th>
                      <th class="font-weight-bold">
                        Monto Total
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
                          02/2020
                        </td>
                        <td>
                          <div class="form-group" style="max-width: 100px;">
                            <input type="text" class="form-control">
                          </div>
                        </td>
                        <td>
                            $4.990
                        </td>
                        <td class="text-primary">
                            <button class="btn btn-primary btn-sm  btn-round">
                                <i class="fas fa-plus"></i>
                                Añadir
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