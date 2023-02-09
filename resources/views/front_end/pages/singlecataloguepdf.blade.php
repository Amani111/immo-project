@extends('front_end.layouts.app')

@section('title','single showroom')
@push('before-styles')
<link rel="stylesheet" type="text/css" href="{{asset('front-end/css/script.css')}}">

@endpush

@section('content')
 <!--=============================================
	=            breadcrumb area         =
	=============================================-->

    <div class="breadcrumb-area pt-15 pb-15">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  breadcrumb container  =======-->
                    <div class="breadcrumb-container">
                        <nav>
                            <ul>
                                <li class="parent-page"><a href="{{route('/')}}">Accueil</a></li>
                                <li>catalogue Showroom</li>
                            </ul>
                        </nav>
                    </div>
                    <!--=======  End of breadcrumb container  =======-->
                </div>
            </div>
        </div>
    </div>
   
<div class="container">
    <div class="row">
        <div id="pdf">
            <iframe src="{{asset('/public/newcatalog/pdf/'.$images)}}" width="70%" height="800" style="border: none;" allowFullScreen>
            </iframe>
        </div>
    </div>
</div>
    

    

    @endsection
    