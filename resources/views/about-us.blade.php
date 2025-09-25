@extends('layouts.app')

@section('nav')
    <a>About Us</a>
    <a href="/rooms">Rooms</a>
    <a href="/offers">Offers</a>
    <a href="/contact">Contact</a>
@endsection

@section('css-js')
    <link rel="stylesheet" href="{{ asset('css/about_us.css') }}">
    <script src="{{ asset('js/swiper_about_us_complete.js') }}"></script>
@endsection

@section('content')
<div class="main__header">
    <div class="main__header__bg_color">
        <div class="main__header__text">
            <h3 class="main__header__text--luxury">The Ultimate Luxury</h3>
            <h4 class="main__header__text--details">About Us</h4>
        </div>
        <p class="breadcrumbs">Home | <span>About</span></p>
    </div>
</div>
<iframe 
    width="100%" 
    height="315" 
    src="https://www.youtube.com/embed/Bu3Doe45lcU?start=25&end=75" 
    frameborder="0" 
    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
    allowfullscreen
    class="video"
>
</iframe>
<h2 class="main__description">Hello. Our hotel has been present for over 20 years. We make the best for all our customers.</h2>
<div class="main__availabilities">
    <div class="main__availabilities__card">
        <img src="/img/breakfast_about_us.svg" alt="">
        <p>Breakfast</p>
    </div>
    <div class="main__availabilities__card main__availabilities__card--inverted">
        <img src="/img/airport.svg" alt="">
        <p>Airport Pickup</p>
    </div>
    <div class="main__availabilities__card">
        <img src="/img/guide.svg" alt="">
        <p>City Guide</p>
    </div>
    <div class="main__availabilities__card">
        <img src="/img/luxury-room.svg" alt="">
        <p>Luxury Room</p>
    </div>
</div>
<div class="restaurant">
    <img src="/img/restaurant.jpg" alt="Miranda Hotel restaurant">
    <div class="restaurant__text">
        <h2 class="restaurant__text__title">Restaurant</h2>
        <h3 class="restaurant__text__info">Get Restaurant Facilities & Many Other More</h3>
        <p class="restaurant__text__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem por incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
        <button class="restaurant__text__look">Take a Tour</button>
    </div>
</div>
<div class="features">
    <h2 class="features__title">Facilities</h2>
    <h3 class="features__description">Core Features</h3>
    <div class="swiper swiper_complete">
        <div class="swiper-wrapper features__wrapper">
            <div class="swiper-slide features__card">
                <p class="features__card__number">01</p>
                <img src="/img/rating.svg" alt="high rating icon" class="features__card__icon">
                <h4 class="features__card__title">Have High Rating</h4>
                <h5 class="features__card__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</h5>
            </div>
            <div class="swiper-slide features__card">
                <p class="features__card__number">02</p>
                <img src="/img/quiet.svg" alt="quiet hours icon" class="features__card__icon">
                <h4 class="features__card__title">Quiet Hours</h4>
                <h5 class="features__card__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</h5>
            </div>
            <div class="swiper-slide features__card">
                <p class="features__card__number">03</p>
                <img src="/img/location.svg" alt="best locations icon" class="features__card__icon">
                <h4 class="features__card__title">Best Locations</h4>
                <h5 class="features__card__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</h5>
            </div>
            <div class="swiper-slide features__card">
                <p class="features__card__number">04</p>
                <img src="/img/cancellation.svg" alt="free cancellation icon" class="features__card__icon">
                <h4 class="features__card__title">Free Cancellation</h4>
                <h5 class="features__card__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</h5>
            </div>
            <div class="swiper-slide features__card">
                <p class="features__card__number">05</p>
                <img src="/img/payment.svg" alt="payment options icon" class="features__card__icon">
                <h4 class="features__card__title">Payment Options</h4>
                <h5 class="features__card__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</h5>
            </div>
            <div class="swiper-slide features__card">
                <p class="features__card__number">06</p>
                <img src="/img/offers.svg" alt="special offers icon" class="features__card__icon">
                <h4 class="features__card__title">Special Offers</h4>
                <h5 class="features__card__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</h5>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>
<div class="facts">
    <h2 class="facts__title">Counter</h2>
    <h3 class="facts__description">Some Fun Facts</h3>
    <div class="facts__type">
        <div class="facts__type__card">
            <img src="/img/users.svg" alt="happy users icon" class="facts__type__card__icon">
            <div class="facts__type__card__text">
                <p class="facts__type__card__text__number">8000</p>
                <p class="facts__type__card__text__text">Happy Users</p>
            </div>
            <img src="/img/right_arrow.svg" alt="right arrow icon" class="facts__type__card__arrow">
        </div>
        <div class="facts__type__card">
            <img src="/img/reviews.svg" alt="reviews icon" class="facts__type__card__icon">
            <div class="facts__type__card__text">
                <p class="facts__type__card__text__number">10M</p>
                <p class="facts__type__card__text__text">Reviews & Appreciate</p>
            </div>
            <img src="/img/right_arrow.svg" alt="right arrow icon" class="facts__type__card__arrow">
        </div>
        <div class="facts__type__card">
            <img src="/img/coverage.svg" alt="country coverage icon" class="facts__type__card__icon">
            <div class="facts__type__card__text">
                <p class="facts__type__card__text__number">100</p>
                <p class="facts__type__card__text__text">Country Coverage</p>
            </div>
            <img src="/img/right_arrow.svg" alt="right arrow icon" class="facts__type__card__arrow">
        </div>
    </div>
    <div class="swiper swiper_complete">
        <div class="swiper-wrapper facts__images">
            <img src="/img/outside_pool.jpeg" alt="an image of the outside pool" class="swiper-slide facts__image"/>
            <img src="/img/inside_room.jpg" alt="an image of the common room" class="swiper-slide facts__image"/>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>
@endsection