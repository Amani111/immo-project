@extends('layouts.app')



@section('content')

<div >

    <div >

        <div >

            <h2>Users Management</h2>

        </div>

        <div >

            <a  href="{{ route('users.create') }}"> Create New User</a>

        </div>

    </div>

</div>



@if ($message = Session::get('success'))

<div >

  <p>{{ $message }}</p>

</div>

@endif



<table >

 <tr>

   <th>No</th>

   <th>Name</th>

   <th>Email</th>

   <th>Roles</th>

   <th width="280px">Action</th>

 </tr>

 @foreach ($data as $key => $user)

  <tr>

    <td>{{ ++$i }}</td>

    <td>{{ $user->name }}</td>

    <td>{{ $user->email }}</td>

    <td>

      @if(!empty($user->getRoleNames()))

        @foreach($user->getRoleNames() as $v)

           <label >{{ $v }}</label>

        @endforeach

      @endif

    </td>

    <td>

       <a  href="{{ route('users.show',$user->id) }}">Show</a>

       <a  href="{{ route('users.edit',$user->id) }}">Edit</a>

        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}

            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

        {!! Form::close() !!}

    </td>

  </tr>

 @endforeach

</table>



{!! $data->render() !!}



<p ><small>Tutorial by ItSolutionStuff.com</small></p>

@endsection
