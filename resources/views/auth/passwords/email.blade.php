@extends('layout')

@section('content')
<section class="py-4">
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 my-2 py-4">
            <div class="card">
                <div class="card-header">{{ __('Recuperar contraseña') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <span>Ingrese su correo electrónico, le enviaremos un correo con las instrucciones para recuperar su contraseña. Si no lo encuentra, revise la casilla de spam.</span>
                        <br>
                    <form class="mt-4" method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo electrónico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn ">
                                    {{ __('Comfirmar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
