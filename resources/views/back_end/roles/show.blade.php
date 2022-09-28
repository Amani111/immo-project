@extends('layouts.app')



@section('content')

<div >

    <div >

        <div >

            <h2> Show Role</h2>

        </div>

        <div >

            <a  href="{{ route('roles.index') }}"> Back</a>

        </div>

    </div>

</div>



<div >

    <div >

        <div >

            <strong>Name:</strong>

            {{ $role->name }}

        </div>

    </div>

    <div >

        <div >

            <strong>Permissions:</strong>

            @if(!empty($rolePermissions))

                @foreach($rolePermissions as $v)

                    <label >{{ $v->name }},</label>

                @endforeach

            @endif

        </div>

    </div>

</div>

@endsection