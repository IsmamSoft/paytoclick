@extends('layouts.app')
@section('content')

 @if(Session::has('message'))
    <div class="alert alert-danger">{{Session::get('message')}}</div>
  @endif

<div style="padding-left: 100px;">
    <form action="/verify" method="POST">
        {{csrf_field()}}
    <input type="text" name="code" placeholder="2586"><br>
    <input type="submit" value="Verify">
    </form>
</div>

@endsection