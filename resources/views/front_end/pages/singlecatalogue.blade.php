@extends('front_end.layouts.app')

@section('title','single showroom')
@push('before-styles')
<style>
    .pageFoldRight {
	position: absolute;
	width: 0px;
	height: 0px;
	top: 0;
	right: 0;
	border-left-width: 1px;
	border-left-color: #DDDDDD;
	border-left-style: solid;
	border-bottom-width: 1px;
	border-bottom-color: #DDDDDD;
	border-bottom-style: solid;
	box-shadow: -5px 5px 10px #dddddd;
}

.pageFoldLeft {
	position: absolute;
	width: 0px;
	height: 0px;
	top: 0;
	left: 0;
	border-right-width: 1px;
	border-right-color: #DDDDDD;
	border-right-style: solid;
	border-bottom-width: 1px;
	border-bottom-color: #DDDDDD;
	border-bottom-style: solid;
	box-shadow: 5px 5px 10px #dddddd;
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
                                <li>catalogue Showroom</li>
                            </ul>
                        </nav>
                    </div>
                    <!--=======  End of breadcrumb container  =======-->
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <div class="bookWrapper">
            <div class="bookBg">
                <div class="pageBg">
                    <div class="pageWrapper">
                        @foreach($images as $index=>$key)
                        <div id="page{{$index}}" class="page">
                            <div class="pageFace front">
                                <h1>right 3</h1>
                                <div class="pageFoldRight"><img src="{{asset('/public/newcatalog/'.$key)}}" alt=""></div>
                            </div>
                            <div class="pageFace back">
                                <h1>left 3</h1>
                                <div class="pageFoldLeft"><img src="{{asset('/public/newcatalog/'.$key)}}" alt=""></div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
    </div>
    @endsection
    @push('after-scripts')
    <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
    <script>

        TweenLite.set(".pageBg", {xPercent: -50, yPercent: -50});
        TweenLite.set(".pageWrapper", {left: "50%", perspective: 1000 });
        TweenLite.set(".page", {transformStyle: "preserve-3d"});
        TweenLite.set(".back", {rotationY: -180});
        TweenLite.set([".back", ".front"], {backfaceVisibility: "hidden"});


        $(".page").click(
            function() {
                if (pageLocation[this.id] === undefined || pageLocation[this.id] == "right") {
                    zi = ($(".left").length) + 1;
                    TweenMax.to($(this), 1, {force3D: true, rotationY: -180, transformOrigin: "-1px top", className: '+=left', z: zi, zIndex: zi});
                    TweenLite.set($(this), {className: '-=right'});
                    pageLocation[this.id] = "left";
                } else {
                    zi = ($(".right").length) + 1;
                    TweenMax.to($(this), 1, {force3D: true, rotationY: 0, transformOrigin: "left top", className: '+=right', z: zi, zIndex: zi
                    });
                    TweenLite.set($(this), {className: '-=left'});
                    pageLocation[this.id] = "right";
                }
            }
        );

        $(".front").hover(
            function() {
                TweenLite.to($(this).find(".pageFoldRight"), 0.3, {width: "50px", height: "50px", backgroundImage: "linear-gradient(45deg,  #fefefe 0%,#f2f2f2 49%,#ffffff 50%,#ffffff 100%)"});
            },
            function() {
                TweenLite.to($(this).find(".pageFoldRight"), 0.3, {width: "0px", height: "0px"});
            }
        );

        $(".back").hover(
            function() {
                TweenLite.to($(this).find(".pageFoldLeft"), 0.3, {width: "50px", height: "50px", backgroundImage: "linear-gradient(135deg,  #ffffff 0%,#ffffff 50%,#f2f2f2 51%,#fefefe 100%)"		});
            },
            function() {
                TweenLite.to($(this).find(".pageFoldLeft"), 0.3, {width: "0px", height: "0px"});
            }
        )

        var pageLocation = [],
            lastPage = null;
            zi = 0;

    </script>
    @endpush