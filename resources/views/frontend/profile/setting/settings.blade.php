@extends('frontend.master')
@section('style_css')
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <style>
button,
input {
    font-family: "Montserrat", "Helvetica Neue", Arial, sans-serif;
}

a {
    color: #f96332;
}

a:hover,
a:focus {
    color: #f96332;
}

p {
    line-height: 1.61em;
    font-weight: 300;
    font-size: 1.2em;
}

.category {
    text-transform: capitalize;
    font-weight: 700;
    color: #000000;
}

body {
    color: #000000;
    font-size: 14px;
    font-family: "Montserrat", "Helvetica Neue", Arial, sans-serif;
    overflow-x: hidden;
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
}

.nav-item .nav-link,
.nav-tabs .nav-link {
    -webkit-transition: all 300ms ease 0s;
    -moz-transition: all 300ms ease 0s;
    -o-transition: all 300ms ease 0s;
    -ms-transition: all 300ms ease 0s;
    transition: all 300ms ease 0s;
}

.card a {
    -webkit-transition: all 150ms ease 0s;
    -moz-transition: all 150ms ease 0s;
    -o-transition: all 150ms ease 0s;
    -ms-transition: all 150ms ease 0s;
    transition: all 150ms ease 0s;
}

[data-toggle="collapse"][data-parent="#accordion"] i {
    -webkit-transition: transform 150ms ease 0s;
    -moz-transition: transform 150ms ease 0s;
    -o-transition: transform 150ms ease 0s;
    -ms-transition: all 150ms ease 0s;
    transition: transform 150ms ease 0s;
}

[data-toggle="collapse"][data-parent="#accordion"][aria-expanded="true"] i {
    filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2);
    -webkit-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    transform: rotate(180deg);
}


.now-ui-icons {
    display: inline-block;
    font: normal normal normal 14px/1 'Nucleo Outline';
    font-size: inherit;
    speak: none;
    text-transform: none;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

@-webkit-keyframes nc-icon-spin {
    0% {
        -webkit-transform: rotate(0deg);
    }

    100% {
        -webkit-transform: rotate(360deg);
    }
}

@-moz-keyframes nc-icon-spin {
    0% {
        -moz-transform: rotate(0deg);
    }

    100% {
        -moz-transform: rotate(360deg);
    }
}

@keyframes nc-icon-spin {
    0% {
        -webkit-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg);
    }

    100% {
        -webkit-transform: rotate(360deg);
        -moz-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}

.now-ui-icons.objects_umbrella-13:before {
    content: "\ea5f";
}

.now-ui-icons.shopping_cart-simple:before {
    content: "\ea1d";
}

.now-ui-icons.shopping_shop:before {
    content: "\ea50";
}

.now-ui-icons.ui-2_settings-90:before {
    content: "\ea4b";
}

.nav-tabs {
    border: 0;
    padding: 15px 0.7rem;
}

.nav-tabs:not(.nav-tabs-neutral)>.nav-item>.nav-link.active {
    box-shadow: 0px 5px 35px 0px rgba(26, 24, 24, 0.3);
}

.card .nav-tabs {
    border-top-right-radius: 0.1875rem;
    border-top-left-radius: 0.1875rem;
}

.nav-tabs>.nav-item>.nav-link {
    color: #000000;
    margin: 0;
    margin-right: 5px;
    background-color: transparent;
    border: 1px solid transparent;
    border-radius: 30px;
    font-size: 14px;
    padding: 11px 23px;
    line-height: 1.5;
}

.nav-tabs>.nav-item>.nav-link:hover {
    background-color: transparent;
}

.nav-tabs>.nav-item>.nav-link.active {
    background-color: rgb(109, 105, 105);
    border-radius: 30px;
    color: #FFFFFF;
}

.nav-tabs>.nav-item>.nav-link i.now-ui-icons {
    font-size: 14px;
    position: relative;
    top: 1px;
    margin-right: 3px;
}

.nav-tabs.nav-tabs-neutral>.nav-item>.nav-link {
    color: #000000;
}

.nav-tabs.nav-tabs-neutral>.nav-item>.nav-link.active {
    background-color: rgba(255, 255, 255, 0.2);
    color: #000000;
}

.card {
    border: 0;
    border-radius: 0.1875rem;
    display: inline-block;
    position: relative;
    width: 100%;
    margin-bottom: 30px;
    box-shadow: 0px 5px 25px 0px rgba(0, 0, 0, 0.2);
}

.card .card-header {
    background-color: transparent;
    border-bottom: 0;
    background-color: transparent;
    border-radius: 0;
    padding: 0;
}

.card[data-background-color="orange"] {
    background-color: #f96332;
}

.card[data-background-color="red"] {
    background-color: #FF3636;
}

.card[data-background-color="yellow"] {
    background-color: #FFB236;
}

.card[data-background-color="blue"] {
    background-color: #2CA8FF;
}

.card[data-background-color="green"] {
    background-color: #15b60d;
}

[data-background-color="orange"] {
    background-color: #e95e38;
}

[data-background-color="black"] {
    background-color: #2c2c2c;
}

[data-background-color]:not([data-background-color="gray"]) {
    color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) p {
    color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) a:not(.btn):not(.dropdown-item) {
    color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) .nav-tabs>.nav-item>.nav-link i.now-ui-icons {
    color: #FFFFFF;
}


@font-face {
  font-family: 'Nucleo Outline';
  src: url("https://github.com/creativetimofficial/now-ui-kit/blob/master/assets/fonts/nucleo-outline.eot");
  src: url("https://github.com/creativetimofficial/now-ui-kit/blob/master/assets/fonts/nucleo-outline.eot") format("embedded-opentype");
  src: url("https://raw.githack.com/creativetimofficial/now-ui-kit/master/assets/fonts/nucleo-outline.woff2");
  font-weight: normal;
  font-style: normal;
        
}

.now-ui-icons {
  display: inline-block;
  font: normal normal normal 14px/1 'Nucleo Outline';
  font-size: inherit;
  speak: none;
  text-transform: none;
  /* Better Font Rendering */
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}




@media screen and (max-width: 768px) {

    .nav-tabs {
        display: inline-block;
        width: 100%;
        padding-left: 100px;
        padding-right: 100px;
        text-align: center;
    }

    .nav-tabs .nav-item>.nav-link {
        margin-bottom: 5px;
    }
}
    </style>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 ml-auto col-xl-6 mr-auto">
            <div class="card">
              <div class="card-header">
                <ul class="nav nav-tabs nav-tabs-neutral justify-content-center" role="tablist" data-background-color="orange">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#home1" role="tab">Profile</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#profile1" role="tab">Security</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#messages1" role="tab">Email</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#settings1" role="tab">Phone</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <!-- Tab panes -->
                <div class="tab-content text-center">
                  <div class="tab-pane active text-center" id="home1" role="tabpanel">
                  
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>	
                            <strong>{{ $message }}</strong>
                    </div>
                    @endif
                    
                    
                    @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>	
                            <strong>{{ $message }}</strong>
                    </div>
                    @endif
                    
                    
                    @if ($message = Session::get('warning'))
                    <div class="alert alert-warning alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>	
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                    
                    
                    @if ($message = Session::get('info'))
                    <div class="alert alert-info alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>	
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                    
                    
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">×</button>	
                        Please check the form below for errors
                    </div>
                    @endif
                    
               
                    
                        <div class="card-body">
     
                            <form method="POST" action="{{ route('change.names', Auth::user()->id) }}">
                                @csrf
                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label ">Username</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{Auth::user()->name}}" name="name">
                                        @error('name')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label ">First Name</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control @error('f_name') is-invalid @enderror" value="{{Auth::user()->f_name}}" name="f_name">
                                        @error('f_name')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label ">Last Name</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control @error('l_name') is-invalid @enderror" value="{{Auth::user()->l_name}}" name="l_name">
                                        @error('f_name')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-outline-primary">
                                            Change 
                                        </button>
                                    </div>
                                </div>
                            </form>
                          
                        </div></p>
                  </div>
                  <div class="tab-pane" id="profile1" role="tabpanel">
                          @if(session()->has('error'))
                            <span class="alert alert-danger">
                           <strong>{{ session()->get('error') }}</strong>
                          </span>
                        @endif
                        @if(session()->has('success'))
                            <span class="alert alert-success">
                                <strong>{{ session()->get('success') }}</strong>
                            </span>
                        @endif
                    <div class="card-body">
                    <form method="POST" action="{{ route('change.password') }}">
                    @csrf
                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label ">Current Password</label>
                        <div class="col-md-6">
                            <input type="password" class="form-control @error('current_password') is-invalid @enderror" placeholder="Current Password" name="current_password" autocomplete="current_password">
                            @error('current_password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label ">New Password</label>
                        <div class="col-md-6">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="New Password" name="password" autocomplete="password">
                            @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label ">Password Confirmation</label>
                        <div class="col-md-6">
                            <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Confirm Password" name="password_confirmation" autocomplete="password_confirmation">
                            @error('password_confirmation')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-outline-primary">
                                Change Password
                            </button>
                        </div>
                    </div>
                </form>
            </div>
                  </div>
                  <div class="tab-pane" id="messages1" role="tabpanel">
                   
                    
                @if(session()->has('error'))
                <span class="alert alert-danger">
                    <strong>{{ session()->get('error') }}</strong>
                </span>
            @endif
            @if(session()->has('success'))
                <span class="alert alert-success">
                    <strong>{{ session()->get('success') }}</strong>
                </span>
            @endif
            <div class="card-body">
                <form method="POST" action="{{ route('change.email', Auth::user()->id) }}">
                    @csrf
                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label ">Email</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control @error('email') is-invalid @enderror" value="{{Auth::user()->email}}" name="email"><br/>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                                       <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-outline-primary">
                                Save
                            </button>
                        </div>
                    </div>
                        </div>
                        </div>
                </form>
            </div>
        </div>

               
                  <div class="tab-pane" id="settings1" role="tabpanel">
                    @if(session()->has('error'))
                    <span class="alert alert-danger">
                        <strong>{{ session()->get('error') }}</strong>
                    </span>
                @endif
                @if(session()->has('success'))
                    <span class="alert alert-success">
                        <strong>{{ session()->get('success') }}</strong>
                    </span>
                @endif
                <div class="card-body">
               
                <form action="{{url('create-user',Auth::user()->id)}}" method="POST"> 
                    {{csrf_field()}}
                            <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label ">Phone</label>
                            <div class="col-md-6">
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" placeholder="+8805" value="{{Auth::user()->phone}}" name="phone"><br/>
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <button class="btn btn-outline-secondary" type="submit">Save</button>
                          
                            </div>
                            </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Tabs on plain Card -->
          </div>
    </div>
  </div>
  

@endsection
@section('footer_js')
<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
@endsection
