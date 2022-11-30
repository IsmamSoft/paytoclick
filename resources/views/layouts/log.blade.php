<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People Work</title>
    <link rel="stylesheet" href="{{ asset('public/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('public/assets_landing/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1a4a488850.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('public/assets_landing/fontawesome/css/all.min.css') }}">
    <link rel="icon" href="{{ asset('public/assets_landing/Images/icon.png') }}">
        @include('sweetalert::alert')
</head>
<body>


    <!--========================
                Header
    ==========================-->

    <section class="banner" id="banner">
        <div class="container">

            @include('layouts..components.nav')

            @yield('content')

        </div>
    </section>


            <!--======================
                        Home
            =========================-->





<!-- counter js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script src="{{ asset('public/assets_landing/js/jquery.counterup.min.js') }}"></script>
@yield('script')
</body>
</html>



{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>People Work</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <!-- font awesome css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- jquery min js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    <!-- font awesome css -->
    @include('sweetalert::alert')

</head>
<body>

@include('layouts.components.nav')
<div class="container">
@yield('content')
</div>
</body>
</html> --}}
