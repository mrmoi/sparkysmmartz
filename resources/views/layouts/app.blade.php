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

        @include('layouts.nav')

        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="jumbotron custom_jumbotron">
                        <h1>Welcome to Sparky's Coffee!</h1>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>


        @yield('content')
        

    </div>

    @include('layouts.footer')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
