@extends('back_end.layouts.app')



@section('content')

<div>

    <div>

        <div>

            <h2>Editer une pack</h2>

        </div>

    </div>

</div>



@if (count($errors) > 0)

  <div class="row">
    <ul>
       @foreach ($errors->all() as $error)

         <li><span class="alert alert-danger">{{ $error }}</span></li>

       @endforeach
    </ul>
  </div>

@endif



{!! Form::model($pack, ['method' => 'PATCH','route' => ['packs.update', $pack->id],'files' => true]) !!}


<div class="container" >

    <div class="row" >

        <div class="col-md-9" >

            <h5>Titre:</h5>

            {!! Form::text('title', null, array('placeholder' => 'Titre','class' => 'form-control')) !!}

        </div>
     

    </div>
    <div class="row">
      
        <div class="col-md-8" >

            <h5>Image:</h5>

            <img src="/public/image/{{$pack->image}}" alt="" srcset="" width="700px" height="300px">

        </div>
    </div>
    <div class="row">
        <div class="col-md-6" >

            <h5>modifier Image:</h5>

            {!! Form::file('image', array('placeholder' => 'image','class' => 'form-control')) !!}

        </div>
    </div>

    <div  class="row">

        <div class="col-md-9" >

            <h5>description:</h5>

            {!! Form::textarea('description', null, array('placeholder' => 'description','class' => 'form-control')) !!}

        </div>


    </div>

  
<hr>

    <div class="row" >
        <div class="col-md-6">
            <button class="btn btn-primary" type="submit" >Submit</button>
        </div>
    </div>

</div>

{!! Form::close() !!}





@endsection
