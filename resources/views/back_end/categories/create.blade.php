@extends('back_end.layouts.app')



@section('content')

<div >

    <div >

        <div >

            <h2>Créer une categorie</h2>

        </div>

       

    </div>

</div>



@if(Session::has('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  {{ Session::get('error') }}      
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif


<form action="{{route('categories.store')}}" class="form-horizontal" method="POST" role="form" enctype="multipart/form-data">

{{ csrf_field() }}
<div class="container">

    <div class="row">

        <div class="col-md-6" >
            <strong>Nom categorie:</strong>
            {!! Form::text('name', null, array('placeholder' => 'nom de categorie','class' => 'form-control')) !!}
        </div>
        <div class="col-md-6">

            <strong>Slug:</strong>

            {!! Form::text('slug', null ,array('placeholder' => 'slug','class' => 'form-control')) !!}
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


