@extends('back_end.layouts.app')



@section('content')

<div>

    <div>

        <div>

            <h2>Editer une sous categorie</h2>

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



{!! Form::model($souscategory, ['method' => 'PATCH','route' => ['souscategory.update', $souscategory->id]]) !!}


<div class="container" >

    <div class="row" >

        <div class="col-md-9" >

            <h5>nom de categorie:</h5>

            {!! Form::text('name', null, array('placeholder' => 'nom de categorie','class' => 'form-control')) !!}

        </div>
        <div class="col-md-9" >

            <h5>slug  de categorie:</h5>

            {!! Form::text('slug', null, array('placeholder' => 'slug unique du categorie','class' => 'form-control')) !!}

        </div>
     

    </div>

    <input type="hidden" name="category_id" value="{{$souscategory->category_id}}">


<hr>

    <div class="row" >
        <div class="col-md-6">
            <button class="btn btn-primary" type="submit" >Submit</button>
        </div>
    </div>

</div>

{!! Form::close() !!}





@endsection
