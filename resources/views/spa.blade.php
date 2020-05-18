<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{--  CSRF Token  --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{--  Scripts  --}}
    {{--  <script src="{{ asset('js/app.js') }}" defer></script>  --}}

    {{--  Fonts  --}}
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    {{--  Styles  --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,400|Playfair+Display&display=swap" rel="stylesheet">
</head>
<body>
    <div id="app">
        <main>
            <app></app>
        </main>
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>

<style>
    body {
        background-color: #eeeeee;
        min-height: 100vh;
    }
    /* #app {
        background-color: #fff;
    } */
    /* p {
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
    }
    a {
        font-family: 'Nunito', sans-serif;
        font-weight: 400;
    } */
</style>
