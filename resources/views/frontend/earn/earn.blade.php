@extends('frontend.master')
@section('style_css')
<style>
  .color1{
    background-color: #4444c5;
  }

  .color2{
    background-color: #4e92ca;
  }

  .color3{
    background-color: #c0547d;
  }

  .color4{
    background-color: #f5ce58;
  }
</style>
@endsection
@section('content')
@php
  $amount = App\Wallet::where('user_id', auth()->id())->get();
@endphp
<div class="container">
<div class="row">
  <div class="col-3">
    <div class="card color1">
      <div class="card-body">
      <h1 style="color: rgb(0, 0, 0);">
        @php
        $amount = App\Statement::where('user_id', auth()->id())->where('tnx_type', 'Earning Credit')->get();
        $var=0;
        @endphp
              @foreach ($amount as $am)
              @php
              $var = intval($var) + intval($am->credit)
              @endphp
              @endforeach
              {{$var}}
      TK</h1>
      <p style="font-size: 18px;"> Today Earn </p>
      </div>
    </div>
   </div>
   <div class="col-3">
    <div class="card color2">
      <div class="card-body"><h1 style="color: rgb(0, 0, 0);">
        {{ $var }}
TK</h1>
      <p style="font-size: 18px;"> This Week earn </p>
      </div>
    </div>
   </div>
   <div class="col-3">
    <div class="card color3">
      <div class="card-body"><h1 style="color: rgb(0, 0, 0);">
        {{ $var }}
TK</h1>
      <p style="font-size: 18px;"> Total Earn </p>
      </div>
    </div>
   </div>
   <div class="col-3">
    <div class="card color4">
      <div class="card-body"><h1 style="color: rgb(0, 0, 0);">
        {{ $var }}
TK</h1>
      <p style="font-size: 18px;"> Avaiable for Withdraw </p>
      </div>
    </div>
   </div>

</div>
</div>

<div class="container">
  <div class="card">
    <div class="card-body">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Date</th>
            <th scope="col">Credit Ammount</th>
            <th scope="col">TNX ID</th>
            <th scope="col">Type</th>
            <th scope="col">Note</th>
          </tr>
        </thead>
        <tbody>
            @php
            $statements = DB::table('statements')
            ->where('user_id', Auth::user()->id)
            ->where('tnx_type', 'Earning Credit')
            ->get()
            @endphp
            @foreach ($statements as $statement)
               <tr>
            <td>{{ $statement->created_at }}</td>
            <td>{{ $statement->credit }}</td>
            <td>{{ $statement->tnx_id }}</td>
            <td>{{ $statement->remarks }}</td>
            <td>{{ $statement->tnx_type }}</td>
          </tr>
            @endforeach

        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
