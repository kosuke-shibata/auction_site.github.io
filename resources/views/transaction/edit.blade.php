@extends('layouts.app')

@section('content')
    <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">プロフィール編集</div>
                  <div class="card-body">
                      <form method="POST" action="/profile">
  
                          <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right">名前</label>
  
                              <div class="col-md-6">
                                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ Auth::user()->name }}" required autocomplete="name" autofocus>
  
                                      <span class="invalid-feedback" role="alert">
                                          <strong></strong>
                                      </span>
                              </div>
                          </div>

                          <div class="form-group row">
                            <label for="image_path" class="col-md-4 col-form-label text-md-right">プロフィール画像</label>

                            <div class="col-md-6">
                                <input id="image_path" type="file" class="form-control @error('image_path') is-invalid @enderror" name="image_path" accept=".png, .jpg, .jpeg" required autocomplete="image_path" autofocus>

                                    <span class="invalid-feedback" role="alert">
                                        <strong></strong>
                                    </span>
                            </div>
                          </div>
  
                          <div class="form-group row">
                              <label for="email" class="col-md-4 col-form-label text-md-right">Eメールアドレス</label>
  
                              <div class="col-md-6">
                                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email }}" required autocomplete="email">
  
                                      <span class="invalid-feedback" role="alert">
                                          <strong></strong>
                                      </span>
                              </div>
                          </div>
                          
                          <div class="form-group row">
                              <label for="introduce" class="col-md-4 col-form-label text-md-right">自己紹介</label>
                              <div class="col-md-6">
                                  <textarea id="introduce" type="text" class="form-control intro @error('introduce') is-invalid @enderror" name="introduce"  required autocomplete="off">{{ Auth::user()->introduce }}</textarea>
  
                                      <span class="invalid-feedback" role="alert">
                                          <strong></strong>
                                      </span>
                              </div>
                          </div>
                          
                          <div class="form-group row">
                              <label for="portfolio" class="col-md-4 col-form-label text-md-right">ポートフォリオ</label>
  
                              <div class="col-md-6">
                                  <input id="portfolio" type="text" class="form-control @error('portfolio') is-invalid @enderror" name="portfolio" value="{{ Auth::user()->portfolio }}" autocomplete="off">
  
                                      <span class="invalid-feedback" role="alert">
                                          <strong></strong>
                                      </span>
                              </div>
                          </div>
                          
                          <div class="form-group row">
                              <label for="sns" class="col-md-4 col-form-label text-md-right">SNS</label>
  
                              <div class="col-md-6">
                                  <input id="sns" type="text" class="form-control @error('sns') is-invalid @enderror" name="sns" value="{{ Auth::user()->sns }}" autocomplete="off">
  
                                      <span class="invalid-feedback" role="alert">
                                          <strong></strong>
                                      </span>
                              </div>
                          </div>
                          
                          <div class="form-group row">
                              <label for="credit" class="col-md-4 col-form-label text-md-right">クレジットカード</label>
  
                              <div class="col-md-6">
                                  <input id="credit" type="text" class="form-control @error('credit') is-invalid @enderror" name="credit" value="{{ Auth::user()->credit }}"  autocomplete="off">
  
                                      <span class="invalid-feedback" role="alert">
                                          <strong></strong>
                                      </span>
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
  
                              <div class="col-md-6">
                                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
  
                                      <span class="invalid-feedback" role="alert">
                                          <strong></strong>
                                      </span>
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
  
                              <div class="col-md-6">
                                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
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
  