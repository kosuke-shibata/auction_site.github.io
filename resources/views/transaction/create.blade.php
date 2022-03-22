@extends('layouts.app')

@section('content')
      <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">出品</div>
                    <div class="card-body">
                        <form method="POST" action="/create"  enctype="multipart/form-data">
                          @csrf
                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('出品者:') }}</label>
    
                                <div class="col-md-6">
                                    <select name="work[user_id]">
                                        <option value="{{Auth::user()->id}}">{{Auth::user()->name}}</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('タイトル:') }}</label>
    
                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="work[title]" value="{{ old('work.title') }}" required autocomplete="title" autofocus>
    
                                      @error('title')
                                        <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                        </span>
                                      @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('値段:') }}</label>
    
                                <div class="col-md-6">
                                    <select id="price" type="price" class="form-control @error('price') is-invalid @enderror" name="work[price]" value="{{ old('work.price') }}" required autocomplete="price">
                                      <option value="0">0</option>
                                      <option value="500">500</option>
                                      <option value="1000">1000</option>
                                      <option value="2000">2000</option>
                                      <option value="3000">3000</option>
                                      <option value="5000">5000</option>
                                      <option value="1000">10000</option>
                                    </select>
    
                                      @error('price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                      @enderror
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="body" class="col-md-4 col-form-label text-md-right">{{ __('商品説明:') }}</label>
                                <div class="col-md-6">
                                    <textarea id="body" type="text" class="form-control intro @error('body') is-invalid @enderror" name="work[body]" value="{{ old('work.body') }}" required autocomplete="off"></textarea>
    
                                      @error('body')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                      @enderror
                                </div>
                            </div>
                            
                            <div class="form-group row">
                              <label for="work_image" class="col-md-4 col-form-label text-md-right">{{ __('画像:') }}</label>
  
                              <div class="col-md-6">
                                  <input id="work_image" type="file" class="form-control @error('work_image') is-invalid @enderror" name="image_path" accept=".png, .jpg, .jpeg" multiple required autocomplete="work_image" autofocus>
  
                                      @error('work_image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                      @enderror
                              </div>
                            </div>
                            
                            <div class="form-group row">
                              <label for="work_file" class="col-md-4 col-form-label text-md-right">{{ __('ファイル:') }}</label>
  
                              <div class="col-md-6">
                                  <input id="work_file" type="file" class="form-control @error('work_file') is-invalid @enderror" name="file_path" multiple required autocomplete="work_file" autofocus>
  
                                      @error('work_image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                      @enderror
                              </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        出品する
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