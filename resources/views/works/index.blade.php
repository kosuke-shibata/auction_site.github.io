@extends('layouts.app')　　　　　　　　　

@section('content')
<section id="works_block">
  @foreach ($works as $work)
    <div class="work_block">
      <a href="/work/{{ $work->id }}">
        <img src="{{ $work->image_path }}" alt="">
        <div class="work_info">
          <h3>{{ $work->title }}</h3>
          <p>¥{{ $work->price }}</p>
        </div>
      </a>
    </div>
  @endforeach
</section>
<div id="paginate">
  {{ $works->links('pagination::default') }}
</div>
@endsection