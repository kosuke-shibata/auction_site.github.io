<!DOCTYPE html>
@extends('layouts.app')

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <body>
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
@endsection