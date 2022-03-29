@extends('layouts.app')

@section('content')
<div id="order_info">
  <h2>ご購入</h2>
  <p class="order_text">ご購入いただきましてありがとうございます。
  <div class="order_detail_text">
     <dl>
          <dt>商品名</dt>
          <dd>{{ $order->work->title }}</dd>
          <dt>価格</dt>
          <dd>¥{{ $order->work->price }}</dd>
          <dt>商品説明</dt>
          <dd>{{ $order->work->body }}</dd>
          <dt>画像</dt>
          <dd><img src="{{ $order->work->image_path }}" alt=""></dd>
          <dt>ファイル</dt>
          <dd><a href="{{ $order->work->file_path }}">{{ $order->work->file_path }}</a></dd>
        </dl>
    <div class="cart_btn">
      <a class="btn" href="/">戻る</a>   
    </div>
  </div>
</div>
@endsection