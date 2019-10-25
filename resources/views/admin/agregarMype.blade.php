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
            <h4 class="card-title font-weight-bold">Agregar MyPE</h4>
            </div>
            <p class="card-category">Ingrese todos los datos solicitados para añadir la MyPE a la plataforma</p>
          </div>
          <div class="card-body">
            <form>   
              <div class="row mt-5">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="selectUser">Dueño MyPE</label>
                    <select class="form-control selectpicker" data-style="btn btn-link" id="selectUser">
                      <option>Franco</option>
                      <option>Diego</option>
                      <option>Meliodas</option>
                      <option>Orochimaru</option>
                      <option>Kokun</option>
                    </select>
                  </div>
                </div>
                
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="DueñoMyPE">Selecciona el Rubro</label>
                    <select class="form-control selectpicker" data-style="btn btn-link" id="DueñoMyPE">
                      <option selected disabled>Rubro de MyPE</option>
                      <option>Hoteleria</option>
                      <option>Restaurant</option>
                      <option>Artesania</option>
                      <option>Agencia de Turismo</option>
                      <option>Comercio</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Nombre de la MyPE</label>
                    <input type="text" class="form-control" >
                  </div>
                </div>
                
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Dirección</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
              </div> 
              <div class="row mt-5">
                
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Página principal</label>
                    <input type="text" class="form-control">
                  </div>
                </div> 
                
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Facebook</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">Instragram</label>
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
                    <label class="bmd-label-floating">Celular</label>
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
                
              <div class="row mt-5">
                <div class="form-group form-file-upload form-file-multiple col-md-6">
                  <input type="file" multiple="" class="inputFileHidden">
                    <div class="input-group">
                      <input type="text" class="form-control inputFileVisible" placeholder="Foto Portada">
                      <span class="input-group-btn">
                      <button type="button" class="btn btn-fab btn-round btn-primary">
                      <i class="material-icons">attach_file</i>
                      </button>
                      </span>
                    </div>
                </div>
                  
                  <div class="form-group form-file-upload form-file-multiple col-md-6">
                    <input type="file" multiple="" class="inputFileHidden">
                    <div class="input-group">
                      <input type="text" class="form-control inputFileVisible" placeholder="Galería de Imágenes" multiple>
                      <span class="input-group-btn">
                      <button type="button" class="btn btn-fab btn-round btn-info">
                        <i class="material-icons">layers</i>
                      </button>
                      </span>
                    </div>
                  </div> 
                  <div class="col-md-6">      
                    <div class="form-group">
                      <label class="label-control">Fecha de inicio</label>
                      <input type="text" class="form-control datetimepicker" value="21/06/2018"/>
                    </div>
                  </div>
                  <div class="col-md-6">      
                    <div class="form-group">
                      <label class="label-control">Fecha de Termino</label>
                      <input type="text" class="form-control datetimepicker" value="21/06/2018"/>
                    </div>
                  </div>  

                <div class="col-md-12">
                  <div class="form-group">
                    <label>Descripción</label>
                    <div class="form-group">
                      <label class="bmd-label-floating"> Agrege la información necesaria para que el publico conosca detalladamente su MyPE</label>
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