<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{Auth::user()->name}}'s Dashboard</title>

  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--  Fonts and icons  -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"> --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- CSS Files -->
  <link href="{{ asset('assets/assets/css/material-dashboard.css?v=2.1.2')}}" rel="stylesheet"/>
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{ asset('assets/assets/demo/demo.css')}}" rel="stylesheet"/>
  <link href="{{ asset('assets/css/bootstrap.css')}}" rel="stylesheet"/>
  <link href="{{ asset('assets/datatable/css/dataTables.css')}}" rel="stylesheet"/>

  @yield('style_css')
  @include('sweetalert::alert')

</head>
 
<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-background-color="white" style="background-color: #1f1d1d;"> 

      <div class="logo">
          <a style="color: #ffffff; font-size:18px; text-decoration:none;" href="#" class="simple-text logo-normal">
            <img src="{{asset('user')}}/{{Auth::user()->avatar}}" alt="" style="width:85px; height:85px;"><br/>
            {{ Auth::user()->name }} <br/>
          <small> {{ Auth::user()->package }} </small>
        <br/>
        @php
           
        @endphp
          <small> Level 1 </small>

        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{url('dashboard')}}/{{Auth::user()->name}}">
              <i class="fas fa-tachometer-alt"></i>
              <p style="color: #ffffff; font-size:18px;">Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{url('work')}}/{{Auth::user()->name}}">
              <i class="fas fa-briefcase"></i>
              <p style="color: #ffffff; font-size:18px;">Work</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{url('wallet')}}">
              <i class="fas fa-wallet"></i>
              <p style="color: #ffffff; font-size:18px;">Wallet</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{url('team')}}">
              <i class="fas fa-users"></i>
              <p style="color: #ffffff; font-size:18px;">Team</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{url('earning')}}">
              <i class="fas fa-hand-holding-usd"></i>
              <p style="color: #ffffff; font-size:18px;">Your Earning</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{url('report')}}">
              <i class="material-icons">notifications</i>
              <p style="color: #ffffff; font-size:18px;">Report</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt"></i>   <p style="color: #ffffff; font-size:18px;">Logout</p>
         </a>

         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
             @csrf
         </form>
            </a>
          </li>
   
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#">People's Work</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>


          <div class="collapse navbar-collapse justify-content">
            <form class="navbar-form">
              <div class="input-group">
                <input type="text" value="" class="form-control" style="border-radius: 5px;" placeholder="Search...">
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="btn btn-outline-primary" data-toggle="modal" data-target="#links"><i class="far fa-copy"></i>  Get Your Link</a>
              </li>
            </ul>
          </div> 
          @php
          $amount = App\Wallet::where('user_id', auth()->id())->get();
          $var=0;
          @endphp
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item">
                @foreach ($amount as $am)
                @php  
                $var = intval($var) + intval($am->wallet_amount)
                @endphp
                @endforeach
                <a href="{{url('withdraw')}}"  class="nav-link" style="color: green;"> <b><h5><i class="fas fa-money-bill-wave"></i> {{$var}}
               
                {{-- @dd($var) --}}
              </h5></b> </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">
                    0
                  </span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#"> Open account with your Referal</a>
                </div>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  {{-- <i class="material-icons">person</i> --}}
                  {{-- <p class="d-lg-none d-md-block"> --}}
                    {{-- Account --}}
                    <img src="{{asset('user')}}/{{Auth::user()->avatar}}" style="height: 30px; width:30px;  border-radius:15px;" alt="">
                  {{-- </p> --}}
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  @can('manage-users')
                  @if (Auth::user()->urole == 'admin')
                  <a href="{{ route('admin.dashboard') }}">
                      <i class="fas fa-user-shield"></i>  Admin
                  </a>
                  @elseif (Auth::user()->urole == 'superadmin')
                  <a href="{{ route('superadmin.users.index') }}">
                      <i class="fas fa-user-shield"></i> Super Admin
                  </a>
                  @else
                  LOL
                  @endif
                  @endcan
                  <a class="dropdown-item" href="{{url('profile')}}/{{Auth::user()->name}}">Profile</a>

                  <a class="dropdown-item" href="{{url('profile')}}/{{Auth::user()->name}}">Profile</a> 
                  <a class="dropdown-item" href="{{url('create-user')}}">OTP Settings</a>
                  <a class="dropdown-item" href="{{url('change-password')}}">Change Password</a>
                  <a class="dropdown-item" href="{{url('Settings')}}/{{Auth::user()->name}}">Settings</a>
                  <div class="dropdown-divider"></div>

                  {{-- <a class="dropdown-item" href="#">Log out</a> --}}

                  <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
               <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
                </div>
              </li>



            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            
           @yield('content')
 
          </div>
        </div>
      </div>
      {{-- <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
        
              <li>
                <a href="https://creative-tim.com/presentation">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
              <li>
                <a href="https://www.creative-tim.com/license">
                  Licenses
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>
          </div>
        </div>
      </footer> --}}
    </div>
  </div>

  
<!-- Modal -->
<div class="modal fade" id="links" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reffer Link</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="text" class="form-control" value="{{Auth::user()->reffer_code}}" id="myInput">
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
  <!--   Core JS Files   -->
  <script src="{{ asset('assets/datatable/js/dataTables.js')}}"></script>
  <script src="{{ asset('assets/assets/js/core/jquery.min.js')}}"></script>
  <script src="{{ asset('assets/assets/js/core/popper.min.js')}}"></script>
  <script src="{{ asset('assets/assets/js/core/bootstrap-material-design.min.js')}}"></script>
  <script src="{{ asset('assets/assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <!-- Plugin for the momentJs  -->
  <script src="{{ asset('assets/assets/js/plugins/moment.min.js')}}"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="{{ asset('assets/assets/js/plugins/sweetalert2.js')}}"></script>
  <!-- Forms Validations Plugin -->
  <script src="{{ asset('assets/assets/js/plugins/jquery.validate.min.js')}}"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="{{ asset('assets/assets/js/plugins/jquery.bootstrap-wizard.js')}}"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="{{ asset('assets/assets/js/plugins/bootstrap-selectpicker.js')}}"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="{{ asset('assets/assets/js/plugins/bootstrap-datetimepicker.min.js')}}"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="{{ asset('assets/assets/js/plugins/jquery.dataTables.min.js')}}"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="{{ asset('assets/assets/js/plugins/bootstrap-tagsinput.js')}}"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="{{ asset('assets/assets/js/plugins/jasny-bootstrap.min.js')}}"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="{{ asset('assets/assets/js/plugins/fullcalendar.min.js')}}"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="{{ asset('assets/assets/js/plugins/jquery-jvectormap.js')}}"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{ asset('assets/assets/js/plugins/nouislider.min.js')}}"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="{{ asset('assets/assets/js/plugins/arrive.min.js')}}"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="{{ asset('assets/assets/js/plugins/chartist.min.js')}}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{ asset('assets/assets/js/plugins/bootstrap-notify.js')}}"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('assets/assets/js/material-dashboard.js?v=2.1.2')}}" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{ asset('assets/assets/demo/demo.js')}}"></script>
 
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


    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
</body>

</html>