@extends('layouts.app')

@section('nav')
    <a href="/about-us">About Us</a>
    <a href="/rooms">Rooms</a>
    <a>Offers</a>
    <a href="/contact">Contact</a>
@endsection

@section('css-js')
    <link rel="stylesheet" href="{{ asset('css/offers.css') }}">
    <script src="{{ asset('js/swiper_offers.js') }}"></script>
@endsection

@section('content')
<div class="main__header">
    <div class="main__header__bg_color">
        <div class="main__header__text">
            <h3 class="main__header__text--luxury">The Ultimate Luxury</h3>
            <h4 class="main__header__text--details">Our Offers</h4>
        </div>
        <p class="breadcrumbs">Home | <span>Offers</span></p>
    </div>
</div>
@foreach($rooms as $room)
    <div class="offer__card">
        <div class="offer__card__room">
            <img src="{{ asset($room->photos) }}" alt="hotel room" class="offer__card__room--img">
            <div class="offer__card__room--price">
                <p class="offer__card__room--price--former">${{ $room->price }}<span>/Night</span></p>
                <p class="offer__card__room--price--actual">${{ $room->discount }}<span>/Night</span></p>
            </div>
        </div>
        <div class="offer__card__container">
            <h2 class="offer__card__container__type">{{ $room->room_type }}</h2>
            <h3 class="offer__card__container__name">Luxury {{ $room->room_type }}</h3>
            <hr>
            <p class="offer__card__container__description">
                <span>{{ $room->description }}</span>
                <span>{{ $room->cancellation_policy }}</span>
            </p>
            <div class="offer__card__container__amenities">
                <div class="offer__card__container__amenities__amenitie">
                    <img src="./img/ac.svg" alt="ac icon">
                    <p>Air Conditioner</p>
                </div>
                <div class="offer__card__container__amenities__amenitie">
                    <img src="./img/wifi-amenities.svg" alt="wifi icon">
                    <p>High speed WiFi</p>
                </div>
                <div class="offer__card__container__amenities__amenitie">
                    <img src="./img/breakfast.svg" alt="breakfast icon">
                    <p>Breakfast</p>
                </div>
                <div class="offer__card__container__amenities__amenitie">
                    <img src="./img/kitchen.svg" alt="kitchen icon">
                    <p>Kitchen</p>
                </div>
                <div class="offer__card__container__amenities__amenitie">
                    <img src="./img/cleaning.svg" alt="cleaning icon">
                    <p>Cleaning</p>
                </div>
                <div class="offer__card__container__amenities__amenitie">
                    <img src="./img/shower.svg" alt="shower icon">
                    <p>Shower</p>
                </div>
                <div class="offer__card__container__amenities__amenitie">
                    <img src="./img/groceries.svg" alt="groceries icon">
                    <p>Grocery</p>
                </div>
                <div class="offer__card__container__amenities__amenitie">
                    <img src="./img/bed-amenities.svg" alt="bed icon">
                    <p>Single bed</p>
                </div>
                <div class="offer__card__container__amenities__amenitie">
                    <img src="./img/shop.svg" alt="shop icon">
                    <p>Shop near</p>
                </div>
                <div class="offer__card__container__amenities__amenitie">
                    <img src="./img/towel.svg" alt="towel icon">
                    <p>Towels</p>
                </div>
            </div>
            <a href="/rooms/{{ $room->id }}" class="offer__card__container__link">
                <button class="offer__card__container__link__book">Book Now</button>
            </a>
        </div>
    </div>
@endforeach
@endsection