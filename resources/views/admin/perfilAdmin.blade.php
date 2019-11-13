@extends('admin/dashboard')

@section('panel')

<div class="content">
  <div class="container">
    <!-- panel de gestión -->
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card card-profile">
              <div class="card-avatar">
                <a href="#pablo">
                  <img class="img" src="../assets/img/faces/marc.jpg" />
                </a>
              </div>
              <div class="card-body">
                <h6 class="card-category text-gray">CEO / Co-Founder</h6>
                <h4 class="card-title">Alec Thompson</h4>
                <p class="card-description">
                  Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                </p>
                <a href="#pablo" class="btn btn-primary btn-round">Follow</a>
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