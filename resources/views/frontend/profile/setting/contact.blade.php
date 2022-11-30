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
            @php
            $user = App\User::where('id', auth()->id())->get();
            @endphp
            <div class="card-body">
            @foreach ($user as $users)
            <form action="{{url('create-user',$users->id)}}" method="POST"> 
                {{csrf_field()}}
                        <div class="form-group row">
                        
                        <div class="col-md-6">
                        <div class="input-group">
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" placeholder="+8805" value="{{$users->phone}}" name="phone">
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <button class="btn btn-outline-secondary" type="submit">Save</button>
                        </div>
                        </div>
                        </div>
                </form>
                @endforeach
            </div>
       
        </div><!--/col-9-->
    </div><!--/row-->                                                    
    </div><!--/row-->   
@endsection
