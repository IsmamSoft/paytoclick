@extends('layouts.app')

@section('style_css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>

/*Google Fonts*/
@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Lato&display=swap');


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

section {
    padding-top: 60px;
}
.contact-info {
display: inline-block;
width: 100%;
text-align: center;
margin-bottom: 10px;
}
.contact-info-icon {
margin-bottom: 15px;
}
.contact-info-item {
background: #fff;
padding: 30px 0px;
}
.contact-page-sec .contact-page-form h2 {
color: var(--heading-color);
text-transform: capitalize;
font-size: 22px;
font-weight: 700;
font-family: 'Roboto', sans-serif;
font-weight: 500;
}
.contact-page-form .col-md-6.col-sm-6.col-xs-12 {
padding-left: 0;
}
.contact-page-form.contact-form input {
margin-bottom: 5px;
}
.contact-page-form.contact-form textarea {
height: 110px;
}
.contact-page-form.contact-form input[type="submit"] {
background: var(--card-2-color);
width: 150px;
border-color: #fff;
}
.contact-info-icon i {
font-size: 48px;
color: var(--heading-color);
}
.contact-info-text p{margin-bottom:0px;}
.contact-info-text h2 {
color: var(--heading-color);
font-size: 22px;
text-transform: capitalize;
font-weight: 600;
margin-bottom: 10px;
font-family: 'Roboto', sans-serif;
font-weight: 500;
}
.contact-info-text span {
color: var(--ColorOne);
font-size: 16px;
display: inline-block;
width: 100%;
font-family: 'Lato', sans-serif;
}

.contact-page-form input {
background: #f9f9f9 none repeat scroll 0 0;
border: none;
outline: none;
margin-bottom: 20px;
padding: 12px 16px;
width: 100%;
border-radius: 4px;
box-shadow: 0 0 10px 0 var(--box-shadow);
}

.contact-page-form .message-input {
display: inline-block;
width: 100%;
padding-left: 0;
}
.single-input-field textarea {
background: #f9f9f9 none repeat scroll 0 0;
border: none;
outline: none;
width: 100%;
height: 120px;
padding: 12px 16px;
border-radius: 4px;
box-shadow: 0 0 10px 0 var(--box-shadow);
}

.single-input-fieldsbtn input[type="submit"] {
background: var(--card-2-color);
color: #fff;
display: inline-block;
font-weight: 600;
padding: 10px 0;
text-transform: capitalize;
width: 150px;
margin-top: 20px;
font-size: 16px;
}

.single-input-fieldsbtn input[type="submit"]:hover{
    background: var(--heading-color);
    transition: all 0.5s ease;
}

.single-input-field  h4 {
color: #464646;
text-transform: capitalize;
font-size: 14px;
}
.contact-page-form {
display: inline-block;
width: 100%;
margin-top: 30px;
}

.contact-page-map {
margin-top: 36px;
}
.contact-page-form form {
padding: 20px 15px 0;
}
    </style>
@endsection
<section>
    <div class="container">
        @include('layouts.components.nav')

@section('content')
<br/> <br/>
<section class="contact-page-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="contact-info">
          <div class="contact-info-item">
            <div class="contact-info-icon">
              <i class="fas fa-map-marked"></i>
            </div>
            <div class="contact-info-text">
              <h2>address</h2>
              <span>Uttara Dhaka 1230.</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="contact-info">
          <div class="contact-info-item">
            <div class="contact-info-icon">
              <i class="fas fa-envelope"></i>
            </div>
            <div class="contact-info-text">
              <h2>E-mail</h2>
              <span>peopleworkbd@gmail.com</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="contact-info">
          <div class="contact-info-item">
            <div class="contact-info-icon">
              <i class="fas fa-clock"></i>
            </div>
            <div class="contact-info-text">
              <h2>office time</h2>
              <span>Mon - Thu  10:00 am - 5.00 pm</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <div class="contact-page-form" method="post">
          <h2>Get in Touch</h2>
          <form action="contact-mail.php" method="post">
            <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="single-input-field">
                <input type="text" placeholder="Your Name" name="name"/>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="single-input-field">
                <input type="email" placeholder="E-mail" name="email" required/>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="single-input-field">
                <input type="text" placeholder="Phone Number" name="phone"/>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="single-input-field">
                <input type="text" placeholder="Subject" name="subject"/>
              </div>
            </div>
            <div class="col-md-12 message-input">
              <div class="single-input-field">
                <textarea  placeholder="Write Your Message" name="message"></textarea>
              </div>
            </div>
            <div class="single-input-fieldsbtn">
              <input type="submit" value="Send Now"/>
            </div>
          </div>
          </form>
        </div>
      </div>
      <div class="col-md-4">
        <div class="contact-page-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14594.236454272961!2d90.4219536!3d23.8697847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1634175021474!5m2!1sen!2sbd" width="420" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection
