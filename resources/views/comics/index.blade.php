@extends('layouts.main')

@section('title', 'Comics')

@section('content')
    <section id="comics">
        {{-- Main comics top --}}
        <div class="main-comics-top">
            <div class="container">
                <h2>CURRENT SERIES</h2>
                <div class="comics-card-container">
                    @foreach ($comics as $comic)
                        <div class="comics-series-card">
                            <a class="a-button button-edit" href="{{ route('comics.edit', $comic->id) }}">Edit Comic</a>
                            <a href="{{ route('comics.show', $comic->id) }}"><img src="{{ $comic['thumb'] }}"
                                    alt="{{ $comic['title'] }}"></a>
                            <h6>{{ $comic['series'] }}</h6>
                        </div>
                    @endforeach
                </div>
                <div class="comics-button">
                    <a class="a-button" href="{{ route('comics.create') }}">ADD COMICS</a>
                </div>
            </div>
        </div>
        {{-- Main home bottom --}}
        <div class="main-comics-bottom">
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
