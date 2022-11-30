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
<div class="container">
    <div class="row">
      <div class="col-3">
       <div class="card color1">
           <div class="card-body"><h1 style="color: rgb(255, 255, 255);"> 00.00 TK </h1>
            <p style="font-size: 18px;"> Today Earn </p>
          </div>
       </div>
      </div>

      <div class="col-3">
        <div class="card color2">
            <div class="card-body">
              <h1 style="color: rgb(255, 255, 255);"> 00 TK</h1>
              <p style="font-size: 18px;"> This Month's Earning </p> </div>
        </div>
       </div>

       <div class="col-3">
        <div class="card color3">
          <div class="card-body"><h1 style="color: rgb(255, 255, 255);"> 000 TK</h1>
          <p style="font-size: 18px;"> Total Earing </p>
          </div>
        </div>
       </div>
       @php
       $amount = App\Wallet::where('user_id', auth()->id())->get();
       $var=0;
       @endphp
             @foreach ($amount as $am)
             @php
             $var = intval($var) + intval($am->wallet_amount)
             @endphp
             @endforeach
       <div class="col-3">
        <a href="{{url('withdraw')}}"><div class="card color4">
            <div class="card-body"><h1 style="color: rgb(255, 255, 255); text-decoration:none;">
              {{ Auth::user()->balance }}
            </h1>
            <p style="font-size: 18px;"> For Withdraw </p>
          </div>
        </div></a>
       </div>
    </div>
</div>

<div class="container">

    <h4> Your Total Earning</h4>
    @php
    $statements = DB::table('statements')
    ->where('user_id', Auth::user()->id)
    ->where('tnx_type', 'Earning Credit')
    ->get()
    @endphp
    <table class="table">
        <thead>

          <tr>
            <th scope="col">Date</th>
            <th scope="col">CREDIT</th>
            <th scope="col">DEBIT</th>
            <th scope="col">PW Type</th>
            <th scope="col">NOTE</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($statements as $statement)


         <tr>
            <th scope="row">{{ $statement->date }}</th>
            <td>{{ $statement->credit }}</td>
            <td>{{ $statement->debit }}</td>
            <td>{{ $statement->remarks }}</td>
            <td>{{ $statement->tnx_type }}</td>
          </tr>
 @endforeach
        </tbody>
      </table>

</div>
{{--
<div class="modal fade" id="wallet" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
         <p> You Have <a style="color: green;">1000</a> avaiable for Withdraw </p>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>

      <form method="POST" action="{{url('post-withdraw-request')}}">
        @csrf
      <div class="modal-body">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Mobile Number</label>
            <input type="number" name="mobile" class="form-control" placeholder="Mobile Number (Money Receive Number)">
            @foreach ($amount as $am)
            <input type="hidden" name="wallet_amount" value="{{ $am->wallet_amount }}" class="form-control" placeholder="Mobile Number (Money Receive Number)">
            @endforeach
          </div>
          <div class="mb-3">
            <label class="form-label">Oparetor</label>
            <select name="oparetor" class="form-control">
              <option selected>Select One.</option>
              <option value="Bkash">BKash</option>
              <option value="Nagad">Nagad</option>
              <option value="Roket">Roket</option>
            </select>
          </div>

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-outline-success">Request</button>
      </div>
    </form>
    </div>
  </div>
</div>  --}}
@endsection
