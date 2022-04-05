@extends('layouts.app')

@section('content')
<div id="order_info">
  <h2>購入画面</h2>
  <p class="order_text">ご利用いただきましてありがとうございます。<br>個人情報に間違いがないか確認してください。</p>
  <div class="order_detail_text">
    <dl>
      <dt>お名前：</dt>
      <dd>{{ $order->user->name }}</dd>
      <dt>Eメールアドレス：</dt>
      <dd>{{ $order->user->email }}</dd>
      <dt>クレジットカード：</dt>
      <dd>{{ $order->user->credit }}<a href="/myprofile/{{ $order->user->id }}/edit_credit"><span>※なければこちらからご登録お願いします。</span></a></dd>
      <p class="credit_text" style="color: red;"></p>
    </dl>
    <h3>注文一覧</h3>
    <table>
      <thead>
        <tr>
          <th>商品名</th>
          <th>価格</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{ $order->work->title }}</td>
          <td>¥{{ $order->work->price }}</td>
        </tr>
      </tbody>
    </table>
    <form class="cart_btn" method="POST" action="/order"  enctype="multipart/form-data">
      @csrf
      <a class="btn" href="/cart/{{ $order->user->id }}">戻る</a>
      @if (!is_null($order->user->credit))
      <button type="submit"><a class="btn">購入を決定</a></button>
      @else
      <button type="submit" disabled><a class="btn" style="opacity: 0.7;">購入を決定</a></button>
      @endif
    </form>
  </div>
</div>
@endsection