<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>first item</title>
    <link href="{{ secure_asset('css/style.css') }}" rel="stylesheet">
        
  </head>
  <body>
    <header>
      <h1 class="main_title"><a href="/"><img src="images/main-title.png" alt=""></a></h1>
      <div class="menu-command">
        <button class="menu-button">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <ul class="nav">
          <li><a href="">新規登録</a></li>
          <li><a href="">ログイン</a></li>
          <li><a href=""><img src="images/cart.png" alt=""></a></li>
        </ul>
      </div>
    </header>
    <main>
      <div id="work_detail">
        <div class="detail_img">
          <img src="images/Onsen-hotel-site2.png" alt="">
          <a href="" class="worker">〇〇〇〇</a>
        </div>
        <div class="detail_text">
          <h2 class="detail_title">〇〇〇〇</h2>
          <p class="price">¥０</p>
          <button class="btn">カートに入れる</button>
          <p class="detail_message">text.text.text.text.text.text.text.text.text.text.text.text.text.text.text.text.text.text.text.text.text.text.text.text.text.text.text.text.text.text.</p>
        </div>
      </div>
    </main>
    <footer>
      <small>©︎2022 first item</small>
    </footer>
  </body>
  </html>