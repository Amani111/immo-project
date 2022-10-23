@extends('front_end.layouts.app')

@section('title','tuni-meuble')

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
                                <li>produit</li>
                            </ul>
                        </nav>
                    </div>
                    <!--=======  End of breadcrumb container  =======-->
                </div>
            </div>
        </div>
    </div>
	<!--=============================================
    =            single product content         =
    =============================================-->

	<div class="single-product-content-area mb-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-6 col-xs-12 mb-xxs-25 mb-xs-25 mb-sm-25">
					<!-- single product tabstyle one image gallery -->
					<div class="product-image-slider fl-product-image-slider fl3-product-image-slider">
						<!--product large image start -->
						<div class="tab-content product-large-image-list fl-product-large-image-list fl3-product-large-image-list"
							id="myTabContent">
							<div class="tab-pane fade show active" id="single-slide-1" role="tabpanel"
								aria-labelledby="single-slide-tab-1">
								<!--Single Product Image Start-->
								<div class="single-product-img img-full">
									<img width="600" height="600"  src="/public/products/image/{{$data->image}}" class="img-fluid" alt="">
									<a class="big-image-popup"><i
											class="fa fa-search-plus"></i></a>
								</div>
								<!--Single Product Image End-->
							</div>
							<div class="tab-pane fade" id="single-slide-2" role="tabpanel" aria-labelledby="single-slide-tab-2">
								<!--Single Product Image Start-->
								<div class="single-product-img img-full">
									<img width="600" height="600"  src="/public/products/image/{{$data->image}}" class="img-fluid" alt="">
									<a href="#" class="big-image-popup"><i
											class="fa fa-search-plus"></i></a>
								</div>
								<!--Single Product Image End-->
							</div>
							<div class="tab-pane fade" id="single-slide-3" role="tabpanel" aria-labelledby="single-slide-tab-3">
								<!--Single Product Image Start-->
								<div class="single-product-img img-full">
									<img width="600" height="600"  src="/public/products/image/{{$data->image}}" class="img-fluid" alt="">
									<a href="#" class="big-image-popup"><i
											class="fa fa-search-plus"></i></a>
								</div>
								<!--Single Product Image End-->
							</div>
							<div class="tab-pane fade" id="single-slide-4" role="tabpanel" aria-labelledby="single-slide-tab-4">
								<!--Single Product Image Start-->
								<div class="single-product-img img-full">
									<img width="600" height="600"  src="/public/products/image/{{$data->image}}" class="img-fluid" alt="">
									<a href="#" class="big-image-popup"><i
											class="fa fa-search-plus"></i></a>
								</div>
								<!--Single Product Image End-->
							</div>
							<div class="tab-pane fade" id="single-slide-5" role="tabpanel" aria-labelledby="single-slide-tab-5">
								<!--Single Product Image Start-->
								<div class="single-product-img img-full">
									<img width="600" height="600"  src="/public/products/image/{{$data->image}}" class="img-fluid" alt="">
									<a href="#" class="big-image-popup"><i
											class="fa fa-search-plus"></i></a>
								</div>
								<!--Single Product Image End-->
							</div>
						</div>
						<!--product large image End-->

						<!--product small image slider Start-->
						<div class="product-small-image-list fl-product-small-image-list fl3-product-small-image-list">
							<div class="nav small-image-slider fl3-small-image-slider" role="tablist">
								<div class="single-small-image img-full">
									<a data-bs-toggle="tab" id="single-slide-tab-1" href="#single-slide-1"><img
											width="600" height="600"  src="/public/products/image/{{$data->image}}" class="img-fluid" alt=""></a>
								</div>
								<div class="single-small-image img-full">
									<a data-bs-toggle="tab" id="single-slide-tab-2" href="#single-slide-2"><img
											width="600" height="600"  src="/public/products/image/{{$data->image}}" class="img-fluid" alt=""></a>
								</div>
								<div class="single-small-image img-full">
									<a data-bs-toggle="tab" id="single-slide-tab-3" href="#single-slide-3"><img
											width="600" height="600"  src="/public/products/image/{{$data->image}}" class="img-fluid" alt=""></a>
								</div>
								<div class="single-small-image img-full">
									<a data-bs-toggle="tab" id="single-slide-tab-4" href="#single-slide-4"><img
											width="600" height="600"  src="/public/products/image/{{$data->image}}" class="img-fluid" alt=""></a>
								</div>
								<div class="single-small-image img-full">
									<a data-bs-toggle="tab" id="single-slide-tab-5" href="#single-slide-5"><img
											width="600" height="600"  src="/public/products/image/{{$data->image}}" class="img-fluid" alt=""></a>
								</div>
							</div>
						</div>
						<!--product small image slider End-->
					</div>
					<!-- end of single product tabstyle one image gallery -->
				</div>
				<div class="col-lg-7 col-md-6 col-xs-12">
					<!-- product view description -->
					<div class="product-feature-details">
						<h2 class="product-title mb-15">{{$data->name}}</h2>

						<div class="rating d-inline-block mb-15">
							<i class="fa fa-star active"></i>
							<i class="fa fa-star active"></i>
							<i class="fa fa-star active"></i>
							<i class="fa fa-star active"></i>
							<i class="fa fa-star"></i>
						</div>

						<p class="d-inline-block ml-10 review-link"><a href="#">(1 customer review)</a></p>

						<h2 class="product-price mb-0">
							
							<span class="discounted-price"> {{$data->prix}} (DT)</span>
						</h2>

						<p class="product-description mb-20">{{$data->description}}</p>

				
					

						<div class="category-list-container mb-20">
							<span>Categories: </span>
							<ul>
								<li><a href="shop-left-sidebar.html">{{$data->category->name}}</a></li>
							
							</ul>
						</div>

						<div class="social-share-buttons">
							<h3>Share </h3>
							<ul>
								<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- end of product quick view description -->
				</div>
			</div>
		</div>
	</div>

	<!--=====  End of single product content  ======-->
    <!--=======  End of product description review   =======-->

	<!--=============================================
    =            related product slider         =
    =============================================-->

	<div class="related-product-slider-area mb-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!--=======  section title  =======-->

					<div class="section-title">
						<h2>RELATED PRODUCTS</h2>
					</div>

					<!--=======  End of section title  =======-->
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<!--=======  tab product slider  =======-->

					<div class="fl-slider tab-product-slider">
						<!--=======  single product  =======-->
                    @foreach($productscategory as $item)
						<div class="fl-product">
							<div class="image">
								<a href="{{route('singleproduct',$item->id)}}">
									<img width="300" height="300"  src="/public/products/image/{{$item->image}}" class="img-fluid" alt="">
									<img width="300" height="300"  src="/public/products/image/{{$item->image}}" class="img-fluid" alt="">
								</a>
								<!-- wishlist icon -->
								<span class="wishlist-icon">
									<a href="#"><i class="icon ion-md-heart-empty"></i></a>
								</span>
							</div>
							<div class="content">
								<h2 class="product-title"> <a href="{{route('singleproduct',$item->id)}}">{{$item->name}}</a></h2>
								<div class="rating">
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
								<p class="product-price">
									
									<span class="discounted-price">{{$item->prix}} (DT)</span>
								</p>

								<div class="hover-icons">
									<ul>
										<li><a href="{{route('singleproduct',$item->id)}}" data-tooltip="View"><i class="icon ion-md-open"></i></a></li>
									</ul>
								</div>
							</div>
						</div>

						<!--=======  End of single product  =======-->
                    @endforeach
					</div>

					<!--=======  End of tab product slider  =======-->
				</div>
			</div>
		</div>
	</div>

	<!--=====  End of related product slider  ======-->



@endsection