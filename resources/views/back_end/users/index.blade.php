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




@if(Session::has('message'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ Session::get('message') }}
  </div>
@endif



<table class="table align-items-center justify-content-center mb-0" >
  <thead class="bg-gray-100">
    <tr>
      <th class="text-secondary text-xs font-weight-semibold opacity-7">#</th>
      <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Name</th>
      <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Email</th>
      <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Active</th>
      <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Roles</th>
      <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Password</th>
      <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Action</th>
    </tr>
  </thead>

<tbody>
  @foreach ($data as $key => $user)

  <tr>

    <td>{{ ++$i }}</td>

    <td>{{ $user->name }}</td>

    <td>{{ $user->email }}</td>
    <td>  @if($user->active == 1)
      <span class="badge badge-sm border border-success text-success bg-success">
        <svg width="9" height="9" viewBox="0 0 10 9" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor" class="me-1">
          <path d="M1 4.42857L3.28571 6.71429L9 1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
        active
      </span>   
    @else
    <span class="badge badge-sm border border-warning text-warning bg-warning">
      <svg width="12" height="12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="me-1ca">
        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 6a.75.75 0 00-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 000-1.5h-3.75V6z" clip-rule="evenodd"></path>
      </svg>
      non active
    </span> 
    @endif
    </td>
    <td>
      @if(!empty($user->getRoleNames()))
        @foreach($user->getRoleNames() as $v)
           <label >{{ $v }}</label>
        @endforeach
      @endif
    </td>
    <td> <a class="btn btn-sm btn-primary"  href="{{ route('users.change',$user->id) }}"><i class="fa-regular fa-pen-to-square"></i></a></td>
    <td>
       {{-- <a class="btn btn-sm btn-info"  data-toggle="modal" data-target="#showuser" ><i class="fa-regular fa-eye"></i></a> --}}
       <a class="btn btn-sm btn-warning"  href="{{ route('users.edit',$user->id) }}"><i class="fa-regular fa-pen-to-square"></i></a>
        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
        {{ Form::button('<i class="fa-solid fa-trash"></i>', ['class' => 'btn btn-danger btn-sm', 'type' => 'submit']) }}
        {!! Form::close() !!}
    </td>

  </tr>

 @endforeach
</tbody>


</table>

<div class="border-top py-3 px-3 d-flex align-items-center">
  <button class="btn btn-sm btn-white d-sm-block d-none mb-0">Previous</button>
  {!! $data->render() !!}
  <button class="btn btn-sm btn-white d-sm-block d-none mb-0 ms-auto">Next</button>
</div>







@endsection
