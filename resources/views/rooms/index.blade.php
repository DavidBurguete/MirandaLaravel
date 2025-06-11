@extends('layouts.app')

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

    <div class="swiper swiper_only_pagination">
        <div class="swiper-wrapper">
            @foreach($rooms as $room)
                <div class="swiper-slide">
                    <div class="room__card">
                        <img src="{{ asset('storage/' . $room->photos) }}" alt="Room image">
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
                                <p class="room__card__bottom__pricing__price">${{ number_format($room->price, 2) }}/Night</p>
                                <p class="room__card__bottom__pricing__book">Booking Now</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="swiper-only-pagination"></div>
    </div>
@endsection