@extends('front_end.layouts.app')

@section('title','single-meuble')

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
	@php
		$count = 0;
		$x =1;
	@endphp


	<div class="single-product-content-area mb-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-6 col-xs-12 mb-xxs-25 mb-xs-25 mb-sm-25">
					<!-- single product tabstyle one image gallery -->
					<div class="product-image-slider fl-product-image-slider fl3-product-image-slider">
						<!--product large image start -->
						<div class="tab-content product-large-image-list fl-product-large-image-list fl3-product-large-image-list"
							id="myTabContent">
							<div class="tab-pane fade show active" id="single-slide-{{$count}}" role="tabpanel"
								aria-labelledby="single-slide-tab-{{$count}}">
								<!--Single Product Image Start-->
								<div class="single-product-img img-full imagezoom" id="product-image-preview">
									<img width="600" height="600"  src="{{asset('/public/products/image/'.$data->image)}}" class="img-fluid" alt="">
									<a href="{{asset('/public/products/image/'.$data->image)}}" class="big-image-popup"><i
											class="fa fa-search-plus"></i></a>
								</div>
								<!--Single Product Image End-->
							</div>
							@foreach($catalogs as $index=> $catalog)
							@php
							$count ++;
							@endphp
							<div class="tab-pane fade" id="single-slide-{{$count}}" role="tabpanel" aria-labelledby="single-slide-tab-4">
								<!--Single Product Image Start-->
								<div class="single-product-img img-full">
									<img width="600" height="600"  src="{{asset('/public/products/catalog/'.$catalog->url)}}" class="img-fluid" alt="">
									<a href="{{asset('/public/products/catalog/'.$catalog->url)}}" class="big-image-popup"><i
											class="fa fa-search-plus"></i></a>
								</div>
								<!--Single Product Image End-->
							</div>
							@endforeach
						</div>
						<!--product large image End-->

						<!--product small image slider Start-->
						<div class="product-small-image-list fl-product-small-image-list fl3-product-small-image-list">
							<div class="nav small-image-slider fl3-small-image-slider" role="tablist">
								@foreach($catalogs as $index=> $catalog)
							
								<div class="single-small-image img-full">
									<a data-bs-toggle="tab" id="single-slide-tab-{{$x}}" href="#single-slide-{{$x}}"><img
											width="600" height="100"  src="{{asset('/public/products/catalog/'.$catalog->url)}}"  alt=""></a>
								</div>
								@php
								$x ++;
								@endphp
								@endforeach
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
						<h2 class="product-price mb-0">
							<span class="discounted-price">{{ isset($data) ? $data->prix : 'null' }}{{ isset($data->prix) ? ' (DT) ' : '' }}</span>
						</h2>

						<p class="product-description mb-20">{{$data->description}}</p>
						<div class="category-list-container mb-20">
							<span>Categorie: </span>
							<ul>
								<li><a href="{{route('productwithcategory',$data->category_id)}}">{{$data->category->name}}</a></li>
							</ul>
						</div>
						<div class="category-list-container mb-20">
						
							<span>Showroom: </span>
							<ul>
								<li><a href="{{route('singleshowroomstuni',$data->showroom_id)}}">{{$data->showrooms->name}}</a></li>
							
							</ul>
						</div>

						<div class="social-share-buttons">
							<h3>Suivez-nous</h3>
					
							<ul>
								<li><a class="facebook" target="_blank" href="{{$data->showrooms->facebook}}"><i class="fa fa-facebook"></i></a></li>
								<li><a class="google-plus" target="_blank" href="{{$data->showrooms->instagram	}}"><i class="fa fa-instagram"></i></a></li>
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
	@if($data->video != null)
	<div class="related-product-slider-area mb-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!--=======  section title  =======-->

					<div class="section-title">
						<h2>Video</h2>
					</div>

					<!--=======  End of section title  =======-->
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<!--=======  tab product slider  =======-->
						<div class="post-audio mb-20">
							<iframe width="900" height="300" allow="autoplay" src="{{asset('/public/products/video/'.$data->video)}}"></iframe>
						</div>
					<!--=======  End of tab product slider  =======-->
				</div>
			</div>
		</div>
	</div>
	@endif
	<!--=============================================
    =            related product slider         =
    =============================================-->

	<div class="related-product-slider-area mb-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!--=======  section title  =======-->

					<div class="section-title">
						<h2>PRODUITS SIMILAIRES</h2>
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
									<img width="300" height="200"  src="{{asset('/public/products/image/'.$item->image)}}"  alt="">
									<img width="300" height="200"  src="{{asset('/public/products/image/'.$item->image)}}"  alt="">
								</a>
							
							</div>
							<div class="content">
								<h2 class="product-title"> <a href="{{route('singleproduct',$item->id)}}">{{$item->name}}</a></h2>
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
@push('after-scripts')
<script>
		var isActiveMode = false;
	$(".imagezoom")
	.on("click", function () {
		(isActiveMode = !isActiveMode)
		? ($(this).addClass("zoom_mode_active"),
			$(window).width() > 767
			? $(this).children("img").css({ transform: "scale(2)" })
			: $(this).children("img").css({ transform: "scale(5)" }))
		: ($(this).removeClass("zoom_mode_active"),
			$(this).children("img").css({ transform: "scale(1)" }));
	})
	.on("mousemove", function (e) {
		$(this)
		.children("img")
		.css({
			"transform-origin":
			((e.pageX - $(this).offset().left) / $(this).width()) * 100 +
			"% " +
			((e.pageY - $(this).offset().top) / $(this).height()) * 100 +
			"%"
		});
	});

</script>
@endpush