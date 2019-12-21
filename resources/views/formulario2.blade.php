@extends('plantilla')

@section('contenido')
 
<div class="container site-section mt-5">
  <div class="row justify-content-center">
      <div class="col-lg-5">
          <div class="card mb-5 mt-5 z-depth-5">
            <div class="card-header mb-0 text-center orange lighten-4 ">
              <p class="font-weight-bold h6">Formulario de registro</p> 
            </div>
            <div class="card-body col-auto">
                <form method="POST" class="" action="{{ route('register') }}">
                    @csrf
                    
                    <div class="form-group ">
                        
                        <div class="md-form">

                            <input  id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" >
                            <label for="nombre" >Nombre</label>

                            @error('nombre')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                      <div class="form-group ">

                          <div class="md-form">
                              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                              <label for="email" >{{ __('Correo Electronico') }}</label>

                              @error('email')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="md-form">
                              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                              <label for="password" class="">{{ __('Contraseña') }}</label>
                              @error('password')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="md-form">
                              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                              <label for="password-confirm" class="">{{ __('Confirmar Contraseña') }}</label>
                              <input id="tipo" type="hidden" class="form-control" name="tipo" value="0">
                          </div>
                      </div>
                        <div class="form-group row">
                            <div class="md-form col-md-6">
                                <input type="date" id="fechaNac" name="fechaNac" class="form-control" placeholder="DD/MM/AAAA">
                                <label class="ml-3" for="fechaNac">Fecha de nacimiento</label> 
                            </div>
                            <div class="col-md-6" id="sex">
                                <label class="" for="sex">Género</label> <br>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" name="genero" value="0" id="hombre">
                                    <label class="custom-control-label" for="hombre">Hombre</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">  
                                    <input type="radio" class="custom-control-input" name="genero" value="1" id="mujer">
                                    <label class="custom-control-label" for="mujer">Mujer</label>
                                </div>
                            </div>
                        </div>
          
                        

                      <div class="form-group ">
                          <div class="">
                              <button type="submit" class="btn orange lighten-4 btn-block my-4 font-weight-bold">
                                  {{ __('Registrar') }}
                              </button>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
 

@endsection