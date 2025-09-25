@extends('layouts.app')

@section('nav')
    <a href="/about-us">About Us</a>
    <a href="/rooms">Rooms</a>
    <a href="/offers">Offers</a>
    <a href="/contact">Contact</a>
@endsection

@section('css-js')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <script src="{{ asset('js/swiper_index_complete.js') }}"></script>
    <script src="{{ asset('js/swiper_index_only_pagination.js') }}"></script>
@endsection

@section('content')
<div class="main__header main__header--index">
    <div class="main__header__bg_color main__header--index__bg_color">
        <div class="main__header__text main__header--index__text">
            <h3 class="main__header__text--luxury">The Ultimate Luxury Experience</h3>
            <h4 class="main__header__text--details main__header--index__text--details">
                <pre>The Perfect</pre>
                <pre>Base For You</pre>
            </h4>
        </div>
        <div class="main__header__buttons main__header--index__buttons">
            <button class="main__header__buttons__tour">Take a Tour</button>
            <button class="main__header__buttons__learn">Learn More</button>
        </div>
    </div>
</div>
<div class="main__arrival">
    <form>
        <label for="false_check_in">
            Arrival Date
            <input type="date" id="real_check_in" class="input_not_visible">
            <input type="text" id="false_check_in" class="input_background_image input_background_image__calendar" readonly>
        </label>
        <label for="false_check_out">
            Departure Date
            <input type="date" id="real_check_out" class="input_not_visible">
            <input type="text" id="false_check_out" class="input_background_image input_background_image__calendar" readonly>
        </label>
        <input type="submit" value="Check Availability">
    </form>
</div>
<div class="about">
    <div class="about__text">
        <h2 class="about__text__name">About Us</h2>
        <h3 class="about__text__title">Discover Our Underground.</h3>
        <p class="about__text__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <button class="about__text__book">Book Now</button>
    </div>
    <div class="about__team">
        <img src="/img/main-entrance.jpeg" alt="the hotel main entrance" class="about__team__img">
        <div class="about__team__card">
            <img src="/img/strong-team.svg" alt="strong team icon" class="about__team__card__icon">
            <h4 class="about__team__card__title">Strong Team</h4>
            <h5 class="about__team__card__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</h5>
        </div>
    </div>
    <div class="about__luxury">
        <img src="/img/terrace.jpg" alt="the hotel main entrance" class="about__luxury__img">
        <div class="about__luxury__card">
            <img src="/img/luxury.svg" alt="strong team icon" class="about__luxury__card__icon">
            <h4 class="about__luxury__card__title">Luxury Room</h4>
            <h5 class="about__luxury__card__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</h5>
        </div>
    </div>
</div>
<div class="popular_rooms">
    <h3 class="popular_rooms--list">Rooms</h3>
    <h4 class="popular_rooms--room">Hand Picked Rooms</h4>
    <div class="swiper swiper_complete popular">
        <div class="swiper-wrapper popular__wrapper">
            <div class="swiper-slide popular__wrapper__slide">
                <div class="room__card">
                    <div class="room__card__icons">
                        <img src="/img/bed.svg" alt="bed icon">
                        <img src="/img/wifi.svg" alt="wifi icon">
                        <img src="/img/car.svg" alt="car icon">
                        <img src="/img/snowflake.svg" alt="snowflake icon">
                        <img src="/img/gym.svg" alt="gym icon">
                        <img src="/img/no-smoking.svg" alt="no smoking icon">
                        <img src="/img/cocktail-drink.svg" alt="cocktail drink icon">
                    </div>
                    <img src="/img/hotel-room-1.jpg"/>
                    <div class="room__card__bottom">
                        <p class="room__card__bottom__type">Minimal Duplex Room</p>
                        <p class="room__card__bottom__description">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                        <div class="room__card__bottom__pricing">
                            <p class="room__card__bottom__pricing__price"><span>$345</span>/Night</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide popular__wrapper__slide">
                <div class="room__card">
                    <div class="room__card__icons">
                        <img src="/img/bed.svg" alt="bed icon">
                        <img src="/img/wifi.svg" alt="wifi icon">
                        <img src="/img/car.svg" alt="car icon">
                        <img src="/img/snowflake.svg" alt="snowflake icon">
                        <img src="/img/gym.svg" alt="gym icon">
                        <img src="/img/no-smoking.svg" alt="no smoking icon">
                        <img src="/img/cocktail-drink.svg" alt="cocktail drink icon">
                    </div>
                    <img src="/img/hotel-room-2.jpg"/>
                    <div class="room__card__bottom">
                        <p class="room__card__bottom__type">Minimal Duplex Room</p>
                        <p class="room__card__bottom__description">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                        <div class="room__card__bottom__pricing">
                            <p class="room__card__bottom__pricing__price"><span>$345</span>/Night</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide popular__wrapper__slide">
                <div class="room__card">
                    <div class="room__card__icons">
                        <img src="/img/bed.svg" alt="bed icon">
                        <img src="/img/wifi.svg" alt="wifi icon">
                        <img src="/img/car.svg" alt="car icon">
                        <img src="/img/snowflake.svg" alt="snowflake icon">
                        <img src="/img/gym.svg" alt="gym icon">
                        <img src="/img/no-smoking.svg" alt="no smoking icon">
                        <img src="/img/cocktail-drink.svg" alt="cocktail drink icon">
                    </div>
                    <img src="/img/hotel-room-4.jpg"/>
                    <div class="room__card__bottom">
                        <p class="room__card__bottom__type">Minimal Duplex Room</p>
                        <p class="room__card__bottom__description">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                        <div class="room__card__bottom__pricing">
                            <p class="room__card__bottom__pricing__price"><span>$345</span>/Night</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide popular__wrapper__slide">
                <div class="room__card">
                    <div class="room__card__icons">
                        <img src="/img/bed.svg" alt="bed icon">
                        <img src="/img/wifi.svg" alt="wifi icon">
                        <img src="/img/car.svg" alt="car icon">
                        <img src="/img/snowflake.svg" alt="snowflake icon">
                        <img src="/img/gym.svg" alt="gym icon">
                        <img src="/img/no-smoking.svg" alt="no smoking icon">
                        <img src="/img/cocktail-drink.svg" alt="cocktail drink icon">
                    </div>
                    <img src="/img/hotel-room-3.jpg"/>
                    <div class="room__card__bottom">
                        <p class="room__card__bottom__type">Minimal Duplex Room</p>
                        <p class="room__card__bottom__description">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                        <div class="room__card__bottom__pricing">
                            <p class="room__card__bottom__pricing__price"><span>$345</span>/Night</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide popular__wrapper__slide">
                <div class="room__card">
                    <div class="room__card__icons">
                        <img src="/img/bed.svg" alt="bed icon">
                        <img src="/img/wifi.svg" alt="wifi icon">
                        <img src="/img/car.svg" alt="car icon">
                        <img src="/img/snowflake.svg" alt="snowflake icon">
                        <img src="/img/gym.svg" alt="gym icon">
                        <img src="/img/no-smoking.svg" alt="no smoking icon">
                        <img src="/img/cocktail-drink.svg" alt="cocktail drink icon">
                    </div>
                    <img src="/img/hotel-room-2.jpg"/>
                    <div class="room__card__bottom">
                        <p class="room__card__bottom__type">Minimal Duplex Room</p>
                        <p class="room__card__bottom__description">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                        <div class="room__card__bottom__pricing">
                            <p class="room__card__bottom__pricing__price"><span>$345</span>/Night</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide popular__wrapper__slide">
                <div class="room__card">
                    <div class="room__card__icons">
                        <img src="/img/bed.svg" alt="bed icon">
                        <img src="/img/wifi.svg" alt="wifi icon">
                        <img src="/img/car.svg" alt="car icon">
                        <img src="/img/snowflake.svg" alt="snowflake icon">
                        <img src="/img/gym.svg" alt="gym icon">
                        <img src="/img/no-smoking.svg" alt="no smoking icon">
                        <img src="/img/cocktail-drink.svg" alt="cocktail drink icon">
                    </div>
                    <img src="/img/hotel-room-4.jpg"/>
                    <div class="room__card__bottom">
                        <p class="room__card__bottom__type">Minimal Duplex Room</p>
                        <p class="room__card__bottom__description">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                        <div class="room__card__bottom__pricing">
                            <p class="room__card__bottom__pricing__price"><span>$345</span>/Night</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="custom-button-prev--only_navigation">&lt;</div>
        <div class="custom-button-next--only_navigation">&gt;</div>
    </div>
</div>
<div class="place">
    <h2 class="place__name">Intro Video</h2>
    <h3 class="place__title">Meet With Our Luxury Place.</h3>
    <p class="place__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat you have to understand this.</p>
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
    <button class="place__book">Book Now</button>
    <div class="place__second_panel"></div>
</div>
<div class="features">
    <h2 class="features__title">Facilities</h2>
    <h3 class="features__description">Core Features</h3>
    <div class="swiper swiper_complete">
        <div class="swiper-wrapper features__main">
            <div class="swiper-slide features__main__card">
                <p class="features__main__card__number">01</p>
                <img src="/img/rating.svg" alt="high rating icon" class="features__main__card__icon">
                <h4 class="features__main__card__title">Have High Rating</h4>
                <h5 class="features__main__card__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</h5>
            </div>
            <div class="swiper-slide features__main__card">
                <p class="features__main__card__number">02</p>
                <img src="/img/quiet.svg" alt="quiet hours icon" class="features__main__card__icon">
                <h4 class="features__main__card__title">Quiet Hours</h4>
                <h5 class="features__main__card__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</h5>
            </div>
            <div class="swiper-slide features__main__card">
                <p class="features__main__card__number">03</p>
                <img src="/img/location.svg" alt="best locations icon" class="features__main__card__icon">
                <h4 class="features__main__card__title">Best Locations</h4>
                <h5 class="features__main__card__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</h5>
            </div>
            <div class="swiper-slide features__main__card">
                <p class="features__main__card__number">04</p>
                <img src="/img/cancellation.svg" alt="free cancellation icon" class="features__main__card__icon">
                <h4 class="features__main__card__title">Free Cancellation</h4>
                <h5 class="features__main__card__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</h5>
            </div>
            <div class="swiper-slide features__main__card">
                <p class="features__main__card__number">05</p>
                <img src="/img/payment.svg" alt="payment options icon" class="features__main__card__icon">
                <h4 class="features__main__card__title">Payment Options</h4>
                <h5 class="features__main__card__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</h5>
            </div>
            <div class="swiper-slide features__main__card">
                <p class="features__main__card__number">06</p>
                <img src="/img/offers.svg" alt="special offers icon" class="features__main__card__icon">
                <h4 class="features__main__card__title">Special Offers</h4>
                <h5 class="features__main__card__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</h5>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>
<div class="menu">
    <img src="/img/donut.svg" alt="donut icon" class="menu__icon">
    <img src="/img/cropped-donut.svg" alt="donut icon" class="menu__icon--cropped">
    <h2 class="menu__name">Menu</h2>
    <h3 class="menu__title">Our Foods Menu</h3>
    <div class="swiper swiper_only_pagination">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="menu__card">
                    <img src="/img/eggs-bacon.jpg" alt="an image of eggs and bacon" class="menu__card__img">
                    <div class="menu__card__text">
                        <h4 class="menu__card__text__name">Eggs & Bacon</h4>
                        <h5 class="menu__card__text__description">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</h5>
                    </div>
                </div>
                <div class="menu__card">
                    <img src="/img/tea-coffee.jpg" alt="an image of tea and coffee" class="menu__card__img">
                    <div class="menu__card__text">
                        <h4 class="menu__card__text__name">Tea or Coffee</h4>
                        <h5 class="menu__card__text__description">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</h5>
                    </div>
                </div>
                <div class="menu__card">
                    <img src="/img/chia.jpg" alt="an image of chia oatmeal" class="menu__card__img">
                    <div class="menu__card__text">
                        <h4 class="menu__card__text__name">Chia Oatmeal</h4>
                        <h5 class="menu__card__text__description">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</h5>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="menu__card">
                    <img src="/img/parfait.jpg" alt="an image of fruit parfait" class="menu__card__img">
                    <div class="menu__card__text">
                        <h4 class="menu__card__text__name">Fruit Parfait</h4>
                        <h5 class="menu__card__text__description">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</h5>
                    </div>
                </div>
                <div class="menu__card">
                    <img src="/img/marmalade.jpg" alt="an image of marmalade selection" class="menu__card__img">
                    <div class="menu__card__text">
                        <h4 class="menu__card__text__name">Marmalade Selection</h4>
                        <h5 class="menu__card__text__description">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</h5>
                    </div>
                </div>
                <div class="menu__card">
                    <img src="/img/cheese.jpg" alt="an image of a cheese plate" class="menu__card__img">
                    <div class="menu__card__text">
                        <h4 class="menu__card__text__name">Cheese Plate</h4>
                        <h5 class="menu__card__text__description">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</h5>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="menu__card">
                    <img src="/img/eggs-bacon.jpg" alt="an image of eggs and bacon" class="menu__card__img">
                    <div class="menu__card__text">
                        <h4 class="menu__card__text__name">Eggs & Bacon</h4>
                        <h5 class="menu__card__text__description">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</h5>
                    </div>
                </div>
                <div class="menu__card">
                    <img src="/img/tea-coffee.jpg" alt="an image of tea and coffee" class="menu__card__img">
                    <div class="menu__card__text">
                        <h4 class="menu__card__text__name">Tea or Coffee</h4>
                        <h5 class="menu__card__text__description">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</h5>
                    </div>
                </div>
                <div class="menu__card">
                    <img src="/img/chia.jpg" alt="an image of chia oatmeal" class="menu__card__img">
                    <div class="menu__card__text">
                        <h4 class="menu__card__text__name">Chia Oatmeal</h4>
                        <h5 class="menu__card__text__description">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</h5>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="menu__card">
                    <img src="/img/parfait.jpg" alt="an image of fruit parfait" class="menu__card__img">
                    <div class="menu__card__text">
                        <h4 class="menu__card__text__name">Fruit Parfait</h4>
                        <h5 class="menu__card__text__description">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</h5>
                    </div>
                </div>
                <div class="menu__card">
                    <img src="/img/marmalade.jpg" alt="an image of marmalade selection" class="menu__card__img">
                    <div class="menu__card__text">
                        <h4 class="menu__card__text__name">Marmalade Selection</h4>
                        <h5 class="menu__card__text__description">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</h5>
                    </div>
                </div>
                <div class="menu__card">
                    <img src="/img/cheese.jpg" alt="an image of a cheese plate" class="menu__card__img">
                    <div class="menu__card__text">
                        <h4 class="menu__card__text__name">Cheese Plate</h4>
                        <h5 class="menu__card__text__description">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-button-prev">&lt;</div>
    <div class="swiper-button-next">&gt;</div>
</div>
<div class="menu_pictures swiper swiper_complete">
    <div class="menu_pictures__images swiper-wrapper">
        <img src="/img/tartar.jpg" alt="a tartar image" class="swiper-slide menu_pictures__images__image">
        <img src="/img/seafood.jpg" alt="some seafood image" class="swiper-slide menu_pictures__images__image">
        <img src="/img/salmon.jpg" alt="a salmon-based dish image" class="swiper-slide menu_pictures__images__image">
    </div>
    <div class="swiper-pagination"></div>
</div>
<div class="info">
    <div class="info__card">
        <img src="/img/projects.svg" alt="projects completed icon" class="info__card__img">
        <h2 class="info__card__number">84k<span>+</span></h2>
        <h3 class="info__card__text">Projects are Completed</h3>
    </div>
    <div class="info__card">
        <img src="/img/backers.svg" alt="active backers icon" class="info__card__img">
        <h2 class="info__card__number">10M<span>+</span></h2>
        <h3 class="info__card__text">Active Backers Around The World</h3>
    </div>
    <div class="info__card">
        <img src="/img/categories.svg" alt="categories served icon" class="info__card__img">
        <h2 class="info__card__number">02k<span>+</span></h2>
        <h3 class="info__card__text">Categories served</h3>
    </div>
    <div class="info__card">
        <img src="/img/ideas.svg" alt="ideas raised icon" class="info__card__img">
        <h2 class="info__card__number">100M<span>+</span></h2>
        <h3 class="info__card__text">Idea Raised Funds</h3>
    </div>
</div>
@endsection