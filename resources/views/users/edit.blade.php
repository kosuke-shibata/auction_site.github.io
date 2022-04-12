@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">プロフィール編集</div>
              
              <div class="card-body">
                  <form method="POST" action="/profile/{{ $user->id }}/edit" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                      <div class="form-group row">
                          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('名前') }}<span>※必須</span></label>

                          <div class="col-md-6">
                              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ Auth::user()->name }}" required autocomplete="name" autofocus>

                                  @error('name')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                          </div>
                      </div>
                      
                      <div class="form-group row">
                          <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Eメールアドレス') }}<span>※必須</span></label>

                          <div class="col-md-6">
                              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                              @error('email')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="image_path" class="col-md-4 col-form-label text-md-right">{{ __('プロフィール画像') }}</label>

                        <div class="col-md-6">
                            <input id="image_path" type="file" class="form-control @error('image_path') is-invalid @enderror" name="image_path"  autocomplete="off">

                                @error('image_path')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                      </div>
                      
                      <div class="form-group row">
                          <label for="introduce" class="col-md-4 col-form-label text-md-right">{{ __('自己紹介') }}<span>※必須</span></label>
                          <div class="col-md-6">
                              <textarea id="introduce" type="text" class="form-control intro @error('introduce') is-invalid @enderror" name="introduce"  required autocomplete="off">{{ Auth::user()->introduce }}</textarea>

                                  @error('introduce')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                          </div>
                      </div>
                      
                      <div class="form-group row">
                          <label for="portfolio" class="col-md-4 col-form-label text-md-right">{{ __('ポートフォリオ') }}</label>

                          <div class="col-md-6">
                              <input id="portfolio" type="text" class="form-control @error('portfolio') is-invalid @enderror" name="portfolio" value="{{ Auth::user()->portfolio }}" autocomplete="off">

                                  @error('portfolio')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                          </div>
                      </div>
                      
                      <div class="form-group row">
                          <label for="sns" class="col-md-4 col-form-label text-md-right">{{ __('SNS') }}</label>

                          <div class="col-md-6">
                              <input id="sns" type="text" class="form-control @error('sns') is-invalid @enderror" name="sns" value="{{ Auth::user()->sns }}" autocomplete="off">

                                  @error('sns')
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
  