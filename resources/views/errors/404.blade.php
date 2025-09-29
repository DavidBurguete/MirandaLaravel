@extends('layouts.app')

@section('nav')
    <a href="/about-us">About Us</a>
    <a href="/rooms">Rooms</a>
    <a href="/offers">Offers</a>
    <a href="/contact">Contact</a>
@endsection

@section('css-js')
    <link rel="stylesheet" href="{{ asset('css/error.css') }}">
@endsection

@section('content')
<div class="main__header">
    <div class="main__header__bg_color">
        <div class="main__header__text">
            <h3 class="main__header__text--luxury">Error 404: Page Not Found</h3>
            <h4 class="main__header__text--details">Oops!</h4>
        </div>
        <p class="breadcrumbs">Error | <span>Not Found</span></p>
    </div>
</div>
<div class="error">
    <h1 class="error__header">We are sorry</h1>
    <h2 class="error__main">We couldn't find the page you requested</h2>
</div>
@endsection