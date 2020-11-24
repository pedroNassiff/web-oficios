@extends('layout')

@section('title', 'Ingresar')

@section('content')
<section class="cont-login">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="modal-content modal-content-color">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Iniciar sesión</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="modal-body mx-3">
                        <div class="md-form mb-5">
                            <div class="d-flex ">
                                <i class="fa fa-envelope prefix"></i>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror validate" name="email" value="{{ old('email') }}"  placeholder="Email" required>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            
                        </div>
                    
                        <div class="md-form mb-4">
                            <div class="d-flex ">
                                <i class="fa fa-lock prefix"></i>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror validate" name="password" placeholder="Contraseña" required>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recordar') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center flex-column">
                        <button type="submit" class="btn hw-btn hvr-sweep-to-right">Entrar</button>
                        @if (Route::has('password.request'))
                            <a class="btn-link links-formulario" href="{{ route('password.request') }}">
                                {{ __('¿Olvidaste tu contraseña?') }}
                            </a>
                        @endif
                    </div>
                    <div class="login-links text-center">
                        <span>¿Todavía no tenés una cuenta?</span>
                        <a class="links-formulario" href="{{ route('register') }}">Registrate</a>
                    </div>
                </form>
            </div>
        </div>
    </div>  
</div>
</section>
    
@endsection
