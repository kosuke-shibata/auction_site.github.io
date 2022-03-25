@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">クレジットカード登録編集</div>
              <div class="card-body">
                  <form method="POST" action="{{ route('profile') }}">
                    @csrf
                      <div class="form-group row">
                          <label for="credit" class="col-md-4 col-form-label text-md-right">クレジットカード</label>

                          <div class="col-md-6">
                              <input id="credit" type="text" class="form-control @error('credit') is-invalid @enderror" name="credit" value="{{ old('credit') }}"  autocomplete="off">

                                  <span class="invalid-feedback" role="alert">
                                      <strong></strong>
                                  </span>
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