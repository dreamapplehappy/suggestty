<!--
______                            _              _                                     _
| ___ \                          | |            | |                                   | |
| |_/ /___ __      __ ___  _ __  | |__   _   _  | |      __ _  _ __  __ _ __   __ ___ | |
|  __// _ \\ \ /\ / // _ \| '__| | '_ \ | | | | | |     / _` || '__|/ _` |\ \ / // _ \| |
| |  | (_) |\ V  V /|  __/| |    | |_) || |_| | | |____| (_| || |  | (_| | \ V /|  __/| |
\_|   \___/  \_/\_/  \___||_|    |_.__/  \__, | \_____/ \__,_||_|   \__,_|  \_/  \___||_|
                                          __/ |
                                         |___/
  ========================================================

  --------------------------------------------------------
  Laravel: v4.2
-->

<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <title>
        @section('title')
        Suggestty
        @show
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="BirdEggegg">
    <meta name="description" content="">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    @yield('styles')
</head>
<body>
   @include('layouts.partials.nav') 
    <div class="container">
    @yield('body')
    </div>
   @include('layouts.partials.foot')
<script src="{{ asset('js/jquery-2.1.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
   @yield('scripts')
</body>
</html>
