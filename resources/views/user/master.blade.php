<!DOCTYPE html>
<html lang="en">
  <head>
    <title>English 6</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">

    <link rel="stylesheet" href="{!! url('public/user/css/open-iconic-bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! url('public/user/css/animate.css') !!}">
    
    <link rel="stylesheet" href="{!! url('public/user/css/owl.carousel.min.css') !!}">
    <link rel="stylesheet" href="{!! url('public/user/css/owl.theme.default.min.css') !!}">
    <link rel="stylesheet" href="{!! url('public/user/css/magnific-popup.css') !!}">

    <link rel="stylesheet" href="{!! url('public/user/css/aos.css') !!}">

    <link rel="stylesheet" href="{!! url('public/user/css/ionicons.min.css') !!}">
    <link rel="shortcut icon" type="image/x-icon" href="{!! url('public/user/images/icon2.png') !!}">
    <link rel="stylesheet" href="{!! url('public/user/css/flaticon.css') !!}">
    <link rel="stylesheet" href="{!! url('public/user/css/icomoon.css') !!}">
    <link rel="stylesheet" href="{!! url('public/user/css/style.css') !!}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </head>
  <body>
  	@include('user.blocks.header')
    <!-- END nav -->
    
    @yield('content')

		<!-- foorer -->
		@include('user.blocks.footer')
		<!-- endfoorer -->

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{!! url('public/user/js/jquery.min.js') !!}"></script>
  <script src="{!! url('public/user/js/jquery-migrate-3.0.1.min.js') !!}"></script>
  <script src="{!! url('public/user/js/popper.min.js') !!}"></script>
  <script src="{!! url('public/user/js/bootstrap.min.js') !!}"></script>
  <script src="{!! url('public/user/js/jquery.easing.1.3.js') !!}"></script>
  <script src="{!! url('public/user/js/jquery.waypoints.min.js') !!}"></script>
  <script src="{!! url('public/user/js/jquery.stellar.min.js') !!}"></script>
  <script src="{!! url('public/user/js/owl.carousel.min.js') !!}"></script>
  <script src="{!! url('public/user/js/jquery.magnific-popup.min.js') !!}"></script>
  <script src="{!! url('public/user/js/aos.js') !!}"></script>
  <script src="{!! url('public/user/js/jquery.animateNumber.min.js') !!}"></script>
  <script src="{!! url('public/user/js/scrollax.min.js') !!}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{!! url('public/user/js/google-map.js') !!}"></script>
  <script src="{!! url('public/user/js/main.js') !!}"></script>
    
  </body>
</html>