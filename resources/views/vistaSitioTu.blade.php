@extends('plantilla')

@section('contenido')
      
<div class="container">

  <!-- Titulo -->
  <div class="row mb-5 mt-5">
    <div class="col-md-8 ">
      <h2 class=" card-text">Visita nuestros sitios turisticos</h2>
      <p class="color-black-opacity-5">Descubre los lugares turisticos de la ciudad</p>
    </div>
    <div class="col-md-4 float-right" >
      <form class="form-inline md-form mr-auto mb-4">
        <input class="form-control mr-sm-1 " type="text" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-elegant btn-rounded btn-sm my-0"  type="submit">Buscar</button>
      </form>
    </div>
  </div>

        
  <!-- Sitios turisticos -->
  <div class="row justify-content-center">
    <div class="card-deck col-lg-4">
      <div class="card mb-4">
        <div class="view overlay">
          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg" alt="Card image cap">
          <a href="#!">
          <div class="mask rgba-white-slight"></div>
          </a>
        </div>
        <div class="card-body">
          <h4 class="card-tite">El Topater</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
    <div class="card-deck col-lg-4">
      <div class="card mb-4 ">
        <div class="view overlay">
          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg" alt="Card image cap">
          <a href="#!">
          <div class="mask rgba-white-slight"></div>
          </a>
        </div>
        <div class="card-body">
          <h4 class="card-title">La cascada</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
    <div class="card-deck col-lg-4">
      <div class="card mb-4">
        <div class="view overlay">
          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg" alt="Card image cap">
          <a href="#!">
          <div class="mask rgba-white-slight"></div>
          </a>
        </div>
        <div class="card-body">
          <h4 class="card-title">Parque el loa</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
    <div class="card-deck col-lg-4">
      <div class="card mb-4">
        <div class="view overlay">
          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg" alt="Card image cap">
          <a href="#!">
          <div class="mask rgba-white-slight"></div>
          </a>
        </div>
        <div class="card-body">
          <h4 class="card-tite">Card title</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
    <div class="card-deck col-lg-4">
      <div class="card mb-4 ">
        <div class="view overlay">
          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg" alt="Card image cap">
          <a href="#!">
          <div class="mask rgba-white-slight"></div>
          </a>
        </div>
        <div class="card-body">
          <h4 class="card-title">Card title</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
    <div class="card-deck col-lg-4">
      <div class="card mb-4">
        <div class="view overlay">
          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg" alt="Card image cap">
          <a href="#!">
          <div class="mask rgba-white-slight"></div>
          </a>
        </div>
        <div class="card-body">
          <h4 class="card-title">Card title</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Paginacion -->
<div class="row justify-content-center mb-5 mt-5">
  <nav class="">
    <ul class="pagination pg-amber">
      <li class="page-item">
        <a class="page-link" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
          <span class="sr-only">Previous</span>
        </a>
      </li>
      <li class="page-item active"><a class="page-link">1</a></li>
      <li class="page-item"><a class="page-link">2</a></li>
      <li class="page-item"><a class="page-link">3</a></li>
      <li class="page-item"><a class="page-link">4</a></li>
      <li class="page-item"><a class="page-link">5</a></li>
      <li class="page-item">
        <a class="page-link" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
          <span class="sr-only">Next</span>
        </a>
      </li>
    </ul>
  </nav>
</div>
</div>
    


  
  <script>
    $(document).ready(function(){
      $('.carousel-3d-controls').mdbCarousel3d();
    });
  </script>
@endsection