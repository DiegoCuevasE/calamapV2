@extends('plantilla')

@section('contenido')
      
<div class="container-extend justify-content-center">

  <!-- Titulo -->
  <div class="row mt-5 justify-content-between">
    <div class="col-md-8 ">
      <h2 class=" card-text">Ruta Casco Historico</h2>
      <p class="color-black-opacity-5">Descubre todas las actividades culturales que se realizan dentrola ciudad de Calama</p>
    </div>
  </div>

  <!-- Listado Eventos -->
    <div class="site-section">
      <div class="">
        <div class="">
            <div class="">
                <img class="d-block w-100" src="{{ asset('template2/images/RutaC.svg') }}" alt="First slide">
            </div>
        </div>
      </div>
    </div>
</div>
@endsection