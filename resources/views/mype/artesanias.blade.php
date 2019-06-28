@extends('mype.plantillaMype')


@section('contenido')
<div class="container">

    <div class="row mb-5 mt-5 ">
    <div class="col-md-8 ">
      <h2 class=" card-text">Visita a los artesanos de la zona</h2>
      <p class="color-black-opacity-5">Encuentra a los verdaderos artesanos de la ciudad.</p>
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
      <p class="card-text"><i class="far fa-clock pr-2"></i>07/24/2018</p>
    </div>
  </div>
  <div class="row ml-3 mr-3">
      
    <div class="view overlay col-lg-2 collapsed "style="height: 100px; width: 100px;" data-toggle="collapse" href="#collapseContent{{$mype->id}}" aria-expanded="false" aria-controls="collapseContent{{$mype->id}}">
      <img class="card-img-top rounded-0 " style="width:100%; height:100%; " src="{{ asset('template2/images/rutaGastro.png') }}" alt="Card image cap">
      <a href="#!">
      <div class="mask rgba-white-slight" >      <input type="hidden"  name="mype_id" value="{{$mype->id}}"></div>
      </a>

    </div>
    <input type="button" class="btn btn-primary visita-user" id="visita-user{{$mype->id}}" data-number="{{$mype->id}}" value="Ver más" data-toggle="collapse" href="#collapseContent{{$mype->id}}" aria-expanded="false" aria-controls="collapseContent{{$mype->id}}">
    <div class="view overlay col-lg-10 " data-toggle="collapse" href="#collapseContent{{$mype->id}}" aria-expanded="false" aria-controls="collapseContent{{$mype->id}}">
        
         <p class="card-text ">Recently, Lorxem ipsu adam septura ttotle dimensap amire tionsito we added several exotic new dishes to the menu of our restaurant. They come from countries such as Mexico, Argentina, and Spain. Come to us, have a delicious wine and enjoy the juicy meals from around the world.</p>
    </div>
  </div>

    <!-- Sitios MyPES 1 collapse-->
  <div class="card-body justify-content-center">
    <div class="collapse-content justify-content-center">
      <div class="row justify-content-center">
        <div class="col-md-2">
        <p class="card-text collapse" id="collapseContent{{$mype->id}}">Servicios<br>{{}}</p>
        </div>
        <div class="col-md-2">
          <p class="card-text collapse" id="collapseContent{{$mype->id}}">Horario</p>
        </div>
        <div class="col-md-2">
          <p class="card-text collapse" id="collapseContent{{$mype->id}}">Dirección</p>
        </div>
        <div class="col-md-2">
          <p class="card-text collapse" id="collapseContent{{$mype->id}}">Idiomas</p>
        </div>
        <div class="col-md-2">
          <p class="card-text collapse" id="collapseContent{{$mype->id}}">Contacto</p>
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