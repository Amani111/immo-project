@extends('front_end.layouts.app')

@section('title','single showroom')

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

	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="blog-single-post-container mb-30">
					<!--=======  Post media  =======-->
					<h3 class="h3-showroom">{{$data->name}}</h3>
						<div  >
							<img  class="img-showroom"  width="100%" height="400" src="{{asset('/public/showroom/image/'.$data->image)}}"  alt="">
						</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="blog-single-post-container">
				<h3 class="h3-showroom" >description</h3>	
					<div class="single-blog-post-media mb-xs-20">
						{{$data->description}}
						<div class="social-share-buttons">
							<hr>
							<div class="login-button">
								<div class="login-facebook-icon"><a href="{{$data->facebook}}"><i class="fa fa-facebook"></i></a></div>
								<!-- <div class="login-facebook-text">Continue with Facebook</div> -->
							</div>

							<div class="login-button">
								<div class="login-instagram-icon"><a href="{{$data->instagram	}}"><i class="fa fa-instagram"></i></a></div>
								<!-- <div class="login-instagram-text">Continue with instagram</div> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="blog-single-post-container mb-30">
		<h3 class="h3-showroom">Trouver nous </h3>
		<div class="col-md-12">
					<iframe
                    width="100%"
                    height="400"
                    frameborder="0"
                    scrolling="no"
                    marginheight="0"
                    marginwidth="0"
                    src="https://maps.google.com/maps?q=+{{$data->lng}}+,+{{$data->lat}}+&hl=en-US&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                </iframe>
		</div>
	</div>
	@if(!is_null($data->video))
	<h3>Video</h3>
	<div class="blog-single-post-container mb-30">
		<div class="col-md-12">
			<div class="post-audio mb-20">
				<iframe width="900" height="300" allow="autoplay" src="{{asset('/public/showroom/video/'.$data->video)}}"></iframe>
			</div>
		</div>
	</div>
	@endif

	@if(count($catalogues) > 0 )
		<div class="blog-single-post-container mb-30">
			<div class=" row mapform" >
			<h3 class="h3-showroom">catalogues</h3>
			{{-- <a href="{{route('download',$data->id)}}" class="btn btn-primary">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
					<path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
					<path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
				</svg>
			</a> --}}
			<div class="row">
			@foreach ($catalogues as $item)
			<div class="col-md-4">
				@php
				if($item->url != 'Null'){
					$images = json_decode($item->url);
				}
				@endphp
				@if(!is_null($item->url))
				@foreach ($images as $key)
				<div class="card">
					<div class="card-body">
						<a href="{{route('single.catalogue',$item->id)}}" target="_blank"><img class="card-img-top" style="object-fit: fill; width:300px;height: 270px;" src="{{asset('/public/newcatalog/'.$key)}}" alt="Card image"></a>
					</div>
				</div>
				@break;
				@endforeach
				@else
				<a href="{{route('single.cataloguepdf',$item->id)}}" target="_blank"><img class="card-img-top" style="object-fit: fill; width:300px;height: 270px;" src="{{asset('front-end/images/pdf.png')}}" alt="Card image"></a>
				@endif

			</div>
			@endforeach
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
						<h2 style="text-transform: uppercase;"><a href="{{route('productsshowroom',$data->id)}}"> PRODUIT DU {{$data->name}}</a></h2>
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
									<img width="300" height="300"  src="{{asset('/public/products/image/'.$item->image)}}" class="img-fluid" alt="">
									<img width="300" height="300"  src="{{asset('/public/products/image/'.$item->image)}}" class="img-fluid" alt="">
								</a>
							
							</div>
							<div class="content">
								<h2 class="product-title"> <a href="{{route('singleproduct',$item->id)}}"></a>{{$item->name}}</h2>
								<p class="product-price">
									<span class="discounted-price">{{ isset($item->prix)? $item->prix.'DT': '' }}</span>
								</p>
								<div class="hover-icons">
									<ul>
										<li><a href="{{route('singleproduct',$item->id)}}" data-tooltip="View"><i class="icon ion-md-open"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					@endforeach
						<!--=======  End of single product  =======-->
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--=====  End of related product slider  ======-->
	</div>
    
@endsection
@push('after-scripts')
<script>
var currentPage = 0;

$('.book')
.on('click', '.active', nextPage)
.on('click', '.flipped', prevPage);

var hammertime = new Hammer($('.book')[0]);
hammertime.on("swipeleft", nextPage);
hammertime.on("swiperight", prevPage);

function prevPage() {
  
  $('.flipped')
    .last()
    .removeClass('flipped')
    .addClass('active')
    .siblings('.page')
    .removeClass('active');
}
function nextPage() {
  
  $('.active')
    .removeClass('active')
    .addClass('flipped')
    .next('.page')
    .addClass('active')
    .siblings();
    
    
}
</script>
@endpush