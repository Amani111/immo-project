@extends('back_end.layouts.app')



@section('content')

<div >

    <div >

        <div >

            <h4>Créer une showroom</h4>

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




{!! Form::open(array('route' => 'showrooms.store','method'=>'POST')) !!}

<div class="container">

    <div class="row">

        <div class="col-md-6" >
            <h5>Nom:</h5>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
        <div class="col-md-6" >

            <h5>address:</h5>

            {!! Form::text('address', null, array('placeholder' => 'adresse complete','class' => 'form-control')) !!}

        </div>

    </div>
    <div class="row">

      
 


    </div>



    <hr>
    <div class="row">

        <div class="col-md-6">
            <button class="btn btn-primary" type="submit" >Submit</button>
        </div>
    </div>
    
</div>

{!! Form::close() !!}





@endsection
