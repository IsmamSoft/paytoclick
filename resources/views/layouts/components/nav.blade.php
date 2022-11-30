<div class="menuBar">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html"><img src="{{ asset('public/assets_landing/Images/logo.png') }}" class="logo" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('about_us')}}">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/#plan">Our Plans</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('contactus')}}">Contact</a>
              </li>
            </ul>
            @guest
            <ul class="navbar-nav ms-auto">
                <button class="log_sign_btn">
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Sign Up</a>
                </button>
            </ul>
            @else
            <ul class="navbar-nav ms-auto">
                <button class="log_sign_btn">

                    <a href="{{ route('dashboard', ['name' => Auth::user()->user_name]) }}">Dashboard</a>

                    <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form></div>

                </button>
            </ul>
            @endguest
          </div>
        </div>
      </nav>
    </div>
{{-- <div class="header">
    <div class="container">
        <div class="row">
            <div class="nav-wrapper">
                <div class="brand">
                    <a href="{{url('/')}}"><img src="{{ asset('public/assets/img/logo.png')}}" alt="logo.png"></a>
                </div>
                <ul>
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="{{url('about')}}">About Us</a></li>
                    <li><a href="{{url('/')}}/#plan">Our Plans</a></li>
                    <li><a href="{{url('contact')}}">Contact</a></li>
                </ul>
                <div class="btn-wrapper">

@guest

    <div class="login-btn"><a href="{{ route('login') }}">Login</a></div>
    <div class="signup-btn"><a href="{{route('register')}}">Sign Up</a></div>
@else
        @can('manage-users')
        @if (Auth::user()->urole == 'admin')
        <div class="signup-btn"><a href="{{ route('admin.dashboard') }}">
            <i class="fas fa-user-shield"></i>  Admin
        </a></div>
        @elseif (Auth::user()->urole == 'superadmin')
        <div class="signup-btn"><a href="{{ route('superadmin.users.index') }}">
            <i class="fas fa-user-shield"></i> Super Admin
        </a></div>
        @else
        LOL
        @endif
        @endcan
        <div class="signup-btn"><a href="{{ url('dashboard') }}/{{Auth::user()->name}}"><i class="far fa-id-card"></i> Dashboard </a></div>
        <div class="signup-btn"><a href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
           <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form></div>

@endguest


                </div>
            </div>
        </div>
    </div>
</div> --}}
