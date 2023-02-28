@extends('layouts.main')

@section('title', $comic->title)

@section('content')
    <section id="comics-details">
        <div class="main-show-top">
            <div class="container main-top-container">
                <div class="main-top-card">
                    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                    <div class="label-top">COMIC BOOK</div>
                    <div class="label-bottom">VIEW GALLERY</div>
                </div>
            </div>
        </div>
        <div class="main-show-bottom container">
            <h1>{{ $comic->title }}</h1>
        </div>
    </section>
@endsection
