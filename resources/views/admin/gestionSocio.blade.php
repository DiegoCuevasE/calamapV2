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
                  <h4 class="card-title font-weight-bold"> <i class="fas fa-users"></i>Agregar Socio</h4>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="d-flex align-items-center ">
                <p class="card-category">Si deseas agregar un Socio a la plataforma ingresa acá</p>
                <a href="{{'agregarSocio'}}">
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
                <i class="fas fa-users h4 mr-2"></i>
                <h4 class="card-title font-weight-bold">Socios de la plataforma</h4>
            </div>
            <p class="card-category">Esta lista es una vista previa de los Socios registrados en la plataforma</p>
            <p class="font-weight-bold"><a href="{{route('users.pdf')}}"  target="_blank">Generar PDF</a></p>
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
                        Nombre Socio
                      </th>
                      <th class="font-weight-bold">
                        Correo personal
                      </th>
                      <th class="font-weight-bold">
                        Celular personal
                      </th>
                      <th class="font-weight-bold">
                        Teléfono personal
                      </th>
                      <th class="font-weight-bold">
                        MyPES asociadas
                      </th>
                    </thead>
                    <tbody>
                      @foreach ($users as $user)
                      <tr>
                        <td>{{$user->nombre.' '.$user->apellido_usuario}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->celular_usuario}}</td>
                        <td>{{$user->telefono_usuario}}</td>
                        <td>{{$user->mypes->count()}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <div class="row justify-content-center mt-3">{{$users->links()}}</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>



@endsection