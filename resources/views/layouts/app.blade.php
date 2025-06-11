<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Archivo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Old%20Standard%20TT" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <script src="{{ asset('js/toggle_burger_menu.js') }}" defer></script>
    <title>Hotel Miranda</title>
</head>
<body>
    <header>
        <div class="burger_menu">
            <div class="burger_menu--first"></div>
            <div class="burger_menu--middle"></div>
            <div class="burger_menu--last"></div>
        </div>
        <div class="logo">
            <h1>Hotel <span>Miranda</span></h1>
            <img src="{{ asset('img/header_logo.svg') }}" alt="Logo">
        </div>
        <div class="header_buttons">
            <button class="header_buttons--user">
                <img src="{{ asset('img/user.svg') }}" alt="user icon">
            </button>
            <button class="header_buttons--search">
                <img src="{{ asset('img/magnifying glass.svg') }}" alt="search icon">
            </button>
        </div>
    </header>
    <nav class="nav deploy_nav--non_active">
        <a href="{{ url('/about_us') }}">About Us</a>
        <a href="{{ url('/rooms') }}">Rooms</a>
        <a href="{{ url('/offers') }}">Offers</a>
        <a href="{{ url('/contact') }}" class="active">Contact</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="footer">
            <div class="footer__logo">
                <h1>Hotel <span>Miranda</span></h1>
                <img src="{{ asset('img/footer_logo.svg') }}" alt="Footer Logo">
            </div>
            <p class="footer__description">Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed doing eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat ion ullamco laboris nisi.</p>
            <div class="footer__social_media">
                <a class="footer__social_media__link" href="https://www.facebook.com/"><img src="{{ asset('img/facebook.svg') }}" alt="Facebook"/></a>
                <a class="footer__social_media__link footer__social_media__link--twitter" href="https://www.twitter.com/"><img src="{{ asset('img/Twitter.svg') }}" alt="Twitter"/></a>
                <a class="footer__social_media__link" href="https://www.behance.net/"><img src="{{ asset('img/Behance.svg') }}" alt="Behance"/></a>
                <a class="footer__social_media__link" href="https://es.linkedin.com/"><img src="{{ asset('img/Linkedin.svg') }}" alt="LinkedIn"/></a>
                <a class="footer__social_media__link" href="https://www.youtube.com/"><img src="{{ asset('img/Youtube.svg') }}" alt="YouTube"/></a>
            </div>
            <div class="footer__services">
                <h3 class="footer__services--title">Services.</h3>
                <div class="footer__services__types">
                    <p>+Restaurant & Bar</p>
                    <p>+Swimming Pool</p>
                    <p>+Wellness & Spa</p>
                    <p>+Conference Room</p>
                    <p>+Gaming Zone</p>
                </div>
            </div>
            <div class="footer__contact">
                <h3 class="footer__contact--title">Contact Us.</h3>
                <div class="footer__contact__contact_card">
                    <img src="{{ asset('img/Telephone.svg') }}" alt="Phone">
                    <div class="footer__contact__cc__text">
                        <p class="footer__contact__cc__text--name">Phone Number</p>
                        <p class="footer__contact__cc__text--type">+987 876 765 76 577</p>
                    </div>
                </div>
                <div class="footer__contact__contact_card">
                    <img src="{{ asset('img/Messages.svg') }}" alt="Email">
                    <div class="footer__contact__cc__text">
                        <p class="footer__contact__cc__text--name">Email</p>
                        <p class="footer__contact__cc__text--type">mirandahotel@example.com</p>
                    </div>
                </div>
                <div class="footer__contact__contact_card">
                    <img src="{{ asset('img/Address.svg') }}" alt="Address">
                    <div class="footer__contact__cc__text">
                        <p class="footer__contact__cc__text--name">Hotel Address</p>
                        <p class="footer__contact__cc__text--type">19/A, Cirikon City hall Tower New York, NYC</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__legal">
            <p class="footer__legal__text">Copyright By@Example - 2020</p>
            <p class="footer__legal__text">Terms of use | Privacy Environmental Policy</p>
        </div>
    </footer>
</body>
</html>
