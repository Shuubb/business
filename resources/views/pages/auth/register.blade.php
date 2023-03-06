@extends('layouts.main')

@section('content')

    <form class="dialog" id="reg_form" method="POST" action="{{ route('register') }}">
        <label for="reg_form">{{ __('Register') }}</label>
        <hr>
        
        @csrf

        <label for="name">{{ __('Name') }}</label>
        <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>

        @error('name')  
            <span role="alert">{{ $message }}</span>
        @enderror

        <label for="email">{{ __('Email Address') }}</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required>

        @error('email')    
            <span role="alert">{{ $message }}</span>
        @enderror

        <label for="password">{{ __('Password') }}</label>
        <input id="password" type="password" name="password" required>

        @error('password')      
            <br><span role="alert">{{ $message }}</span>
        @enderror

        <label for="password-confirm">{{ __('Confirm Password') }}</label>
        <input id="password-confirm" type="password" name="password_confirmation" required>

        <br>
        <button>{{ __('Register') }}</button>

    </form>
@endsection
