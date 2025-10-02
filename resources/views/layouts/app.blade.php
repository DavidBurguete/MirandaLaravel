<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    @yield('css-js')
    <link href="https://fonts.googleapis.com/css?family=Archivo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Old%20Standard%20TT" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="shortcut icon" href="{{ asset('img/header_logo.svg') }}" type="image/x-icon">
    <script src="{{ asset('js/toggle_burger_menu.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/toggle_burger_menu.js') }}"></script>
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="{{ asset('js/date_formater.js') }}"></script>
    <title>Hotel Miranda</title>
</head>
<body>
    <header>
        <p class="desktop_header">We Make Your Feel Comfortable</p>
        <div class="header--wrapper">
            <div class="burger_menu">
                <div class="burger_menu--first"></div>
                <div class="burger_menu--middle"></div>
                <div class="burger_menu--last"></div>
            </div>
            <a href="/" class="logo">
                <h1>Hotel <span>Miranda</span></h1>
                <img src="/img/header_logo.svg">
            </a>
            <nav class="nav header--nav">
                @yield('nav')
            </nav>
            <div class="header_buttons">
                <button class="header_buttons--user">
                    <img src="/img/user.svg" alt="user icon">
                </button>
                <button class="header_buttons--search">
                    <img src="/img/magnifying glass.svg" alt="magnifying glass icon">
                </button>
            </div>
        </div>
    </header>
    <nav class="nav deploy_nav--non_active" id="deployNav">
        @yield('nav')
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="footer">
            <div class="footer__data">
                <div class="footer__data__logo">
                    <h1>Hotel <span>Miranda</span></h1>
                    <img src="/img/footer_logo.svg">
                </div>
                <p class="footer__data__description">Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed doing eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat ion ullamco laboris nisi.</p>
                <div class="footer__data__social_media">
                    <a class="footer__data__social_media__link" href="https://www.facebook.com/"><img src="/img/facebook.svg"/></a>
                    <a class="footer__data__social_media__link footer__data__social_media__link--twitter" href="https://www.twitter.com/"><img src="/img/Twitter.svg"/></a>
                    <a class="footer__data__social_media__link" href="https://www.behance.net/"><img src="/img/Behance.svg"/></a>
                    <a class="footer__data__social_media__link" href="https://es.linkedin.com/in/david-burguete/"><img src="/img/Linkedin.svg"/></a>
                    <a class="footer__data__social_media__link" href="https://www.youtube.com/"><img src="/img/Youtube.svg"/></a>
                </div>
            </div>
            <div class="footer__services">
                <h3 class="footer__services--title">Services.</h3>
                <div class="footer__services__types">
                    <p>+Restaurant & Bar</p>
                    <p>+Swimming Pool</p>
                    <p>+Wellness & Spa</p>
                    <p>+Restaurant</p>
                    <p>+Conference Room</p>
                    <p>+Coctail Party House</p>
                    <p>+Gaming Zone</p>
                    <p>+Marriage Party</p>
                    <p>+Party Planning</p>
                    <p>+Tour Consultancy</p>
                </div>
            </div>
            <div class="footer__contact">
                <h3 class="footer__contact--title">Contact Us.</h3>
                <div class="footer__contact__contact_card">
                    <img src="/img/Telephone.svg" alt="a telephone ringing">
                    <div class="footer__contact__cc__text">
                        <p class="footer__contact__cc__text--name">Phone Number</p>
                        <p class="footer__contact__cc__text--type">+987 876 765 76 577</p>
                    </div>
                </div>
                <div class="footer__contact__contact_card">
                    <img src="/img/Messages.svg" alt="an envelope">
                    <div class="footer__contact__cc__text">
                        <p class="footer__contact__cc__text--name">Email</p>
                        <p class="footer__contact__cc__text--type">mirandahotel@example.com</p>
                    </div>
                </div>
                <div class="footer__contact__contact_card">
                    <img src="/img/Address.svg" alt="a you are here icon">
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
