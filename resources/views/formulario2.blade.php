@extends('plantilla')



@section('contenido')
 


<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">{{ __('Registro de usuario') }}</div>

              <div class="card-body">
                  <form method="POST" action="{{ route('register') }}">
                      @csrf

                      <div class="form-group row">
                          <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                          <div class="col-md-6">
                              <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>

                              @error('nombre')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo Electronico') }}</label>

                          <div class="col-md-6">
                              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                              @error('email')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                          <div class="col-md-6">
                              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                              @error('password')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Contraseña') }}</label>

                          <div class="col-md-6">
                              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                          </div>
                      </div>

                      <div class="form-group row">
  
                            <div class="col-md-6">
                                <input id="tipo" type="hidden" class="form-control" name="tipo" value="0">
                            </div>
                        </div>

                      <div class="row form-group">
                          <div class="col-md-6">
                            <label class="text-black" for="treatment">Fecha de nacimiento</label> 
                            <input type="date" id="fechaNac" name="fechaNac" class="form-control" placeholder="DD/MM/AAAA">
                          </div>
                          <div class="col-md-6">
                            <label class="text-black" for="genero">Género</label></br>
                            <input type="radio" name="genero" value="0" checked> Hombre<br>
                            <input type="radio" name="genero" value="1"> Mujer<br>
                          </div>
                        </div>
          
                        <div class="row form-group">
                          <div class="col-md-12">
                            <label class="text-black" for="nacionalidad">Nacionalidad</label> 
                            <select name="nacionalidad" id="nacionalidad" class="form-control">
                              <option value="Chile" name="nacionalidad">Chile</option>
                              <option value="Argentina" name="nacionalidad">Argentina</option>
                              <option value="Perú" name="nacionalidad">Perú</option>
                              <option value="Bolivia" name="nacionalidad">Bolivia</option>
                              <option value="Brasil" name="nacionalidad">Brasil</option>
                            </select>
                          </div>
                        </div>

                      <div class="form-group row mb-0">
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
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