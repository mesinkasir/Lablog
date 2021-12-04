@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-12 col-md-12 p-3 p-md-5 ">
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="text-center">
                <img class="img-fluid" src="{{ url('/') }}/images/laravel-8.jpg" /><br />
                <p>A modern web app technology</p>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label rounded-circle" for="remember">
                                &nbsp; {{ __('Remember Me') }}
                            </label>
                            <hr />
                            <button type="submit" class="btn-lg btn-block btn btn-danger">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </div>
                </div>
                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif

            </form>

        </div>
    </div>
</div>
@endsection
