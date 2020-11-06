<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel flashcards</title>

        <link href="{{ asset('/css/app.css') }}" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div id="app"></div>
        <script src="https://unpkg.com/vue"></script>
        <script>
          new Vue({
            el: '#app',
            created() {
              // This code will run on startup
            }
          });
        </script>
        @include('includes/nav')

        @yield('content')
        <script src="{{ asset('/js/app.js') }}"></script>
    </body>
</html>
