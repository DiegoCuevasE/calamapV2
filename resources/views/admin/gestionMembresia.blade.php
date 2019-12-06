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
                <form action="{{ route('registrarMembresia')}}" method="post" enctype="multipart/form-data">
                  {{ csrf_field() }}   

                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                          <select class="form-control selectpicker" data-style="btn btn-link" id="mype_id" name="mype_id">
                          <option selected >Selecciona la Mype</option>
                          @foreach ($mypes as $mype)
                          @if(!$mype->membresia)
                          <option  value={{$mype->id}}>{{$mype->nombre_fantasia_mype}}</option>
                          @endif
                          @endforeach

                        </select>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label class="bmd-label-floating">Meses</label>
                        <input type="number" class="form-control" name="meses" id="meses" onKeyUp="calcular()"  min="1" max="24">
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label class="bmd-label-floating">precio</label>
                        <input type="number" class="form-control" name="precio" id="precio" onKeyUp="calcular()" value="5690" disabled>
                      </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">Total</label>
                          <input type="number" class="form-control" id="total" name="total" id="total" >
                        </div>
                      </div>
                    <div class="col-md-2">
                      <button type="submit" class="btn btn-primary btn-sm  btn-round">
                          <i class="fas fa-plus"></i>
                          Añadir
                      </button> 
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
                      @foreach ($mypesP as $mypeP)
                      @if($mypeP->membresia)
                      <form action="{{ route('updateMembresia',$mypeP->id) }}" method="POST" enctype="multipart/form-data">
                          @csrf
                          @method('PUT')
                          {{ csrf_field() }} 
                      <tr>
                        <td>
                          {{$mypeP->user->nombre}}
                        </td>
                        <td>
                          {{$mypeP->nombre_fantasia_mype}}
                        </td>
                        
                        <td>
                          {{$mypeP->membresia->fecha_expiracion}}
                        </td>
                        <td>
                          <div class="form-group" style="max-width: 100px;">
                            <input class="form-control" name="meses" type="number" min="1" max="24">
                          </div>
                        </td>
                        <td>
                          9999
                        </td>
                        <td class="text-primary">
                          <a href="{{ route('updateMembresia',$mype->id) }}">
                            <button class="btn btn-primary btn-sm  btn-round" >
                              <i class="fas fa-plus"></i>
                              Añadir
                            </button>
                          </a>
                        </td> 
                      </tr>
                      </form>
                      @endif
                      @endforeach
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

<script>
  function calcular() {
      ne=eval(document.getElementById('precio').value);
      iv=eval(document.getElementById('meses').value);
      tot = ne * iv;
      document.getElementById('total').value=tot;
  }
</script> 


@endsection