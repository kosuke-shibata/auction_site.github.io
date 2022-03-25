@extends('layouts.app')

@section('content')
<section id="profile_info">
  <h2>プロフィール</h2>
  <a class="edit" href="edit.html">プロフィール編集</a>
  <a class="edit" href="credit_edit.html">クレジットカード登録編集</a>
  <a class="edit" href="email&passwork_edit.html">ログイン情報編集</a>
  <div class="profile_text">
    <div class="profile_image">
      <img src="images/profile_image.png" alt="">
    </div>
    <div class="profile_message">
      <dl>
        <dt>名前: </dt>
        <dd>柴田光祐</dd>
        <dt>自己紹介: </dt>
        <dd>こんにちは。</dd>
        <dt>ポートフォリオ: </dt>
        <dd>〜〜〜〜〜〜〜〜〜〜〜</dd>
        <dt>SNS: </dt>
        <dd>〜〜〜〜〜〜〜〜〜〜〜</dd>
      </dl>
    </div>
  </div>
  <div class="profile_works">
    <h3>成果物</h3>
    <div class="profile_blocks">
      <div class="profile_block">
        <img src="images/cosmetic-site.png" alt="">
      </div>
      <div class="profile_block">
        <img src="images/cosmetic-site.png" alt="">
      </div>
      <div class="profile_block">
        <img src="images/cosmetic-site.png" alt="">
      </div>
    </div>
  </div>
  <div class="profile_purchase_histories">
    <h3>購入履歴</h3>
    <div class="profile_blocks">
      <div class="profile_block">
        <img src="images/Onsen-hotel-site2.png" alt="">
      </div>
      <div class="profile_block">
        <img src="images/Onsen-hotel-site2.png" alt="">
      </div>
      <div class="profile_block">
        <img src="images/Onsen-hotel-site2.png" alt="">
      </div>
    </div>
  </div>
</section>
@endsection