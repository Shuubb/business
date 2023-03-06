@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="{{ mix('css/pages/contact.css') }}">
@endsection

@section('content')

    <div class="dialog">
        <label>{{ __('Contact Us') }}</label>
        <hr>
        <p>{{ __('Email') }}: <a href="http://gmail.com/" target="_blank">Georgian_Gateways@outlock.com</a></p>
        <p>{{ __('Mobile') }}: 571535389</p>
    </div>

@endsection