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
                <form method="POST" action="">
                    @csrf
                 <div class="mb-3">
                      <label class="form-label">Send To</label>
                       <input type="text" class="form-control" name="text" required>
                  </div>
                    <div class="mb-3">
                      <label class="form-label">Ammount</label>
                       <input type="text" class="form-control" name="text" required>
                  </div>
                    <div class="mb-3">
                      <label class="form-label">Comment</label>
                      <input type="text" class="form-control" name="text" required>
                  </div>
                   <div class="mb-3">
                      <label class="form-label">Password</label>
                      <input type="text" class="form-control" name="text" required>
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