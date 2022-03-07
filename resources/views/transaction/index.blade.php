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
      <section id="works_block">
        <div class="work_block">
          <a href="/work_detail.html">
            <img src="images/Onsen-hotel-site2.png" alt="">
            <div class="work_info">
              <p>テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。</p>
            </div>
          </a>
        </div>
        <div class="work_block">
          <a href="/work_detail.html">

            <img src="images/cosmetic-site.png" alt="">
            <div class="work_info">
              <p>テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。</p>
            </div>
          </a>
        </div>
        <div class="work_block">
          <a href="/work_detail.html">

            <img src="images/fishing-school.png" alt="">
            <div class="work_info">
              <p>テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。</p>
            </div>
          </a>
        </div>
        <div class="work_block">
          <a href="/work_detail.html">

            <img src="images/fishing-web.png" alt="">
            <div class="work_info">
              <p>テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。</p>
            </div>
          </a>
        </div>
        <div class="work_block">
          <a href="/work_detail.html">

            <img src="images/download (1).png" alt="">
            <div class="work_info">
              <p>テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。</p>
            </div>
          </a>
        </div>
        <div class="work_block">
          <a href="/work_detail.html">

            <img src="images/download (1).png" alt="">
            <div class="work_info">
              <p>テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。</p>
            </div>
          </a>
        </div>
        <div class="work_block">
          <a href="/work_detail.html">

            <img src="images/download (1).png" alt="">
            <div class="work_info">
              <p>テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。</p>
            </div>
          </a>
        </div>
        <div class="work_block">
          <a href="/work_detail.html">

            <img src="images/download (1).png" alt="">
            <div class="work_info">
              <p>テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。</p>
            </div>
          </a>
        </div>
        <div class="work_block">
          <a href="/work_detail.html">

            <img src="images/download (1).png" alt="">
            <div class="work_info">
              <p>テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。</p>
            </div>
          </a>
        </div>
      </section>
      <div id="paginate">
        <ul class="example">
          <li>前へ</li>
          <li>1</li>
          <li>2</li>
          <li>3</li>
          <li>次へ</li>
          </ul>
      </div>
      <section id="contact">
        <div class="form">
          <h3>CONTACT</h3>
          <form action="">
            <div>
              <p>NAME:<br>
                <input type="text" name="name" class="name">
              </p>
            </div>
            <div>
              <p>MAIL:<br>
                <input type="text" name="email" class="mail">
              </p>
            </div>
            <div>
              <p>MESSAGE:<br>
                <textarea name="message" id="message" class="message"></textarea>
              </p>
            </div>
            <input type="submit" value="SEND" class="submit">
          </form>
        </div>
      </section>
    </main> 
    <footer>
      <small>©︎2022 first item</small>
    </footer>
  </body>
</html>
