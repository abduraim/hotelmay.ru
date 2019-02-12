<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hotelmay</title>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Styles -->
        <link rel="stylesheet" href="{{mix('/css/app.css')}}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

    </head>
    <body>

        <div id="app">

            @include('modals.application')

            @include('modals.room')

            @include('components.top_menu')

            @include('components.floating_menu')

            @include('sections.main')

            @include('sections.benefits')

            @include('sections.rooms')

            @include('sections.reviews')

            @include('sections.contacts')

        </div>


    </body>

</html>
