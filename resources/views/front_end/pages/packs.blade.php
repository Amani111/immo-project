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
                                <li class="parent-page"><a href="index.html">Accueil</a></li>
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

			<div class="row">
				<div class="col-lg-12">
					<!--=======  blog post slider container  =======-->

					<div class=" blog-post-slider-container">

        				<!--=======  single-blog-post  =======-->
						<div class="col">
							<div class="single-blog-post">
								<div class="image">
									<a href="blog-post-left-sidebar.html">
										<img width="370" height="206"  src="{{('front-end/images/sliders/blog/02.webp')}}" class="img-fluid" alt="">
									</a>
								</div>

								<div class="content">
									<h3><a href="blog-post-left-sidebar.html">13 Myths about furniture</a></h3>
									<p>
										<span class="post-comments"> <i class="icon ion-md-clipboard"></i> 0 comments</span>
										<span class="post-author"> <i class="icon ion-md-contact"></i> By <a
												href="blog-left-sidebar.html">Admin</a></span>
									</p>
									<p class="post-excerpt">
										Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium sit amet faucibus nisl.
									</p>
									<a class="fl-button" href="{{route('register')}}">read more</a>
								</div>
							</div>
						</div>

						<!--=======  End of single-blog-post  =======-->
						<!--=======  single-blog-post  =======-->
						<div class="col">
							<div class="single-blog-post">
								<div class="image">
									<a href="blog-post-left-sidebar.html">
										<img width="370" height="206"  src="{{('front-end/images/sliders/blog/03.webp')}}" class="img-fluid" alt="">
									</a>
								</div>

								<div class="content">
									<h3><a href="blog-post-left-sidebar.html"> Top 25 quotes On furniture</a></h3>
									<p>
										<span class="post-comments"> <i class="icon ion-md-clipboard"></i> 0 comments</span>
										<span class="post-author"> <i class="icon ion-md-contact"></i> By <a
												href="blog-left-sidebar.html">Admin</a></span>
									</p>
									<p class="post-excerpt">
										Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium sit amet faucibus nisl.
									</p>
									<a class="fl-button" href="{{route('register')}}">read more</a>
								</div>
							</div>
						</div>

						<!--=======  End of single-blog-post  =======-->
						<!--=======  single-blog-post  =======-->
						<div class="col">
							<div class="single-blog-post">
								<div class="image">
									<a href="{{route('register')}}">
										<img width="370" height="206"  src="{{('front-end/images/sliders/blog/04.webp')}}" class="img-fluid" alt="">
									</a>
								</div>

								<div class="content">
									<h3><a href="{{route('register')}}">3 things everyone knows about furniture</a></h3>
									<p>
										<span class="post-comments"> <i class="icon ion-md-clipboard"></i> 0 comments</span>
										<span class="post-author"> <i class="icon ion-md-contact"></i> By <a
												href="blog-left-sidebar.html">Admin</a></span>
									</p>
									<p class="post-excerpt">
										Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium sit amet faucibus nisl.
									</p>
									<a class="fl-button" href="{{route('register')}}">read more</a>
								</div>
							</div>
						</div>
						<!--=======  End of single-blog-post  =======-->


					</div>

					<!--=======  End of blog post slider container  =======-->
				</div>
			</div>


		</div>
	</div>

	<!--=====  End of blog post slider  ======-->

@endsection
