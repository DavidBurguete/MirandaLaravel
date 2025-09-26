@extends('layouts.app')

@section('nav')
    <a href="/about-us">About Us</a>
    <a>Rooms</a>
    <a href="/offers">Offers</a>
    <a href="/contact">Contact</a>
@endsection

@section('css-js')
    <link rel="stylesheet" href="{{ asset('css/rooms.css') }}">
    <script src="{{ asset('js/swiper_rooms_only_pagination.js') }}"></script>
@endsection

@section('content')
    <div class="main__header">
        <div class="main__header__bg_color">
            <div class="main__header__text">
                <h3 class="main__header__text--luxury">The Ultimate Luxury</h3>
                <h4 class="main__header__text--details">Ultimate Room</h4>
            </div>
            <p class="breadcrumbs">Home | <span>Rooms</span></p>
        </div>
    </div>

    <button class="rooms__view" id="change-view"><pre>Change view:</pre> <pre>Grid-List</pre></button>
    <div class="swiper swiper_only_pagination rooms">
        <div class="swiper-wrapper rooms--wrapper">
            @foreach($rooms as $room)
                <div class="swiper-slide rooms--slide">
                    <div class="room__card">
                        <img src="{{ asset($room->photos) }}" alt="Room image">
                        <div class="room__card__bottom">
                            <div class="room__card__bottom__icons">
                                <img src="{{ asset('img/bed.svg') }}" alt="bed icon">
                                <img src="{{ asset('img/wifi.svg') }}" alt="wifi icon">
                                <img src="{{ asset('img/car.svg') }}" alt="car icon">
                                <img src="{{ asset('img/snowflake.svg') }}" alt="snowflake icon">
                                <img src="{{ asset('img/gym.svg') }}" alt="gym icon">
                                <img src="{{ asset('img/no-smoking.svg') }}" alt="no smoking icon">
                                <img src="{{ asset('img/cocktail-drink.svg') }}" alt="cocktail drink icon">
                            </div>
                            <p class="room__card__bottom__type">{{ $room->room_type }}</p>
                            <p class="room__card__bottom__description">{{ $room->description }}</p>
                            <div class="room__card__bottom__pricing">
                                <p class="room__card__bottom__pricing__price"><span>${{ number_format($room->price, 2) }}</span>/Night</p>
                                <a href="/rooms/{{ $room->id }}">
                                    <p class="room__card__bottom__pricing__book">Booking Now</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="swiper-only-pagination"></div>
    </div>
@endsection