<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{--{{ config('app.name', 'Laravel') }}--}}
        Sparky's Coffee House
    </title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">

        <div>
            @include('layouts.nav')
        </div>

        @guest
        <div class="jumboclass">
            @include('layouts.jumbotron')
        </div>
        @else

        @endguest
        <div>
            @yield('content')
        </div>

    </div>

    @include('layouts.footer')

    <!-- Scripts -->
    <!-- Latest compiled and minified JavaScript -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>


</body>
</html>
