@extends('front_end.layouts.app')

@section('title','FAQ')

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
                                <li>FAQ</li>
                            </ul>
                        </nav>
                    </div>

                    <!--=======  End of breadcrumb container  =======-->
                </div>
            </div>
        </div>
    </div>

    <!--=====  End of breadcrumb area  ======-->
	<!-- FAQ Section Start -->
    <div class="page-section mb-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="faq-wrapper">

						<div id="accordion">
							@foreach($faqs as $array)
							<div class="card">
								<div class="card-header" id="heading{{$array->id}}">
									<h5 class="mb-0">
										<button class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapse{{$array->id}}" aria-expanded="false" aria-controls="collapse{{$array->id}}">
											{{$array->question}}<span> <i class="fa fa-chevron-down"></i>
												<i class="fa fa-chevron-up"></i> </span>
										</button>
									</h5>
								</div>

								<div id="collapse{{$array->id}}" class="collapse" aria-labelledby="heading{{$array->id}}" data-parent="#accordion" style="">
									<div class="card-body">
										<p>{{$array->reponse}}</p>
									</div>
								</div>
							</div>
							@endforeach
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- FAQ Section End -->
@endsection
