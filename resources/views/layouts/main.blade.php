<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="@yield('icon', asset('images/favicon.ico'))" type="image/x-icon">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css'
        integrity='sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=='
        crossorigin='anonymous' />
    <link rel="stylesheet" href="">
    <title>{{ env('APP_NAME') }} | @yield('title')</title>

    @vite('resources/js/app.js')
</head>

<body>
    @include('includes.header')
    <main>
        @include('includes.alert')
        @yield('content')
    </main>
    @include('includes.footer')

    @yield('scripts')
</body>

</html>
