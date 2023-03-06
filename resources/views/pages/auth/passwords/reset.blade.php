@extends('layouts.main')

@section('content')

    <form id="resetPass" method="POST" action="{{ route('password.update') }}">
        <label for="resetPass">{{ __('Reset Password') }}</label>
        <hr>
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">

        <label for="email">{{ __('Email Address') }}</label>
        <input id="email" type="email" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
        @error('email')
            <span role="alert">>{{ $message }}</span>
        @enderror

        <label for="password" >{{ __('Password') }}</label>  
        <input id="password" type="password" name="password" required>
        @error('password')
            <span role="alert">{{ $message }}</span>
        @enderror

        <label for="password-confirm">{{ __('Confirm Password') }}</label>
        <input id="password-confirm" type="password" name="password_confirmation" required>

        <button>{{ __('Reset Password') }}</button>
        
    </form>

@endsection
