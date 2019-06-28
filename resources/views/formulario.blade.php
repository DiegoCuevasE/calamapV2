<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Registro &mdash; Colorlib Website Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700"> 
    <link rel="stylesheet" href="{{ asset('template2/') }}fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{ asset('template2/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template2/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('template2/ss/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('template2/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template2/css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('template2/css/bootstrap-datepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('template2/fonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">


    <link rel="stylesheet" href="{{ asset('template2/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('template2/css/style.css') }}">
    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar py-1" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0"><a href="index.html" class="text-black h2 mb-0">CKALAMA</a></h1>
          </div>
          <div class="col-10 col-md-8 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li>
                  <a href="index.html">Inicio&nbsp&nbsp&nbsp</a>
                </li>
                <li>
                  <a href="destination.html">Hoteles&nbsp&nbsp&nbsp</a>
                </li>
                <li><a href="discount.html">Agencias de Turismo&nbsp&nbsp&nbsp</a></li>
                <li><a href="about.html">Restaurantes&nbsp&nbsp&nbsp</a></li>
                <li><a href="blog.html">Sitios Turisticos&nbsp&nbsp&nbsp</a></li>
                
                <li class="active"><a href="contact.html">Unete&nbsp&nbsp&nbsp</a></li>
                <!-- <li><a href="booking.html">Book Online</a></li> -->
              </ul>
            </nav>
          </div>

          <div class="col-6 col-xl-2 text-right">
            <div class="d-none d-xl-inline-block">
              <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">

                <li>
                  <a href="#" class="pl-3 pr-3 text-black"><span class="icon-twitter"></span></a>
                </li>
                <li>
                  <a href="#" class="pl-3 pr-3 text-black"><span class="icon-facebook"></span></a>
                </li>
                <li>
                  <a href="#" class="pl-3 pr-3 text-black"><span class="icon-instagram"></span></a>
                </li>
                
              </ul>
            </div>

            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>
  

   

    <div class="site-blocks-cover inner-page-cover" style="background-image: url({{ asset('template2/images/hero_bg_2.jpg') }});" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
              <h1 class="text-white font-weight-light">Unete al Sitio</h1>
              <div><a href="index.html">Home</a> <span class="mx-2 text-white">&bullet;</span> <span class="text-white">Booking</span></div>
              
            </div>
          </div>
        </div>
      </div>  


    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-7 mb-5">

            

            <form action="#" class="p-5 bg-white">
              

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Nombre de Usuario</label>
                  <input type="text" id="fname" class="form-control" placeholder="Nombre de usuario">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Contraseña</label>
                  <input type="password" id="lname" class="form-control" placeholder="Contraseña">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="pass">Confirmar contraseña</label> 
                  <input type="password" id="pass" class="form-control" placeholder="Contraseña">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email" class="form-control" placeholder="Email">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-6">
                  <label class="text-black" for="treatment">Fecha de nacimiento</label> 
                  <input type="text" id="email" class="form-control datepicker px-2" placeholder="Email">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="genero">Género</label></br>
                  <input type="radio" name="genero" value="0" checked> Hombre<br>
                  <input type="radio" name="genero" value="1"> Mujer<br>
                  <input type="radio" name="genero" value="other"> Otre
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="treatment">Nacionalidad</label> 
                  <select name="treatment" id="treatment" class="form-control">
                    <option value="">Japan</option>
                    <option value="">Europe</option>
                    <option value="">China</option>
                    <option value="">France</option>
                    <option value="">Philippines</option>
                  </select>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Registrarse" class="btn btn-primary py-2 px-4 text-white">
                </div>
              </div>

  
            </form>
          </div>
          <div class="col-md-5">
            
            
            
            <div class="p-4 mb-3 bg-white">
              <img src="{{ asset('template2/images/hero_bg_1.jpg') }}" alt="Image" class="img-fluid mb-4 rounded">
              <h3 class="h5 text-black mb-3">More Info</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ad iure porro mollitia architecto hic consequuntur. Distinctio nisi perferendis dolore, ipsa consectetur? Fugiat quaerat eos qui, libero neque sed nulla.</p>
              <p><a href="#" class="btn btn-primary px-4 py-2 text-white">Learn More</a></p>
            </div>

          </div>
        </div>
      </div>
    </div>

    
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="mb-5">
              <h3 class="footer-heading mb-4">About Travelers</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe pariatur reprehenderit vero atque, consequatur id ratione, et non dignissimos culpa? Ut veritatis, quos illum totam quis blanditiis, minima minus odio!</p>
            </div>

            
            
          </div>
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="row mb-5">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Navigations</h3>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Destination</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">About</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Contact Us</a></li>
                  <li><a href="#">Discounts</a></li>
                </ul>
              </div>
            </div>

            

          </div>

          <div class="col-lg-4 mb-5 mb-lg-0">
           

            <div class="mb-5">
              <h3 class="footer-heading mb-2">Subscribe Newsletter</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit minima minus odio.</p>

              <form action="#" method="post">
                <div class="input-group mb-3">
                  <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-primary text-white" type="button" id="button-addon2">Send</button>
                  </div>
                </div>
              </form>

            </div>

          </div>
          
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="mb-5">
              <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
            </div>

            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>
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
    
  </body>
</html>