@extends('frontend.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
        <div class="card">
      
        @include('frontend.profile.setting.side')
      
        </div>
        </div><!--/col-9-->
        
        <div class="col-md-9">
          

                @if(session()->has('error'))
                    <span class="alert alert-danger">
                        <strong>{{ session()->get('error') }}</strong>
                    </span>
                @endif
                @if(session()->has('success'))
                    <span class="alert alert-success">
                        <strong>{{ session()->get('success') }}</strong>
                    </span>
                @endif
                <div class="card-body">
                    <form method="POST" action="{{ route('change.password') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label ">Current Password</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control @error('current_password') is-invalid @enderror" name="current_password" autocomplete="current_password">
                                @error('current_password')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label ">New Password</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="password">
                                @error('password')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label ">Password Confirmation</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" autocomplete="password_confirmation">
                                @error('password_confirmation')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-outline-primary">
                                    Change Password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
       
        </div><!--/col-9-->
    </div><!--/row-->                                                    
    </div><!--/row-->   
@endsection
