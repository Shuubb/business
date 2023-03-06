@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="{{ mix('css/pages/auth/login.css') }}">
@endsection

@section('content')

    <form class="dialog" id="log_form" method="POST" action="{{ route('login') }}">
        <label for="log_form">Log In</label>
        <hr>

        @csrf

        <label for="email">Email:</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
            <span role="alert">{{ $message }}</span>
        @enderror


        <label for="password">Password:</label>
        <input id="password" type="password" name="password" required autocomplete="current-password">
        @error('password')
            <span role="alert">{{ $message }}</span>
        @enderror


        <div>
            <input id="remember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
            <label for="remember">{{ __('Remember Me') }}</label>
        <div>

        <button>{{ __('Login') }}</button>

        @if (Route::has('password.request'))
            <a id="forgotPass" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
        @endif

    </form>

@endsection
