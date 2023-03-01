@extends('layouts.main')

@section('title', $comic->title)

@section('content')
    <section id="comics-details">
        <div class="main-show-top">
            <div class="container main-top-container">
                <div class="main-top-card">
                    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                    <div class="label-top">{{ $comic->type }}</div>
                    <div class="label-bottom">VIEW GALLERY</div>
                </div>
            </div>
        </div>
        <div class="main-show-center">
            <div class="container main-center-container">
                <div class="main-center-elements">
                    <div class="elements-text">
                        <h1>{{ $comic->title }}</h1>
                        <div class="row-price">
                            <div class="row-price-general row-price-left">
                                <div class="light-green">U.S. Price: <span class="color-white">{{ $comic->price }}</span>
                                </div>
                                <div class="light-green">AVAILABLE</div>
                            </div>
                            <div class="row-price-general row-price-right color-white">Check
                                Availability &blacktriangledown;
                            </div>
                        </div>
                        <div class="description-container">
                            <p>{{ $comic->description }}</p>
                        </div>
                    </div>

                    <div class="elements-img">
                        <div class="elements-img-text">ADVERTISEMENT</div>
                        <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="digital">
                    </div>
                </div>
            </div>
        </div>
        <div class="main-show-bottom">
            <div class="container main-bottom-container">
                <div class="talents">
                    <h3 class="talents-title">Talent</h3>
                    <div class="talents-content">
                        <div class="name-paragraph">Art by:</div>
                        <div class="content-paragraph">{{ $comic->artists }}</div>
                    </div>
                    <div class="talents-content">
                        <div class="name-paragraph">Written by:</div>
                        <div class="content-paragraph">{{ $comic->writers }}</div>
                    </div>
                </div>
                <div class="specs">
                    <h3 class="specs-title">Specs</h3>
                    <div class="specs-content">
                        <div class="name-paragraph">Series:</div>
                        <div class="content-paragraph text-uppercase">{{ $comic->series }}</div>
                    </div>
                    <div class="specs-content">
                        <div class="name-paragraph">U.S. Price:</div>
                        <div class="content-paragraph color-grey">{{ $comic->price }}</div>
                    </div>
                    <div class="specs-content">
                        <div class="name-paragraph">On Sale Date:</div>
                        <div class="content-paragraph color-grey">{{ date('M d Y', strtotime($comic->sale_date)) }}</div>
                    </div>
                </div>
            </div>
            <div class="main-bottom-images">
                <div class="main-bottom-images-content"></div>
                <div class="main-bottom-images-content d-flex">
                    <div class="text">DIGITAL COMICS</div>
                    <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="digital comics">
                </div>
                <div class="main-bottom-images-content d-flex">
                    <div class="text">SHOP DC</div>
                    <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="shop dc">
                </div>
                <div class="main-bottom-images-content d-flex">
                    <div class="text">COMIC SHOP LOCATOR</div>
                    <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="comic shop locator">
                </div>
                <div class="main-bottom-images-content d-flex">
                    <div class="text">SUBSCRIPTIONS</div>
                    <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="subscriptions">
                </div>
                <div class="main-bottom-images-content no-border"></div>
            </div>
        </div>
    </section>
@endsection
