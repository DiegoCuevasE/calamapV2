@extends('plantilla')

@section('contenido')
<div class="container">

  <!-- Titulo -->
  <div class="site-section mt-5">
  <div class="row">
    <div class="col-md-8 ">
      <h2 class=" card-text">Visita nuestros sitios turísticos</h2>
      <p class="color-black-opacity-5">Descubre los lugares turísticos de la ciudad</p>
    </div>
    <div class="col-md-4 float-right" >
      <form class="form-inline md-form mr-auto mb-4">
        <input class="form-control mr-sm-1 " type="text" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-elegant btn-rounded btn-sm my-0"  type="submit">Buscar</button>
      </form>
    </div>
  </div>
  </div>
        
  <!-- Sitios turisticos -->
  <div class="row justify-content-center">

  @foreach ($sitios as $sitio)
   
    <div class="card-deck col-sm-8 col-lg-4">
      <div class="card mb-4"> 
        @foreach ($sitio->imagenSitioTuristicos as $imagen)
        @if($imagen->tipo_imagen_turistico=='portada')
        <div class="view overlay">
          <img class="card-img-top" src="{{ '/'.$imagen->enlace_imagen_turistico}}" alt="Card image cap">
          <a href="#!">
          <div class="mask rgba-white-slight"></div>
          </a>
        </div>
        @endif
        @endforeach
        <div class="card-body ">
        <h4 class="card-tite">{{$sitio->nombre_turistico}}</h4>
          <div class="cortar">
            <p class="card-text " >{{str_limit($sitio->descripcion_turistico, $limit = 200, $end = '...') }}</p>
          </div>
        </div>
        <div class="row " style="text-align: center">
          <div class="card-body " >
                <a href="{{ url('sitio'.$sitio->id) }}"><button class=" btn-outline-info btn-sm btn waves-effect col-md-8" >Ver más </button></a>
          </div>

        </div>
      </div>
    </div>

    @endforeach
  </div>


 
  </div>
@endsection
