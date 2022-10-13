@extends('back_end.layouts.app')


@section('content')

<div class="row" >

    <div >

        <div >

            <h2> Show User</h2>

        </div>

        <div >

            <a  href="{{ route('users.index') }}"> Back</a>

        </div>

    </div>

</div>



<div >

    <div >

        <div >

            <strong>Name:</strong>

            {{ $user->name }}

        </div>

    </div>

    <div >

        <div >

            <strong>Email:</strong>

            {{ $user->email }}

        </div>

    </div>

    <div >

        <div >

            <strong>Roles:</strong>

            @if(!empty($user->getRoleNames()))

                @foreach($user->getRoleNames() as $v)

                    <label >{{ $v }}</label>

                @endforeach

            @endif

        </div>

    </div>

</div>

@stop
