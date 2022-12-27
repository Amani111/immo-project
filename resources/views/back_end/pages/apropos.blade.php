@extends('back_end.layouts.app')



@section('content')
<div>

    <div>

        <div>

            <h2>Editer la page Apropos</h2>

        </div>

    </div>

</div>
@if(Session::has('message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{ Session::get('message') }}
</div>
@endif
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




{!! Form::model($apropos, ['method' => 'PATCH','route' => ['apropos.update', $apropos->id],'files' => true]) !!}

<div class="container" >

    <div class="row" >

        <div class="col-md-6" >

            <h5>Titre 1:</h5>

            {!! Form::text('titre1', null, array('placeholder' => 'Titre','class' => 'form-control')) !!}

        </div>
        <div class="col-md-6" >

            <h5>Titre 2:</h5>

            {!! Form::text('titre2', null, array('placeholder' => 'Titre','class' => 'form-control')) !!}

        </div>
     
    </div>
    <div class="row" >

        <div class="col-md-4" >

            <h5>Titre 3:</h5>

            {!! Form::text('titre3', null, array('placeholder' => 'Titre','class' => 'form-control')) !!}

        </div>
        <div class="col-md-4" >

            <h5>Titre 4:</h5>

            {!! Form::text('titre4', null, array('placeholder' => 'Titre','class' => 'form-control')) !!}

        </div>
     
        <div class="col-md-4" >

            <h5>Titre 5:</h5>

            {!! Form::text('titre5', null, array('placeholder' => 'Titre','class' => 'form-control')) !!}

        </div>
    </div>
 
    <div class="row">
      
        <div class="col-md-4" >
            <h5>Image:</h5>
            <img src="{{asset('/public/apropos/'.$apropos->image1)}}" alt="" srcset="" width="500px" height="300px">
        </div>
        <div class="col-md-4" >
            <h5>Image:</h5>
            <img src="{{asset('/public/apropos/'.$apropos->image2)}}" alt="" srcset="" width="500px" height="300px">
        </div>
     
    </div>
    <div class="row">
        <div class="col-md-6" >

            <h5>modifier Image 1:</h5>

            {!! Form::file('image1', array('placeholder' => 'image','class' => 'form-control')) !!}

        </div>
        <div class="col-md-6" >

            <h5>modifier Image 2:</h5>

            {!! Form::file('image2', array('placeholder' => 'image','class' => 'form-control')) !!}

        </div>
    </div>
    <div class="row">
        <div class="col-md-4" >
            <h5>Image:</h5>
            <img src="{{asset('/public/apropos/'.$apropos->image3)}}" alt="" srcset="" width="500px" height="300px">
        </div>
        <div class="col-md-4" >
            <h5>Image:</h5>
            <img src="{{asset('/public/apropos/'.$apropos->image4)}}" alt="" srcset="" width="500px" height="300px">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6" >

            <h5>modifier Image 3:</h5>

            {!! Form::file('image3', array('placeholder' => 'image','class' => 'form-control')) !!}

        </div>
        <div class="col-md-6" >

            <h5>modifier Image 4:</h5>

            {!! Form::file('image4', array('placeholder' => 'image','class' => 'form-control')) !!}

        </div>
    </div>
    <div class="row">
        <div class="col-md-6" >
            <h5>description 1 *:</h5>
            {!! Form::textarea('description1', null, array('placeholder' => 'description','class' => 'form-control')) !!}
        </div>
        <div class="col-md-6" >
            <h5>description 2*:</h5>
            {!! Form::textarea('description2', null, array('placeholder' => 'description','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-md-6" >
            <h5>description 3 *:</h5>
            {!! Form::textarea('description3', null, array('placeholder' => 'description','class' => 'form-control')) !!}
        </div>
        <div class="col-md-6" >
            <h5>description 4 *:</h5>
            {!! Form::textarea('description4', null, array('placeholder' => 'description','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-md-9" >
            <h5>description 5 *:</h5>
            {!! Form::textarea('description5', null, array('placeholder' => 'description','class' => 'form-control')) !!}
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