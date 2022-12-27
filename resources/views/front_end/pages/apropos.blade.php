@extends('front_end.layouts.app')

@section('title','Apropos')

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
                                <li>Apropos</li>
                            </ul>
                        </nav>
                    </div>

                    <!--=======  End of breadcrumb container  =======-->
                </div>
            </div>
        </div>
    </div>

    <!--=====  End of breadcrumb area  ======-->
	<!-- About Section Start -->
	<div class="about-section mb-50">
		<div class="container">

			<div class="row row-30">

				<!-- About Image -->
				<div class="about-image col-lg-6 mb-50">
					<img width="800" height="517"  src="{{asset('/public/apropos/'.$apropos->image1)}}" alt="">
				</div>

				<!-- About Content -->
				<div class="about-content col-lg-6">
					<div class="row">
						<div class="col-12 mb-50">
							<h1><span>{{$apropos->titre1}}</span></h1>
							<p>{{$apropos->description1}}</p>
						</div>

						<div class="col-12 mb-50">
							<h4>{{$apropos->titre2}}</h4>
							<p>{{$apropos->description2}}</p>
						</div>

					</div>
				</div>

			</div>

			<div class="row row-10 mb-50">

				<!-- Banner -->
				<div class="col-md-4 mb-sm-30">
					<div class="single-banner">
						<a href="#"><img width="350" height="230"  src="{{asset('/public/apropos/'.$apropos->image2)}}" alt="Banner"></a>
					</div>
				</div>
				<div class="col-md-4 col-12 mb-sm-30">
					<div class="single-banner">
						<a href="#"><img width="350" height="230"  src="{{asset('/public/apropos/'.$apropos->image3)}}" alt="Banner"></a>
					</div>
				</div>
				<div class="col-md-4 col-12 mb-sm-00">
					<div class="single-banner">
						<a href="#"><img width="350" height="230"  src="{{asset('/public/apropos/'.$apropos->image4)}}" alt="Banner"></a>
					</div>

				</div>

			</div>

			<!-- Mission, Vission & Goal -->
			<div class="about-mission-vission-goal row row-20 mb-50">

				<div class="col-lg-4 col-md-6 col-12 mb-sm-30">
					<h3>{{$apropos->titre3}}</h3>
					<p>{{$apropos->description3}}</p>
				</div>

				<div class="col-lg-4 col-md-6 col-12 mb-sm-30">
					<h3>{{$apropos->titre4}}</h3>
					<p>{{$apropos->description4}}</p>
				</div>

				<div class="col-lg-4 col-md-6 col-12 mb-sm-0">
					<h3>{{$apropos->titre5}}</h3>
					<p>{{$apropos->description5}}</p>
				</div>

			</div>


		</div>
	</div>
	<!-- About Section End -->
@endsection
