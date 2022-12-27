@extends('back_end.layouts.app')


@section('content')

<div class="row" >

    <div >

        <div >

            <h2> View pack</h2>

        </div>

    </div>

</div>



<div class="container">

    <div class="row" >
        <div>
            <h5>titre:</h5>
            {{ $pack->title }}
        </div>
    </div>

    <div class="row">

        <div >

            <h5>image:</h5>
            <img src="{{asset('/public/image/'.$pack->image)}}" alt="" srcset="" width="700px" height="300px">


        </div>

    </div>

    <div >

        <div  class="row">

            <div class="col-md-9" >
    
                <h5>description:</h5>

                <textarea name="description" id="" cols="30" rows="10" class="form-control" disabled>{{ $pack->description }}</textarea>
    
            </div>
    
    
        </div>

    </div>

</div>

@stop
