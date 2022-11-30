@extends('layouts.app')

@section('content')
<!------ banner with menu ------>
<section class="banner" id="banner">
    <div class="container">

       @include('layouts..components.nav')

<div class="hero text-center">
    <img src="{{ asset('public/assets_landing/Images/illustration.png') }}" alt="">
</div>

    </div>
</section>
<!------ /banner with menu ------>


<!---- multiple payment ------>
<section class="multiple_payment" id="multiple_payment">
    <div class="container">
         <div class="row">

             <div class="col-md-6">
                 <div class="multiple_payment_left">
                      <img src="{{ asset('public/assets_landing/Images/payment vector.png') }}" alt="">
                 </div>
             </div>

             <div class="col-md-6">
                <div class="multiple_payment_right">
                    <h1>
                        Multiple Payments <br> Easier On One Platform.
                    </h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                         Velit reiciendis quidem incidunt maiores recusandae
                         possimus exercitationem quas vitae dolorum. Quod.
                         sit amet consectetur adipisicing elit.
                         Velit reiciendis quidem incidunt maiores recusandae
                         possimus exercitationem quas vitae dolorum. Quod.
                    </p>

                    <div class="rightBox">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="rightBoxLeft text-center">
                                    <img src="{{ asset('public/assets_landing/Images/secure icon.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="rightBoxRight">
                                    <h2>Secure Payment</h2>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                        Velit reiciendis quidem incidunt maiores recusandae
                                        possimus exercitationem quas vitae dolorum. Quod.
                                   </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rightBox">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="rightBoxLeft text-center">
                                    <img src="{{ asset('public/assets_landing/Images/brain.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="rightBoxRight">
                                    <h2>Transition Anywhere Any Time</h2>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                        Velit reiciendis quidem incidunt maiores recusandae
                                        possimus exercitationem quas vitae dolorum. Quod.
                                   </p>
                                </div>
                            </div>
                        </div>
                    </div>

               </div>
             </div>

         </div>
    </div>
</section>
<!---- /multiple payment ------>


<!----- our plan ------>
<section class="plan" id="plan">
    <div class="container">
         <div class="row">

             <div class="col-md-6 col-lg-4">
                <div class="pricing-block">
                    <div class="inner-box">
                        <div class="icon-box">
                            <div class="icon-outer"><i class="fas fa-paper-plane"></i></div>
                        </div>
                        <div class="price-box">
                            <div class="title"> Play </div>
                            <h4 class="price">BDT 650.00</h4>
                        </div>
                        <ul class="features">
                            <li class="true"><i class="fas fa-check-circle"></i>Daily Earn 10 TK</li>
                            <li class="true"><i class="fas fa-check-circle"></i>Cashout limit 150-300(Every Day)</li>
                            <li class="true"><i class="fas fa-check-circle"></i>Valid Date 200days</li>
                            <li class="true"><i class="fas fa-check-circle"></i>Ad 2</li>
                            <li class="true"><i class="fas fa-check-circle"></i>Per Ad 5 BDT</li>
                        </ul>
                        <div class="btn-box">

                                <a href="{{route('card_play')}}" class="theme-btn">Activate</a>

                        </div>
                    </div>
                 </div>
             </div>

             <div class="col-md-6 col-lg-4">
                 <div class="pricing-block">
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

                             <a href="{{route('card_play')}}" class="theme-btn">Activate</a>

                         </div>
                     </div>
                 </div>
             </div>

{{--             <div class="col-md-6 col-lg-4">--}}
{{--                <div class="pricing-block">--}}
{{--                    <div class="inner-box inner-box1">--}}
{{--                        <div class="icon-box icon-box1">--}}
{{--                            <div class="icon-outer"><i class="fas fa-paper-plane"></i></div>--}}
{{--                        </div>--}}
{{--                        <div class="price-box">--}}
{{--                            <div class="title"> Silver </div>--}}
{{--                            <h4 class="price price1">BDT 1000.00</h4>--}}
{{--                        </div>--}}
{{--                        <ul class="features">--}}
{{--                            <li class="true"><i class="fas fa-check-circle"></i>Daily Earn 20 TK</li>--}}
{{--                            <li class="true"><i class="fas fa-check-circle"></i>Cashout limit 150-300(Every Day)</li>--}}
{{--                            <li class="true"><i class="fas fa-check-circle"></i>Valid Date 200days</li>--}}
{{--                            <li class="true"><i class="fas fa-check-circle"></i>Ad 4</li>--}}
{{--                            <li class="true"><i class="fas fa-check-circle"></i>Per Ad 5 BDT</li>--}}
{{--                        </ul>--}}
{{--                        <div class="btn-box btn-box1">--}}

{{--                                <a href="{{route('card_play')}}" class="theme-btn">Activate</a>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                 </div>--}}
{{--             </div>--}}

             <div class="col-md-6 col-lg-4">
                <div class="pricing-block">
                    <div class="inner-box inner-box2">
                        <div class="icon-box icon-box2">
                            <div class="icon-outer"><i class="fas fa-paper-plane"></i></div>
                        </div>
                        <div class="price-box">
                            <div class="title"> Gold </div>
                            <h4 class="price price2">BDT 3000.00</h4>
                        </div>
                        <ul class="features">
                            <li class="true"><i class="fas fa-check-circle"></i>Daily Earn 66 TK</li>
                            <li class="true"><i class="fas fa-check-circle"></i>Cashout limit 200-600(Every Day)</li>
                            <li class="true"><i class="fas fa-check-circle"></i>Valid Date 200days</li>
                            <li class="true"><i class="fas fa-check-circle"></i>Ad 6</li>
                            <li class="true"><i class="fas fa-check-circle"></i>Per Ad 11 BDT</li>
                        </ul>
                        <div class="btn-box btn-box2">

                            <a href="{{route('card_play')}}" class="theme-btn">Activate</a>

                        </div>
                    </div>
                 </div>
             </div>




            <div class="col-md-6 col-lg-4">
                <div class="pricing-block">
                    <div class="inner-box inner-box3">
                        <div class="icon-box icon-box3">
                            <div class="icon-outer"><i class="fas fa-paper-plane"></i></div>
                        </div>
                        <div class="price-box">
                            <div class="title"> Diamond </div>
                            <h4 class="price price3">BDT 5000.00</h4>
                        </div>
                        <ul class="features">
                            <li class="true"><i class="fas fa-check-circle"></i>Daily Earn 110 TK</li>
                            <li class="true"><i class="fas fa-check-circle"></i>Cashout limit 300-1000(Every Day)</li>
                            <li class="true"><i class="fas fa-check-circle"></i>Valid Date 200days</li>
                            <li class="true"><i class="fas fa-check-circle"></i>Ad 10</li>
                            <li class="true"><i class="fas fa-check-circle"></i>Per Ad 11 BDT</li>
                        </ul>
                        <div class="btn-box btn-box1">

                                <a href="{{route('card_play')}}" class="theme-btn">Activate</a>

                        </div>
                    </div>
                 </div>
             </div>


             <div class="col-md-6 col-lg-4">
                <div class="pricing-block">
                    <div class="inner-box">
                        <div class="icon-box">
                            <div class="icon-outer"><i class="fas fa-paper-plane"></i></div>
                        </div>
                        <div class="price-box">
                            <div class="title"> VIP </div>
                            <h4 class="price">BDT 10,000.00</h4>
                        </div>
                        <ul class="features">
                            <li class="true"><i class="fas fa-check-circle"></i>Daily Earn 230 TK</li>
                            <li class="true"><i class="fas fa-check-circle"></i>Cashout limit 300-2000(Every Day)</li>
                            <li class="true"><i class="fas fa-check-circle"></i>Valid Date 200 days</li>
                            <li class="true"><i class="fas fa-check-circle"></i>Ad 10</li>
                            <li class="true"><i class="fas fa-check-circle"></i>Per Ad 23 BDT</li>
                        </ul>
                        <div class="btn-box">
                                <a href="{{route('card_play')}}" class="theme-btn">Activate</a>

                        </div>
                    </div>
                 </div>
             </div>

            </div>

        </div>
    </div>
</section>
<!----- /our plan ------>


<!----- statistic ------>
<section class="statistic" id="statistic">
    <div class="container">
        <div class="row">

            <div class="col-md-4">
                <div class="statisticBox text-center">
                    <h4 class="counter">97,994</h4>
                    <h1>User</h1>
                    <i class="fas fa-users"></i>
                </div>
            </div>

            <div class="col-md-4">
                <div class="statisticBox text-center">
                    <h4 class="counter">63,075</h4>
                    <h1>Daily Work</h1>
                    <i class="fas fa-tv"></i>
                </div>
            </div>

            <div class="col-md-4">
                <div class="statisticBox statisticBox1 text-center">
                    <h4 class="counter">60,217</h4>
                    <h1>Daily Active</h1>
                    <i class="fas fa-mug-hot"></i>
                </div>
            </div>


        </div>
    </div>
</section>
<!----- /statistic ------>

<!------ payment method ------------->
<section class="method" id="method">
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>

            <div class="col-md-2">
                <div class="methodBox text-center">
                    <img src="{{ asset('public/assets_landing/Images/payment-method.png') }}" alt="">
                </div>
            </div>

            <div class="col-md-2">
                <div class="methodBox text-center">
                   <h2>Our Accepted <br>
                       Payment Method
                    </h2>
                </div>
            </div>

            <div class="col-md-2">
                <div class="methodBox text-center">
                    <img src="{{ asset('public/assets_landing/Images/bkash.png') }}" alt="">
                </div>
            </div>

            <div class="col-md-2">
                <div class="methodBox text-center">
                    <img src="{{ asset('public/assets_landing/Images/nagad.png') }}" alt="">
                </div>
            </div>

            <div class="col-md-2">
                <div class="methodBox text-center">
                    <img src="{{ asset('public/assets_landing/Images/roket.png') }}" alt="">
                </div>
            </div>



            <div class="col-md-1"></div>
        </div>
    </div>
</section>
<!------ /payment method ------------->



@endsection
@section('script')
<script>
$('.counter').counterUp(
    { delay: 10,
    time: 2000}
);
</script>
@endsection
