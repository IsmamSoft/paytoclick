@extends('frontend.master')
@section('style_css')
<style>

</style>
@endsection
@section('content')

<div class="container">

    <div class="row">
      <div class="col-4">
        <div class="card">

      </div>
      </div>




      <div class="col-4">
        <div class="card">
        <div class="card-body">
        <div class="container">
        <h4 class="payment-title">Select Oparetor</h4>
        <form action="{{url('post-withdraw')}}/{{Auth::user()->id}}" method="post">
         @csrf
        <div class="mb-3">
            <input type="checkbox" value="Bkash" name="oparetor" class="form-check-input">
            <label class="form-label">Bkash</label>
         </div>
         <div class="mb-3">
            <input type="checkbox" name="oparetor" value="Nagad" class="form-check-input">
            <label class="form-label">Nagad</label>
        </div>
        <div class="mb-3">
            <input type="checkbox" name="oparetor" value="Roket" class="form-check-input">
            <label class="form-label">Roket</label>
        </div>
        </div>
        </div>
        </div>
        </div>

        <div class="col-4">
        <div class="card">
        <div class="card-body">
        <div class="container">
        <h4 class="payment-title">Withdraw</h4>
        <div class="mb-3">
            <label class="form-label">Mobile Number</label>
            <input type="text" name="mobile" class="form-control">
        </div>
        {{-- @php
        $amount = App\Wallet::where('user_id', auth()->id())->get();
        $var=0;
        @endphp
              @foreach ($amount as $am)
              @php
              $var = intval($var) + intval($am->wallet_amount)
              @endphp
              @endforeach --}}
        <div class="mb-3">
            <label class="form-label">Amount</label>
            <input type="text" name="wallet_amount" value="{{ Auth::user()->balance }}" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label"><h4>5.0% Transfer Fee</h4></label>
        </div>
        <button type="submit" class="btn btn-primary">Send Withdraw Request</button>
        </form>
        </div>
        </div>
        </div>
        </div>


    </div>
</div>



@endsection


