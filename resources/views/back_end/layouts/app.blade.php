<html lang="{{ app()->getLocale() }}">

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
  <!--     Fonts and icons     -->
  <!-- Nucleo Icons -->
  {{-- <link href="{{('backend/assets/css/nucleo-icons.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{('backend/assets/css/nucleo-svg.css')}}" rel="stylesheet" type="text/css" /> --}}
  {{ Html::style('backend/assets/css/nucleo-icons.css') }}
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/349ee9c857.js" crossorigin="anonymous"></script>
  {{-- <link rel="stylesheet" type="text/css" href="{{('backend/assets/css/nucleo-svg.css')}}"  /> --}}
  {{ Html::style('backend/assets/css/nucleo-svg.css') }}
  {{ Html::style('backend/assets/css/sweetalert.css') }}
  <!-- CSS Files -->
   <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/corporate-ui-dashboard.css?v=1.0.0')}}"  /> 
  {{ Html::style('backend/assets/css/corporate-ui-dashboard.css?v=1.0.0') }}
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  @stack('before-styles')
</head>

<body class="g-sidenav-show  bg-gray-100">
    @include('back_end.includes.asidebar')
    <main class="main-content  ">
        <!-- Navbar -->
      @include('back_end.includes.header')
        <!-- End Navbar -->
        <div class="container">
         
          @yield('content')
          @include('back_end.includes.footer')
        </div>
      </main>
</body>
  <!--   Core JS Files   -->
  <script src="{{asset('backend/assets/js/core/popper.min.js')}}"></script>
 <script src="{{asset('backend/assets/js/core/bootstrap.min.js')}}"></script> 
   <script src="{{asset('backend/assets/js/plugins/perfect-scrollbar.min.js')}}"></script> 
   <script src="{{asset('backend/assets/js/plugins/smooth-scrollbar.min.js')}}"></script> 
  <script src="{{asset('backend/assets/js/plugins/chartjs.min.js')}}"></script>
  <script src="{{asset('backend/assets/js/sweetalert.min.js')}}"></script>
  <script src="{{asset('backend/assets/js/plugins/swiper-bundle.min.js')}}" type="text/javascript"></script>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Corporate UI Dashboard: parallax effects, scripts for the example pages etc -->
   <script src="{{asset('backend/assets/js/corporate-ui-dashboard.min.js?v=1.0.0')}}"></script>



   @stack('after-scripts')
   @yield('js') 
</html>
