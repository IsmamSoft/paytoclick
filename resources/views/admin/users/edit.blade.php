@extends('admin.master')
@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">Edit</div>
<div class="card-body">

<form action="{{ route('admin.users.update', $user) }}" enctype="multipart/form-data" method="POST">


    <div class="form-group row">
        <label for="name" class="col-md-2 col-form-label text-md-right">Verify</label>
        <div class="col-md-6">
            <input type="checkbox" name="verified">
            {{-- <input type="hidden" name="" id=""> --}}
        </div>
    </div> 

    <div class="form-group row">
        <label for="name" class="col-md-2 col-form-label text-md-right">Package</label>
        <div class="col-md-6">
            <select name="package" class="form-control @error('l_name') is-invalid @enderror">
            <option value="play">Play</option>
            <option value="silver">Silver</option>
            <option value="gold">Gold</option>
            <option value="diamond">Diamond</option>
            <option value="vip">VIP</option>
            </select>
            {{-- <input type="text" class="form-control @error('l_name') is-invalid @enderror" name="l_name" value="{{ $user->l_name }}"> --}}
            @error('l_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>


    @csrf
    {{ method_field('PUT') }}

    <div class="form-group row">
        <label for="roles" class="col-md-2 col-form-label text-md-right">Roles</label>
        <div class="col-md-6">
        @foreach ($roles as $role)
        <div class="form-check">
            <input type="checkbox" name="roles[]" value="{{$role->id}}" @if($user->roles->pluck('id')->contains($role->id)) checked @endif>
            <label>{{ $role->urole }}</label>
            </div><br/>
        @endforeach
    </div>
    </div>
        <button class="btn btn-outline-success" type="submit">Update</button>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection
