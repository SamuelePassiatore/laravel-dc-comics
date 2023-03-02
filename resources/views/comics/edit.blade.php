@extends('layouts.main')

@section('title', 'New comics')

@section('content')
    <section class="new-comics container">
        <div class="new-comics-title">
            <h1>Add New Comics</h1>
            <a class="a-button" href="{{ route('comics.index') }}">Back to comics</a>
        </div>
        <div class="new-comics-form">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <div>
                        @foreach ($errors->all() as $error)
                            <div>&blacksquare; {{ $error }}</div>
                        @endforeach
                    </div>
                </div>
            @endif
            <form method="POST" action="{{ route('comics.store') }}" novalidate>
                {{-- Token csrf --}}
                @csrf
                <div class="display-flex inputs">
                    <div class="inputs-div">
                        <label for="title">Title</label>
                        <input type="text" id="title" placeholder="Title" name="title" value="{{ old('title') }}"
                            required>
                    </div>
                    <div class="inputs-div">
                        <label for="series">Series</label>
                        <input type="text" id="series" placeholder="Series" name="series" required
                            value="{{ old('series') }}">
                    </div>
                </div>
                <div class="display-flex inputs">
                    <div class="inputs-div">
                        <label for="type">Type</label>
                        <select name="type" id="type">
                            <option value="">Select type</option>
                            <option @if (old('type') === 'comic book') selected @endif>comic book</option>
                            <option @if (old('type') === 'graphic novel') selected @endif>graphic novel</option>
                        </select>
                    </div>
                    <div class="inputs-div">
                        <label for="price">Price</label>
                        <input type="text" id="price" placeholder="Price" name="price" value="{{ old('price') }}">
                    </div>
                </div>
                <div class="display-flex inputs">
                    <div class="inputs-div-smaller">
                        <label for="sale_date">Sale Date</label>
                        <input type="text" id="sale_date" placeholder="Sale Date" name="sale_date"
                            value="{{ old('sale_date') }}">
                    </div>
                    <div class="inputs-div-thumb">
                        <label for="thumb">Thumb</label>
                        <input type="url" id="thumb" placeholder="Thumb" name="thumb" value="{{ old('thumb') }}">
                    </div>
                    <div class="inputs-div-img">
                        <img src="https://imgs.search.brave.com/bes1Md0cXSdhNwC5wGXnxjjkNY3FXM5VtRptWbPuJWw/rs:fit:400:300:1/g:ce/aHR0cHM6Ly93d3cu/bmFtZXByb3MuY29t/L2F0dGFjaG1lbnRz/L2VtcHR5LXBuZy44/OTIwOS8"
                            alt="default image" id="preview">
                    </div>
                </div>
                <div class="inputs">
                    <div>
                        <label for="description">Description</label>
                        <textarea class="description" name="description" id="description" placeholder="Description" rows="10"></textarea>
                    </div>
                </div>

                <div class="display-flex text-areas">
                    <div class="text-areas-div">
                        <label for="artists">Artists</label>
                        <textarea class="list-names" name="artists" id="artists" placeholder="Artists" cols="30" rows="10">{{ old('artists') }}</textarea>
                    </div>
                    <div class="text-areas-div">
                        <label for="writers">Writers</label>
                        <textarea class="list-names" name="writers" id="writers" placeholder="Writers" cols="30" rows="10">{{ old('writers') }}</textarea>
                    </div>
                </div>
                <div class="submit-button-div">
                    <button class="a-button">SAVE</button>
                </div>

            </form>
        </div>
    </section>
@endsection

@section('scripts')
    @vite('resources/js/preview.js')
@endsection
