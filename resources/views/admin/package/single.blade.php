@extends('admin.master')
@section('style_css')
<style>
    .sh{
    -webkit-box-shadow: 1px 4px 11px -1px #000000; 
    box-shadow: 1px 4px 11px -1px #000000;
    }
</style>
@endsection
@section('content')
<div class="container py-4">

    <div class="row">
      @foreach ($user as $buy) 
      <div class="col-4">
        <form method="POST" action="{{url('update-user', $buy->id)}}">
          @csrf
          <div class="mb-3">
            <label class="form-label">Package</label>
            <select name="package" class="form-control">
              <option value="play">Play</option>
              <option value="sliver">Silver</option>
              <option value="gold">Gold</option>
              <option value="diamond">Diamond</option>
              <option value="vip">VIP</option>
            </select>
          </div>
          <div class="mb-3 form-check">
            <label class="form-check-label" for="exampleCheck1">Verified?</label>
            <input type="checkbox" class="form-check-input" name="verified">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      @endforeach
    </div>
</div>

@endsection
