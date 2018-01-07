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
    <div id="app" class="app">
        <div>
            @include('layouts.nav')
        </div>
        @guest

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 hidden-xs">
                    <div class="jumboclass">
                        @include('layouts.jumbotron')
                    </div>
                </div>
            </div>
        </div>

        @else

        @endguest
        <div>
            @yield('content')
        </div>
        <div class="push"></div>
    </div>
    <div class="footer">
    @include('layouts.footer')
    </div>

    <!-- Scripts -->
    <!-- Latest compiled and minified JavaScript -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>


</body>
</html>
