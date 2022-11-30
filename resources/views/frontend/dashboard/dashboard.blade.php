@extends('frontend.master')
@section('style_css')
<style>
a,
  a:hover,
  a:focus,
  a:active {
      text-decoration: none;
      outline: none;
  }

  a,
  a:active,
  a:focus {
      color: #333;
      text-decoration: none;
      transition-timing-function: ease-in-out;
      -ms-transition-timing-function: ease-in-out;
      -moz-transition-timing-function: ease-in-out;
      -webkit-transition-timing-function: ease-in-out;
      -o-transition-timing-function: ease-in-out;
      transition-duration: .2s;
      -ms-transition-duration: .2s;
      -moz-transition-duration: .2s;
      -webkit-transition-duration: .2s;
      -o-transition-duration: .2s;
  }

  ul {
      margin: 0;
      padding: 0;
      list-style: none;
  }
  img {
  max-width: 100%;
  height: auto;
  }
  /*--blog----*/

  .sec-title{
  position:relative;
  margin-bottom:70px;
  }

  .sec-title .title{
  position: relative;
  display: block;
  font-size: 16px;
  line-height: 1em;
  color: #ff8a01;
  font-weight: 500;
  background: rgb(247,0,104);
  background: -moz-linear-gradient(to left, rgba(247,0,104,1) 0%, rgba(68,16,102,1) 25%, rgba(247,0,104,1) 75%, rgba(68,16,102,1) 100%);
  background: -webkit-linear-gradient(to left, rgba(247,0,104,1) 0%,rgba(68,16,102,1) 25%,rgba(247,0,104,1) 75%,rgba(68,16,102,1) 100%);
  background: linear-gradient(to left, rgba(247,0,104) 0%,rgba(68,16,102,1) 25%,rgba(247,0,104,1) 75%,rgba(68,16,102,1) 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#F70068', endColorstr='#441066',GradientType=1 );
  color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  text-transform: uppercase;
  letter-spacing: 5px;
  margin-bottom: 15px;
  }

  .sec-title h2{
  position:relative;
  display: inline-block;
  font-size:48px;
  line-height:1.2em;
  color:#1e1f36;
  font-weight:700;
  }

  .sec-title .text{
  position: relative;
  font-size: 16px;
  line-height: 28px;
  color: #888888;
  margin-top: 30px;
  }

  .sec-title.light h2,
  .sec-title.light .title{
  color: #ffffff;
  -webkit-text-fill-color:inherit;
  }
  .pricing-section {
  position: relative;
  padding: 100px 0 80px;
  overflow: hidden;
  }
  .pricing-section .outer-box{
  max-width: 1100px;
  margin: 0 auto;
  }


  .pricing-section .row{
  margin: 0 -30px;
  }

  .pricing-block{
  position: relative;
  padding: 0 30px;
  margin-bottom: 40px;
  }

  .pricing-block .inner-box{
  position: relative;
  background-color: #ffffff;
  box-shadow: 0 20px 40px rgba(0,0,0,0.08);
  padding: 0 0 30px;
  max-width: 370px;
  margin: 0 auto;
  border-bottom: 20px solid #40cbb4;
  }

  .pricing-block .icon-box{
  position: relative;
  padding: 50px 30px 0;
  background-color: #40cbb4;
  text-align: center;
  }

  .pricing-block .icon-box:before{
  position: absolute;
  left: 0;
  bottom: 0;
  height: 75px;
  width: 100%;
  border-radius: 50% 50% 0 0;
  background-color: #ffffff;
  content: "";
  }


  .pricing-block .icon-box .icon-outer{
  position: relative;
  height: 150px;
  width: 150px;
  background-color: #ffffff;
  border-radius: 50%;
  margin: 0 auto;
  padding: 10px;
  }

  .pricing-block .icon-box i{
  position: relative;
  display: block;
  height: 130px;
  width: 130px;
  line-height: 120px;
  border: 5px solid #40cbb4;
  border-radius: 50%;
  font-size: 50px;
  color: #40cbb4;
  -webkit-transition:all 600ms ease;
  -ms-transition:all 600ms ease;
  -o-transition:all 600ms ease;
  -moz-transition:all 600ms ease;
  transition:all 600ms ease;
  }

  .pricing-block .inner-box:hover .icon-box i{
  transform:rotate(360deg);
  }

  .pricing-block .price-box{
  position: relative;
  text-align: center;
  padding: 10px 20px;
  }

  .pricing-block .title{
  position: relative;
  display: block;
  font-size: 24px;
  line-height: 1.2em;
  color: #222222;
  font-weight: 600;
  }

  .pricing-block .price{
  display: block;
  font-size: 30px;
  color: #222222;
  font-weight: 700;
  color: #40cbb4;
  }


  .pricing-block .features{
  position: relative;
  max-width: 200px;
  margin: 0 auto 20px;
  }

  .pricing-block .features li{
  position: relative;
  display: block;
  font-size: 14px;
  line-height: 30px;
  color: #000000;
  font-weight: 500;
  padding: 5px 0;
  padding-left: 30px;
  border-bottom: 1px dashed #dddddd;
  }
  .pricing-block .features li:before {
  position: absolute;
  left: 0;
  top: 50%;
  font-size: 16px;
  color: #2bd40f;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  display: inline-block;
  font-style: normal;
  font-variant: normal;
  text-rendering: auto;
  line-height: 1;
  content: "\f058";
  font-family: "Font Awesome 5 Free";
  margin-top: -8px;
  }
  .pricing-block .features li.false:before{
  color: #e1137b;
  content: "\f057";
  }

  .pricing-block .features li a{
  color: #848484;
  }

  .pricing-block .features li:last-child{
  border-bottom: 0;
  }

  .pricing-block .btn-box{
  position: relative;
  text-align: center;
  }

  .pricing-block .btn-box a{
  position: relative;
  display: inline-block;
  font-size: 14px;
  line-height: 25px;
  color: #ffffff;
  font-weight: 500;
  padding: 8px 30px;
  background-color: #40cbb4;
  border-radius: 10px;
  border-top:2px solid transparent;
  border-bottom:2px solid transparent;
  -webkit-transition: all 400ms ease;
  -moz-transition: all 400ms ease;
  -ms-transition: all 400ms ease;
  -o-transition: all 400ms ease;
  transition: all 300ms ease;
  }

  .pricing-block .btn-box a:hover{
  color: #ffffff;
  }

  .pricing-block .inner-box:hover .btn-box a{
  color:#40cbb4;
  background:none;
  border-radius:0px;
  border-color:#40cbb4;
  }

  .pricing-block:nth-child(2) .icon-box i,
  .pricing-block:nth-child(2) .inner-box{
  border-color: #1d95d2;
  }

  .pricing-block:nth-child(2) .btn-box a,
  .pricing-block:nth-child(2) .icon-box{
  background-color: #1d95d2;
  }

  .pricing-block:nth-child(2) .inner-box:hover .btn-box a{
  color:#1d95d2;
  background:none;
  border-radius:0px;
  border-color:#1d95d2;
  }

  .pricing-block:nth-child(2) .icon-box i,
  .pricing-block:nth-child(2) .price{
  color: #1d95d2;
  }

  .pricing-block:nth-child(3) .icon-box i,
  .pricing-block:nth-child(3) .inner-box{
  border-color: #ffc20b;
  }

  .pricing-block:nth-child(3) .btn-box a,
  .pricing-block:nth-child(3) .icon-box{
  background-color: #ffc20b;
  }

  .pricing-block:nth-child(3) .icon-box i,
  .pricing-block:nth-child(3) .price{
  color: #ffc20b;
  }

  .pricing-block:nth-child(3) .inner-box:hover .btn-box a{
  color:#ffc20b;
  background:none;
  border-radius:0px;
  border-color:#ffc20b;
  }
  .sh{
    -webkit-box-shadow: 1px 4px 11px -1px #000000;
    box-shadow: 1px 4px 11px -1px #000000;
  }

  .color1{
    background-color: #41C6FF;
    border-radius: 15px;
    height: 160px;
  }

  .color2{
    background-color: #6F20D1;
    border-radius: 15px;
    height: 160px;
  }

  .color3{
      background-color: #44D16B;
      border-radius: 15px;
      height: 160px;
  }

  .color4{
      background-color: #FF9E67;
      border-radius: 15px;
      height: 160px;
  }

  .color5{
      background-color: #FFCB6E;
      border-radius: 15px;
      height: 160px;
  }

  .color6{
      background-color: #6ADDBC;
      border-radius: 15px;
      height: 160px;
  }
  </style>
@endsection

@section('content')
<div class="container">


    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Welcome {{Auth::user()->user}}!</strong> You should check in on some of those
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
    </div>

        {{-- @php
        $message = App\Notify::where('user_id', auth()->id())->get();
        @endphp

        @foreach($message as $value)

        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{$value->message}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>

        @endforeach --}}

  <div class="row">

@if (Auth::user()->package == 'play')

<div class="pricing-block col-4 col-md-4 col-sm-6">
  <div class="inner-box">
      <div class="icon-box">
          <div class="icon-outer"><i class="fas fa-paper-plane"></i></div>
      </div>
      <div class="price-box">
          <div class="title"> Play </div>
          <h4 class="price">BDT 650.00</h4>
      </div>
      <ul class="features">
          <li class="true">Daily Earn 10 TK</li>
          <li class="true">Cashout limit 150-300(Every Day)</li>
          <li class="true">Valid Date 200days</li>
          <li class="true">Ad 2</li>
          <li class="true">Per Ad 5 BDT</li>
      </ul>
      <div class="btn-box">
          <a href="#" class="theme-btn">Plan is Activated</a>
      </div>
  </div>
</div>
@elseif (Auth::user()->package=='silver')
<div class="pricing-block col-4 col-md-4 col-sm-6">
  <div class="inner-box">
      <div class="icon-box">
          <div class="icon-outer"><i class="fas fa-paper-plane"></i></div>
      </div>
      <div class="price-box">
          <div class="title"> Silver </div>
          <h4 class="price">BDT 1000.00</h4>
      </div>
      <ul class="features">
          <li class="true"><i class="fas fa-check-circle"></i>Daily Earn 20 TK</li>
          <li class="true"><i class="fas fa-check-circle"></i>Cashout limit 150-300(Every Day)</li>
          <li class="true"><i class="fas fa-check-circle"></i>Valid Date 200days</li>
          <li class="true"><i class="fas fa-check-circle"></i>Ad 4</li>
          <li class="true"><i class="fas fa-check-circle"></i>Per Ad 5 BDT</li>
      </ul>
      <div class="btn-box">
          <a href="#" class="theme-btn">Plan is Activated</a>
      </div>
  </div>
</div>
@elseif (Auth::user()->package=='gold')
<div class="pricing-block col-4 col-md-4 col-sm-6">
  <div class="inner-box">
      <div class="icon-box">
          <div class="icon-outer"><i class="fas fa-paper-plane"></i></div>
      </div>
      <div class="price-box">
          <div class="title"> Gold </div>
          <h4 class="price">BDT 3000.00</h4>
      </div>
      <ul class="features">
          <li class="true">Daily Earn 66 TK</li>
          <li class="true">Cashout limit 200-600(Every Day)</li>
          <li class="true">Valid Date 200days</li>
          <li class="true">Ad 6</li>
          <li class="true">Per Ad 11 BDT</li>
      </ul>
      <div class="btn-box">
          <a href="#" class="theme-btn">Plan is Activated</a>
      </div>
  </div>
</div>
@elseif (Auth::user()->package=='diamond')
<div class="pricing-block col-4 col-md-4 col-sm-6">
  <div class="inner-box">
      <div class="icon-box">
          <div class="icon-outer"><i class="fas fa-paper-plane"></i></div>
      </div>
      <div class="price-box">
          <div class="title"> Diamond </div>
          <h4 class="price">BDT 5000.00</h4>
      </div>
      <ul class="features">
          <li class="true">Daily Earn 110 TK</li>
          <li class="true">Cashout limit 300-1000(Every Day)</li>
          <li class="true">Valid Date 200days</li>
          <li class="true">Ad 10</li>
          <li class="true">Per Ad 11 BDT</li>
      </ul>
      <div class="btn-box">
          <a href="#" class="theme-btn">Plan is Activated</a>
      </div>
  </div>
</div>
@elseif (Auth::user()->package=='vip')
<div class="pricing-block  col-md-4 col-sm-6 col-xs-12">
  <div class="inner-box">
      <div class="icon-box">
          <div class="icon-outer"><i class="fas fa-paper-plane"></i></div>
      </div>
      <div class="price-box">
          <div class="title"> VIP </div>
          <h4 class="price">BDT 10,000.00</h4>
      </div>
      <ul class="features">
          <li class="true">Daily Earn 230 TK</li>
          <li class="true">Cashout limit 300-2000(Every Day)</li>
          <li class="true">Valid Date 200 days</li>
          <li class="true">Ad 10</li>
          <li class="true">Per Ad 23 BDT</li>
      </ul>
      <div class="btn-box">
          <a href="#" class="theme-btn">Plan is Activated</a>
      </div>
  </div>
</div>
@else ()
<div class="pricing-block  col-md-6 col-lg-4 col-sm-10 col-xs-12">
  <div class="inner-box">
      <div class="icon-box">
          <div class="icon-outer"><i class="fas fa-paper-plane"></i></div>
      </div>
      <div class="price-box">
          <div class="title"> Play </div>
          <h4 class="price">BDT 650.00</h4>
      </div>
      <ul class="features">
          <li class="true">Daily Earn 10 TK</li>
          <li class="true">Cashout limit 150-300(Every Day)</li>
          <li class="true">Valid Date 200days</li>
          <li class="true">Ad 2</li>
          <li class="true">Per Ad 5 BDT</li>
      </ul>
      <div class="btn-box">
          <a href="{{url('play')}}" class="theme-btn">Activate</a>
      </div>
  </div>
</div>

<div class="pricing-block col-md-6 col-lg-4 col-sm-10 col-xs-12" >
  <div class="inner-box">
      <div class="icon-box">
          <div class="icon-outer"><i class="fas fa-paper-plane"></i></div>
      </div>
      <div class="price-box">
          <div class="title"> Silver </div>
          <h4 class="price">BDT 1000.00</h4>
      </div>
      <ul class="features">
          <li class="true">Daily Earn 20 TK</li>
          <li class="true">Cashout limit 150-300(Every Day)</li>
          <li class="true">Valid Date 200days</li>
          <li class="true">Ad 4</li>
          <li class="true">Per Ad 5 BDT</li>
      </ul>
      <div class="btn-box">
          <a href="{{url('play')}}" class="theme-btn">Activate</a>
      </div>
  </div>
</div>

<div class="pricing-block  col-md-6 col-lg-4 col-sm-10 col-xs-12">
  <div class="inner-box">
      <div class="icon-box">
          <div class="icon-outer"><i class="fas fa-paper-plane"></i></div>
      </div>
      <div class="price-box">
          <div class="title"> Gold </div>
          <h4 class="price">BDT 3000.00</h4>
      </div>
      <ul class="features">
          <li class="true">Daily Earn 66 TK</li>
          <li class="true">Cashout limit 200-600(Every Day)</li>
          <li class="true">Valid Date 200days</li>
          <li class="true">Ad 6</li>
          <li class="true">Per Ad 11 BDT</li>
      </ul>
      <div class="btn-box">
          <a href="{{url('play')}}" class="theme-btn">Activate</a>
      </div>
  </div>
</div>

<div class="pricing-block  col-md-6 col-lg-4 col-sm-10 col-xs-12">
  <div class="inner-box">
      <div class="icon-box">
          <div class="icon-outer"><i class="fas fa-paper-plane"></i></div>
      </div>
      <div class="price-box">
          <div class="title"> Diamond </div>
          <h4 class="price">BDT 5000.00</h4>
      </div>
      <ul class="features">
          <li class="true">Daily Earn 110 TK</li>
          <li class="true">Cashout limit 300-1000(Every Day)</li>
          <li class="true">Valid Date 200days</li>
          <li class="true">Ad 10</li>
          <li class="true">Per Ad 11 BDT</li>
      </ul>
      <div class="btn-box">
          <a href="{{url('play')}}" class="theme-btn">Activate</a>
      </div>
  </div>
</div>

<div class="pricing-block  col-md-6 col-lg-4 col-sm-10 col-xs-12">
  <div class="inner-box">
      <div class="icon-box">
          <div class="icon-outer"><i class="fas fa-paper-plane"></i></div>
      </div>
      <div class="price-box">
          <div class="title"> VIP </div>
          <h4 class="price">BDT 10,000.00</h4>
      </div>
      <ul class="features">
          <li class="true">Daily Earn 230 TK</li>
          <li class="true">Cashout limit 300-2000(Every Day)</li>
          <li class="true">Valid Date 200 days</li>
          <li class="true">Ad 10</li>
          <li class="true">Per Ad 23 BDT</li>
      </ul>
      <div class="btn-box">
          <a href="{{url('play')}}" class="theme-btn">Activate</a>
      </div>
  </div>
</div>
@endif


  </div>



</div>

<div class="container">
<div class="row">

  <div class="col-4">
    <div class="card color1">
      <div class="card-body"><h1 style="color: rgb(0, 0, 0);"> 000 TK</h1>
      <p style="font-size: 18px;"> Earn Cash </p>
      </div>
    </div>
   </div>

   <div class="col-4">
    <div class="card color2">
      <div class="card-body"><h1 style="color: rgb(0, 0, 0);"> 000 TK</h1>
      <p style="font-size: 18px;"> Work </p>
      </div>
    </div>
   </div>

   <div class="col-4">
   <a href="{{url('withdraw')}}">
    <div class="card color3">
      <div class="card-body"><h1 style="color: rgb(0, 0, 0);"> 000 TK</h1>
      <p style="font-size: 18px;"> Cashout </p>
      </div>
    </div>
    </a>
   </div>

   <div class="col-4">
    <div class="card color4">
      <div class="card-body"><h1 style="color: rgb(0, 0, 0);"> 000 TK</h1>
      <p style="font-size: 18px;"> Shop Balance </p>
      </div>
    </div>
   </div>

   <div class="col-4">
    <a href="{{route('earn.transfer')}}">
      <div class="card color5">
      <div class="card-body"><h1 style="color: rgb(0, 0, 0);"> 000 TK</h1>
      <p style="font-size: 18px;">Transfer </p>
      </div>
    </div>
    </a>
   </div>

   <div class="col-4">
   <a href="{{ route('earn.convert') }}">
    <div class="card color6">
      <div class="card-body"><h1 style="color: rgb(0, 0, 0);"> 000 TK</h1>
      <p style="font-size: 18px;"> Convert </p>
      </div>
    </div>
   </div>
</a>
</div>


</div>
@endsection
@section('footer_js')
    <style>
$(document).ready (function(){
   $("#success-alert").hide();
   $("#myWish").click(function showAlert() {
      $("#success-alert").alert();
      window.setTimeout(function () {
         $("#success-alert").alert('close');
      }, 2000);
   });
});
    </style>
@endsection
