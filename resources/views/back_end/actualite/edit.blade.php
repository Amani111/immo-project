@extends('back_end.layouts.app')



@section('content')

<div>

    <div>

        <div>

            <h2>Editer une Actualite</h2>

        </div>

    </div>

</div>



@if(Session::has('errors'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <ul>
        @foreach ($errors->all() as $error)
        <li>
            {{ $error }}  
        </li>
        @endforeach
    </ul>
   

</div>
@endif



{!! Form::model($act, ['method' => 'PATCH','route' => ['Actualite.update', $act->id],'files' => true]) !!}


<div class="container" >

    <div class="row" >

        <div class="col-md-9" >

            <h5>Titre:</h5>

            {!! Form::text('titre', null, array('placeholder' => 'Titre','class' => 'form-control')) !!}

        </div>
     

    </div>
    <div class="row">
      
        <div class="col-md-8" >

            <h5>Image:</h5>

            <img src="{{asset('public/actualite/'.$act->image)}}" alt="" srcset="" width="700px" height="300px">

        </div>
    </div>
    <div class="row">
        <div class="col-md-6" >

            <h5>modifier Image:</h5>

            {!! Form::file('image', array('placeholder' => 'image','class' => 'form-control')) !!}

        </div>
    </div>
    <div class="row">
        <div class="col-md-8" >
            <h5>Video:</h5>
            <iframe  width="500" height="100" allow="autoplay" src="/public/actualite/video/{{$act->video}}" ></iframe>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6" >

            <h5>modifier Video :</h5>
            
            {!! Form::file('video', array('placeholder' => 'video','class' => 'form-control','accept'=>'video/mp4,video/x-m4v,video/*')) !!}

        </div>
    </div>

    <div class="row">
        <div class="col-md-12" >
            <strong>description *:</strong>
            {!! Form::textarea('description', null, array('placeholder' => 'description','class' => 'form-control')) !!}
        </div>
    </div>

  
<hr>

    <div class="row" >
        <div class="col-md-6">
            <button class="btn btn-primary" type="submit" >Modifier</button>
        </div>
    </div>

</div>

{!! Form::close() !!}





@endsection
