@extends('layouts.app')
@section('title', 'Login')
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>sign in</p>
                    <h1>Login</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-auto">

            <div class="login-box">
                <form method="POST" action="{{ route('login') }}">
                    <h2>{{__('Login')}}</h2>
                    @csrf
                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                        <input type="email" id="email" @error('email') is-invalid class="@enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus >
                        <label for="">{{ __('Email Address') }}</label>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-lock"></i></span>
                        <input type="password" id="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        <label for="">{{ __('Password') }}</label>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="remember-forgot">
                        <label for=""><input type="checkbox"  type="checkbox" name="remember" 
                            id="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me!') }}</label>
                        <a href="#">Forgot Password</a>
                    </div>
                        <button type="submit">{{ __('Login') }}</button>
                        @if (Route::has('password.request'))
                        @endif
                        <div class="registerAndlogin-link">
                            <p>Don't have an account? <a href="{{route('register')}}">Register</a></p>
                        </div>        
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
