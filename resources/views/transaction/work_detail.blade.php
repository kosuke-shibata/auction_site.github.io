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
          <button class="btn">カートに入れる</button>
          <p class="detail_message">{{ $work->body }}</p>
        </div>
      </div>
@endsection