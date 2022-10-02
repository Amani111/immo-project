

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
	<link rel="icon" href="">
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
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('front-end/css/register.css')}}"> --}}

</head>
<body style="background-image: url({{('front-end/images/backgrounds/bg1.webp')}})">
        <div class="page-section mb-50 reg" style="padding-bottom: 55px;">
            <div class="container" >
                <div class="row ">
                    <div class=" col-9 col-sm-12 col-md-6 col-lg-8 col-xs-12" >
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="login-form">
                                <h4 class="login-title">Register</h4>

                                <div class="row">
                                    <div class="col-md-6 col-12 mb-20">
                                        <label for="name">Nom *</label>
                                        <input class="mb-0 @error('name') is-invalid @enderror" type="text" placeholder="Nom..." id="name" name="name"    value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-12 mb-20">
                                        <label for="phone">Téléphone *</label>
                                        <input class="mb-0 @error('phone') is-invalid @enderror" type="text" placeholder="téléphone" id="phone" type="tel"   name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                         @enderror
                                    </div>
                                    <div class="col-md-12 mb-20">
                                        <label for="email">Email *</label>
                                        <input class="mb-0 @error('email') is-invalid @enderror" type="email" placeholder="Address Email" id="email" type="email"  name="email" value="{{ old('email') }}" required autocomplete="email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                    <div class="col-md-6 mb-20">
                                        <label for="password">Password * </label>
                                        <input class="mb-0 @error('password') is-invalid @enderror" type="password" placeholder="Password" id="password"    name="password" required autocomplete="new-password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-20">
                                        <label for="password-confirm" >Confirmer Password *</label>
                                        <input class="mb-0" type="password" placeholder="Confirmer Password" id="password-confirm" type="password"  name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                    <div class="col-md-6 mb-20">
                                        <a href="{{route('login')}}">J'ai déja un compte</a>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="register-button mt-0">{{ __('Register') }}</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-3" style="background-image: url({{('front-end/images/products/tab-product02.webp')}})">
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>




