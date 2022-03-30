@extends('layouts.app')

@section('content')
<section id="display_block">
<dl>
  <dt>タイトル:</dt>
  <dd>{{ $work->title }}</dd>
  <dt>値段:</dt>
  <dd>¥{{ $work->price }}</dd>
  <dt>商品説明:</dt>
  <dd> {{ $work->body }}</dd>
  <dt>画像:</dt>
  <dd><img src="{{ $work->image_path }}" alt=""></dd>
  <dt>ファイル:</dt>
  <dd><a href="{{ $work->file_path }}">{{ $work->file_path }}</a></dd>
</dl>
</section>
<a class="edit" href="/create/{{ $work->id }}/edit">編集する</a>
<a class="return" href="/">戻る</a>
<form action="/create/{{ $work->id }}" id="form_delete" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" class="delete">削除する</button>  
</form>
@endsection