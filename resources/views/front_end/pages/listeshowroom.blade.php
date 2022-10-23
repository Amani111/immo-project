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

                    <div class="shop-header mb-30">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12 d-flex align-items-center">
                                <!--=======  view mode  =======-->

                                <div class="view-mode-icons mb-xs-10">
                                    <a href="#" data-target="grid"><i class="icon ion-md-apps"></i></a>
                                    <a class="active" href="#" data-target="list"><i class="icon ion-ios-list"></i></a>
                                </div>

                                <!--=======  End of view mode  =======-->

                            </div>
                            <div
                                class="col-lg-8 col-md-8 col-sm-12 d-flex flex-column flex-sm-row justify-content-between align-items-left align-items-sm-center">
                                <!--=======  Sort by dropdown  =======-->

                                <div class="sort-by-dropdown d-flex align-items-center mb-xs-10">
                                    <p class="mr-10 mb-0">Sort By: </p>
                                    <select name="sort-by" id="sort-by" class="nice-select">
                                        <option value="0">Sort By Popularity</option>
                                        <option value="0">Sort By Average Rating</option>
                                        <option value="0">Sort By Newness</option>
                                        <option value="0">Sort By Price: Low to High</option>
                                        <option value="0">Sort By Price: High to Low</option>
                                    </select>
                                </div>

                                <!--=======  End of Sort by dropdown  =======-->

                                <p class="result-show-message">{{count($data)}} showroom</p>
                            </div>
                        </div>
                    </div>
            @if(count($data) > 0)
                    <!--=======  End of Shop header  =======-->
                    @foreach ($data as $item)
                        
            
                    <!--=======  shop product display area  =======-->
                    <div class="shop-product-wrap list row mb-30 no-gutters">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <!--=======  grid view product  =======-->

                            <!--=======  single product  =======-->

                            <div class="fl-product shop-grid-view-product">
                                <div class="image">
                                    <a href="single-product.html">
                                        <img width="300" height="300"  src="assets/images/products/product01.webp" class="img-fluid" alt="">
                                        <img width="300" height="300"  src="assets/images/products/product01-2.webp" class="img-fluid" alt="">
                                    </a>
                                    <!-- wishlist icon -->
                                    <span class="wishlist-icon">
                                        <a href="#"><i class="icon ion-md-heart-empty"></i></a>
                                    </span>
                                </div>
                                <div class="content">
                                    <h2 class="product-title"> <a href="single-product.html">{{$item->name}}</a></h2>
                                    <div class="rating">
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p class="product-price">
                                        <span class="main-price discounted">{{$item->govlist->name}}</span>
                                        
                                    </p>

                                    <div class="hover-icons">
                                        <ul>
                                            <li><a href="#" data-tooltip="Add to Cart"><i
                                                        class="icon ion-md-cart"></i></a></li>
                                         
                                            <li><a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view-modal-container"
                                                    data-tooltip="Quick View"><i class="icon ion-md-open"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!--=======  End of single product  =======-->

                            <!--=======  End of grid view product  =======-->

                            <!--=======  list view product  =======-->

                            <div class="fl-product shop-list-view-product">
                                <div class="image">
                                    <a href="single-product.html">
                                        <img width="300" height="300"  src="assets/images/products/product01.webp" class="img-fluid" alt="">
                                        <img width="300" height="300"  src="assets/images/products/product01-2.webp" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="content">
                                    <h2 class="product-title"> <a href="single-product.html">{{$item->name}}</a></h2>
                                    <div class="rating">
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p class="product-price">
                                       
                                        <span class="discounted-price">{{$item->govlist->name}}</span>
                                    </p>

                                    <p class="product-description">{{$item->description}}</p>

                                    <div class="hover-icons">
                                        <ul>
                                            <li><a href="{{route('singleshowroomstuni',$item->id)}}" data-tooltip="View showroom">View showroom</a></li>
                                            <li><a href="#"><i class="icon ion-md-heart-empty"></i></a></li>
                                        
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!--=======  End of list view product  =======-->

                           
                        </div>
                    </div>
                    @endforeach
            @else
            <p>pas du showroom</p>
            @endif
                 
                    <!--=======  End of shop product display area  =======-->

                    <!--=======  pagination area  =======-->

                    <div class="pagination-area">
                        <ul>
                            {!! $data->render() !!}
                        </ul>
                    </div>

                    <!--=======  End of pagination area  =======-->
                </div>
            </div>
        </div>
    </div>

    <!--=====  End of shop page content  ======-->




    @endsection