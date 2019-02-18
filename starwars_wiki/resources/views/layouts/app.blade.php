<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Starwars wiki</title>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'starwars') }}</title>

        <!-- Scripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('/js/jquery.js') }}"></script>
        <script src="{{ asset('/js/loader.js') }}"></script>
        <script src="{{ asset('/js/jquery.js') }}"></script>
        <script src="{{ asset('/js/starwars.js')}}" charset="utf-8"></script>
        <script src="{{ asset('/js/get_ships.js')}}" charset="utf-8"></script>
        <script src="{{ asset('/js/get_movies.js')}}" charset="utf-8"></script>
        <script src="{{ asset('/js/get_registers.js')}}" charset="utf-8"></script>
        <script src="{{ asset('/js/sweetalert.min.js') }}"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <!-- Include this after the sweet alert js file -->
        @include('sweet::alert')

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/home.css') }}" rel="stylesheet">
        <link href="{{ asset('css/loader.css') }}" rel="stylesheet">
        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">

        <!-- Morris -->
      <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
      <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

    </head>
    <body>
      <div class="loader-page"> </div>
      <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-color:black;position: sticky;top: 0;z-index: 1;">
            <div class="container">
                <a class="navbar-brand" href=href="{{ Route('home') }}" style="color:#ffff;">
                  <a href="{{ Route('home') }}"  class="navbar-left"><img style="max-width:100px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Star_Wars_Logo.svg/1280px-Star_Wars_Logo.svg.png"></a>
                </a>
                <button style="color:#ffff;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <i class="fas fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul style="color:#ffff;" class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item">
                          <a class="nav-link" style="color:#ffff;" href="{{ Route('home') }}"><i class="fas fa-home"></i></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" style="color:#ffff;" href="{{ Route('movies') }}"><i class="fas fa-film"></i></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" style="color:#ffff;" href="{{ Route('registros') }}"><i class="fas fa-clipboard-list"></i></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" style="color:#ffff;" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Más <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{ Route('datos_json' )}}">
                                API obtener datos Json
                              </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
      </div>
    </body>
</html>
