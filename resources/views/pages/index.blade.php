@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="{{ mix('css/pages/index.css') }}">
@endsection


@section('content')
    <div id="carouselContainer">
        <div id="carouselExampleControls" class="carousel slide h-max-content" data-ride="carousel" data-interval="4000">
            <div class="carousel-inner d-flex align-items-center rounded-pill">
                <div class="carousel-item active">
                    <img src="images/Martvili.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/Svaneti.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
    </div>

    <div class="dialog" style="text-align: center;">
        <h1>N1 Traveling Agency In Georgia!</h1>
        <h4>Unforgettable Adventure</h4>
    </div>

    {{-- <section style="background: linear-gradient( to top, rgba(0, 0, 0, 0.9) 65%, transparent); position: absolute; left: 0; height: fit-content;">

    </section> --}}
@endsection
