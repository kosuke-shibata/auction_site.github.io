<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>first item</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ secure_asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header>
          <h1 class="main_title"><a href="/"><img src="images/main-title.png" alt=""></a></h1>
          <div class="menu-command">
            <button class="menu-button">
              <span></span>
              <span></span>
              <span></span>
            </button>
            <ul class="nav">
              <li><a href="/register">新規登録</a></li>
              <li><a href="/login">ログイン</a></li>
              <li><a href=""><img src="images/cart.png" alt=""></a></li>
            </ul>
          </div>
        </header>
        <!--<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">-->
        <!--    <div class="container">-->
        <!--        <a class="navbar-brand" href="{{ url('/') }}">-->
        <!--            {{ config('app.name', 'Laravel') }}-->
        <!--        </a>-->
        <!--        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">-->
        <!--            <span class="navbar-toggler-icon"></span>-->
        <!--        </button>-->

        <!--        <div class="collapse navbar-collapse" id="navbarSupportedContent">-->
                    <!-- Left Side Of Navbar -->
        <!--            <ul class="navbar-nav mr-auto">-->

        <!--            </ul>-->

                    <!-- Right Side Of Navbar -->
        <!--            <ul class="navbar-nav ml-auto">-->
                        <!-- Authentication Links -->
        <!--                @guest-->
        <!--                    <li class="nav-item">-->
        <!--                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>-->
        <!--                    </li>-->
        <!--                    @if (Route::has('register'))-->
        <!--                        <li class="nav-item">-->
        <!--                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>-->
        <!--                        </li>-->
        <!--                    @endif-->
        <!--                @else-->
        <!--                    <li class="nav-item dropdown">-->
        <!--                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>-->
        <!--                            {{ Auth::user()->name }} <span class="caret"></span>-->
        <!--                        </a>-->

        <!--                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">-->
        <!--                            <a class="dropdown-item" href="{{ route('logout') }}"-->
        <!--                               onclick="event.preventDefault();-->
        <!--                                             document.getElementById('logout-form').submit();">-->
        <!--                                {{ __('Logout') }}-->
        <!--                            </a>-->

        <!--                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">-->
        <!--                                @csrf-->
        <!--                            </form>-->
        <!--                        </div>-->
        <!--                    </li>-->
        <!--                @endguest-->
        <!--            </ul>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</nav>-->

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
