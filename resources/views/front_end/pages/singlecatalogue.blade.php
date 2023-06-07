@extends('front_end.layouts.app')

@section('title','single showroom')
@push('before-styles')
<link rel="stylesheet" type="text/css" href="{{asset('front-end/css/script.css')}}">
<style>
    
.scene {
  width: 480px;
  height: 640px;
  margin: 16px auto;
  -webkit-perspective: 2000px;
  perspective: 2000px;
}
.book {
  position: relative;
  width: 100%;
  height: 100%;
  -webkit-transform-style: preserve-3d;
  transform-style: preserve-3d;
}
.page {
  cursor: pointer;
  position: absolute;
  color: black;
  width: 100%;
  height: 100%;

  -webkit-transition: 1.5s -webkit-transform;

  transition: 1.5s transform;
  -webkit-transform-style: preserve-3d;
  transform-style: preserve-3d;  
  -webkit-transform-origin: left center;  
  -ms-transform-origin: left center;  
  transform-origin: left center;
}
.front,
.back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  
  -webkit-backface-visibility: hidden;
  
  backface-visibility: hidden;
  background: -webkit-gradient(linear, 0% 0%, 100% 100%, from(#FFFFFF), to(#CCCCCC));
  background: -webkit-gradient(linear, left top, right bottom, from(#fff), to(#ccc));
  background: -webkit-linear-gradient(top left, #fff, #ccc);
  background: linear-gradient(to bottom right, #fff, #ccc);
}
.back {
  -webkit-transform: rotateY(180deg);
  transform: rotateY(180deg);
}

.page.active {
  z-index: 1;
}
.page.flipped {
  -webkit-transform: rotateY(-180deg);
  transform: rotateY(-180deg);
}
.page.flipped:last-of-type {
  z-index: 1;
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
    <div class="container">
        <!-- <div id="flipbook">
            @foreach($images as $index => $key)
            <div class="page">
                <img class="img-showroom" src="{{asset('/public/newcatalog/'.$key)}}" alt="">
            </div>
        @endforeach 
        </div>
        <hr/> 
        <div class="text-center">
            <input type="number" id="pageFld" min=1 hidden/>
            <button class="previous round" id="prevBtn">&#8249;</button>
            <button class="next round" id="nextBtn">&#8250;</button>
        </div> -->

        <div class="scene">
  <article class="book">
  @php
  $count = count($images);
  for ($i = 1; $i < $count; $i++) {
    @endphp

  <section class="page active">
    <div class="front">
      <p><img class="img-catalog"  src="{{asset('/public/newcatalog/'.$images[$i])}}"></p>
    </div>
    <div class="back">
      <p><img class="img-catalog" src="{{asset('/public/newcatalog/'.$images[$i-1])}}"></p>
    </div>    
  </section>
  @php
  }
  @endphp
</article>
</div>
    </div>
    @endsection
    @push('after-scripts')
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/turn.js/3/turn.min.js" integrity="sha512-rFun1mEMg3sNDcSjeGP35cLIycsS+og/QtN6WWnoSviHU9ykMLNQp7D1uuG1AzTV2w0VmyFVpszi2QJwiVW6oQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/turn.js/3/turn.js" integrity="sha512-9ocft8BVEGO4YnjEW4Tkq0+d3Usuax+GF922LJML/Q5ZLmtu9hgBbUZTxKXAkm+hzIHoC3I+vYha66opI9AuSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
	<script src="{{asset('front-end/js/script.js')}}"></script>
    <!-- <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?serve=CESDK2J7&placement=getbutterflycom" id="_carbonads_js"></script> -->
    @endpush