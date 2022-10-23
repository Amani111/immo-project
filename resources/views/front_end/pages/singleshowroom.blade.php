@extends('front_end.layouts.app')

@section('title','meuble')

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
                                <li>showroom</li>
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
                <div class="col-lg-10 col-md-10 col-xs-12">
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

				

						<p class="product-description mb-20">{{$data->description}}</p>

				
						<p  class="social-links pb-15">
							<a href="#" class="twitter"><i class="fa fa-phone"></i>Telephone : {{$data->telephone}}</a>
                           
						</p>


						<div class="social-share-buttons pb-15">
							<h3>visiter {{$data->nama}}</h3>
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
			<div class="row">
				<div class="col-lg-10 col-md-10 col-xs-12 mb-xxs-25 mb-xs-25 mb-sm-25">
					<!-- single product tabstyle one image gallery -->
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d409037.7440579304!2d10.0248506310026!3d36.77998534866688!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2stn!4v1666524840072!5m2!1sfr!2stn" width="950" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					<!-- end of single product tabstyle one image gallery -->
				</div>
			
			</div>
       
		</div>
	</div>

   

	<!--=====  End of single product content  ======-->



	<!--=============================================
    =            related product slider         =
    =============================================-->

	<div class="related-product-slider-area mb-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!--=======  section title  =======-->

					<div class="section-title">
						<h2> PRODUIT DU {{$data->name}}</h2>
					</div>

					<!--=======  End of section title  =======-->
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<!--=======  tab product slider  =======-->

					<div class="fl-slider tab-product-slider">
						<!--=======  single product  =======-->
                    @foreach($products as $item)
						<div class="fl-product">
							<div class="image">
								<a href="{{route('singleproduct',$item->id)}}">
									<img width="300" height="300"  src="/public/products/image/{{$item->image}}" class="img-fluid" alt="">
									<img width="300" height="300"  src="/public/products/image/{{$item->image}}" class="img-fluid" alt="">
								</a>
							
							</div>
							<div class="content">
								<h2 class="product-title"> <a href="{{route('singleproduct',$item->id)}}"></a>{{$item->name}}</h2>
								<div class="rating">
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
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
						<!--=======  single product  =======-->


@endforeach
						<!--=======  End of single product  =======-->
					</div>

					<!--=======  End of tab product slider  =======-->
				</div>
			</div>
		</div>
	</div>

	<!--=====  End of related product slider  ======-->

    


@endsection