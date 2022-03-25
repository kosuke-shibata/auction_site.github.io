<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>first item</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer type=module></script>
    <script src="{{ asset('js/jquery.js') }}" defer type=module></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ secure_asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header>
          <h1 class="main_title"><a href="/"><img src="https://auctionworksbucket.s3.ap-northeast-1.amazonaws.com/public/images/main-title.png" alt=""></a></h1>
          <div class="menu-command">
            <button class="menu-button">
              <span></span>
              <span></span>
              <span></span>
            </button>
            @if(Auth::check())
            <ul class="nav">
              <li><a href="/create">出品する</a></li>
              <li><a href="/profile/{{Auth::user()->id }}">
                @if(Auth::user()->image_path == null)
                <img src="https://auctionworksbucket.s3.ap-northeast-1.amazonaws.com/public/images/profile_image.png" alt="">
                @else
                <img src="{{Auth::user()->image_path}}" alt="">
                @endif
              </a></li>
              <li><a href="/cart"><img src="https://auctionworksbucket.s3.ap-northeast-1.amazonaws.com/public/images/cart.png" alt=""></a></li>
              <li>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                      {{ __('ログアウト') }}
                  </a>
  
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                </div>
              </li>
            </ul>
            @else
            <ul class="nav">
              <li><a href="/register">新規登録</a></li>
              <li><a href="/login">ログイン</a></li>
              <li><a href="/login"><img src="https://auctionworksbucket.s3.ap-northeast-1.amazonaws.com/public/images/cart.png" alt=""></a></li>
            </ul>
            @endif
          </div>
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
          <small>©︎2022 first item</small>
        </footer>
    </div>
</body>
</html>
