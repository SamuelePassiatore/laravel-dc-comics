@extends('layouts.main')

@section('title', 'Edit comic')

@section('content')
    <section class="new-comics container">
        <div class="new-comics-title">
            <h1>Edit Comic</h1>
            <a class="a-button" href="{{ route('comics.index') }}">Back to comics</a>
        </div>
        <div class="new-comics-form">
            @include('includes.comics.form')
        </div>
    </section>
@endsection

@section('scripts')
    @vite('resources/js/preview.js')
@endsection
