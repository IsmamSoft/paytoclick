@extends('layouts.app')
{{--@section('style_css')--}}
{{-- --}}
{{--@endsection--}}

@push('css')
    <style>


        /*Google Fonts*/
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Lato&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

        *{
            margin: 0;
            padding: 0;
        }


        :root{
            --bg-color: #F7E9D5;
            --p-color: rgb(58, 58, 58);
            --heading-color: rgb(255, 60, 0);
            --a-hover: rgb(255 152 121);
            --box-shadow: #7777772e;
            --white: #fff;
            --simple-dark: #4b4a4a;
            --login-signUp-btn-bg: rgb(105, 105, 105);
            --card-1-color: #E18D78;
            --card-2-color: #9A3DF4;
            --card-3-color: #72CA84;
            --card-4-color: #E88C07;
            --card-5-color: #B70064;
            --getStart-btn: liner-gradient(#AD5AD9, #523BF1);
            --dashboard-bg: #EAE9F4;
            --money-color: #13954A;
            --table-section-bg: #E6EBEF;
            --date-bg: #313F4C;
            --earing-card-1: #5E35B1;
            --earning-card-2: #1E88E5;
            --earning-card-3: #CE28B7;
            --earning-card-4: #FFCE00;
            --ColorOne: #2979ff;
            --ColorTwo: #b00020;
            --ColorThree: #00c853;
        }


        body{
            background: #F7E9D5;
        }


        .about_wraper {
            max-width: 1140px;
            margin: auto;
            padding: auto;
        }

        .about_title {
            text-align: center;
            padding-top: 10%;
            margin-bottom: 60px;
            font-weight: 600;
            position: relative;
            font-family: 'Roboto', sans-serif;
            font-weight: 500;
        }

        .about_title::after {
            content: '';
            background: #303ef7;
            width: 100px;
            height: 5px;
            position: absolute;
            bottom: -5px;
            left: 50%;
            transform: translateX(-50%);
        }

        .about_body {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            grid-gap: 30px;
        }

        .about {
            text-align: center;
            padding: 60px 10px;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
            background: #fff;
            transition: transform 0.5s, background 0.5s;
        }

        .about i {
            font-size: 40px;
            margin-bottom: 10px;
            color: #303ef7;
        }

        .about_item_title {
            font-weight: 600;
            margin-bottom: 8px;
            font-family: 'Roboto', sans-serif;
            font-weight: 500;
        }

        .about:hover {
            background: var(--heading-color);
            color: #fff;
            transform: scale(1.05);
        }

        .about:hover i {
            color: #fff;
        }

        .about P{
            font-family: 'Lato', sans-serif;
        }
        section {
            padding-top: 60px;
        }

    </style>
@endpush
<section>
    <div class="container">
        @include('layouts.components.nav')


@section('content')

<div class="container about_wraper">
  <h1 class="about_title">About Us</h1>
  <div class="row about_body" >
      <div class="about">
          <i class="fas fa-money-bill-wave"></i>
          <h2 class="about_item_title">Daily Withdraw</h2>
          <p class="about_item_des">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi,
            quae?
          </p>
        </div>
        <div class="about">
          <i class="fas fa-video"></i>
          <h2 class="about_item_title">Video Wacth</h2>
          <p class="about_item_des">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi,
            quae?
          </p>
        </div>
        <div class="about">
          <i class="fas fa-ad"></i>
          <h2 class="about_item_title">Add Show</h2>
          <p class="about_item_des">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi,
            quae?
          </p>
        </div>
        <div class="about">
          <i class="fas fa-money-check-alt"></i>
          <h2 class="about_item_title">Earing</h2>
          <p class="about_item_des">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi,
            quae?
          </p>
        </div>
    <div class="about">
      <i class="fas fa-money-bill-wave"></i>
      <h2 class="about_item_title">Daily Withdraw</h2>
      <p class="about_item_des">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi,
        quae?
      </p>
    </div>
    <div class="about">
      <i class="fas fa-video"></i>
      <h2 class="about_item_title">Video Wacth</h2>
      <p class="about_item_des">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi,
        quae?
      </p>
    </div>
    <div class="about">
      <i class="fas fa-ad"></i>
      <h2 class="about_item_title">Add Show</h2>
      <p class="about_item_des">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi,
        quae?
      </p>
    </div>
    <div class="about">
      <i class="fas fa-money-check-alt"></i>
      <h2 class="about_item_title">Earing</h2>
      <p class="about_item_des">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi,
        quae?
      </p>
    </div>
  </div>
</div>

@endsection
    </div>
</section>
