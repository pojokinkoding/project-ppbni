{{-- resources/views/auth/login.blade.php --}}
@extends('adminlte::auth.login')

@section('title', __('Login'))

{{-- Header form login --}}
@section('auth_header', __('Sign in to start your session'))

{{-- Isi body form (kamu bisa menyesuaikan field) --}}
@section('auth_body')
    <form action="{{ route('login') }}" method="post">
        @csrf

        {{-- Email --}}
        <div class="input-group mb-3">
            <input type="email" name="email" class="form-control" placeholder="{{ __('Email') }}" required autofocus>
            <div class="input-group-append">
                <div class="input-group-text"><span class="fas fa-envelope"></span></div>
            </div>
        </div>

        {{-- Password --}}
        <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="{{ __('Password') }}" required>
            <div class="input-group-append">
                <div class="input-group-text"><span class="fas fa-lock"></span></div>
            </div>
        </div>

        {{-- Remember Me --}}
        <div class="row mb-3">
            <div class="col-8">
                <div class="icheck-primary">
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember">{{ __('Remember Me') }}</label>
                </div>
            </div>
        </div>

        {{-- Submit button --}}
        <button type="submit" class="btn btn-primary btn-block">{{ __('Sign In') }}</button>
    </form>
@stop

{{-- Footer dengan link lupa password / register --}}
@section('auth_footer')
    @if(config('adminlte.password_reset_url'))
    <!-- <p class="my-0">
        <a href="{{ url(config('adminlte.password_reset_url')) }}">
            {{ __('Forgot Your Password?') }}
        </a>
    </p> -->
    @endif

    @if(config('adminlte.register_url'))
    <!-- <p class="my-0">
        <a href="{{ url(config('adminlte.register_url')) }}">
            {{ __('Register a new membership') }}
        </a>
    </p> -->
    @endif
@stop
