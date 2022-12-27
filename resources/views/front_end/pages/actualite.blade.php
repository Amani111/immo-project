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
    

    <div class="banner-text-area mb-50">
		<div class="container">
			<div class="row">
                @foreach($actualite as $array)
				<div class="col-lg-4 col-sm-12 order-3 order-lg-2 mt-md-30 mt-sm-30">
					<!--=======  single banner  =======-->

					<div class="single-banner center-text">
						<a href="{{route('singleactualite',$array->id)}}">
							<img width="570" height="340" src="{{asset('/public/actualite/'.$array->image)}}"  alt="">
						</a>
						<div class="text">
							<p></p>
							<h5>{{$array->titre}}</h5>
							<p></p>
						</div>
					</div>

					<!--=======  End of single banner  =======-->
				</div>
			    @endforeach
			</div>
		</div>
	</div>
 
    @endsection