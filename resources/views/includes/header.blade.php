@php
    $links = config('menu');
@endphp

<div class="header-top">
    <div class="container header-top-content">
        <div class="header-top-power">DC POWER℠ VISA®</div>
        <div class="header-top-additional">ADDITIONAL DC SITES
            <span class="triangle-down">&blacktriangledown;</span>
        </div>
    </div>
</div>
<header class="container">
    <figure>
        <a href="{{ url('/') }}"><img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo dc comics"></a>
    </figure>
    <ul>
        @foreach ($links as $link)
            <li>
                <a href="{{ route($link['route_name']) }}"
                    class="{{ Str::startsWith(request()->url(), route($link['route_name'])) ? 'active' : '' }}">
                    {!! $link['text'] !!}
                </a>
            </li>
        @endforeach
    </ul>
    <div class="input-group">
        <form action="{{ route('comics.index') }}" method="GET">
            <input type="text" placeholder="Search" name="search">
            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
    </div>
</header>
<div class="jumbotron"></div>
