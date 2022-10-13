@extends('back_end.layouts.app')



@section('content')

<div>

    <div>

        <div>

            <h2>Editer Utilisateur</h2>

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



{!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}

<div class="container" >

    <div class="row" >

        <div class="col-md-6" >

            <strong>Name:</strong>

            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}

        </div>
        <div class="col-md-6" >

            <strong>Email:</strong>

            {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}

        </div>

    </div>

    <div  class="row">

        <div class="col-md-6" >

            <strong>Password:</strong>

            {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}

        </div>
        <div class="col-md-6">

            <strong>Confirm Password:</strong>

            {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}

        </div>

    </div>

  
    <div class="row">

        <div class="col-md-12" >

            <strong>Role:</strong>

            {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!}

        </div>
    </div>

    <div class="row" >
        <div class="col-md-6">
            <button class="btn btn-primary" type="submit" >Submit</button>
        </div>
    </div>

</div>

{!! Form::close() !!}





@endsection
