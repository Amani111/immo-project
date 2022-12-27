@extends('front_end.layouts.app')

@section('title','Actualité')

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
                                <li>Actualité</li>
                            </ul>
                        </nav>
                    </div>

                    <!--=======  End of breadcrumb container  =======-->
                </div>
            </div>
        </div>
    </div>
    <!--=====  End of breadcrumb area  ======-->
	<!-- About Section Start -->
	<div class="container">
		<div class="blog-single-post-container mb-30">

			<!--=======  post title  =======-->
	
	
			<h3 class="post-title">{{$actualite->titre}}</h3>
	
			<!--=======  End of post title  =======-->
	
	
			<!--=======  Post meta  =======-->
		
	
			<!--=======  End of Post meta  =======-->
	
			<!--=======  Post media  =======-->
	
			<div class="single-blog-post-media mb-xs-20">
				<div class="image">
					<img width="800" height="517" src="{{asset('/public/actualite/'.$actualite->image)}}"  alt="">
				</div>
			</div>
	
			<!--=======  End of Post media  =======-->
	
			<!--=======  Post content  =======-->
	@if($actualite->video !=null)
			<div class="post-audio mb-20">
				<iframe width="500" height="100" allow="autoplay" src="{{asset('/public/actualite/video/'.$actualite->video)}}"></iframe>
			</div>
	@endif
	
			<div class="post-content mb-40">
				<p>{{$actualite->description}}</p>
	

			</div>
	
			<!--=======  End of Post content  =======-->
	
		
	
	
			<!--=======  Share post area  =======-->
	
			<div class="social-share-buttons mb-40">
				<h3></h3>
				<ul>
				
					<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a class="google-plus" href="#"><i class="fa fa-instagram"></i></a></li>
					
				</ul>
			</div>
	
			<!--=====  End of Share post area  ======-->
	
	
		</div>

	</div>




@endsection
    