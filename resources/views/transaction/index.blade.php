<!DOCTYPE html>
@extends('layouts.app')　　　　　　　　　

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <body>
    <main>
      <section id="works_block">
        @foreach ($works as $work)
          <div class="work_block">
            <a href="/item/{{ $work->id }}">
              <img src="{{ $work->image }}" alt="">
              <div class="work_info">
                <h2>{{ $work->title }}</h2>
                <p>¥{{ $work->price }}</p>
              </div>
            </a>
          </div>
        @endforeach
        <!--<div class="work_block">-->
        <!--  <a href="/work_detail.html">-->

        <!--    <img src="images/cosmetic-site.png" alt="">-->
        <!--    <div class="work_info">-->
        <!--      <p>テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。</p>-->
        <!--    </div>-->
        <!--  </a>-->
        <!--</div>-->
        <!--<div class="work_block">-->
        <!--  <a href="/work_detail.html">-->

        <!--    <img src="images/fishing-school.png" alt="">-->
        <!--    <div class="work_info">-->
        <!--      <p>テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。</p>-->
        <!--    </div>-->
        <!--  </a>-->
        <!--</div>-->
        <!--<div class="work_block">-->
        <!--  <a href="/work_detail.html">-->

        <!--    <img src="images/fishing-web.png" alt="">-->
        <!--    <div class="work_info">-->
        <!--      <p>テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。</p>-->
        <!--    </div>-->
        <!--  </a>-->
        <!--</div>-->
        <!--<div class="work_block">-->
        <!--  <a href="/work_detail.html">-->

        <!--    <img src="images/download (1).png" alt="">-->
        <!--    <div class="work_info">-->
        <!--      <p>テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。</p>-->
        <!--    </div>-->
        <!--  </a>-->
        <!--</div>-->
        <!--<div class="work_block">-->
        <!--  <a href="/work_detail.html">-->

        <!--    <img src="images/download (1).png" alt="">-->
        <!--    <div class="work_info">-->
        <!--      <p>テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。</p>-->
        <!--    </div>-->
        <!--  </a>-->
        <!--</div>-->
        <!--<div class="work_block">-->
        <!--  <a href="/work_detail.html">-->

        <!--    <img src="images/download (1).png" alt="">-->
        <!--    <div class="work_info">-->
        <!--      <p>テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。</p>-->
        <!--    </div>-->
        <!--  </a>-->
        <!--</div>-->
        <!--<div class="work_block">-->
        <!--  <a href="/work_detail.html">-->

        <!--    <img src="images/download (1).png" alt="">-->
        <!--    <div class="work_info">-->
        <!--      <p>テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。</p>-->
        <!--    </div>-->
        <!--  </a>-->
        <!--</div>-->
        <!--<div class="work_block">-->
        <!--  <a href="/work_detail.html">-->

        <!--    <img src="images/download (1).png" alt="">-->
        <!--    <div class="work_info">-->
        <!--      <p>テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。</p>-->
        <!--    </div>-->
        <!--  </a>-->
        <!--</div>-->
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
@endsection