@extends('back_end.layouts.app')



@section('content')

<div >

    <div >

        <div >

            <h2>Créer un utilisateur</h2>

        </div>

       

    </div>

</div>



@if (count($errors) > 0)

  <div >
    <ul>
       @foreach ($errors->all() as $error)

         <li>{{ $error }}</li>

       @endforeach

    </ul>
  </div>

@endif




{!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}

<div class="container">

    <div class="row">

        <div class="col-md-6" >
            <strong>Name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
        <div class="col-md-6" >

            <strong>Email:</strong>

            {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}

        </div>

    </div>
    <div class="row">

        <div class="col-md-6">

            <strong>Password:</strong>

            {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}

        </div>
        <div class="col-md-6" >

            <strong>Confirm Password:</strong>

            {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}

        </div>


    </div>
    <div class="row">
        <div class="col-md-6">
            <strong>Telephone:</strong>

            {!! Form::text('phone', null, array('placeholder' => 'telephone','class' => 'form-control')) !!}

        </div>
        <div class="col-md-6">

            <strong>statut:</strong>

            <select name="active" id="active" class="form-control">
                <option value="1">active</option>
                <option value="0">désactive</option>
            </select>
        </div>
    </div>


    <div class="row">

        <div class="col-md-12">

            <strong>Role:</strong>

            {!! Form::select('roles[]', $roles,[], array('class' => 'form-control')) !!}

        </div>
  

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
