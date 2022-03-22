@extends('layouts.app')

@section('content')
    <section id="profile_info">
      <h2>プロフィール</h2>
      @if(Auth::check())
      <a class="edit" href="/edit">編集する</a>
      @else
      @endif
      <div class="profile_text">
        <div class="profile_image">
          <img src="{{ $user->image_path }}" alt="">
        </div>
        <div class="profile_message">
          <dl>
            <dt>名前: </dt>
            <dd>{{ $user->name }}</dd>
            <dt>自己紹介: </dt>
            <dd>{{ $user->introduce }}</dd>
            <dt>ポートフォリオ: </dt>
            <dd>{{ $user->portfolio }}</dd>
            <dt>SNS: </dt>
            <dd>{{ $user->sns }}</dd>
          </dl>
        </div>
      </div>
      <div class="profile_works">
        <h3>成果物</h3>
        <div class="profile_blocks">
          @foreach ($works as $work)
          <div class="profile_block">
            <a href="/item/{{ $work->id }}"><img src="{{ $work->image_path }}" alt=""></a>
          </div>
          @endforeach
        </div>
      </div>
      <div class="profile_purchase_histories">
        <h3>購入履歴</h3>
        <div class="profile_blocks">
          <div class="profile_block">
            <img src="" alt="">
          </div>
          <div class="profile_block">
            <img src="" alt="">
          </div>
          <div class="profile_block">
            <img src="" alt="">
          </div>
        </div>
      </div>
    </section>
@endsection