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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        #indexPage{
            width: 100%;
            height: 100vh;
            background: url('forest.jpg');
            min-height: 100%;
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }
        a.midLink{
          margin: 48vh;
        }
    </style>
</head>
<body id=indexPage>
    <div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
        <div class="w3-display-topleft w3-padding-large w3-xlarge">
          LARAAPP
        </div>
        <a href="/welcome" class="w3-display-topright w3-padding-large w3-large">
            Home
        </a>
        <div>
          <a href="/login" class="midLink logged w3-button w3-blue shadow-lg">Login</a>
          <a href="/register" class="regist w3-button w3-blue shadow-lg">Signup</a>
        </div>

      
        <div class="w3-display-bottomright w3-padding-large">
          Powered by <a href="#" target="#">Laraap.com</a>
        </div>
      </div>
</body>
</html>