@extends('plantilla')

@section('contenido')
      
<div class="container-extend justify-content-center">

  <!-- Titulo -->
  <div class="row mb-5 mt-5 justify-content-between">
    <div class="col-md-8 ">
      <h2 class=" card-text">Eventos en Ckalama</h2>
      <p class="color-black-opacity-5">Descubre todas las actividades culturales que se realizan dentrola ciudad de Calama</p>
    </div>
    <div class="col-md-4 justify-content-end" >
      <form class="form-inline md-form mr-auto mb-4">
        <input class="form-control mr-sm-1 " type="text" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-elegant btn-rounded btn-sm my-0"  type="submit">Buscar</button>
      </form>
    </div>
  </div>

  <!-- Listado Eventos -->
    <div class="card-deck">
      <div class="card mb-4">
        <div class="card-body secciones mb-2">
          <div class=" col-md-12 " >
            <div class="row mb-5 mt-3 justify-content-center">
              <button type="button" class="btn btn-amber btn-rounded col-md-2 col-sm-5">Primavera</button>
              <button type="button" class="btn btn-amber btn-rounded col-md-2 col-sm-5">Otoño</button>
              <button type="button" class="btn btn-amber btn-rounded col-md-2 col-sm-5">Invierno</button>
              <button type="button" class="btn btn-amber btn-rounded col-md-2 col-sm-5">Verano</button>
            </div>
          </div>
          
          <div class="row justify-content-around">
              <div class="col-md-5 ">
                <div class="list-group list-group-flush" id="list-tab" role="tablist">
                  <a class="list-group-item list-group-item-action " id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">
                    <div class="d-flex   justify-content-between">
                      <p class="mb-2 font-weight-bold ">Limpieza de Canales</p>
                      <small>15/02/1996</small>
                    </div>
                  </a>
                  <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">
                    <div class="d-flex w-100 justify-content-between">
                      <p class="mb-2 font-weight-bold">Festival del choclo</p>
                      <small>3 days ago</small>
                    </div>
                  </a>
                  <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">
                    <div class="d-flex w-100 justify-content-between">
                      <p class="mb-2 font-weight-bold">Aniversario de Calama</p>
                      <small>3 days ago</small>
                    </div>
                  </a>
                  <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">
                    <div class="d-flex w-100 justify-content-between">
                      <p class="mb-2 font-weight-bold">Feria Fer-Loa de Calama</p>
                      <small>3 days ago</small>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-6 ">
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active " id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                      <div class=" justify-content-center">
                          <div class="card-deck row ">
                            <div class="card">
                                <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
                                    <!--Indicadores-->
                                    <ol class="carousel-indicators">
                                      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                                      <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                                      <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                                    </ol>
                                    <!--Slides-->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="carousel-item active">
                                        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(141).jpg" alt="First slide">
                                      </div>
                                      <div class="carousel-item">
                                        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(136).jpg" alt="Second slide">
                                      </div>
                                      <div class="carousel-item">
                                        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(137).jpg" alt="Third slide">
                                      </div>
                                    </div>
                                    <!--Flechas-->
                                    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Next</span>
                                    </a>
                                  </div>
                                
                              <div class="card-body secciones">
                                  <div class="">
                                      <p class="card-title h5">Limpieza de canales</p>
                                  </div>
                                  <div class="row my-auto">
                                    <div class="col-md-6 d-flex text-right">
                                      <i class="far fa-calendar-alt fa-lg mr-2"></i>
                                      <p class="card-title">15 de Febrero</p>
                                    </div>
                                    <div class="col-md-6 d-flex text-right">
                                        <i class="fas fa-map-marker-alt fa-lg mr-2"></i>
                                        <p class="card-title">Plaza Calama</p>
                                      </div>
                                  </div>
                                  <div class="card-text">
                                    <p>
                                      Cupidatat quis ad sint excepteur laborum in esse qui. Et excepteur consectetur ex nisi eu do cillum ad
                                      laborum. Mollit et eu officia dolore sunt Lorem culpa qui commodo velit ex amet id ex. Officia anim
                                      incididunt laboris deserunt <br><br>
                                      anim aute dolor incididunt veniam aute dolore do exercitation. Dolor nisi
                                      culpa ex ad irure in elit eu dolore. Ad laboris ipsum reprehenderit irure non commodo enim culpa
                                      commodo veniam incididunt veniam. 
                                     </p>                                
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                  </div>
                  <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                      <div class=" justify-content-center">
                          <div class="card-deck row ">
                            <div class="card">
                                <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
                                    <!--Indicadores-->
                                    <ol class="carousel-indicators">
                                      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                                      <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                                      <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                                    </ol>
                                    <!--Slides-->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="carousel-item active">
                                        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(141).jpg" alt="First slide">
                                      </div>
                                      <div class="carousel-item">
                                        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(136).jpg" alt="Second slide">
                                      </div>
                                      <div class="carousel-item">
                                        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(137).jpg" alt="Third slide">
                                      </div>
                                    </div>
                                    <!--Flechas-->
                                    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Next</span>
                                    </a>
                                  </div>
                                
                              <div class="card-body secciones">
                                  <div class="">
                                      <p class="card-title h5">Limpieza de canales</p>
                                  </div>
                                  <div class="row my-auto">
                                    <div class="col-md-6 d-flex text-right">
                                      <i class="far fa-calendar-alt fa-lg mr-2"></i>
                                      <p class="card-title">15 de Febrero</p>
                                    </div>
                                    <div class="col-md-6 d-flex text-right">
                                        <i class="fas fa-map-marker-alt fa-lg mr-2"></i>
                                        <p class="card-title">Plaza Calama</p>
                                      </div>
                                  </div>
                                  <div class="card-text">
                                    <p>
                                      Cupidatat quis ad sint excepteur laborum in esse qui. Et excepteur consectetur ex nisi eu do cillum ad
                                      laborum. Mollit et eu officia dolore sunt Lorem culpa qui commodo velit ex amet id ex. Officia anim
                                      incididunt laboris deserunt <br><br>
                                      anim aute dolor incididunt veniam aute dolore do exercitation. Dolor nisi
                                      culpa ex ad irure in elit eu dolore. Ad laboris ipsum reprehenderit irure non commodo enim culpa
                                      commodo veniam incididunt veniam. 
                                     </p>                                
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>  
                  </div>
                  <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                      <div class=" justify-content-center">
                          <div class="card-deck row ">
                            <div class="card">
                                <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
                                    <!--Indicadores-->
                                    <ol class="carousel-indicators">
                                      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                                      <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                                      <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                                    </ol>
                                    <!--Slides-->
                                    <div class="carousel-inner" role="listbox">
                                      <div class="carousel-item active">
                                        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(141).jpg" alt="First slide">
                                      </div>
                                      <div class="carousel-item">
                                        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(136).jpg" alt="Second slide">
                                      </div>
                                      <div class="carousel-item">
                                        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(137).jpg" alt="Third slide">
                                      </div>
                                    </div>
                                    <!--Flechas-->
                                    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Next</span>
                                    </a>
                                  </div>
                                
                              <div class="card-body secciones">
                                  <div class="">
                                      <p class="card-title h5">Limpieza de canales</p>
                                  </div>
                                  <div class="row my-auto">
                                    <div class="col-md-6 d-flex text-right">
                                      <i class="far fa-calendar-alt fa-lg mr-2"></i>
                                      <p class="card-title">15 de Febrero</p>
                                    </div>
                                    <div class="col-md-6 d-flex text-right">
                                        <i class="fas fa-map-marker-alt fa-lg mr-2"></i>
                                        <p class="card-title">Plaza Calama</p>
                                      </div>
                                  </div>
                                  <div class="card-text">
                                    <p>
                                      Cupidatat quis ad sint excepteur laborum in esse qui. Et excepteur consectetur ex nisi eu do cillum ad
                                      laborum. Mollit et eu officia dolore sunt Lorem culpa qui commodo velit ex amet id ex. Officia anim
                                      incididunt laboris deserunt <br><br>
                                      anim aute dolor incididunt veniam aute dolore do exercitation. Dolor nisi
                                      culpa ex ad irure in elit eu dolore. Ad laboris ipsum reprehenderit irure non commodo enim culpa
                                      commodo veniam incididunt veniam. 
                                     </p>                                
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                  </div>
                  <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-messages-list"></div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
</div>
@endsection