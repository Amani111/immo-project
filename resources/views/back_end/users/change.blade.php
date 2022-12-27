@extends('back_end.layouts.app')



@section('content')

<div >
    <div >
        <div >
            <h2>Editer password utilisateur</h2>
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

{!! Form::model($user, ['method' => 'PATCH','route' => ['users.savechange', $user->id]]) !!}
<div class="container" >
<div  class="row">

    <div class="col-md-6" >
        <strong>Password *:</strong>
        {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
    </div>
    <div class="col-md-6">
        <strong>Confirm Password *:</strong>
        {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
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