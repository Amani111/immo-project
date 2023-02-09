@extends('front_end.layouts.app')

@section('title','Liste showroom')

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

                    @if(count($data) > 0)
                    <div class="shop-product-wrap grid row mb-30 no-gutters">
                        @foreach ($data as $item)
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <!--=======  End of Shop header  =======-->
                        
                                
                    
                            <!--=======  shop product display area  =======-->
                        
                                    <!--=======  grid view product  =======-->

                                    <!--=======  single product  =======-->

                                    <div class="fl-product shop-grid-view-product">
                                        <div class="image">
                                            <a href="{{route('singleshowroomstuni',$item->id)}}">
                                                <img width="300" height="300"  src="{{asset('/public/showroom/image/'.$item->image)}}" class="img-fluid" alt="">
                                                <img width="300" height="300"  src="{{asset('/public/showroom/image/'.$item->image)}}" class="img-fluid" alt="">
                                            </a>
                                            <!-- wishlist icon -->
                                            <span class="wishlist-icon">
                                                <a href="#"><i class="icon ion-md-heart-empty"></i></a>
                                            </span>
                                        </div>
                                        <div class="content">
                                            <h2 class="product-title"> <a href="{{route('singleshowroomstuni',$item->id)}}">{{$item->name}}</a></h2>
                                            <p class="product-price">
                                                <span class="main-price">{{$item->govlist->name}}</span>
                                                
                                            </p>

                                            <div class="hover-icons">
                                                <ul>
                                                    <li><a href="{{route('singleshowroomstuni',$item->id)}}" data-tooltip="View showroom"><i class="icon ion-md-open"></i></a></li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <!--=======  End of single product  =======-->

      
                        
                        </div>
                        @endforeach
                    </div>
                     <!--=======  pagination area  =======-->

                     <div class="pagination-area">
                        <ul>
                            {!! $data->render() !!}
                        </ul>
                    </div>

                    <!--=======  End of pagination area  =======-->
                </div>
            @else
            <p>aucun showroom </p>
            @endif
                 
                    <!--=======  End of shop product display area  =======-->

           
            </div>
        </div>
    </div>

    <!--=====  End of shop page content  ======-->




    @endsection