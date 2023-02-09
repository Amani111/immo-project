@extends('front_end.layouts.app')

@section('title','MobilyCom')

@section('content')

@include('front_end.includes.sidebar')
    <!--SECTION  CATEGORIES -->

	@include('front_end.includes.popup')
    <!--=============================================
    =            shop page content         =
    =============================================-->

    <div class="slider-banner-sidebar-area mb-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!--=======  slider with banner and sidebar container  =======-->

					<div class="slider-vertical-banner-sidebar-container">
						<!--=======  sidebar  =======-->

						<div class="slider-sidebar">
							<h3 class="slider-sidebar-title">CATEGORIES</h3>
							<div class="sidebar-list">
                                <ul>
                                    @foreach($category as $data)
                                    <li><a href="{{route('productwithcategory',$data->id)}}">{{$data->name}}</a></li>
                                   @endforeach
                                </ul>
							</div>
						</div>

						<!--=======  End of sidebar  =======-->

                        <div class="slider-banner slider-border">
							<img width="320" height="100%" src="{{asset('front-end/images/banner1.jpg')}}"  alt="">
						</div>
						<!--=======  slider banner  =======-->

						<div class="fl-slider vertical-banner-slider" data-row="2">
							<!--=======  single product  =======-->
                            @foreach($products as $item) 
							<div class="fl-product">
								<div class="image">
									<a href="{{route('singleproduct',$item->id)}}">
										<img width="300" height="200"  src="{{asset('/public/products/image/'.$item->image)}}"  alt="">
										<img width="300" height="200"  src="{{asset('/public/products/image/'.$item->image)}}" alt="">
									</a>
									<!-- wishlist icon -->
									<span class="wishlist-icon">
										<a href="#"><i class="icon ion-md-heart-empty"></i></a>
									</span>
								</div>
								<div class="content">
									<h2 class="product-title"> <a href="{{route('singleproduct',$item->id)}}">{{$item->name}}</a></h2>
									<h2 class="product-title"> <a href="{{route('singleshowroomstuni',$item->showrooms->id)}}">{{$item->showrooms->name}}</a></h2>
									<p class="product-price">
										<span class="discounted-price">{{$item->prix}} DT</span>
									
										
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


		
					</div>
				</div>

				<!--=======  End of slider with banner and sidebar container  =======-->
			</div>
		</div>
	</div>


	<div class="slider-banner-sidebar-three mb-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!--=======  slider banner sidebar three container  =======-->

					<div class="slider-banner-sidebar-three-container">
						<!--=============================================
							=            sidebar container         =
							=============================================-->

						<div class="sidebar-container">

							<!--=======  section title  =======-->

							<div class="section-title-three">
								<h3>PROMOTION MEUBLES</h3>
							</div>

							<!--=======  End of section title  =======-->

							<!--=======  sidebar  =======-->

							

							<!--=======  End of sidebar  =======-->
						</div>

						<!--=====  End of sidebar container  ======-->

						<!--=======  banner  =======-->

						<div class="slider-banner home-four-banner slider-border banner-bg banner-bg-7">
						
						</div>

						<!--=======  End of banner  =======-->

						<!--=======  banner slider  =======-->

						<div class="fl-slider tab-product-slider">
							<!--=======  single product  =======-->
						@foreach($promotionproducts as $prom)
							<div class="fl-product">
								<div class="image sale-product">
									<a href="{{route('singleproduct',$prom->product_id )}}">
										<img width="300" height="300"  src="{{asset('/public/products/image/'.$prom->product->image)}}" class="img-fluid" alt="">
										<img width="300" height="300"  src="{{asset('/public/products/image/'.$prom->product->image)}}" class="img-fluid" alt="">
									</a>
									<!-- wishlist icon -->
									<span class="wishlist-icon">
										<a href="#"><i class="icon ion-md-heart-empty"></i></a>
									</span>
								</div>
								<div class="content">
									<h2 class="product-title"> <a href="{{route('singleproduct',$prom->product_id )}}">{{$prom->product->name}}</a></h2>
									<p class="product-price">
										<span class="main-price discounted">{{$prom->product->prix}} DT</span>
										<span class="discounted-price">{{$prom->new_prix}} DT</span>
									</p>

									<div class="hover-icons">
										<ul>
											<li><a href="{{route('singleproduct',$prom->product_id)}}" data-tooltip="View"><i class="icon ion-md-open"></i></a></li>

										</ul>
									</div>
								</div>
							</div>
						@endforeach
							<!--=======  End of single product  =======-->
						
						</div>

						<!--=======  End of banner slider  =======-->
					</div>

					<!--=======  End of slider banner sidebar three container  =======-->
				</div>
			</div>
		</div>
	</div>

    <!--=====  End of shop page content  ======-->
	<!--=============================================
	=            blog post slider         =
	=============================================-->

	<div class="blog-post-slider-area mb-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!--=======  section title  =======-->

					<div class="section-title white-bg">
						<h2>DERNIÈRE ACTUALITE</h2>
					</div>

					<!--=======  End of section title  =======-->
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<!--=======  blog post slider container  =======-->

					<div class="fl-slider blog-post-slider-container white-bg">
						<!--=======  single-blog-post  =======-->
						@foreach($actualite as $act)
						<div class="col">
							<div class="single-blog-post">
								<div class="image">
									<a href="{{route('singleactualite',$act->id)}}">
										<img width="370" height="206"  src="{{asset('/public/actualite/'.$act->image)}}"  alt="">
									</a>
								</div>

								<div class="content">
									<h3><a href="{{route('singleactualite',$act->id)}}">{{$act->titre}}</a></h3>
						
									<p class="post-excerpt">
									</p>
									<a class="fl-button" href="{{route('singleactualite',$act->id)}}">Lire la suite</a>
								</div>
							</div>
						</div>
						@endforeach
					</div>

					<!--=======  End of blog post slider container  =======-->
				</div>
			</div>
		</div>
	</div>

	<!--=====  End of blog post slider  ======-->
	<!--=============================================
	=            brand logo slider         =
	=============================================-->



	<!--=====  End of brand logo slider  ======-->
	

@endsection
@push('after-scripts')
<script>
	$(document).ready(function(){
		offre = $('#offre').val();
	
		if(offre == "1"){
			$("#exampleModalCenter").modal('show');
			$("#close").click(function () {        
    		$("#exampleModalCenter").modal('toggle');
       });
	
		}

		

	});
</script>
@endpush
