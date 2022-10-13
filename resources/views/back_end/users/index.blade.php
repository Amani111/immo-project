@extends('back_end.layouts.app')



@section('content')

<div >

    <div class="row" >

        <div class="col-md-9" >

            <h2> Gestion Utilisateurs</h2>

        </div>

        <div class="col-md-3">

            <a class="btn btn-success"  href="{{ route('users.create') }}"> <i class="fa-solid fa-plus"></i> Créer</a>

        </div>

    </div>

</div>




@if ($message = Session::get('success'))

<div >

  <span class="alert alert-success">{{ $message }}</span>

</div>

@endif



<table class="table" >

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

       <a class="btn btn-sm btn-info"  data-toggle="modal" data-target="#showuser" ><i class="fa-regular fa-eye"></i></a>

       <a class="btn btn-sm btn-warning"  href="{{ route('users.edit',$user->id) }}"><i class="fa-regular fa-pen-to-square"></i></a>

        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}

        {{ Form::button('<i class="fa-solid fa-trash"></i>', ['class' => 'btn btn-danger btn-sm', 'type' => 'submit']) }}

        {!! Form::close() !!}

    </td>

  </tr>

 @endforeach

</table>


<div class="text-right">
  {!! $data->render() !!}
</div>






@endsection
