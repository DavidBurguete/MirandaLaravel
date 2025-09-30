@extends('layouts.app')

@section('nav')
    <a href="/about-us">About Us</a>
    <a href="/rooms">Rooms</a>
    <a href="/offers">Offers</a>
    <a href="/contact">Contact</a>
@endsection

@section('css-js')
    <link rel="stylesheet" href="{{ asset('css/receipt.css') }}">
@endsection

@section('content')
<div class="main__header">
    <div class="main__header__bg_color">
        <div class="main__header__text">
            <h3 class="main__header__text--luxury">The Ultimate Luxury</h3>
            <h4 class="main__header__text--details">Room Booked</h4>
        </div>
        <p class="breadcrumbs">Home | <span>Receipt</span></p>
    </div>
</div>
<div class="main">
    <div class="main__info">
        <div class="main__info__text">
            <p>Your Room Has Been Booked</p>
        </div>
        <img src="{{ asset($booked_room[1]->photos) }}" alt="image of a room" class="main__info__image">
    </div>
    <div class="main__receipt">
        <h3 class="main__receipt__title">Receipt</h3>
        <hr>
        <div class="main__receipt__content">
            <h4 class="main__receipt__content__name">Room type:</h4>
            <h5 class="main__receipt__content__description">{{ $booked_room[1]->room_type }}</h5>
            <h4 class="main__receipt__content__name">Room floor:</h4>
            <h5 class="main__receipt__content__description">{{ $booked_room[1]->room_name }}</h5>
            <h4 class="main__receipt__content__name">Price:</h4>
            @if($booked_room[1]->offer == 0)
                <h5 class="main__receipt__content__description">${{ $booked_room[1]->price }}/night</h5>
            @else
                <h5 class="main__receipt__content__description main__receipt__content__description--discounted">${{ $booked_room[1]->price }}/night</h5>
                <h4 class="main__receipt__content__name">Discount:</h4>
                <h5 class="main__receipt__content__description">${{ $booked_room[1]->discount }}/night</h5>
            @endif
            <h4 class="main__receipt__content__name">Check in:</h4>
            <h5 class="main__receipt__content__description">{{ $booked_room[0]->check_in_date }}</h5>
            <h4 class="main__receipt__content__name">Check out:</h4>
            <h5 class="main__receipt__content__description">{{ $booked_room[0]->check_out_date }}</h5>
            <h4 class="main__receipt__content__name">Description:</h4>
            <h5 class="main__receipt__content__description">{{ $booked_room[1]->description }}</h5>
            <h4 class="main__receipt__content__name">Amenities:</h4>
            <h5 class="main__receipt__content__description">
                <ul>
                    <li><img src="/img/ac.svg" alt="team icon">Air Conditioner</li>
                    <li><img src="/img/wifi-amenities.svg" alt="team icon">High speed WiFi</li>
                    <li><img src="/img/breakfast.svg" alt="team icon">Breakfast</li>
                    <li><img src="/img/kitchen.svg" alt="team icon">Kitchen</li>
                    <li><img src="/img/cleaning.svg" alt="team icon">Cleaning</li>
                    <li><img src="/img/shower.svg" alt="team icon">Shower</li>
                    <li><img src="/img/groceries.svg" alt="team icon">Grocery</li>
                    <li><img src="/img/bed-amenities.svg" alt="team icon">Single bed</li>
                    <li><img src="/img/shop.svg" alt="team icon">Shop near</li>
                    <li><img src="/img/towel.svg" alt="team icon">Towels</li>
                    <li><img src="/img/support.svg" alt="team icon">24/7 Online Support</li>
                    <li><img src="/img/locker.svg" alt="team icon">Strong Locker</li>
                    <li><img src="/img/security.svg" alt="team icon">Smart Security</li>
                    <li><img src="/img/team.svg" alt="team icon">Expert Team</li>
                </ul>
            </h5>
            <h4 class="main__receipt__content__name">Cancellation policy:</h4>
            <h5 class="main__receipt__content__description">{{ $booked_room[1]->cancellation_policy }}. Cancel up to 14 days to get a full refund.</h5>
        </div>
    </div>
</div>
@endsection