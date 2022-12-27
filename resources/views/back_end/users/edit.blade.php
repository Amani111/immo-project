@extends('back_end.layouts.app')



@section('content')

<div>

    <div>

        <div>

            <h2>Editer Utilisateur</h2>

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



{!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}

<div class="container" >

    <div class="row" >

        <div class="col-md-6" >

            <strong>Name *:</strong>

            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}

        </div>
        <div class="col-md-6" >

            <strong>Email *:</strong>

            {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}

        </div>

    </div>


  
    <div class="row">

        <div class="col-md-6" >
            <strong>Role *:</strong>
            {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control')) !!}
        </div>
        <div class="col-md-6">
            <strong>modifier statut:</strong>
            {!! Form::select('active', ['1'=>'active','0'=>'désactive'],$user->active, array('class' => 'form-control')) !!}
        </div>
    </div>

    <div class="row">
        <div class="col-md-6" >
            <strong>lien facebook:</strong>
            {!! Form::text('facebook', null, array('placeholder' => 'lien facebook ..','class' => 'form-control')) !!}
        </div>
        <div class="col-md-6" >
            <strong>lien site web:</strong>
            {!! Form::text('siteweb', null, array('placeholder' => 'lien site web ..','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <strong>Telephone *:</strong>

            {!! Form::text('phone', null, array('placeholder' => 'telephone','class' => 'form-control')) !!}

        </div>
        <div class="col-md-6" >
            <strong>Adresse *:</strong>
            {!! Form::textarea('Adresse', null,array('placeholder' => 'votre adresse ...','class' => 'form-control')) !!}
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
