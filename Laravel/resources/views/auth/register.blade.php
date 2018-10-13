@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
                <div class="card-header card-header-instalara">REGISTRO DE USUARIO</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <!-- fullname -->
                            <input id="fullname" type="text" class="form-control{{ $errors->has('fullname') ? ' is-invalid' : '' }}" name="fullname" value="{{ old('fullname') }}" placeholder="Nombre completo" required autofocus>

                            @if ($errors->has('fullname'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('fullname') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group row">
                            <!-- fullname -->
                            <input id="nickname" type="text" class="form-control{{ $errors->has('nickname') ? ' is-invalid' : '' }}" name="nickname" value="{{ old('nickname') }}" placeholder="Usuario" required>

                            @if ($errors->has('nickname'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('nickname') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <!-- nickname -->
                        <div class="form-group row">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Correo Electrónico" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group row">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Contraseña" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group row">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar Contraseña" required>
                        </div>

                        <div class="form-group row mt-4">
                                <button type="submit" class="btn btn-block ButtonRegister">
                                    REGISTRARSE
                                </button>
                        </div>
                    </form>
                    <!-- Iremos a la siguiente ruta -->
                    <!-- app/http/controllers/register controllers -->
                </div>        
            </div>
    </div>
</div>
@endsection
