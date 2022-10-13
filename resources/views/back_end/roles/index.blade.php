@extends('back_end.layouts.app')



@section('content')

<div >

    <div >

        <div >

            <h2>Gestion Des  Roles </h2>

        </div>

        <div >

        @can('role-create')

            <a  href="{{ route('roles.create') }}"> Créer un Role</a>

            @endcan

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

     <th width="280px">Action</th>

  </tr>

    @foreach ($roles as $key => $role)

    <tr>

        <td>{{ ++$i }}</td>

        <td>{{ $role->name }}</td>

        <td>

            <a  href="{{ route('roles.show',$role->id) }}">Show</a>

            @can('role-edit')

                <a  href="{{ route('roles.edit',$role->id) }}">Edit</a>

            @endcan

            @can('role-delete')

                {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}

                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

                {!! Form::close() !!}

            @endcan

        </td>

    </tr>

    @endforeach

</table>



{!! $roles->render() !!}



<p ><small>Tutorial by ItSolutionStuff.com</small></p>

@endsection
