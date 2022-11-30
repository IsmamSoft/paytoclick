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
      @foreach ($buypack as $buy) 
      <div class="col-6">
        <h3>People's Work</h3><br/>
        <h6> Address </h6>, <br/>
        <h6> Email Address </h6>, <br/>
        <h6> Website </h6>, <br/>
      </div>

      <div class="col-6">
      <div class="card sh">
      <div class="card-body">
      <h3>Billing To</h3><br/>
      <h6> {{$buy->name}} </h6>, <br/>
      <h6> {{$buy->email}} </h6>, <br/>
      </div>
      </div>
      </div>

      <div class="col-12">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Sl</th>
              <th scope="col">Package</th>
              <th scope="col">Qnt</th>
              <th scope="col">Price</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>{{$buy->package}}</td>
              <td>1</td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
      @endforeach
    </div>
</div>

@endsection
