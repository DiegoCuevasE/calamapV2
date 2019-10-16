@extends('admin/dashboard')

@section('panel')

<div class="content">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header card-header-warning">
            <div class="d-flex">
            <i class="material-icons mr-2">event</i>
            <h4 class="card-title font-weight-bold">Agregar Evento</h4>
            </div>
            <p class="card-category">Ingrese todos los datos solicitados para añadir el evento a la plataforma</p>
          </div>
          <div class="card-body">
            <form>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Nombre del evento</label>
                    <input type="text" class="form-control" >
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Dirección</label>
                    <input type="text" class="form-control">
                  </div>
                </div>

                <div class="col-md-4">      
                  <div class="form-group">
                    <label class="label-control">Fecha de inicio</label>
                    <input type="text" class="form-control datetimepicker" value="21/06/2018"/>
                  </div>
                </div>
                <div class="col-md-4">      
                  <div class="form-group">
                    <label class="label-control">Fecha de Termino</label>
                    <input type="text" class="form-control datetimepicker" value="21/06/2018"/>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Entrada</label>
                    <input type="text" class="form-control">
                  </div>
                </div> 
                
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Pagina del evento</label>
                    <input type="text" class="form-control">
                  </div>
                </div>                                   
              </div>     
                
              <div class="row">
                <div class="form-group form-file-upload form-file-multiple col-md-4">
                  <input type="file" multiple="" class="inputFileHidden">
                    <div class="input-group">
                      <input type="text" class="form-control inputFileVisible" placeholder="Single File">
                      <span class="input-group-btn">
                      <button type="button" class="btn btn-fab btn-round btn-primary">
                      <i class="material-icons">attach_file</i>
                      </button>
                      </span>
                    </div>
                  </div>
                  
                  <div class="form-group form-file-upload form-file-multiple col-md-4">
                    <input type="file" multiple="" class="inputFileHidden">
                    <div class="input-group">
                      <input type="text" class="form-control inputFileVisible" placeholder="Multiple Files" multiple>
                      <span class="input-group-btn">
                      <button type="button" class="btn btn-fab btn-round btn-info">
                        <i class="material-icons">layers</i>
                      </button>
                      </span>
                    </div>
                  </div> 
                  
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Descripción</label>
                    <div class="form-group">
                      <label class="bmd-label-floating"> Agrege la información necesaria para que el publico conosca detalladamente el evento</label>
                      <textarea class="form-control" rows="5"></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-warning pull-right">Agregar Evento</button>
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