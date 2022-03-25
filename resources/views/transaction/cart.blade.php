@extends('layouts.app')

@section('content')
<div id="cart_info">
  <h2>ショッピングカート</h2>
  <p class="cart_text">ショッピングカートの中には以下の商品が入っております。<br><span>※カートの中には１つの商品しか入れることができません。</span></p>
  <div class="cart_img">
    <img src="images/Onsen-hotel-site2.png" alt="">
  </div>
  <div class="cart_detail_text">
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
      <a class="btn" href="work_detail.html">戻る</a>     
      <a class="btn" href="order.html">購入続きに進む</a>     
    </div>
  </div>
</div>
@endsection