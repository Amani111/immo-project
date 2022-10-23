@extends('front_end.layouts.app')

@section('title','packs')

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
                                <li>Packs</li>
                            </ul>
                        </nav>
                    </div>

                    <!--=======  End of breadcrumb container  =======-->
                </div>
            </div>
        </div>
    </div>



    <!--=======  End of single-blog-post  =======-->
    <!--=====  End of breadcrumb area  ======-->
<!--=============================================
	=            blog post slider         =
	=============================================-->

	<div class=" mb-50">
		<div class="container">
			
		<!--=======  single blog post  =======-->
		@foreach ($data as $key => $pack)
		<div class="single-blog-post mb-35">
			<div class="row">
				<div class="col-md-6">
					<div class="single-blog-post-media mb-20">
						<div class="image">
							<a href="{{route('register')}}"><img width="500" height="317"  src="/public/image/{{$pack->image}}" alt=""></a>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="single-blog-post-content">
						<h3 class="post-title"> <a href="#"> {{$pack->title}}</a></h3>
						<div class="post-meta">
							<p><span></span> <a href="#"></a> <span><i class="fa fa-calendar"></i> <a href="#"></a>{{$pack->duree}} </span></p>
						</div>
						<div class="post-meta">
							<p><span></span> <a href="#">Prix :</a>  {{$pack->prix}}(DT)</p>
						</div>
						<div class="post-meta">
							<p><span></span> <a href="#">Nombre des produits :</a> <span><a href="#"></a>{{$pack->nb_picture}}</span></p>
						</div>


						<p class="post-excerpt">
							{{$pack->description}}.
						</p>
						<a  class="blog-readmore-btn" href="{{route('register')}}">Inscri vous</a>
					</div>
				</div>
			</div>
		</div>
		@endforeach
		<!--=======  Pagination  =======-->
		<div class="pagination-area mb-sm-50 mb-md-50">
		{!! $data->render() !!}
		</div>
		</div>
	</div>

	

	<!--=====  End of blog post slider  ======-->

@endsection
