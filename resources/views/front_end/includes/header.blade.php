<!--=============================================
	=            header container         =
	=============================================-->

	<div class="header-container header-sticky">

		<!--=============================================
		=            header top         =
		=============================================-->


		<!--=====  End of header top  ======-->

		<!--=============================================
		=            navigation menu top            =
		=============================================-->


		<div class="navigation-menu-top pt-35  pt-md-15 pb-md-15 pt-sm-15 pb-sm-15">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-6 col-lg-4 col-md-6 col-sm-6 order-1 order-lg-1">
						<!--=======  logo  =======-->

						<div class="logo">
							<a href="{{route('/')}}">
								<img width="155" height="35"  src="{{asset('front-end/images/lo1-removebg-preview.png')}}" class="img-fluid"  alt="">
							</a>
						</div>

						<!--=======  End of logo  =======-->
					</div>
					<div class="col-12 col-lg-8 col-md-12 col-sm-12 order-3 order-lg-2">
						<!--=======  header feature container  =======-->

						<div class="header-feature-container mt-md-15 mt-sm-15">
							<!--=======  single feature  =======-->

							<div class="single-feature d-flex">
								<div class="image">
									<i class="icon ion-md-checkmark-circle-outline"></i>
								</div>
								<div class="content">
									<h5> BON MEUBLE</h5>
									<p>choisie le bon meuble </p>
								</div>
							</div>

							<!--=======  End of single feature  =======-->
							<!--=======  single feature  =======-->

							<div class="single-feature d-flex">
								<div class="image">
									<i class="icon ion-md-checkmark-circle-outline"></i>
								</div>
								<div class="content">
									<h5>BON PRIX</h5>
									<p>choisie le bon prix </p>
								</div>
							</div>

							<!--=======  End of single feature  =======-->
							<!--=======  single feature  =======-->

							<div class="single-feature d-flex mb-sm-0">
								<div class="image">
									<i class="icon ion-md-checkmark-circle-outline"></i>
								</div>
								<div class="content">
									<h5>PLUS PROCHE</h5>
									<p>l'endroit le plus proche </p>
								</div>
							</div>
							<div class="single-feature d-flex mb-sm-0">
							
								<a href="{{route('pack')}}" class="parteunaire-btn">Devenir partenaire</a>
							</div>
						
 								
								
								
							

							<!--=======  End of single feature  =======-->
							
						</div>

						<!--=======  End of header feature container  =======-->


					</div>

				</div>
			</div>
		</div>

		<!--=======  End of navigation menu top  =======-->

		<!--=============================================
		=            navigation menu         =
		=============================================-->

		<div class="navigation-menu">
			<div class="container">
				<div class="row align-items-center justify-content-between">
					<div class="col-12 col-lg-3 col-md-12 col-sm-12 position-relative">
						<!--=======  category menu  =======-->

						<div class="hero-side-category">
							<!-- Category Toggle Wrap -->
							<div class="category-toggle-wrap">
								<!-- Category Toggle -->
								<button class="category-toggle"> <i class="fa fa-bars"></i> CATEGORIES </button>
							</div>

							<!-- Category Menu -->
							<nav class="category-menu">
								<ul>
									@foreach($category as $data)
									@if(count($data->souscategories) != 0 )
									<li class="menu-item-has-children"><a href="{{route('productwithcategory',$data->id)}}">{{$data->name}}</a>
										<!-- category submenu -->
										<ul class="category-mega-menu">
											@foreach($data->souscategories as $cat)
											<li><a href="{{route('productwithsubcategory',$cat->id)}}">{{$cat->name}}</a></li>
											@endforeach
										</ul>
									</li>
									@else
										<li><a href="{{route('productwithcategory',$data->id)}}">{{$data->name}}</a></li>
									@endif
									@endforeach
								</ul>
							</nav>
						</div>

						<!--=======  End of category menu =======-->

						<!--=======  sticky logo  =======-->

						<div class="sticky-logo">
							<a href="{{route('/')}}">
								<img width="135" height="35" src="{{asset('front-end/images/lo1-removebg-preview.png')}}" class="img-fluid" alt="">
							</a>
						</div>

						<!--=======  End of sticky logo  =======-->

						<!--=======  search icon for tablet  =======-->

						<div class="search-icon-menutop-tablet text-end d-inline-block d-lg-none">
							<a href="#" id="search-overlay-active-button">
								<i class="icon ion-md-search"></i>
							</a>
						</div>

						<!--=======  End of search icon for tablet  =======-->
					</div>
					<div class="col-12 col-lg-7">
						<!-- navigation section -->
						<div class="main-menu">
							<nav>
								<ul>
									<li class="{{request()->is('/') ? 'active' : '' }}"><a href="{{route('/')}}">ACCUEIL</a></li>
									<li class="{{ request()->is('showroom-tunimeuble') ? 'active' : '' }}"><a href="{{route('showroomstuni')}}">Showroom</a></li>
									<li class="{{ request()->is('promotion-tunimeuble') ? 'active' : '' }}"><a href="{{route('promotionstunimeuble')}}">Promotion</a></li>
									<li class="{{ request()->is('actualite*') ? 'active' : '' }}"><a href="{{route('actualite')}}">Actualité</a></li>
									<li class="{{ request()->is('pack*') ? 'active' : '' }}"><a href="{{route('pack')}}">PACKS</a></li>
									<li class="{{request()->is('contact') ? 'active' : '' }}" ><a href="{{route('contact')}}">CONTACT</a></li>
								</ul>
							</nav>
						</div>
						<!-- end of navigation section -->
					</div>
					<div class="col-12 col-lg-1">
						<!--=======  navigation search bar  =======-->

						<div class="navigation-search d-none d-lg-block">
							<form action="{{ route('search') }}" method="GET">
								<input type="search" name="search" placeholder="" required/>
								<button type="submit"><i class="icon ion-md-search"></i></button>
							</form>
						
						</div>

						<!--=======  End of navigation search bar  =======-->
					</div>
					<div class="col-12 d-block d-lg-none">
						<!-- Mobile Menu -->
						<div class="mobile-menu"></div>
					</div>
				</div>
			</div>
		</div>

		<!--=====  End of navigation menu  ======-->

	</div>

	<!--=====  End of header container  ======-->
