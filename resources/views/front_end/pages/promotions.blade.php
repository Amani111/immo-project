@extends('front_end.layouts.app')

@section('title','Promotion')

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
                                <li>Promotion</li>
                            </ul>
                        </nav>
                    </div>

                    <!--=======  End of breadcrumb container  =======-->
                </div>
            </div>
        </div>
    </div>
    

  
    <div class="slider-banner-sidebar-area mb-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!--=======  slider with banner and sidebar container  =======-->

					<div class="slider-vertical-banner-sidebar-container">
						<!--=======  sidebar  =======-->

						<div class="slider-sidebar">
							<h3 class="slider-sidebar-title">categories</h3>
							<div class="sidebar-list">
                                <ul>
                                    @foreach($category as $data)
                                    <li><a href="{{route('productPromitionwithcategory',$data->id)}}">{{$data->name}}</a></li>
                                   @endforeach
                                </ul>
							</div>
						</div>

						<!--=======  End of sidebar  =======-->

                        <div class="slider-banner slider-border">
							<img width="320" height="100%" src="{{asset('front-end/images/banner1.jpg')}}"  alt="">
						</div>
						<!--=======  slider banner  =======-->

						<div class="fl-slider vertical-banner-slider" data-row="3">
							<!--=======  single product  =======-->
                            @foreach($promotions as $item) 
							<div class="fl-product">
								<div class="image">
									<a href="{{route('singleproduct',$item->product_id)}}">
										<img width="300" height="200"  src="{{asset('/public/products/image/'.$item->product->image)}}"  alt="">
										<img width="300" height="200"  src="{{asset('/public/products/image/'.$item->product->image)}}" alt="">
									</a>
									<!-- wishlist icon -->
									<span class="wishlist-icon">
										<a href="#"><i class="icon ion-md-heart-empty"></i></a>
									</span>
								</div>
								<div class="content">
									<h2 class="product-title"> <a href="{{route('singleproduct',$item->product_id)}}">{{$item->product->name}}</a></h2>
									<h2 class="product-title"> <a href="{{route('singleproduct',$item->product_id)}}">{{$item->pourcentage}}</a> %</h2>

									<p class="product-price">
										<span class="main-price discounted">{{$item->product->prix}} DT</span>
										<span class="discounted-price">{{$item->new_prix}} DT</span>
									</p>

									<div class="hover-icons">
										<ul>
                                            <li><a href="{{route('singleproduct',$item->product_id)}}" data-tooltip="View"><i class="icon ion-md-open"></i></a></li>

										</ul>
									</div>
								</div>
							</div>

							<!--=======  End of single product  =======-->

					        @endforeach


						</div>


		
					</div>
				</div>

				<!--=======  End of slider with banner and sidebar container  =======-->
			</div>
		</div>
	</div>

 
    @endsection