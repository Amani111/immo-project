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

    
	<!--=============================================
    =            single product content         =
    =============================================-->

	<div class="container">
		<div class="blog-single-post-container mb-30">
			<h3 class="post-title" style="text-transform: uppercase;">{{$data->name}}</h3>
			<!--=======  Post media  =======-->
	
			<div class="single-blog-post-media mb-xs-20">
				<div class="image">
					<img width="700" height="317" src="{{asset('/public/showroom/image/'.$data->image)}}"  alt="">
				</div>
			</div>
	
			<!--=======  End of Post media  =======-->
			<div class=" row mapform" >
				<div class="col-md-12">
					<h5>Trouver nous </h5>
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
		@if(isset($catalogues))
		<h3>catalogues</h3>
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
						<a href="{{route('single.catalogue',$item->id)}}" target="_blank"><img class="card-img-top" style="object-fit: fill; with:300px;height: 270px;" src="{{asset('/public/newcatalog/'.$key)}}" alt="Card image"></a>
					</div>
				</div>
				@break;
				@endforeach
				@else
				<a href="{{route('single.cataloguepdf',$item->id)}}" target="_blank"><img class="card-img-top" style="object-fit: fill; with:300px;height: 270px;" src="{{asset('front-end/images/pdf.png')}}" alt="Card image"></a>
				@endif

			</div>
			@endforeach
		</div>
		@endif
			<div class="post-content mb-40 mt-4">
				<p>{{$data->description}}</p>
			</div>
	
			<div class="social-share-buttons mb-40">
				<h3></h3>
				<ul>
					<li><a class="facebook" href="{{$data->facebook}}"><i class="fa fa-facebook"></i></a></li>
					<li><a class="google-plus" href="{{$data->instagram	}}"><i class="fa fa-instagram"></i></a></li>
				</ul>
			</div>
	
			<!--=====  End of Share post area  ======-->
	
	
		</div>

	</div>

   

	<!--=====  End of single product content  ======-->
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
							<iframe width="900" height="300" allow="autoplay" src="{{asset('/public/showroom/video/'.$data->video)}}"></iframe>
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