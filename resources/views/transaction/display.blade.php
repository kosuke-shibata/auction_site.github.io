@extends('layouts.app')

@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <body>
    <main>
      <section id="display_block">
        <dl>
          <dt>タイトル:</dt>
          <dd>{{ $work->title }}</dd>
          <dt>値段:</dt>
          <dd>¥{{ $work->price }}</dd>
          <dt>商品説明:</dt>
          <dd> {{ $work->body }}</dd>
          <dt>画像:</dt>
          <dd><img src="{{ $work_image->image }}" alt=""></dd>
          <dt>ファイル:</dt>
          <dd>{{ $work_file->file }}</dd>
        </dl>
      </section>
      <a class="edit" href="/create.html">編集する</a>
      <a class="return" href="/index.html">戻る</a>
    </main> 
    <footer>
      <small>©︎2022 first item</small>
    </footer>
  </body>
</html>