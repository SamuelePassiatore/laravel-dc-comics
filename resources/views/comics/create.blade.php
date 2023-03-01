@extends('layouts.main')

@section('title', 'New comics')

@section('content')
    <section class="new-comics container">
        <div class="new-comics-title">
            <h1>Add New Comics</h1>
            <a class="a-button" href="{{ route('comics.index') }}">Back to comics</a>
        </div>
        <div class="new-comics-form">
            <form action="">
                <div class="display-flex inputs">
                    <div class="inputs-div">
                        <label for="">Title</label>
                        <input type="text">
                    </div>
                    <div class="inputs-div">
                        <label for="">Series</label>
                        <input type="text">
                    </div>
                </div>
                <div class="display-flex inputs">
                    <div class="inputs-div">
                        <label for="">Type</label>
                        <select name="" id=""></select>
                    </div>
                    <div class="inputs-div">
                        <label for="">Price</label>
                        <input type="text">
                    </div>
                </div>
                <div class="display-flex inputs">
                    <div class="inputs-div">
                        <label for="">Sale Date</label>
                        <input type="date">
                    </div>
                    <div class="inputs-div">
                        <label for="">Image</label>
                        <input type="url">
                    </div>
                </div>
                <div class="inputs">
                    <div>
                        <label for="">Description</label>
                        <textarea class="description" name="" id="" rows="10"></textarea>
                    </div>
                </div>

                <div class="display-flex text-areas">
                    <div class="text-areas-div">
                        <label for="">Artists</label>
                        <textarea class="list-names" name="" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="text-areas-div">
                        <label for="">Writers</label>
                        <textarea class="list-names" name="" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
