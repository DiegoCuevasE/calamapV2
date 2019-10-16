@extends('admin/dashboard')

@section('panel')

<div class="content">
  <div class="container">
    <!-- panel de gestión -->
    <div class="row justify-content-center">
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-header card-header-rose card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">event</i>
                    </div>
                    <p class="card-category">Gestionar</p>
                    <h3 class="card-title">Eventos</h3>
                  </div>
                  <div class="card-footer justify-content-center">
                    <div class="stats ju">
                      <button class="btn btn-rose pull-right btn-sm">Ver más</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-header card-header-info card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">store</i>
                    </div>
                    <p class="card-category">Gestionar</p>
                    <h3 class="card-title">MyPES</h3>
                  </div>
                  <div class="card-footer justify-content-center">
                    <div class="stats">
                      <button class="btn btn-info pull-right btn-sm">Ver más</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">insert_photo</i>
                    </div>
                    <p class="card-category">Gestionar</p>
                    <h3 class="card-title">Sitios T.</h3>
                  </div>
                  <div class="card-footer justify-content-center">
                    <div class="stats">
                      <button class="btn btn-success pull-right btn-sm">Ver más</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-header card-header-primary card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">supervised_user_circle</i>
                    </div>
                    <p class="card-category">Gestionar</p>
                    <h3 class="card-title">Membresia</h3>
                  </div>
                  <div class="card-footer justify-content-center">
                    <div class="stats">
                      <button class="btn btn-primary pull-right btn-sm">Ver más</button>
                    </div>
                  </div>
                </div> 
              </div>
    </div>

      <!-- panel de estadísticas -->
    <div class="row">
        <div class="card">
          <div class="card-header card-header-warning">
            <div class="d-flex">
              <i class="material-icons mr-2">bar_chart</i>
              <h4 class="card-title font-weight-bold">Estadisticas de la plataforma</h4>
            </div>
              <p class="card-category">Monitorea como va el tráfico en la plataforma</p>
            </div>
            <div class="card-body">
              <!-- aca van los graficos -->
            </div>
          </div>
      </div>
  </div>
</div>




@endsection