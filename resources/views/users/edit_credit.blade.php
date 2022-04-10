@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">クレジットカード登録編集</div>
               @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
              <div class="card-body">
                  <form method="POST" action="/myprofile/{{ $user->id }}/edit_credit" enctype="application/x-www-form-urlencoded">
                    @csrf
                    @method('PUT')
                      <div class="form-group row">
                          <label for="credit" class="col-md-4 col-form-label text-md-right">{{ __('クレジットカード') }}</label>

                          <div class="col-md-6">
                              <input id="credit" type="text" class="form-control @error('credit') is-invalid @enderror" name="credit" value="{{ old('credit') }}"  autocomplete="off">

                              @error('credit')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row mb-0">
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  登録
                              </button>
                          </div>
                      </div> 
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection