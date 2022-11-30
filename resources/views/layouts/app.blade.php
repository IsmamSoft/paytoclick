<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People Work</title>
    <link rel="stylesheet" href="{{ asset('public/assets_landing/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1a4a488850.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('public/assets_landing/fontawesome/css/all.min.css') }}">
    <link rel="icon" href="{{ asset('public/assets_landing/Images/icon.png') }}">
    @yield('style_css')
    @stack('css')
        @include('sweetalert::alert')
</head>
<body>


    <!--========================
                Header
    ==========================-->

{{-- @include('layouts.components.nav') --}}


            <!--======================
                        Home
            =========================-->


           @yield('content')


            <!---- footer ------->
<section class="footer" id="footer">
    <div class="container">
        <div class="row">

            <div class="col-md-4">
                 <div class="footerBox">
                     <img src="{{asset('public/assets_landing/Images/logo.png')}}" class="logo" alt="">
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit deleniti totam esse sint. Maiores perferendis voluptates quas quia voluptate enim asperiores esse officiis harum aperiam?
                          Ullam quasi quis magnam architecto!
                    </p>
                 </div>
            </div>

            <div class="col-md-2">
                <div class="footerBox ps-1">
                    <h1>Company</h1>
                     <a href="">About US</a>
                     <a href="">Contact Us</a>
                     <a href="">Blog</a>
                </div>
            </div>

            <div class="col-md-2">
                <div class="footerBox">
                    <h1>Support</h1>
                     <a href="">FAQ</a>
                     <a href="">24/7 Support</a>
                     <a href="">Knowledge Bose</a>
                </div>
            </div>

            <div class="col-md-2">
                <div class="footerBox">
                    <h1>Policy</h1>
                     <a href="">Trems Of Use</a>
                     <a href="">Privacy Policy</a>
                     <a href="">Refund Policy</a>
                </div>
            </div>

            <div class="col-md-2">
                <div class="footerBox">
                    <h1>Contact</h1>
                     <a href="#">peopleworkbd@gmail.com</a>
                     <a href="#">+880 1824676693</a>
                </div>
            </div>

        </div>
<hr>

<div class="copyright">
    <div>
        <p>Copyright All Right Reserved By <span class="text-danger">People Work</span></p>
    </div>
    <div>
        <p>Developed By <span class="text-danger">TANJIM</span></p>
    </div>
    <div class="footer-link">
       <a target="blank" href="https://www.facebook.com/peoples.work.24"> <i class="fab fa-facebook"></i></a>
       <a href="#"> <i class="fab fa-linkedin-in"></i></a>
       <a href="#"> <i class="fab fa-instagram"></i></a>
       <a href="#"> <i class="fab fa-twitter"></i></a>
    </div>
</div>


    </div>
</section>

    <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "104700511998175");
        chatbox.setAttribute("attribution", "biz_inbox");

        window.fbAsyncInit = function() {
            FB.init({
                xfbml            : true,
                version          : 'v12.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
<!---- /footer ------->

<!-- counter js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script src="{{ asset('public/assets_landing/js/jquery.counterup.min.js') }}"></script>
@yield('script')
</body>
</html>
