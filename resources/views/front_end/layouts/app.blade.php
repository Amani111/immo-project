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
	<style>
	.parteunaire-btn {
    background: #f2f2f2;
    line-height: 19px;
    display: inline-block;
    padding: 15px 30px;
    border-radius: 3px;
    font-size: 11px;
    border: 1px solid #10acb2;
    background-color: #10acb2;
    color: #ffffff;
    text-transform: uppercase;
	}
	.parteunaire-btn:hover{
		color: #ffffff !important;
		background-color: grey;
	}
    .modal-dialog-centered {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    min-height: calc(100% - 1rem);
}
    .modal-dialog {
    max-width: 700px;
    width: auto;
  
    pointer-events: none;
}
.modal-content .modal-header {
    padding: 0;
    border: none;
}
.modal-header {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: start;
    -ms-flex-align: start;
    align-items: flex-start;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    padding: 1rem 1rem;
    border-bottom: 1px solid #dee2e6;
    border-top-left-radius: 0.3rem;
    border-top-right-radius: 0.3rem;
}
.modal-content {
    border: none;
    position: relative;
    padding: 0 !important;
    font-size: 14px;
    border-radius: 0;
    -webkit-box-shadow: 0px 10px 34px -15px rgb(0 0 0 / 24%);
    -moz-box-shadow: 0px 10px 34px -15px rgba(0, 0, 0, 0.24);
    box-shadow: 0px 10px 34px -15px rgb(0 0 0 / 24%);
}
.modal-content button.close {
    position: absolute;
    top: 0;
    right: 0;
    padding: 0;
    margin: 0;
    width: 40px;
    height: 40px;
    z-index: 1;
    text-shadow: none;
    background: #10acb2;
    color: #fff;
    opacity: 1;
}
    


	</style>
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
	<script src="{{asset('front-end/js/vendor/modernizr-2.8.3.min.js')}}"></script>

	<!-- jQuery JS -->
	<script src="{{asset('front-end/js/vendor/jquery.min.js')}}"></script>

	<!-- jQuery Migrate -->
	<script src="{{asset('front-end/js/vendor/jquery-migrate-3.3.2.min.js')}}"></script>

	<!-- Popper JS -->
	<script src="{{asset('front-end/js/popper.min.js')}}"></script>

	<!-- Bootstrap JS -->
	<script src="{{asset('front-end/js/bootstrap.min.js')}}"></script>

	<!-- Plugins JS -->
	<script src="{{asset('front-end/js/plugins.js')}}"></script>

	<!-- Main JS -->
	<script src="{{asset('front-end/js/main.js')}}"></script>

	@stack('after-scripts')
	@yield('js') 

</body>


</html>
