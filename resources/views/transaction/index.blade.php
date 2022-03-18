<!DOCTYPE html>
@extends('layouts.app')　　　　　　　　　

@section('content')
      <section id="works_block">
        @foreach ($works as $work)
          <div class="work_block">
            <a href="/item/{{ $work->id }}">
              <img src="{{ $work->image_path }}" alt="">
              <div class="work_info">
                <h2>{{ $work->title }}</h2>
                <p>¥{{ $work->price }}</p>
              </div>
            </a>
          </div>
        @endforeach
      </section>
      <div id="paginate">
        {{ $works->links('pagination::default') }}
      </div>
      <section id="contact">
        <div class="form">
          <h3>CONTACT</h3>
          <form action="">
            <div>
              <p>NAME:<br>
                <input type="text" name="name" class="name">
              </p>
            </div>
            <div>
              <p>MAIL:<br>
                <input type="text" name="email" class="mail">
              </p>
            </div>
            <div>
              <p>MESSAGE:<br>
                <textarea name="message" id="message" class="message"></textarea>
              </p>
            </div>
            <input type="submit" value="SEND" class="submit">
          </form>
        </div>
      </section>
@endsection