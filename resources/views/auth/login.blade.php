@extends('plantilla')

@section('contenido')
<div class="container site-section mt-5">
    <div class="row justify-content-center">
            

        <div class="col-lg-5">
            <div class="card mb-5 mt-5 z-depth-5 ">
                <div class="card-header mb-0 text-center orange lighten-4 ">
                    <p class="h6 font-weight-bold">{{ __('Inicio de Sesión') }}</p> 
                </div>
                <div class="card-body ">
                    <div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group ">

                            <div class="md-form">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" >
                                <label for="email" class="">{{ __('Correo Electronico') }}</label>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="md-form">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <label for="password" class="">{{ __('Contraseña') }}</label>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex justify-content-around">
                            <div>
                              <!-- Remember me -->
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="custom-control-label" for="remember">Recuerdame</label>
                            </div>
                        
                            </div>
                            <div>
                              <!-- Forgot password -->
                              @if (Route::has('password.request'))
                                <a class="" href="{{ route('password.request') }}">
                                     {{ __('¿Olvidaste tu contraseña?') }}
                                </a>
                            @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn orange lighten-4 btn-block my-4 font-weight-bold">
                                {{ __('Entrar') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection