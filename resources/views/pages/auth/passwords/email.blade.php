@extends('layouts.main')

@section('content')      

    @if (session('status'))
        <div role="alert">{{ session('status') }}</div>
    @endif

    <form class="dialog" id="recPass" method="POST" action="{{ route('password.email') }}">
        <label for="recPass">{{ __('Reset Password') }}</label>
        <hr>

        @csrf

        <label for="email">{{ __('Email Address') }}</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
        @error('email')
            <span role="alert">{{ $message }}</span>
        @enderror

        <br>
        <button> {{ __('Send Reset Link') }}</button>

    </form>

@endsection
