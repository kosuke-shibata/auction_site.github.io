<!DOCTYPE html>
@extends('layouts.app')

@section('content')
<div id="work_detail">
  <div class="detail_img">
    <img src="{{ $work->image_path }}" alt="">
    <a href="/profile/{{ $work->user->id }}" class="worker">{{ $work->user->name }}</a>
  </div>
  <div class="detail_text">
    <h2 class="detail_title">{{ $work->title }}</h2>
    <p class="price">¥{{ $work->price }}</p>
    @if(Auth::check())
    <form method="POST" action="/work/{{ $work->id }}"  enctype="multipart/form-data">
      @csrf
      <button type="submit" class="btn">カートに入れる</button>
    </from>
    @else
      <button class="btn"><a href="/login">カートに入れる</a></button>
    @endif
    <p class="detail_message">{{ $work->body }}</p>
  </div>
</div>
@endsection