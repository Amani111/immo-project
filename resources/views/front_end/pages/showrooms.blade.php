@extends('front_end.layouts.app')

@section('title','Showroom')

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
                                <li>produits</li>
                            </ul>
                        </nav>
                    </div>
                    <!--=======  End of breadcrumb container  =======-->
                </div>
            </div>
        </div>
    </div>

        <!--=============================================
    =            showroom page content         =
    =============================================-->



    <div class="slider-banner-sidebar-area mb-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!--=======  slider with banner and sidebar container  =======-->

					<div class="slider-vertical-banner-sidebar-container">
						<!--=======  sidebar  =======-->

						<div class="slider-sidebar">
							<h3 class="slider-sidebar-title">Ville</h3>
							<div class="sidebar-list">
								<ul>
                                    @foreach($city as $array)
                                    <li><a href="{{route('listeshowrooms',$array->id)}}">{{$array->name}}</a></li>
                                   @endforeach
								</ul>
							</div>
						</div>

						<!--=======  End of sidebar  =======-->


						<!--=======  slider banner  =======-->

						<div class="slider-banner slider-border">
							<img width="320" height="100%" src="{{asset('front-end/images/banner1.jpg')}}"  alt="">
						</div>

						<!--=======  End of slider banner  =======-->


						<!--=======  banner slider  =======-->

						<div class="fl-slider vertical-banner-slider" data-row="3">
							<!--=======  single product  =======-->
        @if(count($data) > 0)
            @foreach($data as $showroom)      
                                    <div class="fl-product">
                                        <div class="image">
                                            <a href="{{route('singleshowroomstuni',$showroom->id)}}">
                                                <img width="300" height="100%"  src="{{asset('/public/showroom/image/'.$showroom->image)}}"  alt="">
                                                <img width="300" height="100%"  src="{{asset('/public/showroom/image/'.$showroom->image)}}"  alt="">
                                            </a>
                                            <!-- wishlist icon -->
                                            <span class="wishlist-icon">
                                                <a href="#"><i class="icon ion-md-heart-empty"></i></a>
                                            </span>
                                        </div>
                                        <div class="content">
                                            <h2 class="product-title"> <a href="{{route('singleshowroomstuni',$showroom->id)}}">{{$showroom->name}}</a></h2>
                                            <p class="product-price">
                                                <span class="main-price discounted"></span>
                                                <span class="discounted-price"></span>
                                            </p>

                                            <div class="hover-icons">
                                                <ul>
                                                    <a href="{{route('singleshowroomstuni',$showroom->id)}}" data-tooltip="View"><i class="icon ion-md-open"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
            @endforeach                        
        @else
        <p>aucun showroom</p>
        @endif
							<!--=======  End of single product  =======-->
							<!--=======  single product  =======-->


						</div>


					</div>
				</div>

				<!--=======  End of slider with banner and sidebar container  =======-->
			</div>
		</div>
	</div>




    @endsection