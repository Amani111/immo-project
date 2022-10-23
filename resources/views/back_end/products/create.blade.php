@extends('back_end.layouts.app')



@section('content')

<div >

    <div >

        <div >

            <h2>Créer un produit</h2>

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


<form action="{{route('products.store')}}" class="form-horizontal" method="POST" role="form" enctype="multipart/form-data">

{{ csrf_field() }}
<div class="container">

    <div class="row">

        <div class="col-md-6" >
            <strong>titre *:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Titre','class' => 'form-control')) !!}
        </div>
        <div class="col-md-6" >
            <strong>prix (DT) *:</strong>
            {!! Form::number('prix', null, array('placeholder' => 'nombre image','class' => 'form-control')) !!}
        </div>
      
    </div>
    <div class="row">
        <div class="col-md-12">
            <strong>Image *:</strong>
            {!! Form::file('image', array('placeholder' => 'image','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <strong>choisie categorie * :</strong>
            <select name="category_id" id="category_id" class="form-control">
                <option value="0" disabled selected>--choisie categorie--</option>
                @foreach($categories as $array)
                    <option value="{{$array->id}}">{{$array->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <strong>choisie showroom * :</strong>
            <select name="showroom_id" id="showroom_id" class="form-control">
                <option value="0" disabled selected>--choisie showroom--</option>
                @foreach($showrooms as $array)
                    <option value="{{$array->id}}">{{$array->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12" >
            <strong>description *:</strong>
            {!! Form::textarea('description', null, array('placeholder' => 'description','class' => 'form-control')) !!}
        </div>
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
