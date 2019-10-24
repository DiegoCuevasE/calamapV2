@extends('admin/dashboard')

@section('panel')

<div class="content">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header card-header-warning">
            <div class="d-flex">
                <i class="fas fa-users"></i>
            <h4 class="card-title font-weight-bold">Agregar Socio</h4>
            </div>
            <p class="card-category">Ingrese todos los datos solicitados para añadir al Socio a la plataforma</p>
          </div>
          <div class="card-body">
            <form>   
              <div class="row mt-5">

                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Nombre o Nick</label>
                    <input type="text" class="form-control" >
                  </div>
                </div>
                
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Apellido</label>
                    <input type="mail" class="form-control">
                  </div>
                </div>
              </div> 
              <div class="row">
                
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Celular</label>
                    <input type="text" class="form-control">
                  </div>
                </div> 
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Teléfono</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Correo</label>
                    <input type="text" class="form-control">
                  </div>
                </div>                                   
              </div>     
              <button type="submit" class="btn btn-warning pull-right">Agregar Socio</button>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>



@endsection