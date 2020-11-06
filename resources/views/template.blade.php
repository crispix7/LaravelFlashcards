<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel flashcards</title>

        <link rel="stylesheet" href="{{ asset('/css/app.css') }}" />
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}" />
        <script defer src="{{ mix('/js/app.js') }}"></script>
    </head>
    <body>
        <div id="app">
        @include('includes/nav')

        @yield('content')
        </div>
        <script src="{{ asset('/js/app.js') }}"></script>
    </body>
</html>
