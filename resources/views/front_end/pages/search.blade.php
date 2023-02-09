@extends('front_end.layouts.app')

@section('title','liste meuble')

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
                                <li>produits</li>
                            </ul>
                        </nav>
                    </div>
                    <!--=======  End of breadcrumb container  =======-->
                </div>
            </div>
        </div>
    </div>

        <!--=============================================
    =            showroom page content         =
    =============================================-->
    <!--=============================================
    =            shop page content         =
    =============================================-->

    <div class="shop-page-content mb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">


                    <!--=======  Shop header  =======-->

                    <!--=======  End of Shop header  =======-->
@if(count($products) > 0)
                    <!--=======  shop product display area  =======-->
                    <div class="shop-product-wrap grid row mb-30 no-gutters">
                        @foreach($products as $item)
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <!--=======  grid view product  =======-->

                            <!--=======  single product  =======-->

                            <div class="fl-product shop-grid-view-product">
                                <div class="image">
                                    <a href="{{route('singleproduct',$item->id)}}">
                                        <img width="300" height="300"  src="{{asset('/public/products/image/'.$item->image)}}"  alt="">
                                        <img width="300" height="300"  src="{{asset('/public/products/image/'.$item->image)}}"  alt="">
                                    </a>
                                    <!-- wishlist icon -->
                                    <span class="wishlist-icon">
                                        <a href="#"><i class="icon ion-md-heart-empty"></i></a>
                                    </span>
                                </div>
                                <div class="content">
                                    <h2 class="product-title"> <a href="{{route('singleproduct',$item->id)}}">{{$item->name}}</a></h2>
                                    <h2 class="product-title"> <a href="{{route('singleshowroomstuni',$item->showrooms->id)}}">{{$item->showrooms->name}}</a></h2>
                                    <p class="product-price">
                                        
                                        <span class="discounted-price">{{$item->prix}}(DT)</span>
                                    </p>

                                    <div class="hover-icons">
                                        <ul>
                                            <li><a href="{{route('singleproduct',$item->id)}}" data-tooltip="View"><i class="icon ion-md-open"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!--=======  End of single product  =======-->

                            <!--=======  End of grid view product  =======-->

                            <!--=======  list view product  =======-->

                     
                            <!--=======  End of list view product  =======-->


                        </div>
                        @endforeach

                    </div>
@else
 <p>aucun article trouvé</p>

 @endif                   <!--=======  End of shop product display area  =======-->

                    <!--=======  pagination area  =======-->

                  

                    <!--=======  End of pagination area  =======-->
                </div>
            </div>
        </div>
    </div>

    <!--=====  End of shop page content  ======-->

    @endsection