@extends('layouts.app')



@section('content')

<div >

    <div >

        <div >

            <h2>Create New Role</h2>

        </div>

        <div >

            <a  href="{{ route('roles.index') }}"> Back</a>

        </div>

    </div>

</div>



@if (count($errors) > 0)

    <div >

        <strong>Whoops!</strong> There were some problems with your input.<br><br>

        <ul>

        @foreach ($errors->all() as $error)

            <li>{{ $error }}</li>

        @endforeach

        </ul>

    </div>

@endif



{!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}

<div >

    <div >

        <div >

            <strong>Name:</strong>

            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}

        </div>

    </div>

    <div >

        <div >

            <strong>Permission:</strong>

            <br/>

            @foreach($permission as $value)

                <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}

                {{ $value->name }}</label>

            <br/>

            @endforeach

        </div>

    </div>

    <div >

        <button type="submit" >Submit</button>

    </div>

</div>

{!! Form::close() !!}



<p ><small>Tutorial by ItSolutionStuff.com</small></p>

@endsection
