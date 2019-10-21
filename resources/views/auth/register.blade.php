@extends('layouts.session')
@section('content')
<div class="row justify-content-center">
    <div class="col-xl-6 col-lg-6 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">{{ __('Register') }}</h1>
                            </div>
                            <form class="user" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="text" id="name" name="name" class="form-control form-control-user @error('name') is-invalid @enderror" placeholder="{{ __('Nombre') }}" value="{{ old('name') }}" required autocomplete="name" autofocus aria-describedby="NameHelp">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="email" id="email" name="email" class="form-control form-control-user @error('email') is-invalid @enderror" placeholder="{{ __('Correo Electronico') }}" value="{{ old('email') }}" required autocomplete="name" autofocus aria-describedby="EmailHelp">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" id="username" name="username" class="form-control form-control-user @error('username') is-invalid @enderror" placeholder="{{ __('Usuario') }}" value="{{ old('email') }}" required autocomplete="username" autofocus aria-describedby="EmailHelp">
                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" id="password" name="password" class="form-control form-control-user @error('password') is-invalid @enderror" placeholder="{{ __('Contraseña') }}" value="{{ old('password') }}" required autocomplete="password" autofocus aria-describedby="PasswordHelp">
                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" id="password-confirm" name="password-confirm" class="form-control form-control-user @error('password-confirm') is-invalid @enderror" placeholder="{{ __('Contraseña') }}" required autocomplete="password-new" autofocus aria-describedby="PasswordHelp">
                                    @error('password-confirm')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <button class="btn btn-primary btn-user btn-block" type="submit">
                                    {{ __('Login') }}
                                </button>
                            </form>
                            <hr>
                            @if (Route::has('password.request'))
                            <div class="text-center">
                                <a class="small" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                            </div>
                            @endif
                            <div class="text-center">
                                <a class="small" href="{{ route('register') }}">Create an Account!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
