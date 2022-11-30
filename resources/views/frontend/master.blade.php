<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin {{ Auth::user()->name }}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <!--Toggole-->
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ url('admin/plugins/fontawesome-free/css/all.min.css')}}">

  <link rel="stylesheet" href="{{ url('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ url('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ url('admin/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('admin/dist/css/adminlte.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ url('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ url('admin/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ url('admin/plugins/summernote/summernote-bs4.min.css')}}">
  <!-- Datatable -->
  <link rel="stylesheet" href="{{ url('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ url('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
  <style>
    .sidebar .logo {
  padding: 15px 0px;
  margin: 0;
  display: block;
  position: relative;
  z-index: 4;
  margin: auto;
  width: 100%;

}

.sidebar .logo:after {
  content: '';
  position: absolute;
  bottom: 0;
  right: 15px;
  height: 1px;
  width: calc(100% - 30px);
  margin: auto;
  width: 100%;

}

.sidebar .logo p {

  font-size: 20px;
  margin: 10px 10px;
  color: #fff;
  line-height: 20px;
  margin: auto;
  width: 100%;

}

.sidebar .logo .simple-text {
  text-transform: uppercase;
  padding: 5px 0px;
  display: inline-block;
  font-size: 18px;
  color: #3C4858;
  white-space: nowrap;
  font-weight: 400;
  line-height: 30px;
  overflow: hidden;
  text-align: center;
  display: block;
  margin: auto;
  width: 100%;

  padding: 10px;
}

.sidebar .logo-tim {
  border-radius: 50%;
  border: 1px solid #333;
  display: block;
  height: 61px;
  width: 61px;
  overflow: hidden;
  margin: auto;
  width: 50%;

  padding: 10px;

}

.sidebar .logo-tim img {
  width: 60px;
  height: 60px;
  margin: auto;
  width: 50%;

  padding: 10px;
}

.icon {
    cursor: pointer;
    margin-right: 50px;
    line-height: 60px
}

.icon span {
    background: #f00;
    padding: 7px;
    border-radius: 50%;
    color: #fff;
    vertical-align: top;
    margin-left: -25px
}

.icon img {
    display: inline-block;
    width: 26px;
    margin-top: 4px
}

.icon:hover {
    opacity: .7
}

.logo {
    flex: 1;
    margin-left: 50px;
    color: #eee;
    font-size: 20px;
    font-family: monospace
}

.notifications {
    width: 300px;
    height: 0px;
    opacity: 0;
    position: absolute;
    top: 63px;
    right: 62px;
    border-radius: 5px 0px 5px 5px;
    background-color: #fff;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
}

.notifications h2 {
    font-size: 14px;
    padding: 10px;
    border-bottom: 1px solid #eee;
    color: #999
}

.notifications h2 span {
    color: #f00
}

.notifications-item {
    display: flex;
    border-bottom: 1px solid #eee;
    padding: 6px 9px;
    margin-bottom: 0px;
    cursor: pointer
}

.notifications-item:hover {
    background-color: #eee
}

.notifications-item img {
    display: block;
    width: 50px;
    height: 50px;
    margin-right: 9px;
    border-radius: 50%;
    margin-top: 2px
}

.notifications-item .text h4 {
    color: #777;
    font-size: 16px;
    margin-top: 3px
}

.notifications-item .text p {
    color: #aaa;
    font-size: 12px
}
  </style>
  @include('sweetalert::alert')
  @yield('style_css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

      <li class="nav-item">
        <a class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal"><i class="far fa-copy"></i>  Get Your Link</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        {{-- <a class="nav-link" data-toggle="dropdown" href="#">

          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="left: inherit; right: 0px;">

            <a class="dropdown-item" href="http://127.0.0.1:8000/profile/Tomal Sen">Profile</a>


        </div> --}}
     <div class="icon" id="bell" style="left: inherit; right: 0px;"><i class="far fa-bell"></i></div>
    <div class="notifications" id="box">
        <h2>Notifications</h2>
        @php
        $notifications = DB::table('notifies')
        ->where('user_id', Auth::user()->id)
        ->where('status', 'active')
        ->orderBy('created_at', 'desc')
        ->get()
@endphp
         @foreach ($notifications as $notification)
<div class="notifications-item"><img src="https://img.icons8.com/external-icongeek26-flat-icongeek26/64/000000/external-announcement-essentials-icongeek26-flat-icongeek26.png"/>
            <div class="text">
                <h4>{{ $notification->email}}</h4>
                <p>{{ $notification->message }}</p>
            </div>
        </div>
         @endforeach

    </div>
      </li>

      @php
      $amount = App\Wallet::where('user_id', auth()->id())->get();
      $var=0;
      @endphp
      @foreach ($amount as $am)
      @php
      $var = intval($var) + intval($am->wallet_amount)
      @endphp
      @endforeach

      <li class="nav-item">
        <a class="nav-link" style="font-size: 22px; color:rgb(29, 202, 43);" href="#" role="button">
          {{Auth::user()->balance}} TK
        </a>
      </li>
      @guest
      <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
      </li>
      @if (Route::has('register'))
          <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
          </li>
      @endif
  @else
      <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }} <span class="caret"></span>
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              @can('manage-users')
              <a class="dropdown-item" href="{{ route('admin.users.index') }}">
                User Managment
              </a>
              @endcan

              <a class="dropdown-item" href="{{url('profile')}}/{{Auth::user()->user_name}}">Profile</a>
              <a class="dropdown-item" href="{{url('Settings')}}/{{Auth::user()->user_name}}">OTP Settings</a>
              <a class="dropdown-item" href="{{url('Settings')}}/{{Auth::user()->user_name}}#profile1">Change Password</a>
              <a class="dropdown-item" href="{{url('Settings')}}/{{Auth::user()->user_name}}">Settings</a>
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          </div>
      </li>
  @endguest

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel text-center pb-3 d-flex">

        <div class="logo">
          <a style="color: #ffffff; font-size:18px; text-decoration:none;" href="#" class="simple-text logo-normal">
            <img src="{{asset('user/'.Auth::user()->avatar)}}" alt="" style="width:85px; height:85px;"><br/>
            {{ Auth::user()->name }} <br/>
          <small> {{ Auth::user()->package }} </small>
        <br/>
        @php

        @endphp
        @if($var==1000)
        Level 1

        @elseif ($var==600)
          Level 2

        @elseif ($var==100)
          Level 3
        @else
        No Level Yet
        @endif
        </a></div>

        {{-- <div class="image">
        <img src="{{ url('user')}}/{{ Auth::user()->avatar }}" class="img-circle elevation-2" alt="User Image">
        </div><br/> --}}
        {{-- <div class="info">
        <a style="color:#ffffff; font-size:22px;" href="#" class="d-block">{{ Auth::user()->name }}</a>
        <br/>
        <p style="color:#ffffff; font-size:22px; text-transform: uppercase;">{{ Auth::user()->package }}</p>
        <br/>
        <p style="color:#ffffff; font-size:22px;">Level 1</p>
        </div> --}}
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item">
            <a href="{{url('dashboard')}}/{{Auth::user()->user_name}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p style="color: #ffffff; font-size:22px;">
               Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item ">
            <a class="nav-link" href="{{url('work')}}/{{Auth::user()->name}}">
              <i class="nav-icon fas fa-briefcase"></i>
              <p style="color: #ffffff; font-size:22px;">Work</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{url('wallet')}}">
              <i class="nav-icon fas fa-wallet"></i>
              <p style="color: #ffffff; font-size:22px;">Wallet</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{url('team')}}">
              <i class="nav-icon fas fa-users"></i>
              <p style="color: #ffffff; font-size:22px;">Team</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{url('earning')}}">
              <i class="nav-icon fas fa-hand-holding-usd"></i>
              <p style="color: #ffffff; font-size:22px;">Your Earning</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{url('report')}}">
              <i class="nav-icon fas fa-paste"></i>
              <p style="color: #ffffff; font-size:22px;">Report</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
            <i class="nav-icon fas fa-flag-checkered"></i>   <p style="color: #ffffff; font-size:22px;">Logout</p>
         </a>

         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
             @csrf
         </form>
            </a>
          </li>

          {{-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Mailbox
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/compose.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/read-mail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Read</p>
                </a>
              </li>
            </ul>
          </li> --}}

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper mt-3 py-5 mb-3">

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

        @if (session('error'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{ session('error') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
        </div>
            @endif
            @if (session('success'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
            </div>
            @endif
           @yield('content')

          </div>
        </div>
      </div>

    </div>
  </div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reffer Link</h5>
        <button type="button" class="btn btn-outline-success" data-dismiss="modal" aria-label="Close">X</button>
      </div>
      <div class="modal-body">
        <input type="text" class="form-control" disabled value="https://www.peoplework.online/signup/ref/{{Auth::user()->reffer_code}}" id="myInput"><br/>
        <a href="#" class="btn btn-outline-success" class="nav-link" onclick="myFunction()">
          Copy
        </a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


  @yield('footer_js')
</div>


<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ url('admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ url('admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>

function myFunction() {
  /* Get the text field */
  var copyText = document.getElementById("myInput");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */

  /* Copy the text inside the text field */
  navigator.clipboard.writeText(copyText.value);

  /* Alert the copied text */
  alert("Copied the text: " + copyText.value);
}


$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- yields-->
@yield('footer_js')
<!-- Data Table -->
<script src="{{ url('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ url('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ url('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>

<script src="cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ url('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{ url('admin/plugins/sparklines/sparkline.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ url('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{ url('admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!--data toggole --->
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{ url('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ url('admin/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ url('admin/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url('admin/dist/js/demo.js')}}"></script>
<script>
$(document).ready(function(){




var down = false;

$('#bell').click(function(e){

var color = $(this).text();
if(down){

$('#box').css('height','0px');
$('#box').css('opacity','0');
down = false;
}else{

$('#box').css('height','auto');
$('#box').css('opacity','1');
down = true;

}

});

});
</script>
</body>
</html>
