@extends('back_end.layouts.app')



@section('content')

<div >
    <div >
        <div >
            <h2>Créer une Actualite</h2>

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

<form action="{{route('Actualite.store')}}" class="form-horizontal" method="POST" role="form" enctype="multipart/form-data">

{{ csrf_field() }}
<div class="container">

    <div class="row">
        <div class="col-md-12" >
            <strong>titre *:</strong>
            {!! Form::text('titre', null, array('placeholder' => 'Titre','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="row">

       
        <div class="col-md-6">

            <strong>Image *:</strong>

            {!! Form::file('image', array('placeholder' => 'image','class' => 'form-control')) !!}

        </div>
        <div class="col-md-6" >

            <strong> Video :</strong>

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
    <div class="row">

        <div class="col-md-6">
            <button class="btn btn-primary" type="submit" >Créer</button>
        </div>
    </div>
    
</div>

</form>





@endsection
