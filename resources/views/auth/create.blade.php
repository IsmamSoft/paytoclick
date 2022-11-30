@extends('layouts.app')
@section('content')

<div style="padding-left: 100px;">
    <form action="{{url('create-user')}}" method="POST">
        {{csrf_field()}}
    <input type="text" name="phone" placeholder="012855...."><br>
    <input type="submit" value="Submit">
    </form>
</div>

@endsection