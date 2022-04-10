@extends('layouts.app')

@section('content')
<div id="cart_info">
  <h2>ショッピングカート</h2>
  <p class="cart_text">ショッピングカートの中には以下の商品が入っております。<br><span>※カートの中には１つの商品しか入れることができません。</span></p>
    @if ($cart == null)
      <div class="cart_detail_text">
        <p>ショッピングカートの中には何も入っておりません。</p>
        <form class="cart_btn" method="POST"   enctype="multipart/form-data">
          @csrf
          <a class="btn" href="/">戻る</a>       
        </form>
      </div>
    @else
      <div class="cart_img">
        <img src="{{ $cart->work->image_path }}" alt="">
      </div>
      <div class="cart_detail_text">
        <table>
          <thead>
            <tr>
              <th>商品名</th>
              <th>価格</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>{{ $cart->work->title }}</td>
              <td>¥{{ $cart->work->price }}</td>
            </tr>
          </tbody>
        </table>
        <form class="cart_btn" method="POST" action="/cart"  enctype="multipart/form-data">
          @csrf
          <a class="btn" href="/item/{{ $cart->work->id }}">戻る</a>     
          <button type="submit"><a class="btn">購入手続きに進む</a></button>    
        </form>
      </div>
    @endif
</div>
@endsection