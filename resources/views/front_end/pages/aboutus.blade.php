@extends('front_end.layouts.app')

@section('title','comment ça marche ?')

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
                                <li>comment ça marche ?</li>
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
	
	
			<h3 class="post-title">{{$comment->titre}}</h3>
	
			<!--=======  End of post title  =======-->
	
	
			<!--=======  Post meta  =======-->
		
	
			<!--=======  End of Post meta  =======-->
	
			<!--=======  Post media  =======-->
	
			<div class="single-blog-post-media mb-xs-20">
				<div class="image">
					<img width="800" height="517" src="{{asset('/public/comment/'.$comment->image)}}"  alt="">
				</div>
			</div>
	
			<!--=======  End of Post media  =======-->
	
			<!--=======  Post content  =======-->
	@if($comment->video !=null)
			<div class="post-audio mb-20">
				<iframe width="500" height="80" allow="autoplay" src="{{asset('/public/comment/video/'.$comment->video)}}"></iframe>
			</div>
	@endif
	
			<div class="post-content mb-40">
				<p>{{$comment->description}}</p>
	
				<blockquote>
					<p>{{$comment->description1}}</p>
				</blockquote>
	
				<p> {{$comment->description2}}</p>
	

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
	
	<!-- About Section End -->
@endsection
