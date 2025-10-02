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
@foreach($rooms[0] as $room)
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
                    <img src="/img/ac.svg" alt="ac icon">
                    <p>Air Conditioner</p>
                </div>
                <div class="offer__card__container__amenities__amenitie">
                    <img src="/img/wifi-amenities.svg" alt="wifi icon">
                    <p>High speed WiFi</p>
                </div>
                <div class="offer__card__container__amenities__amenitie">
                    <img src="/img/breakfast.svg" alt="breakfast icon">
                    <p>Breakfast</p>
                </div>
                <div class="offer__card__container__amenities__amenitie">
                    <img src="/img/kitchen.svg" alt="kitchen icon">
                    <p>Kitchen</p>
                </div>
                <div class="offer__card__container__amenities__amenitie">
                    <img src="/img/cleaning.svg" alt="cleaning icon">
                    <p>Cleaning</p>
                </div>
                <div class="offer__card__container__amenities__amenitie">
                    <img src="/img/shower.svg" alt="shower icon">
                    <p>Shower</p>
                </div>
                <div class="offer__card__container__amenities__amenitie">
                    <img src="/img/groceries.svg" alt="groceries icon">
                    <p>Grocery</p>
                </div>
                <div class="offer__card__container__amenities__amenitie">
                    <img src="/img/bed-amenities.svg" alt="bed icon">
                    <p>Single bed</p>
                </div>
                <div class="offer__card__container__amenities__amenitie">
                    <img src="/img/shop.svg" alt="shop icon">
                    <p>Shop near</p>
                </div>
                <div class="offer__card__container__amenities__amenitie">
                    <img src="/img/towel.svg" alt="towel icon">
                    <p>Towels</p>
                </div>
            </div>
            <a href="/rooms/{{ $room->id }}" class="offer__card__container__link">
                <button class="offer__card__container__link__book">Book Now</button>
            </a>
        </div>
    </div>
@endforeach
<div class="offer__popular_rooms">
    <h3 class="offer__popular_rooms--list">Popular list</h3>
    <h4 class="offer__popular_rooms--room">Popular Rooms</h4>
    <div class="swiper swiper_complete popular">
        <div class="swiper-wrapper popular__wrapper">
            @foreach($rooms[1] as $room)
                <div class="swiper-slide popular__wrapper__slide">
                    <div class="room__card">
                        <img src="{{ asset($room->photos) }}"/>
                        <div class="room__card__bottom">
                            <div class="room__card__bottom__icons">
                                <img src="/img/bed.svg" alt="bed icon">
                                <img src="/img/wifi.svg" alt="wifi icon">
                                <img src="/img/car.svg" alt="car icon">
                                <img src="/img/snowflake.svg" alt="snowflake icon">
                                <img src="/img/gym.svg" alt="gym icon">
                                <img src="/img/no-smoking.svg" alt="no smoking icon">
                                <img src="/img/cocktail-drink.svg" alt="cocktail drink icon">
                            </div>
                            <p class="room__card__bottom__type">{{ $room->room_type }}</p>
                            <p class="room__card__bottom__description">{{ $room->description }}</p>
                            <div class="room__card__bottom__pricing">
                                <p class="room__card__bottom__pricing__price">${{ $room->price }}/Night</p>
                                <a href="/rooms/{{ $room->id }}"><p class="room__card__bottom__pricing__book">Booking Now</p></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="custom-button-prev--only_navigation popular--no_display_desktop">&lt;</div>
        <div class="custom-button-next--only_navigation popular--no_display_desktop">&gt;</div>
    </div>
</div>
@endsection