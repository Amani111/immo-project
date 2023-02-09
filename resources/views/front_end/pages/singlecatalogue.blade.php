@extends('front_end.layouts.app')

@section('title','single showroom')
@push('before-styles')
<link rel="stylesheet" type="text/css" href="{{asset('front-end/css/script.css')}}">

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
    {{-- <div class="flipbook">
        @foreach($images as $index=>$key)
        <div>
            <img src="{{asset('/public/newcatalog/'.$key)}}" alt="">
        </div>
      @endforeach  
      </div> --}}
      {{-- <div id="flipbook">
        <div class="hard"> Turn.js </div>
        <div class="hard"></div>
        <div> Page 1 </div>
        <div> Page 2 </div>
        <div> Page 3 </div>
        <div> Page 4 </div>
        <div class="hard"></div>
        <div class="hard"></div>
    </div> --}}

    <div id="flipbook">
        @foreach($images as $index=>$key)
        <div class="page">
            <img src="{{asset('/public/newcatalog/'.$key)}}" alt="">
        </div>
      @endforeach 
    </div>
    <hr/> 
    <div class="text-center">
        <input type="number" id="pageFld" min=1 hidden/>
        <button class="previous round" id="prevBtn">&#8249;</button>
        <button class="next round" id="nextBtn">&#8250;</button>
    </div>
  

    @endsection
    @push('after-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/turn.js/3/turn.min.js" integrity="sha512-rFun1mEMg3sNDcSjeGP35cLIycsS+og/QtN6WWnoSviHU9ykMLNQp7D1uuG1AzTV2w0VmyFVpszi2QJwiVW6oQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/turn.js/3/turn.js" integrity="sha512-9ocft8BVEGO4YnjEW4Tkq0+d3Usuax+GF922LJML/Q5ZLmtu9hgBbUZTxKXAkm+hzIHoC3I+vYha66opI9AuSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="{{asset('front-end/js/script.js')}}"></script>
    @endpush