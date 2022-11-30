<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Admin {{ Auth::user()->name }}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  {{-- Styles --}}
  <link rel="stylesheet" href="{{asset('admin/css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('admin/css/boxicons.css')}}">
  <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('admin/css/nav.css')}}">
  <style>
    a{
      text-decoration: none;
    }
  </style>
  @include('sweetalert::alert')

  @yield('style_css')
</head>
<body>

  <!-- Side-Nav -->
  <div class="side-navbar active-nav d-flex justify-content-between flex-wrap flex-column" id="sidebar">
    <ul class="nav flex-column text-white w-100">
      <a href="#" class="nav-link h3 text-white my-2">
       People's Work
      </a>
      <li class="nav-item"><a class="nav-link" href="{{url('admin/dashboard')}}" style="color:white;"><i class="fas fa-tachometer-alt" style="color: #ffffff;"></i><span class="mx-2">Dashboard</span></a></li>
      <li class="nav-item"><a class="nav-link" href="{{route('admin.users.index')}}" style="color:white;"><i class="fas fa-wallet" style="color: #ffffff;"></i><span class="mx-2">Manage User</a></span></li>
      <li class="nav-item"><a class="nav-link" href="{{url('admin/video')}}" style="color:white;"><i class="fas fa-photo-video" style="color: #ffffff;"></i><span class="mx-2">PTC ads</span></a></li>
      <li class="nav-item"><a class="nav-link" href="{{url('admin/package')}}" style="color:white;"><i class="fas fa-box" style="color: #ffffff;"></i><span class="mx-2">Package Request</span></a></li>
      <li class="nav-item"><a class="nav-link" href="{{url('admin/withdraw')}}" style="color:white;"><i class="fas fa-money-check-alt" style="color: #ffffff;"></i><span class="mx-2">Withdrawal</span></a></li>
    </ul>
  </div>

  <!-- Main Wrapper -->
  <div class="p-1 my-container content active-cont" style="padding-right: 25px;">
    <!-- Top Nav -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">People's Work</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item">
              <a class="navbar-brand btn border-5" id="menu-btn"><i class="fas fa-bars"></i></a>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="far fa-bell"></i>
                  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    9
                    <span class="visually-hidden">unread Notification</span>
                  </span>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
              </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="{{url('profile')}}/{{Auth::user()->user_name}}"><i title="Profile" class="fas fa-user"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="{{url('Settings')}}/{{Auth::user()->user_name}}"><i title="Settings" class="fas fa-users-cog"></i></a></li>
             <li><a class="nav-link" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
              <i title="Logout" class="fas fa-sign-out-alt"></i>
           </a>
           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
          </li>
          </ul>
        </div>
      </div>
    </nav>

    @yield('content')
  </div>




<!-- bootstrap js -->

@yield('footer_js')
<!-- Data Table -->
<script src="{{ asset('admin/js/script.js')}}"></script>
<script src="{{ asset('admin/js/bootstrap.bundle.js')}}"></script>

</body>
</html>
