@extends('front_end.layouts.app')

@section('title','tunimeuble')

@section('content')

@include('front_end.includes.sidebar')
    <!--SECTION  CATEGORIES -->

    <!--=============================================
    =            shop page content         =
    =============================================-->

    <div class="shop-page-content mb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 order-2 order-lg-1">
                    <!--=======  page sidebar   =======-->

                    <div class="page-sidebar">
                        <!--=======  single sidebar block  =======-->

                        <div class="single-sidebar">
                            <h3 class="sidebar-title">CATEGORIES</h3>

                            <div class="category">
                                <ul>
                                    <li><a href="shop-left-sidebar.html">Bedroom</a></li>
                                    <li><a href="shop-left-sidebar.html">Cook</a></li>
                                    <li><a href="shop-left-sidebar.html">Decor</a></li>
                                    <li><a href="shop-left-sidebar.html">Diningroom</a></li>
                                    <li><a href="shop-left-sidebar.html">Lighting</a></li>
                                    <li><a href="shop-left-sidebar.html">Livingroom</a></li>
                                    <li><a href="shop-left-sidebar.html">Uncategorized</a></li>
                                </ul>
                            </div>
                        </div>

                        <!--=======  End of single sidebar block  =======-->

                        <!--=======  single sidebar block  =======-->

                        <div class="single-sidebar price-range-bg">
                            <h3 class="sidebar-title filter-price-title">FILTER BY PRICE</h3>
                            <div class="sidebar-price">
                                <div id="price-range"></div>
                                <input type="text" id="price-amount" class="price-amount" readonly>
                            </div>
                        </div>

                        <!--=======  End of single sidebar block  =======-->

                        <!--=======  single sidebar block  =======-->

                        <div class="single-sidebar mb-30">
                            <h3 class="sidebar-title color-title">COLOR</h3>
                            <div class="color-category">
                                <ul>
                                    <li><a href="shop-left-sidebar.html">Black</a> <span class="counter">(2)</span></li>
                                    <li><a href="shop-left-sidebar.html">Blue</a> <span class="counter">(4)</span></li>
                                    <li><a href="shop-left-sidebar.html">Red</a> <span class="counter">(1)</span></li>
                                    <li><a href="shop-left-sidebar.html">Yellow</a> <span class="counter">(5)</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!--=======  End of single sidebar block  =======-->

                        <!--=======  single sidebar block  =======-->

                        <div class="single-sidebar mb-30">
                            <h3 class="sidebar-title">COMPARE PRODUCTS</h3>
                            <!--=======  compare product container  =======-->

                            <ul class="product-list">
                                <li>
                                    <a href="single-product.html" class="remove" title="Remove">x</a>
                                    <a class="title" href="single-product.html">Cillum dolore tortor nisl</a>
                                </li>
                                <li>
                                    <a href="single-product.html" class="remove" title="Remove">x</a>
                                    <a class="title" href="single-product.html">Condimentum posuere</a>
                                </li>
                            </ul>
                            <div class="compare-btns">
                                <a href="#" class="clear-all">Clear all</a>
                                <a href="#" class="compare">Compare <i class="fa fa-check"></i></a>
                            </div>
                            <!--=======  End of compare product container  =======-->
                        </div>

                        <!--=======  End of single sidebar block  =======-->

                        <!--=======  single sidebar block  =======-->

                        <div class="single-sidebar">
                            <h3 class="sidebar-title">POPULAR TAGS</h3>

                            <!--=======  tag container  =======-->

                            <ul class="tag-container">
                                <li><a href="shop-left-sidebar.html">new</a> </li>
                                <li><a href="shop-left-sidebar.html">bags</a> </li>
                                <li><a href="shop-left-sidebar.html">new</a> </li>
                                <li><a href="shop-left-sidebar.html">kids</a> </li>
                                <li><a href="shop-left-sidebar.html">fashion</a> </li>
                                <li><a href="shop-left-sidebar.html">Accessories</a> </li>
                            </ul>

                            <!--=======  End of tag container  =======-->
                        </div>

                        <!--=======  End of single sidebar block  =======-->
                    </div>

                    <!--=======  End of page sidebar   =======-->
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <!--=======  slider banner  =======-->

                    <div class="slider-banner home-one-banner banner-bg banner-bg-1 mb-30">
                        <div class="banner-text">
                            <p>Look of The Week</p>
                            <p class="big-text">Lamps Light Color</p>
                            <p>Only from $209</p>
                        </div>
                    </div>

                    <!--=======  End of slider banner  =======-->

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

                                <p class="result-show-message">Showing 1–12 of 41 results</p>
                            </div>
                        </div>
                    </div>

                    <!--=======  End of Shop header  =======-->

                    <!--=======  shop product display area  =======-->
                    <div class="shop-product-wrap list row mb-30 no-gutters">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <!--=======  grid view product  =======-->

                            <!--=======  single product  =======-->

                            <div class="fl-product shop-grid-view-product">
                                <div class="image">
                                    <a href="single-product.html">
                                        <img width="300" height="300"  src="{{('front-end/images/products/product01.webp')}}" class="img-fluid" alt="">
                                        <img width="300" height="300"  src="{{('front-end/images/products/product01-2.webp')}}" class="img-fluid" alt="">
                                    </a>
                                    <!-- wishlist icon -->
                                    <span class="wishlist-icon">
                                        <a href="#"><i class="icon ion-md-heart-empty"></i></a>
                                    </span>
                                </div>
                                <div class="content">
                                    <h2 class="product-title"> <a href="single-product.html">Officiis debitis</a></h2>
                                    <div class="rating">
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p class="product-price">
                                        <span class="main-price discounted">$71</span>
                                        <span class="discounted-price">$65</span>
                                    </p>

                                    <div class="hover-icons">
                                        <ul>
                                            <li><a href="#" data-tooltip="Add to Cart"><i
                                                        class="icon ion-md-cart"></i></a></li>
                                            <li><a href="#" data-tooltip="Compare"><i
                                                        class="icon ion-md-options"></i></a></li>
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
                                        <img width="300" height="300"  src="{{('front-end/images/products/product01.webp')}}" class="img-fluid" alt="">
                                        <img width="300" height="300"  src="{{('front-end/images/products/product01-2.webp')}}" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="content">
                                    <h2 class="product-title"> <a href="single-product.html">Officiis debitis</a></h2>
                                    <div class="rating">
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p class="product-price">
                                        <span class="main-price discounted">$71</span>
                                        <span class="discounted-price">$65</span>
                                    </p>

                                    <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                        ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida
                                        et mattis vulputate, tristique ut lectus</p>

                                    <div class="hover-icons">
                                        <ul>
                                            <li><a href="#" data-tooltip="Add to Cart">Add to cart</a></li>
                                            <li><a href="#"><i class="icon ion-md-heart-empty"></i></a></li>
                                            <li><a href="#" data-tooltip="Compare"><i
                                                        class="icon ion-md-options"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!--=======  End of list view product  =======-->


                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <!--=======  grid view product  =======-->

                            <!--=======  single product  =======-->

                            <div class="fl-product shop-grid-view-product">
                                <div class="image">
                                    <a href="single-product.html">
                                        <img width="300" height="300"  src="{{('front-end/images/products/product02.webp')}}" class="img-fluid" alt="">
                                        <img src="{{('front-end/images/products/product02-2.webp')}}" class="img-fluid" alt="">
                                    </a>
                                    <!-- wishlist icon -->
                                    <span class="wishlist-icon">
                                        <a href="#"><i class="icon ion-md-heart-empty"></i></a>
                                    </span>
                                </div>
                                <div class="content">
                                    <h2 class="product-title"> <a href="single-product.html">Officiis debitis</a></h2>
                                    <div class="rating">
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p class="product-price">
                                        <span class="main-price discounted">$71</span>
                                        <span class="discounted-price">$65</span>
                                    </p>

                                    <div class="hover-icons">
                                        <ul>
                                            <li><a href="#" data-tooltip="Add to Cart"><i
                                                        class="icon ion-md-cart"></i></a></li>
                                            <li><a href="#" data-tooltip="Compare"><i
                                                        class="icon ion-md-options"></i></a></li>
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
                                        <img width="300" height="300"  src="{{('front-end/images/products/product02.webp')}}" class="img-fluid" alt="">
                                        <img src="{{('front-end/images/products/product02-2.webp')}}" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="content">
                                    <h2 class="product-title"> <a href="single-product.html">Officiis debitis</a></h2>
                                    <div class="rating">
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p class="product-price">
                                        <span class="main-price discounted">$71</span>
                                        <span class="discounted-price">$65</span>
                                    </p>

                                    <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                        ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida
                                        et mattis vulputate, tristique ut lectus</p>

                                    <div class="hover-icons">
                                        <ul>
                                            <li><a href="#" data-tooltip="Add to Cart">Add to cart</a></li>
                                            <li><a href="#"><i class="icon ion-md-heart-empty"></i></a></li>
                                            <li><a href="#" data-tooltip="Compare"><i
                                                        class="icon ion-md-options"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!--=======  End of list view product  =======-->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <!--=======  grid view product  =======-->

                            <!--=======  single product  =======-->

                            <div class="fl-product shop-grid-view-product">
                                <div class="image">
                                    <a href="single-product.html">
                                        <img width="600" height="600"  src="{{('front-end/images/products/product03.webp')}}" class="img-fluid" alt="">
                                        <img width="600" height="600"  src="{{('front-end/images/products/product03-2.webp')}}" class="img-fluid" alt="">
                                    </a>
                                    <!-- wishlist icon -->
                                    <span class="wishlist-icon">
                                        <a href="#"><i class="icon ion-md-heart-empty"></i></a>
                                    </span>
                                </div>
                                <div class="content">
                                    <h2 class="product-title"> <a href="single-product.html">Officiis debitis</a></h2>
                                    <div class="rating">
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p class="product-price">
                                        <span class="main-price discounted">$71</span>
                                        <span class="discounted-price">$65</span>
                                    </p>

                                    <div class="hover-icons">
                                        <ul>
                                            <li><a href="#" data-tooltip="Add to Cart"><i
                                                        class="icon ion-md-cart"></i></a></li>
                                            <li><a href="#" data-tooltip="Compare"><i
                                                        class="icon ion-md-options"></i></a></li>
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
                                        <img width="600" height="600"  src="{{('front-end/images/products/product03.webp')}}" class="img-fluid" alt="">
                                        <img width="600" height="600"  src="{{('front-end/images/products/product03-2.webp')}}" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="content">
                                    <h2 class="product-title"> <a href="single-product.html">Officiis debitis</a></h2>
                                    <div class="rating">
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p class="product-price">
                                        <span class="main-price discounted">$71</span>
                                        <span class="discounted-price">$65</span>
                                    </p>

                                    <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                        ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida
                                        et mattis vulputate, tristique ut lectus</p>

                                    <div class="hover-icons">
                                        <ul>
                                            <li><a href="#" data-tooltip="Add to Cart">Add to cart</a></li>
                                            <li><a href="#"><i class="icon ion-md-heart-empty"></i></a></li>
                                            <li><a href="#" data-tooltip="Compare"><i
                                                        class="icon ion-md-options"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!--=======  End of list view product  =======-->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <!--=======  grid view product  =======-->

                            <!--=======  single product  =======-->

                            <div class="fl-product shop-grid-view-product">
                                <div class="image">
                                    <a href="single-product.html">
                                        <img width="600" height="600"  src="{{('front-end/images/products/product04.webp')}}" class="img-fluid" alt="">
                                        <img width="600" height="600"  src="{{('front-end/images/products/product04-2.webp')}}" class="img-fluid" alt="">
                                    </a>
                                    <!-- wishlist icon -->
                                    <span class="wishlist-icon">
                                        <a href="#"><i class="icon ion-md-heart-empty"></i></a>
                                    </span>
                                </div>
                                <div class="content">
                                    <h2 class="product-title"> <a href="single-product.html">Officiis debitis</a></h2>
                                    <div class="rating">
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p class="product-price">
                                        <span class="main-price discounted">$71</span>
                                        <span class="discounted-price">$65</span>
                                    </p>

                                    <div class="hover-icons">
                                        <ul>
                                            <li><a href="#" data-tooltip="Add to Cart"><i
                                                        class="icon ion-md-cart"></i></a></li>
                                            <li><a href="#" data-tooltip="Compare"><i
                                                        class="icon ion-md-options"></i></a></li>
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
                                        <img width="600" height="600"  src="{{('front-end/images/products/product04.webp')}}" class="img-fluid" alt="">
                                        <img width="600" height="600"  src="{{('front-end/images/products/product04-2.webp')}}" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="content">
                                    <h2 class="product-title"> <a href="single-product.html">Officiis debitis</a></h2>
                                    <div class="rating">
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p class="product-price">
                                        <span class="main-price discounted">$71</span>
                                        <span class="discounted-price">$65</span>
                                    </p>

                                    <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                        ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida
                                        et mattis vulputate, tristique ut lectus</p>

                                    <div class="hover-icons">
                                        <ul>
                                            <li><a href="#" data-tooltip="Add to Cart">Add to cart</a></li>
                                            <li><a href="#"><i class="icon ion-md-heart-empty"></i></a></li>
                                            <li><a href="#" data-tooltip="Compare"><i
                                                        class="icon ion-md-options"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!--=======  End of list view product  =======-->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <!--=======  grid view product  =======-->

                            <!--=======  single product  =======-->

                            <div class="fl-product shop-grid-view-product">
                                <div class="image">
                                    <a href="single-product.html">
                                        <img width="300" height="300"  src="{{('front-end/images/products/product01.webp')}}" class="img-fluid" alt="">
                                        <img width="300" height="300"  src="{{('front-end/images/products/product01-2.webp')}}" class="img-fluid" alt="">
                                    </a>
                                    <!-- wishlist icon -->
                                    <span class="wishlist-icon">
                                        <a href="#"><i class="icon ion-md-heart-empty"></i></a>
                                    </span>
                                </div>
                                <div class="content">
                                    <h2 class="product-title"> <a href="single-product.html">Officiis debitis</a></h2>
                                    <div class="rating">
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p class="product-price">
                                        <span class="main-price discounted">$71</span>
                                        <span class="discounted-price">$65</span>
                                    </p>

                                    <div class="hover-icons">
                                        <ul>
                                            <li><a href="#" data-tooltip="Add to Cart"><i
                                                        class="icon ion-md-cart"></i></a></li>
                                            <li><a href="#" data-tooltip="Compare"><i
                                                        class="icon ion-md-options"></i></a></li>
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
                                        <img width="300" height="300"  src="{{('front-end/images/products/product01.webp')}}" class="img-fluid" alt="">
                                        <img width="300" height="300"  src="{{('front-end/images/products/product01-2.webp')}}" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="content">
                                    <h2 class="product-title"> <a href="single-product.html">Officiis debitis</a></h2>
                                    <div class="rating">
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p class="product-price">
                                        <span class="main-price discounted">$71</span>
                                        <span class="discounted-price">$65</span>
                                    </p>

                                    <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                        ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida
                                        et mattis vulputate, tristique ut lectus</p>

                                    <div class="hover-icons">
                                        <ul>
                                            <li><a href="#" data-tooltip="Add to Cart">Add to cart</a></li>
                                            <li><a href="#"><i class="icon ion-md-heart-empty"></i></a></li>
                                            <li><a href="#" data-tooltip="Compare"><i
                                                        class="icon ion-md-options"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!--=======  End of list view product  =======-->


                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <!--=======  grid view product  =======-->

                            <!--=======  single product  =======-->

                            <div class="fl-product shop-grid-view-product">
                                <div class="image">
                                    <a href="single-product.html">
                                        <img width="300" height="300"  src="{{('front-end/images/products/product02.webp')}}" class="img-fluid" alt="">
                                        <img src="{{('front-end/images/products/product02-2.webp')}}" class="img-fluid" alt="">
                                    </a>
                                    <!-- wishlist icon -->
                                    <span class="wishlist-icon">
                                        <a href="#"><i class="icon ion-md-heart-empty"></i></a>
                                    </span>
                                </div>
                                <div class="content">
                                    <h2 class="product-title"> <a href="single-product.html">Officiis debitis</a></h2>
                                    <div class="rating">
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p class="product-price">
                                        <span class="main-price discounted">$71</span>
                                        <span class="discounted-price">$65</span>
                                    </p>

                                    <div class="hover-icons">
                                        <ul>
                                            <li><a href="#" data-tooltip="Add to Cart"><i
                                                        class="icon ion-md-cart"></i></a></li>
                                            <li><a href="#" data-tooltip="Compare"><i
                                                        class="icon ion-md-options"></i></a></li>
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
                                        <img width="300" height="300"  src="{{('front-end/images/products/product02.webp')}}" class="img-fluid" alt="">
                                        <img src="{{('front-end/images/products/product02-2.webp')}}" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="content">
                                    <h2 class="product-title"> <a href="single-product.html">Officiis debitis</a></h2>
                                    <div class="rating">
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p class="product-price">
                                        <span class="main-price discounted">$71</span>
                                        <span class="discounted-price">$65</span>
                                    </p>

                                    <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                        ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida
                                        et mattis vulputate, tristique ut lectus</p>

                                    <div class="hover-icons">
                                        <ul>
                                            <li><a href="#" data-tooltip="Add to Cart">Add to cart</a></li>
                                            <li><a href="#"><i class="icon ion-md-heart-empty"></i></a></li>
                                            <li><a href="#" data-tooltip="Compare"><i
                                                        class="icon ion-md-options"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!--=======  End of list view product  =======-->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <!--=======  grid view product  =======-->

                            <!--=======  single product  =======-->

                            <div class="fl-product shop-grid-view-product">
                                <div class="image">
                                    <a href="single-product.html">
                                        <img width="600" height="600"  src="{{('front-end/images/products/product03.webp')}}" class="img-fluid" alt="">
                                        <img width="600" height="600"  src="{{('front-end/images/products/product03-2.webp')}}" class="img-fluid" alt="">
                                    </a>
                                    <!-- wishlist icon -->
                                    <span class="wishlist-icon">
                                        <a href="#"><i class="icon ion-md-heart-empty"></i></a>
                                    </span>
                                </div>
                                <div class="content">
                                    <h2 class="product-title"> <a href="single-product.html">Officiis debitis</a></h2>
                                    <div class="rating">
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p class="product-price">
                                        <span class="main-price discounted">$71</span>
                                        <span class="discounted-price">$65</span>
                                    </p>

                                    <div class="hover-icons">
                                        <ul>
                                            <li><a href="#" data-tooltip="Add to Cart"><i
                                                        class="icon ion-md-cart"></i></a></li>
                                            <li><a href="#" data-tooltip="Compare"><i
                                                        class="icon ion-md-options"></i></a></li>
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
                                        <img width="600" height="600"  src="{{('front-end/images/products/product03.webp')}}" class="img-fluid" alt="">
                                        <img width="600" height="600"  src="{{('front-end/images/products/product03-2.webp')}}" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="content">
                                    <h2 class="product-title"> <a href="single-product.html">Officiis debitis</a></h2>
                                    <div class="rating">
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p class="product-price">
                                        <span class="main-price discounted">$71</span>
                                        <span class="discounted-price">$65</span>
                                    </p>

                                    <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                        ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida
                                        et mattis vulputate, tristique ut lectus</p>

                                    <div class="hover-icons">
                                        <ul>
                                            <li><a href="#" data-tooltip="Add to Cart">Add to cart</a></li>
                                            <li><a href="#"><i class="icon ion-md-heart-empty"></i></a></li>
                                            <li><a href="#" data-tooltip="Compare"><i
                                                        class="icon ion-md-options"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!--=======  End of list view product  =======-->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <!--=======  grid view product  =======-->

                            <!--=======  single product  =======-->

                            <div class="fl-product shop-grid-view-product">
                                <div class="image">
                                    <a href="single-product.html">
                                        <img width="600" height="600"  src="{{('front-end/images/products/product04.webp')}}" class="img-fluid" alt="">
                                        <img width="600" height="600"  src="{{('front-end/images/products/product04-2.webp')}}" class="img-fluid" alt="">
                                    </a>
                                    <!-- wishlist icon -->
                                    <span class="wishlist-icon">
                                        <a href="#"><i class="icon ion-md-heart-empty"></i></a>
                                    </span>
                                </div>
                                <div class="content">
                                    <h2 class="product-title"> <a href="single-product.html">Officiis debitis</a></h2>
                                    <div class="rating">
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p class="product-price">
                                        <span class="main-price discounted">$71</span>
                                        <span class="discounted-price">$65</span>
                                    </p>

                                    <div class="hover-icons">
                                        <ul>
                                            <li><a href="#" data-tooltip="Add to Cart"><i
                                                        class="icon ion-md-cart"></i></a></li>
                                            <li><a href="#" data-tooltip="Compare"><i
                                                        class="icon ion-md-options"></i></a></li>
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
                                        <img width="600" height="600"  src="{{('front-end/images/products/product04.webp')}}" class="img-fluid" alt="">
                                        <img width="600" height="600"  src="{{('front-end/images/products/product04-2.webp')}}" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="content">
                                    <h2 class="product-title"> <a href="single-product.html">Officiis debitis</a></h2>
                                    <div class="rating">
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p class="product-price">
                                        <span class="main-price discounted">$71</span>
                                        <span class="discounted-price">$65</span>
                                    </p>

                                    <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                        ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida
                                        et mattis vulputate, tristique ut lectus</p>

                                    <div class="hover-icons">
                                        <ul>
                                            <li><a href="#" data-tooltip="Add to Cart">Add to cart</a></li>
                                            <li><a href="#"><i class="icon ion-md-heart-empty"></i></a></li>
                                            <li><a href="#" data-tooltip="Compare"><i
                                                        class="icon ion-md-options"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!--=======  End of list view product  =======-->
                        </div>

                    </div>


                    <!--=======  End of shop product display area  =======-->

                    <!--=======  pagination area  =======-->

                    <div class="pagination-area  mb-md-50 mb-sm-50">
                        <ul>
                            <li><a class="active" href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                        </ul>
                    </div>

                    <!--=======  End of pagination area  =======-->
                </div>
            </div>
        </div>
    </div>

    <!--=====  End of shop page content  ======-->



    <!-- END SECTION  CATEGORIES -->
    <!--SECTION  PARTENAIRE-->
    @include('front_end.includes.partenaires')
@endsection
