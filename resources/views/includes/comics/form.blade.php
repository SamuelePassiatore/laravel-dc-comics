@if ($errors->any())
    <div class="alert-input alert-danger">
        <div>
            @foreach ($errors->all() as $error)
                <div>&blacksquare; {{ $error }}</div>
            @endforeach
        </div>
    </div>
@endif

@if ($comic->exists)
    <form method="POST" action="{{ route('comics.update', $comic->id) }}" novalidate>
        @method('PUT')
    @else
        <form method="POST" action="{{ route('comics.store', $comic->id) }}" novalidate>
@endif

{{-- Token csrf --}}
@csrf
<div class="display-flex inputs">
    <div class="inputs-div">
        <label for="title">Title</label>
        <input type="text" id="title" placeholder="Title" name="title" value="{{ old('title', $comic->title) }}"
            required>
    </div>
    <div class="inputs-div">
        <label for="series">Series</label>
        <input type="text" id="series" placeholder="Series" name="series" required
            value="{{ old('series', $comic->series) }}">
    </div>
</div>
<div class="display-flex inputs">
    <div class="inputs-div">
        <label for="type">Type</label>
        <select name="type" id="type">
            <option value="">Select type</option>
            <option @if (old('type', $comic->type) === 'comic book') selected @endif>comic book</option>
            <option @if (old('type', $comic->type) === 'graphic novel') selected @endif>graphic novel</option>
        </select>
    </div>
    <div class="inputs-div">
        <label for="price">Price</label>
        <input type="text" id="price" placeholder="Price" name="price"
            value="{{ old('price', $comic->price) }}">
    </div>
</div>
<div class="display-flex inputs">
    <div class="inputs-div-smaller">
        <label for="sale_date">Sale Date</label>
        <input type="text" id="sale_date" placeholder="Sale Date" name="sale_date"
            value="{{ old('sale_date', $comic->sale_date) }}">
    </div>
    <div class="inputs-div-thumb">
        <label for="thumb">Thumb</label>
        <input type="url" id="thumb" placeholder="Thumb" name="thumb"
            value="{{ old('thumb', $comic->thumb) }}">
    </div>
    <div class="inputs-div-img">
        <img src="{{ old('thumb', $comic->thumb ?? 'https://imgs.search.brave.com/bes1Md0cXSdhNwC5wGXnxjjkNY3FXM5VtRptWbPuJWw/rs:fit:400:300:1/g:ce/aHR0cHM6Ly93d3cu/bmFtZXByb3MuY29t/L2F0dGFjaG1lbnRz/L2VtcHR5LXBuZy44/OTIwOS8') }}"
            alt="default image" id="preview">
    </div>
</div>
<div class="inputs">
    <div>
        <label for="description">Description</label>
        <textarea class="description" name="description" id="description" placeholder="Description" rows="10">{{ old('description', $comic->description) }}</textarea>
    </div>
</div>

<div class="display-flex text-areas">
    <div class="text-areas-div">
        <label for="artists">Artists</label>
        <textarea class="list-names" name="artists" id="artists" placeholder="Artists" cols="30" rows="10">{{ old('artists', $comic->artists) }}</textarea>
    </div>
    <div class="text-areas-div">
        <label for="writers">Writers</label>
        <textarea class="list-names" name="writers" id="writers" placeholder="Writers" cols="30" rows="10">{{ old('writers', $comic->writers) }}</textarea>
    </div>
</div>
<div class="submit-button-div">
    <button class="a-button">SAVE</button>
</div>

</form>
