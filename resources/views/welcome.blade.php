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

        @include('modals.application')

        <div id="app">
            <section id="main" class="section">
                Hotelmay
                <a href="#" class="btn_scroll_to" data-anchor="rooms">Scroll to rooms</a>
                <a href="#" class="btn_show_modal" data-modal="application">Application</a>
            </section>
            <section id="rooms" class="section">
                Rooms
                @foreach($rooms as $room)
                    <h1>{{$room->title}}</h1>
                @endforeach
            </section>
        </div>


    </body>

</html>
