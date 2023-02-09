@extends('front_end.layouts.app')

@section('title','packs')
@push('before-styles')
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
.pricing-table {
  display: flex;
  flex-flow: row wrap;
  width: 100%;
  max-width: 1100px;
  margin: 0 auto;
  background: #ffffff;
}

.pricing-table .ptable-item {
  width: 33.33%;
  padding: 0 15px;
  margin-bottom: 30px;
}

@media (max-width: 992px) {
  .pricing-table .ptable-item {
    width: 33.33%;
  }
}

@media (max-width: 768px) {
  .pricing-table .ptable-item {
    width: 50%;
  }
}

@media (max-width: 576px) {
  .pricing-table .ptable-item {
    width: 100%;
  }
}

.pricing-table .ptable-single {
  position: relative;
  width: 100%;
  overflow: hidden;
}

.pricing-table .ptable-header,
.pricing-table .ptable-body,
.pricing-table .ptable-footer {
  position: relative;
  width: 100%;
  text-align: center;
  overflow: hidden;
}

.pricing-table .ptable-status ,
.pricing-table .ptable-title,
.pricing-table .ptable-price,
.pricing-table .ptable-description,
.pricing-table .ptable-action {
  position: relative;
  width: 100%;
  text-align: center;
}

.pricing-table .ptable-single {
  background: #f6f8fa;
}

.pricing-table .ptable-single:hover {
  box-shadow: 0 0 10px #999999;
}

.pricing-table .ptable-header {
  margin: 0 30px;
  padding: 30px 0 45px 0;
  width: auto;
  background: #2A293E;
}

.pricing-table .ptable-header::before,
.pricing-table .ptable-header::after {
  content: "";
  position: absolute;
  bottom: 0;
  width: 0;
  height: 0;
  border-bottom: 100px solid #f6f8fa;
}

.pricing-table .ptable-header::before {
  right: 50%;
  border-right: 250px solid transparent;
}

.pricing-table .ptable-header::after {
  left: 50%;
  border-left: 250px solid transparent;
}

.pricing-table .ptable-item.featured-item .ptable-header {
  background: #10acb2 ;
}

.pricing-table .ptable-status {
  margin-top: -30px;
}

.pricing-table .ptable-status span {
  position: relative;
  display: inline-block;
  width: 50px;
  height: 30px;
  padding: 5px 0;
  text-align: center;
  color: #10acb2 ;
  font-size: 14px;
  font-weight: 300;
  letter-spacing: 1px;
  background: #2A293E;
}

.pricing-table .ptable-status span::before,
.pricing-table .ptable-status span::after {
  content: "";
  position: absolute;
  bottom: 0;
  width: 0;
  height: 0;
  border-bottom: 10px solid #10acb2 ;
}

.pricing-table .ptable-status span::before {
  right: 50%;
  border-right: 25px solid transparent;
}

.pricing-table .ptable-status span::after {
  left: 50%;
  border-left: 25px solid transparent;
}

.pricing-table .ptable-title h2 {
  color: #ffffff;
  font-size: 24px;
  font-weight: 300;
  letter-spacing: 2px;
}

.pricing-table .ptable-price h2 {
  margin: 0;
  color: #ffffff;
  font-size: 45px;
  font-weight: 700;
  margin-left: 15px;
}

.pricing-table .ptable-price h2 small {
  position: absolute;
  font-size: 18px;
  font-weight: 300;
  margin-top: 16px;
  margin-left: -15px;
}

.pricing-table .ptable-price h2 span {
  margin-left: 3px;
  font-size: 16px;
  font-weight: 300;
}

.pricing-table .ptable-body {
  padding: 20px 0;
}

.pricing-table .ptable-description ul {
  margin: 0;
  padding: 0;
  list-style: none;
}

.pricing-table .ptable-description ul li {
  color: #2A293E;
  font-size: 14px;
  font-weight: 300;
  letter-spacing: 1px;
  padding: 7px;
  border-bottom: 1px solid #dedede;
}

.pricing-table .ptable-description ul li:last-child {
  border: none;
}

.pricing-table .ptable-footer {
  padding-bottom: 30px;
}

.pricing-table .ptable-action a {
  display: inline-block;
  padding: 10px 20px;
  color: #10acb2 ;
  font-size: 14px;
  font-weight: 500;
  letter-spacing: 2px;
  text-decoration: none;
  background: #2A293E;
}

.pricing-table .ptable-action a:hover {
  color: #2A293E;
  background: #10acb2 ;
}

.pricing-table .ptable-item.featured-item .ptable-action a {
  color: #ffffff;
  background: #10acb2 ;
}

.pricing-table .ptable-item.featured-item .ptable-action a:hover {
  color: #10acb2 ;
  background: #2A293E;
}
</style>
@endpush
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
			<div class="pricing-table">
			@foreach ($data as $key => $pack)
			
				<div class="ptable-item featured-item">
					<div class="ptable-single">
					  <div class="ptable-header">
						<div class="ptable-status">
		
						</div>
						<div class="ptable-title">
						  <h2>{{$pack->title}}</h2>
						</div>
						<div class="ptable-price">
						  <h2><small>DT</small>{{$pack->prix}}<span>/ M</span></h2>
						</div>
					  </div>
					  <div class="ptable-body">
						<div class="ptable-description">
						  <ul>
							<li>Nombre des images par pack: {{$pack->nb_picture}}</li>
							@php
							$desc = json_decode($pack->description);
							@endphp
							@foreach($desc as $key =>$index)
							<li><i class="fa fa-lg fa-check-circle text-success mr-2"></i>  {{$index}}</li>
							@endforeach
						  </ul>
						</div>
					  </div>
					  <div class="ptable-footer">
						<div class="ptable-action">
						  <a href="{{route('register',$pack->id)}}">Regiter</a>
						</div>
					  </div>
					</div>
				  </div>
				
			@endforeach
		</div>
		
		</div>
	
		  
		<!--=======  Pagination  =======-->
		
		{!! $data->render() !!}

		</div>
	</div>

	

	<!--=====  End of blog post slider  ======-->

@endsection
