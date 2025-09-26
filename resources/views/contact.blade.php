@extends('layouts.app')

@section('nav')
    <a href="/about-us">About Us</a>
    <a href="/rooms">Rooms</a>
    <a href="/offers">Offers</a>
    <a>Contact</a>
@endsection

@section('css-js')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('content')
<div class="main__header">
    <div class="main__header__bg_color">
        <div class="main__header__text">
            <h3 class="main__header__text--luxury">The Ultimate Luxury</h3>
            <h4 class="main__header__text--details">New Details</h4>
        </div>
        <p class="breadcrumbs">Home | <span>Blog</span></p>
    </div>
</div>
<div class="contact">
    <div class="contact__card">
        <img src="img/Messages.svg" alt="an envelope">
        <div class="contact__card__text">
            <pre>Email</pre>
            <pre>mirandahotel@example.com</pre>
            <pre>info@webmail.com</pre>
            <pre>jobs.webmail@mail.com</pre>
        </div>
        <p class="contact__card__number">01</p>
    </div>
    <div class="contact__card">
        <img src="img/Telephone.svg" alt="a telephone ringing">
        <div class="contact__card__text">
            <pre>Phone Number</pre>
            <pre>+987 876 765 76 577</pre>
            <pre>+97656 8675 7864 7</pre>
            <pre>+876 766 8675 765 6</pre>
        </div>
        <p class="contact__card__number">02</p>
    </div>
    <div class="contact__card">
        <img src="img/Address.svg" alt="a you are here icon">
        <div class="contact__card__text">
            <pre>Hotel Address</pre>
            <pre>19/A, Cirikon City hall</pre> <pre>Tower New York, NYC</pre>
        </div>
        <p class="contact__card__number">03</p>
    </div>
</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d69063.35860657314!2d-74.03526310427458!3d40.71683112727219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258fda88cefb3%3A0x7f1e88758d210007!2sAyuntamiento%20de%20Nueva%20York!5e0!3m2!1ses!2ses!4v1742299270612!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
<form action="">
    <label for="name">
        <input id="name" type="text" placeholder="Your full name">
    </label>
    <label for="phone">
        <input id="phone" type="text" placeholder="Add your phone number">
    </label>
    <label for="email">
        <input id="email" type="text" placeholder="Enter email address">
    </label>
    <label for="subject">
        <input id="subject" type="text" placeholder="Enter subject">
    </label>
    <label for="message">
        <textarea id="message" placeholder="Enter message" rows="7"></textarea>
    </label>
    <input type="submit" value="Send">
</form>
@endsection