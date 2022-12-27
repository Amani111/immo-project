@extends('front_end.layouts.app')

@section('title','packs')
<style>

.button3:hover {
	border-radius: 30px;
	 
}
.button3{
	background-color:#10acb2 !important;
}
.text-primary{
	color: #10acb2 !important;
}
</style>
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
	
		<div class="row">
			@foreach ($data as $key => $pack)
			<div class="col-md-3 text-center">
			<div class="card mb-4 box-shadow">
				<div class="card-header">
				  <h4 class="my-0 font-weight-normal text-card">{{$pack->title}}</h4>
				</div>
				<div class="card-body">
				  <h1 class="card-title pricing-card-title">{{$pack->prix}}<small class="text-muted">/ mo</small></h1>
				  <p class="mb-2">Nombre des images par pack: {{$pack->nb_picture}}</p>
				  <ul class="list-unstyled mt-3 mb-4">
					@php
					$desc = json_decode($pack->description);
					@endphp
					@foreach($desc as $key =>$index)
					<li> <i class="fa fa-check" style="color: green;"></i>{{$index}}</li>
					@endforeach
				  </ul>
		
				  <a  class="btn btn-primary button3" href="{{route('register',$pack->id)}}">Commander</a>
				</div>
			  </div>
			</div>
			@endforeach
	
		</div>
	
		  
		<!--=======  Pagination  =======-->
		<div class="pagination-area mb-sm-50 mb-md-50">
		{!! $data->render() !!}
		</div>
		</div>
	</div>

	

	<!--=====  End of blog post slider  ======-->

@endsection
