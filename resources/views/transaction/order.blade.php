@extends('layouts.app')

@section('content')
<div id="order_info">
  <h2>購入画面</h2>
  <p class="order_text">ご利用いただきましてありがとうございます。<br>個人情報に間違いがないか確認してください。</p>
  <div class="order_detail_text">
    <dl>
      <dt>お名前：</dt>
      <dd>〇〇〇〇</dd>
      <dt>Eメールアドレス：</dt>
      <dd>〇〇〇〇@gmail.com</dd>
      <dt>クレジットカード：</dt>
      <dd>123456789　<a href="credit_edit.html">※なければこちらからご登録お願いします。</a>
        </dd>
    </dl>
    <h3>注文一覧</h3>
    <table>
      <thead>
        <tr>
          <th>商品名</th>
          <th>価格</th>
          <th>数量</th>
          <th>合計</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>〇〇〇〇</td>
          <td>¥０</td>
          <td>１</td>
          <td>¥０</td>
        </tr>
      </tbody>
    </table>
    <div class="cart_btn">
      <a class="btn" href="cart.html">戻る</a>     
      <a class="btn" href="order_decision.html">購入を決定</a>     
    </div>
  </div>
</div>
@endsection