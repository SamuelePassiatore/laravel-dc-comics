@extends('layouts.main')

@section('title', 'Home')

@section('content')
    <section id="home">
        {{-- Main home top --}}
        <div class="main-home-top">
            <div class="container">
                <h2>CURRENT SERIES</h2>
                <div class="home-card-container">
                    @foreach ($comics as $comic)
                        <div class="home-series-card">
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                            <h6>{{ $comic['series'] }}</h6>
                        </div>
                    @endforeach
                </div>
                <div class="home-button">
                    <button>LOAD MORE</button>
                </div>
            </div>
        </div>
        {{-- Main home bottom --}}
        <div class="main-home-bottom">
            <div class="container">
                <ul>
                    <li>
                        <a href="#">
                            <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="digital">
                            <span>DIGITAL COMICS</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="merchandise">
                            <span>DC MERCHANDISE</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="subscription">
                            <span>SUBSCRIPTION</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="shop">
                            <span>COMIC SHOP LOCATOR</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="power visa">
                            <span>DC POWER VISA</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection
