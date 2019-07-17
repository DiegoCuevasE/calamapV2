@extends('mype.plantillaMype')


@section('contenido')
<div class="container">

    <div class="row mb-5 mt-5 ">
    <div class="col-md-8 ">
      <h2 class=" card-text">Visita los mejores lugares para comer</h2>
      <p class="color-black-opacity-5">Descubre los restaurantes disponibles en la ciudad.</p>
    </div>
    <div class="col-md-4 text-right justify-content-end align-items-center" >
      <form class="form-inline md-form mr-auto mb-4 text-right">
        <input class="form-control mr-sm-1 " type="text" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-elegant btn-rounded btn-sm my-0"  type="submit">Buscar</button>
      </form>
    </div>
  </div>
  
  <!-- Titulo -->
  @foreach ($mypes as $mype)
      
  
  <!-- Sitios MyPES 1-->
 

  <form id="form{{$mype->id}}" name="form{{$mype->id}}" class="progress-form">
    
      <div >



  <div class="card promoting-card mt-5">
  <div class="card-body d-flex flex-row ">
    <div>
      <h4 class="card-title font-weight-bold mb-2">{{$mype->nombre_fantasia_mype}}</h4>

    </div>
  </div>
  <div class="row ml-3 mr-3">
      
    <div class="view overlay col-lg-2 collapsed "style="height: 100px; width: 100px;">
      @foreach ($mype->imagenmypes as $imagen)
      @if ($imagen->tipo_imagen_mype == 'logo') 
      <img class="card-img-top rounded-0" style="width:100%; height:100%;" src="../{{$imagen->enlace_imagen_mype}}" alt="Card image cap">
      @endif
      @endforeach
      <a href="#!">
      <div class="mask rgba-white-slight" >      <input type="hidden"  name="mype_id" value="{{$mype->id}}"></div>
      </a>

    </div>
    
    <div class="view overlay col-lg-10 " >
        
         <p class="card-text ">{{$mype->descripcion_mype}}</p>
         <input type="button" class="btn btn-primary visita-user" id="visita-user{{$mype->id}}" data-number="{{$mype->id}}" value="Ver más" data-toggle="collapse" href="#collapseContent{{$mype->id}}" aria-expanded="false" aria-controls="collapseContent{{$mype->id}}">
        </div>
  </div>

    <!-- Sitios MyPES 1 collapse-->
  <div class="card-body justify-content-center">
    <div class="collapse-content justify-content-center">
      <div class="row justify-content-center">
          <div class="col-md-12 justify-content-center row mt-3 mb-3 collapse" id="collapseContent{{$mype->id}}">
              @foreach ($mype->imagenmypes as $imagen)
              @if ($imagen->tipo_imagen_mype == 'galeria')
              <div class="col-md-3 justify-content-center" >
              <img data-enlargable class="card-img-top rounded-0 " style="width:100%; height:100%; cursor: zoom-in;" src="../{{$imagen->enlace_imagen_mype}}" alt="Card image cap ">
              </div>
              @endif
              @endforeach
          </div>
        <div class="col-md-2">
          <p class="card-text collapse" id="collapseContent{{$mype->id}}"><strong>Servicios</strong></p>
          @foreach ($mype->servicios as $servicio)
          <p class="card-text collapse" id="collapseContent{{$mype->id}}">{{$servicio->nombre_servicio}}</p>
          @endforeach
        </div>
        <div class="col-md-2">
          <p class="card-text collapse" id="collapseContent{{$mype->id}}"><strong>Horario</strong></p>
          <p class="card-text collapse" id="collapseContent{{$mype->id}}">{{$mype->horario_mype}}</p>
        </div>
        <div class="col-md-2">
          <p class="card-text collapse" id="collapseContent{{$mype->id}}"><strong>Dirección</strong></p>
          <p class="card-text collapse" id="collapseContent{{$mype->id}}">{{$mype->direccion_mype}}</p>
        </div>
        <div class="col-md-2">
          <p class="card-text collapse" id="collapseContent{{$mype->id}}"><strong>Idiomas</strong></p>
          @foreach ($mype->idiomas as $idioma)
          <p class="card-text collapse" id="collapseContent{{$mype->id}}">{{$idioma->nombre_idioma}}</p>
          @endforeach
        </div>
        <div class="col-md-3">
          <p class="card-text collapse" id="collapseContent{{$mype->id}}"><strong>Contacto</strong></p>
          <p class="card-text collapse" id="collapseContent{{$mype->id}}">{{$mype->telefono_mype}}</p>
          <p class="card-text collapse" id="collapseContent{{$mype->id}}">{{$mype->celular_mype}}</p>
          <p class="card-text collapse" id="collapseContent{{$mype->id}}">{{$mype->correo_mype}}</p>
        </div>
      </div>
      <i class="fas icon-instagram text-muted float-right p-1 my-1" data-toggle="tooltip" data-placement="top" title="Share this post"></i>
      <i class="fas icon-facebook text-muted float-right p-1 my-1 mr-3" data-toggle="tooltip" data-placement="top" title="I like it"></i>
    </div>
  </div>
</div>




</div>
</form>
  @endforeach



  <!-- Paginacion -->
<div class="row justify-content-center mb-5 mt-5">
    
    {{$mypes->links()}}
</div>
<script src="{{ asset('template2/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('template2/js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('template2/js/jquery-ui.js') }}"></script>
<script src="{{ asset('template2/js/popper.min.js') }}"></script>
<script src="{{ asset('template2/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('template2/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('template2/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('template2/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('template2/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('template2/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('template2/js/aos.js') }}"></script>
<script src="{{ asset('template2/js/main.js') }}"></script>
  

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.2/js/mdb.min.js"></script>


<script type="text/javascript">

  $('.visita-user').click(function() { 
    var formNumber = $(this).attr('data-number');
    $("#form" + formNumber).submit(); 
    
});

$('.progress-form').submit(function(e){

  var url = "{{ url('visita/post') }}"; 
  var data = $(this).serialize(); 

  $.ajax({
    type: "POST",
    url: url,
    data:data+'&_token={{csrf_token()}}',
    success: function(data)
    {
        
    }
  });
e.preventDefault();
});
 
</script>
@endsection