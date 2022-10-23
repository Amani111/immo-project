@extends('back_end.layouts.app')



@section('content')

<div >

    <div >

        <div >

            <h2>Créer une pack</h2>

        </div>

       

    </div>

</div>



@if (count($errors) > 0)

  <div >
    <ul>
       @foreach ($errors->all() as $error)

         <li><span class="alert alert-danger">{{ $error }}</span></li>

       @endforeach

    </ul>
  </div>

@endif


<form action="{{route('packs.store')}}" class="form-horizontal" method="POST" role="form" enctype="multipart/form-data">

{{ csrf_field() }}
<div class="container">

    <div class="row">

        <div class="col-md-6" >
            <strong>titre *:</strong>
            {!! Form::text('title', null, array('placeholder' => 'Titre','class' => 'form-control')) !!}
        </div>
        <div class="col-md-6">

            <strong>Image *:</strong>

            {!! Form::file('image', array('placeholder' => 'image','class' => 'form-control')) !!}

        </div>
    </div>
    <div class="row">
        <div class="col-md-6" >
            <strong>nombre des images par pack *:</strong>
            {!! Form::number('nb_picture', null, array('placeholder' => 'nombre image','class' => 'form-control')) !!}
        </div>
        <div class="col-md-6">
            <strong>Prix *:</strong>
            {!! Form::text('prix',null, array('placeholder' => 'prix','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-md-6" >
            <strong>description *:</strong>
            {!! Form::textarea('description', null, array('placeholder' => 'description','class' => 'form-control')) !!}
        </div>
        <div class="col-md-6">
            <strong>dureé par jour*:</strong>
            {!! Form::text('duree',null, array('placeholder' => 'dureé par jour','class' => 'form-control')) !!}
        </div>


    </div>

    <hr>
    <div class="row">

        <div class="col-md-6">
            <button class="btn btn-primary" type="submit" >Submit</button>
        </div>
    </div>
    
</div>

</form>





@endsection
