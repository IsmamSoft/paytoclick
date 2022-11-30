@extends('frontend.master')
@section('content')

<div class="container">
  <div class="row">
      <div class="col-8">
        <img src="https://www.pngarts.com/files/2/Inspirational-Quotes-PNG-Background-Image.png" style="width:100%;">
      </div>
      
      <div class="col-4">
        @if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
	<strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('info'))
<div class="alert alert-info alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
	<strong>{{ $message }}</strong>
</div>
@endif


@if ($errors->any())
<div class="alert alert-danger">
	<button type="button" class="close" data-dismiss="alert">×</button>	
	Please check the form below for errors
</div>
@endif
          <div class="card">
              <div class="card-body">
                <form method="POST" action="{{url('buy-package')}}">
                    @csrf
                    <div class="mb-3">
                      <label class="form-label">Select Packages</label>
                      <select name="package" class="form-control">
                          <option selected>Select One.</option>
                          <option value="Play">Play</option>
                          <option value="Silver">Silver</option>
                          <option value="Gold">Gold</option>
                          <option value="Diamond">Diamond</option>
                          <option value="VIP">VIP</option>
                        </select>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Select Payment Oparetor</label>
                      <select name="oparetor" class="form-control">
                        <option selected>Select One</option>
                        <option value="Nagad">Nagad</option>
                        <option value="Bkash">Bkash</option>
                        <option value="Roket">Roket</option>
                      </select>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Payment Number</label>
                    <input type="hidden" name="name" value="{{Auth::user()->name}}">
                    <input type="hidden" name="email" value="{{Auth::user()->email}}">
                    <input type="number" class="form-control" name="number" required>
                </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection