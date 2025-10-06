@extends('layouts.app')

@section('nav')
    <a href="/about-us">About Us</a>
    <a href="/rooms">Rooms</a>
    <a href="/offers">Offers</a>
    <a href="/contact">Contact</a>
@endsection

@section('css-js')
    <link rel="stylesheet" href="{{ asset('css/room_details.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script src="{{ asset('js/swiper_room_details_complete.js') }}"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
@endsection

@section('content')
@if(isset($error))
    <script>
        Toastify({
            @if($error !== true)
                text: "{{ $error }}",
            @elseif(!isset($validate->email))
                text: "Please, enter your email",
            @else
                text: "Something went wrong! Please, try again",
            @endif
            duration: 5000,
            newWindow: true,
            close: true,
            gravity: "top",
            position: "center", 
            stopOnFocus: true,
            style: {
                padding: '1.2rem',
                fontFamily: "Roboto",
                fontWeight: 700,
                fontSize: "1.2rem",
                background: "linear-gradient(to right, red, tomato)",
            }
        }).showToast();
    </script>
@endif
<div class="main__header">
    <div class="main__header__bg_color">
        <div class="main__header__text">
            <h3 class="main__header__text--luxury">The Ultimate Luxury</h3>
            <h4 class="main__header__text--details">Ultimate Room</h4>
        </div>
        <p class="breadcrumbs">Home | <span>Room Details</span></p>
    </div>
</div>
<div class="main">
    <div class="main__info">
        <div class="main__info__text">
            <h3>{{ $rooms[0]->room_type }}</h3>
            <p>Luxury {{ $rooms[0]->room_type }}</p>
            <h4>${{ number_format($rooms[0]->price, 2) }}<span>/Night</span></h4>
        </div>
        <img src="{{ asset($rooms[0]->photos) }}" alt="image of a room" class="main__info__image">
    </div>
    <div class="main__availability">
        <form action="/rooms/{{ $rooms[0]->id }}" method="post">
            @csrf
            <p>Check Availability</p>
            <label for="false_check_in">
                Check In
                <input type="date" id="real_check_in" name="real_check_in" class="input_not_visible">
                <input type="text" id="false_check_in" class="input_background_image input_background_image__calendar" readonly>
            </label>
            <label for="false_check_out">
                Check Out
                <input type="date" id="real_check_out" name="real_check_out" class="input_not_visible">
                <input type="text" id="false_check_out" class="input_background_image input_background_image__calendar" readonly>
            </label>
            <label for="email">
                Your e-mail
                <input type="email" id="email" name="email" class="input_background_image input_background_image__email" placeholder="Input your e-mail">
            </label>
            <input type="submit" value="Check Availability">
        </form>
    </div>
    <p class="main__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
</div>
<div class="main__amenities">
    <h3>Amenities</h3>
    <hr>
    <div class="main__amenities__amenitie main__amenities__amenitie--ac">
        <img src="/img/ac.svg" alt="ac icon">
        <p>Air Conditioner</p>
    </div>
    <div class="main__amenities__amenitie main__amenities__amenitie--wifi">
        <img src="/img/wifi-amenities.svg" alt="wifi icon">
        <p>High speed WiFi</p>
    </div>
    <div class="main__amenities__amenitie main__amenities__amenitie--breakfast">
        <img src="/img/breakfast.svg" alt="breakfast icon">
        <p>Breakfast</p>
    </div>
    <div class="main__amenities__amenitie main__amenities__amenitie--kitchen">
        <img src="/img/kitchen.svg" alt="kitchen icon">
        <p>Kitchen</p>
    </div>
    <div class="main__amenities__amenitie main__amenities__amenitie--cleaning">
        <img src="/img/cleaning.svg" alt="cleaning icon">
        <p>Cleaning</p>
    </div>
    <div class="main__amenities__amenitie main__amenities__amenitie--shower">
        <img src="/img/shower.svg" alt="shower icon">
        <p>Shower</p>
    </div>
    <div class="main__amenities__amenitie main__amenities__amenitie--groceries">
        <img src="/img/groceries.svg" alt="groceries icon">
        <p>Grocery</p>
    </div>
    <div class="main__amenities__amenitie main__amenities__amenitie--bed">
        <img src="/img/bed-amenities.svg" alt="bed icon">
        <p>Single bed</p>
    </div>
    <div class="main__amenities__amenitie main__amenities__amenitie--shop">
        <img src="/img/shop.svg" alt="shop icon">
        <p>Shop near</p>
    </div>
    <div class="main__amenities__amenitie main__amenities__amenitie--towel">
        <img src="/img/towel.svg" alt="towel icon">
        <p>Towels</p>
    </div>
    <div class="main__amenities__amenitie main__amenities__amenitie--support">
        <img src="/img/support.svg" alt="24/7 online support icon">
        <p>24/7 Online Support</p>
    </div>
    <div class="main__amenities__amenitie main__amenities__amenitie--locker_key">
        <img src="/img/locker.svg" alt="locker key icon">
        <p>Strong Locker</p>
    </div>
    <div class="main__amenities__amenitie main__amenities__amenitie--security">
        <img src="/img/security.svg" alt="security lock icon">
        <p>Smart Security</p>
    </div>
    <div class="main__amenities__amenitie main__amenities__amenitie--team">
        <img src="/img/team.svg" alt="team icon">
        <p>Expert Team</p>
    </div>
</div>
<div class="main__founder">
    <div class="main__founder__images">
        <img class="main__founder__images--founder" src="/img/david.jpeg" alt="the founder">
        <img class="main__founder__images--verified" src="/img/verified.svg" alt="verified icon">
    </div>
    <h3 class="main__founder__name">David Burguete</h3>
    <h4 class="main__founder__position">Founder, Qux Co.</h4>
    <p class="main__founder__descrpition">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
</div>
<div class="main__cancellation">
    <h3 class="main__cancellation__title">Cancellation</h3>
    <hr>
    <p class="main__cancellation__description">Phasellus volutpat neque a tellus venenatis, a euismod augue facilisis. Fusce ut metus mattis, consequat metus nec, luctus lectus. Pellentesque orci quis hendrerit sed eu dolor. Cancel up to 14 days to get a full refund.</p>
</div>
<div class="main__related_rooms">
    <h3 class="main__related_rooms--title">Related Rooms</h3>
    <hr>
    <div class="swiper swiper_complete">
        <div class="swiper-wrapper main__related_rooms--wrapper">
            @foreach($rooms[1] as $room)
                <div class="swiper-slide main__related_rooms--card">
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
        <div class="custom-button-prev--only_navigation">&lt;</div>
        <div class="custom-button-next--only_navigation">&gt;</div>
    </div>
</div>
@endsection