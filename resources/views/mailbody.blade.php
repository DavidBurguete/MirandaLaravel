<style>
header {
  display: flex;
  flex-wrap: wrap;
  align-content: center;
  justify-content: center;
  height: 4.375rem;
  font-family: "Archivo";
  font-weight: 700;
  text-transform: uppercase;
  text-decoration: none;
  letter-spacing: 2.6px;
  color: #111111;
  box-shadow: 0px 3px 6px 0px rgba(139, 139, 139, 0.2509803922);
}
header h1 {
  align-self: center;
  order: 2;
  font-size: 0.8rem;
  width: 8.5rem;
  margin-left: 1rem;
}
header h1 span {
  font-weight: 400;
}
header img {
  order: 1;
  width: 2.25rem;
  height: 2.25rem;
  box-shadow: 0px 14px 24px 0px rgba(139, 139, 139, 0.2509803922);
}


@media screen and (min-width: 1000px) {
  header {
    position: relative;
    height: 8rem;
  }
  header h1 {
    font-size: 1.6rem;
  }
  header img {
    order: 1;
    width: 5rem;
    height: 5rem;
    box-shadow: 0px 14px 24px 0px rgba(139, 139, 139, 0.2509803922);
  }
}
footer {
  /* background-image: url("http://ec2-35-180-116-78.eu-west-3.compute.amazonaws.com/img/footer background.png"); */
  background-color: rgba(255, 255, 255, 0.98);
  background-blend-mode: lighten;
}

.footer {
  display: flex;
  flex-direction: column;
  padding: 1.25rem;
}

.footer__data__logo {
  display: flex;
  margin-bottom: 3.125rem;
  font-family: "Archivo";
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 2.6px;
  color: #111111;
}
.footer__data__logo h1 {
  align-self: center;
  order: 2;
  font-size: 1.625rem;
  margin-left: 1.75rem;
}
.footer__data__logo h1 span {
  font-weight: 400;
}
.footer__data__logo img {
  order: 1;
  width: 5rem;
  height: 5rem;
  box-shadow: 0px 14px 24px 0px rgba(139, 139, 139, 0.1490196078);
}

.footer__data__description {
  color: #777777;
  font-family: "Archivo";
  font-weight: 400;
  font-size: 1rem;
  line-height: 1.625rem;
  margin-bottom: 2rem;
}

.footer__data__social_media {
  display: flex;
  margin-bottom: 2rem;
}

.footer__data__social_media__link {
  display: flex;
  flex-wrap: wrap;
  align-content: center;
  justify-content: center;
  width: 2.5rem;
  height: 2.5rem;
  margin-right: 0.625rem;
  background-color: #F8F8F8;
}

.footer__data__social_media__link--twitter {
  background-color: #BEAD8E;
}

.footer__legal {
  background-color: #F8F8F8;
  width: 100%;
  padding-block: 0.4375rem;
}

.footer__legal__text {
  font-family: "Roboto";
  font-weight: 700;
  font-size: 1rem;
  line-height: 100%;
  letter-spacing: -0.48px;
  color: #222222;
  padding: 0.75rem 1.25rem;
}

@media screen and (min-width: 1000px) {
  .footer__data {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 65%;
    margin: 0 auto;
    padding: 0;
  }
  .footer__data, .footer__services, .footer__contact {
    padding-block: 6.25rem;
  }
  .footer__data__description{
      text-align: center;
  }
  .footer__legal {
    display: flex;
    justify-content: space-around;
    height: 5rem;
    padding: 0;
  }
  .footer__legal__text {
    padding: 2rem 1.25rem;
  }
}
html, * {
  scroll-behavior: smooth;
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  min-width: 320px;
}

button, input[type=submit] {
  cursor: pointer;
}

a {
  text-decoration: none;
}

.main__availability, .main__arrival {
  padding: 2.5rem;
}
.main__availability form, .main__arrival form {
  display: flex;
  flex-direction: column;
}
.main__availability form p, .main__arrival form p {
  text-align: center;
  font-family: "Archivo";
  font-weight: 700;
  font-size: 1.125rem;
  line-height: 100%;
  letter-spacing: -0.54px;
  color: #222222;
}
.main__availability form label, .main__arrival form label {
  display: flex;
  flex-direction: column;
  margin-block: 1.25rem;
  font-family: "Archivo";
  font-weight: 700;
  font-size: 0.875rem;
  line-height: 100%;
  color: #222222;
}
.main__availability form label input, .main__arrival form label input {
  margin-block: 0.5rem;
  padding: 1.5625rem 1.25rem;
  width: 100%;
  border: 0;
  outline: none;
  background-color: #F8F8F8;
  font-family: "Archivo";
  font-weight: 400;
  font-size: 0.875rem;
  line-height: 100%;
  color: #777777;
}
.main__availability form label .input_not_visible, .main__arrival form label .input_not_visible {
  display: none;
}
.main__availability form label .input_background_image, .main__arrival form label .input_background_image {
  background-repeat: no-repeat;
  background-position-y: center;
  background-position-x: calc(100% - 1.875rem);
}
.main__availability form label .input_background_image__calendar, .main__arrival form label .input_background_image__calendar {
  background-image: url("../img/calendar.svg");
}
.main__availability form input[type=submit], .main__arrival form input[type=submit] {
  width: 100%;
  padding: 1.25rem;
  border: none;
  background-color: #BEAD8E;
  font-family: "Archivo";
  font-weight: 400;
  font-size: 0.875rem;
  line-height: 100%;
  letter-spacing: 2.8px;
  text-transform: uppercase;
  color: white;
}

.main__info {
  margin: 3rem 1.25rem;
}
.main__info h3 {
  font-family: "Archivo";
  font-weight: 700;
  font-size: 0.875rem;
  line-height: 100%;
  letter-spacing: 2.8px;
  text-transform: uppercase;
  color: #777777;
}
.main__info p {
  margin-block: 0.625rem;
  font-family: "Old Standard TT";
  font-weight: 400;
  font-size: 2.5rem;
  line-height: 3rem;
  letter-spacing: -1.44px;
  color: #222222;
}
.main__info h4 {
  font-family: "Archivo";
  font-weight: 700;
  font-size: 2rem;
  line-height: 2.6875rem;
  color: #BEAD8E;
}
.main__info h4 span {
  font-size: 0.8125rem;
}
.main__info img {
  width: 100%;
}

@media screen and (min-width: 1000px) {
  .main {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    width: 60%;
    margin: 0 auto;
  }
  .main__info {
    grid-column: 1/3;
    margin-top: 3rem;
    padding-right: 3rem;
  }
  .main__info__text {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    column-gap: 1rem;
    width: 95%;
    padding: 2rem;
    background-color: white;
  }
  .main__info__text h3 {
    grid-column: 1/4;
  }
  .main__info__text p {
    grid-column: 1/4;
  }
  .main__info__text h4 {
    grid-column: 4;
  }
  .main__info__image {
    position: relative;
    bottom: 4.875rem;
    z-index: -1;
  }
}
.main__receipt {
  margin: 1.25rem;
}
.main__receipt hr {
  width: 100%;
  margin-block: 1rem 1.5rem;
  border: 1px solid #F1F1F1;
}
.main__receipt__title {
  font-family: "Old Standard TT";
  font-weight: 400;
  font-size: 1.875rem;
  line-height: 1.875rem;
  color: #222222;
}
.main__receipt__content {
  display: grid;
  grid-template-columns: auto;
  column-gap: 1rem;
  row-gap: 1rem;
  margin-block: 2.8125rem 5.625rem;
}
.main__receipt__content__name {
  grid-column: 1;
  font-family: "Roboto";
  font-weight: 700;
  font-size: 1rem;
  color: #222222;
}
.main__receipt__content__description {
  grid-column: 2;
  font-family: "Roboto";
  font-weight: 400;
  font-size: 1rem;
  color: #777777;
}
.main__receipt__content__description ul {
  list-style-type: none;
}
.main__receipt__content__description ul li {
  display: flex;
  padding-bottom: 0.25rem;
}
.main__receipt__content__description ul li img {
  width: 1rem;
  margin: 0 0.25rem 0.25rem 0;
}

@media screen and (min-width: 1000px) {
  .main__receipt {
    position: relative;
    margin: 5.375rem 0 0 0;
  }
}

/*# sourceMappingURL=receipt.css.map */

</style>
<header>
    <h1>Hotel <span>Miranda</span></h1>
    <img src="http://ec2-35-180-116-78.eu-west-3.compute.amazonaws.com/img/header_logo.svg">
</header>

<main>
    <div class="main">
        <div class="main__info">
            <div class="main__info__text">
                <p>Your Booked Room</p>
            </div>
            <img src="http://ec2-35-180-116-78.eu-west-3.compute.amazonaws.com/img/hotel-room-3.jpg" alt="image of a room" class="main__info__image">
        </div>
        <div class="main__receipt">
            <h3 class="main__receipt__title">Receipt</h3>
            <hr>
            <div class="main__receipt__content">
                <h4 class="main__receipt__content__name">Room type:</h4>
                <h5 class="main__receipt__content__description">Double Bed</h5>
                <h4 class="main__receipt__content__name">Room floor:</h4>
                <h5 class="main__receipt__content__description">Floor 1, Room 4</h5>
                <h4 class="main__receipt__content__name">Price:</h4>
                <h5 class="main__receipt__content__description">$345/night</h5>
                <h4 class="main__receipt__content__name">Check in:</h4>
                <h5 class="main__receipt__content__description">22/05/2026</h5>
                <h4 class="main__receipt__content__name">Check out:</h4>
                <h5 class="main__receipt__content__description">29/05/2026</h5>
                <h4 class="main__receipt__content__name">Description:</h4>
                <h5 class="main__receipt__content__description">Phasellus volutpat neque a tellus venenatis, a euismod augue facilisis. Fusce ut metus mattis, consequat metus nec, luctus lectus. Pellentesque orci quis hendrerit sed eu dolor. Cancel up to 14 days to get a full refund.</h5>
                <h4 class="main__receipt__content__name">Amenities:</h4>
                <h5 class="main__receipt__content__description">
                    <ul>
                        <li><img src="http://ec2-35-180-116-78.eu-west-3.compute.amazonaws.com/img/ac.svg" alt="team icon">Air Conditioner</li>
                        <li><img src="http://ec2-35-180-116-78.eu-west-3.compute.amazonaws.com/img/wifi-amenities.svg" alt="team icon">High speed WiFi</li>
                        <li><img src="http://ec2-35-180-116-78.eu-west-3.compute.amazonaws.com/img/breakfast.svg" alt="team icon">Breakfast</li>
                        <li><img src="http://ec2-35-180-116-78.eu-west-3.compute.amazonaws.com/img/kitchen.svg" alt="team icon">Kitchen</li>
                        <li><img src="http://ec2-35-180-116-78.eu-west-3.compute.amazonaws.com/img/cleaning.svg" alt="team icon">Cleaning</li>
                        <li><img src="http://ec2-35-180-116-78.eu-west-3.compute.amazonaws.com/img/shower.svg" alt="team icon">Shower</li>
                        <li><img src="http://ec2-35-180-116-78.eu-west-3.compute.amazonaws.com/img/groceries.svg" alt="team icon">Grocery</li>
                        <li><img src="http://ec2-35-180-116-78.eu-west-3.compute.amazonaws.com/img/bed-amenities.svg" alt="team icon">Single bed</li>
                        <li><img src="http://ec2-35-180-116-78.eu-west-3.compute.amazonaws.com/img/shop.svg" alt="team icon">Shop near</li>
                        <li><img src="http://ec2-35-180-116-78.eu-west-3.compute.amazonaws.com/img/towel.svg" alt="team icon">Towels</li>
                        <li><img src="http://ec2-35-180-116-78.eu-west-3.compute.amazonaws.com/img/support.svg" alt="team icon">24/7 Online Support</li>
                        <li><img src="http://ec2-35-180-116-78.eu-west-3.compute.amazonaws.com/img/locker.svg" alt="team icon">Strong Locker</li>
                        <li><img src="http://ec2-35-180-116-78.eu-west-3.compute.amazonaws.com/img/security.svg" alt="team icon">Smart Security</li>
                        <li><img src="http://ec2-35-180-116-78.eu-west-3.compute.amazonaws.com/img/team.svg" alt="team icon">Expert Team</li>
                    </ul>
                </h5>
                <h4 class="main__receipt__content__name">Cancellation policy:</h4>
                <h5 class="main__receipt__content__description">Phasellus volutpat neque a tellus venenatis, a euismod augue facilisis. Fusce ut metus mattis, consequat metus nec, luctus lectus. Pellentesque orci quis hendrerit sed eu dolor. Cancel up to 14 days to get a full refund.</h5>
            </div>
        </div>
    </div>
</main>

<footer>
    <div class="footer">
        <div class="footer__data">
            <div class="footer__data__logo">
                <h1>Hotel <span>Miranda</span></h1>
                <img src="http://ec2-35-180-116-78.eu-west-3.compute.amazonaws.com/img/footer_logo.svg">
            </div>
            <p class="footer__data__description">Thank you for trusting our services.</p>
            <div class="footer__data__social_media">
                <a class="footer__data__social_media__link" href="https://www.facebook.com/"><img src="http://ec2-35-180-116-78.eu-west-3.compute.amazonaws.com/img/facebook.svg"/></a>
                <a class="footer__data__social_media__link footer__data__social_media__link--twitter" href="https://www.twitter.com/"><img src="http://ec2-35-180-116-78.eu-west-3.compute.amazonaws.com/img/Twitter.svg"/></a>
                <a class="footer__data__social_media__link" href="https://www.behance.net/"><img src="http://ec2-35-180-116-78.eu-west-3.compute.amazonaws.com/img/Behance.svg"/></a>
                <a class="footer__data__social_media__link" href="https://es.linkedin.com/"><img src="http://ec2-35-180-116-78.eu-west-3.compute.amazonaws.com/img/Linkedin.svg"/></a>
                <a class="footer__data__social_media__link" href="https://www.youtube.com/"><img src="http://ec2-35-180-116-78.eu-west-3.compute.amazonaws.com/img/Youtube.svg"/></a>
            </div>
        </div>
    </div>
    <div class="footer__legal">
        <p class="footer__legal__text">Copyright By@Example - 2020</p>
        <p class="footer__legal__text">Terms of use | Privacy Environmental Policy</p>
    </div>
</footer>