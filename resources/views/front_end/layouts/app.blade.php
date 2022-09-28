<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
	<link rel="icon" href="assets/images/favicon.ico">
    	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&amp;display=swap" rel="stylesheet">
    	<!-- CSS
	============================================ -->
    <link rel="stylesheet" type="text/css" href="{{asset('front-end/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front-end/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front-end/css/helper.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front-end/css/ionicons.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front-end/css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front-end/css/plugins.css')}}">
    @stack('before-styles')
</head>
<body>
    @include('front_end.includes.header')
    @yield('content')
    @include('front_end.includes.footer')
	<!-- scroll to top  -->
	<a href="#" class="scroll-top"></a>
	<!-- end of scroll to top -->
	<!-- JS
	============================================ -->
	<!-- Modernizer JS -->
	<script src="{{('front-end/js/vendor/modernizr-2.8.3.min.js')}}"></script>

	<!-- jQuery JS -->
	<script src="{{('front-end/js/vendor/jquery.min.js')}}"></script>

	<!-- jQuery Migrate -->
	<script src="{{('front-end/js/vendor/jquery-migrate-3.3.2.min.js')}}"></script>

	<!-- Popper JS -->
	<script src="{{('front-end/js/popper.min.js')}}"></script>

	<!-- Bootstrap JS -->
	<script src="{{('front-end/js/bootstrap.min.js')}}"></script>

	<!-- Plugins JS -->
	<script src="{{('front-end/js/plugins.js')}}"></script>

	<!-- Main JS -->
	<script src="{{('front-end/js/main.js')}}"></script>
</body>


</html>
