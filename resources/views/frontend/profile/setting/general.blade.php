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
                @foreach ($user as $users)

                    <form method="POST" action="{{ route('change.names', $users->id) }}">
                        @csrf
                        <div class="form-group row">
                         
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{$users->name}}" name="name">
                                @error('name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('f_name') is-invalid @enderror" value="{{$users->f_name}}" name="f_name">
                                @error('f_name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('l_name') is-invalid @enderror" value="{{$users->l_name}}" name="l_name">
                                @error('f_name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-outline-primary">
                                    Change 
                                </button>
                            </div>
                        </div>
                    </form>
                    @endforeach
                </div>
       
        </div><!--/col-9-->
    </div><!--/row-->                                                    
    </div><!--/row-->   
@endsection
