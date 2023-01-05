<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet" />
        
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body>
        {{-- <div id="app"> --}}
            @include('includes.navbar')
            <div class="container">
                {{-- <div class="row">
                    <div class="col-12"> --}}
                        @include('includes.messages')
                            {{-- </div>
                    <div class="col-12"> --}}
                        @yield('content')
                    {{-- </div>
                </div> --}}
            </div>
        {{-- </div> --}}
    </body>
</html>


<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <main class="py-4">
            @include('includes.navbar')
            <div class="container">
                @include('includes.messages')
                @yield('content')
            </div>
        </main>
    </div>
</body>
</html>
