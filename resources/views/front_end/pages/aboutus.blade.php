@extends('front_end.layouts.app')

@section('title','Qui-somme-nous')

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
                                <li>Qui-somme-nous</li>
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
					<img width="800" height="517"  src="{{('front-end/images/banners/about-banner.webp')}}" alt="">
				</div>

				<!-- About Content -->
				<div class="about-content col-lg-6">
					<div class="row">
						<div class="col-12 mb-50">
							<h1>BIENVENUE À <span>TUNIMEUBLE.</span></h1>
							<p>FURNILIFE provide how all this mistaken idea of denouncing pleasure and sing pain was born an will give
								you a complete account of the system, and expound the actual teachings of the eat explorer of the truth,
								the mer of human.</p>
						</div>

						<div class="col-12 mb-50">
							<h4>VOULEZ-VOUS ETRE UN PARTENAIRE DE TUNIMEUBLE ?</h4>
							<p>FURNILIFE provide how all this mistaken idea of denouncing pleasure and sing pain was born an will give
								you a complete account of the system, and expound the actual teachings of the eat explorer of the truth,
								the mer of human.</p>
						</div>

					</div>
				</div>

			</div>

			<div class="row row-10 mb-50">

				<!-- Banner -->
				<div class="col-md-4 mb-sm-30">
					<div class="single-banner">
						<a href="#"><img width="350" height="230"  src="{{('front-end/images/banners/home3-banner1.webp')}}" alt="Banner"></a>
					</div>
				</div>
				<div class="col-md-4 col-12 mb-sm-30">
					<div class="single-banner">
						<a href="#"><img width="350" height="230"  src="{{('front-end/images/banners/home3-banner2.webp')}}" alt="Banner"></a>
					</div>
				</div>
				<div class="col-md-4 col-12 mb-sm-00">
					<div class="single-banner">
						<a href="#"><img width="350" height="230"  src="{{('front-end/images/banners/home3-banner3.webp')}}" alt="Banner"></a>
					</div>

				</div>

			</div>

			<!-- Mission, Vission & Goal -->
			<div class="about-mission-vission-goal row row-20 mb-50">

				<div class="col-lg-4 col-md-6 col-12 mb-sm-30">
					<h3>OUR VISSION</h3>
					<p>FURNILIFE provide how all this mistaken idea of denouncing pleasure and sing pain was born an will give you
						a ete account of the system, and expound the actual teangs the eat explorer of the truth, the mer of human
						tas assumenda est, omnis dolor repellend</p>
				</div>

				<div class="col-lg-4 col-md-6 col-12 mb-sm-30">
					<h3>OUR MISSION</h3>
					<p>FURNILIFE provide how all this mistaken idea of denouncing pleasure and sing pain was born an will give you
						a ete account of the system, and expound the actual teangs the eat explorer of the truth, the mer of human
						tas assumenda est, omnis dolor repellend</p>
				</div>

				<div class="col-lg-4 col-md-6 col-12 mb-sm-0">
					<h3>OUR GOAL</h3>
					<p>FURNILIFE provide how all this mistaken idea of denouncing pleasure and sing pain was born an will give you
						a ete account of the system, and expound the actual teangs the eat explorer of the truth, the mer of human
						tas assumenda est, omnis dolor repellend</p>
				</div>

			</div>


		</div>
	</div>
	<!-- About Section End -->
@endsection
