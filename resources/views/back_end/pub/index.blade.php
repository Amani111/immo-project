@extends('back_end.layouts.app')



@section('content')


<div class="row" >

    <div class="col-md-9" >

        <h2> Gestion des publicités</h2>

    </div>

    <div class="col-md-3">

        <a class="btn btn-success" href="{{route('pub.create')}}"> <i class="fa-solid fa-plus"></i> Créer</a>

    </div>

</div>

</div>

@if(Session::has('message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{ Session::get('message') }}
</div>
@endif


<div class="container">
  <table class="table" >

    <tr>
      <th>#</th>
      <th>Titre</th>
      <th>Image</th>
      <th>Description</th>
      <th>Status</th>
      <th width="280px">Action</th>
    </tr>
   
    @foreach ($pubs as $key => $pub)
   
     <tr>
   
       <td>{{ ++$i }}</td>
       <td>{{ $pub->titre }}</td>
       <td><img src="{{asset('/public/popup/image/'.$pub->image)}}" alt="" srcset="" width="100px" height="100px"></td>
       <td>{{ $pub->description }}</td>
      
       <td>  @if($pub->active == 1)
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
   
   
          <a class="btn btn-sm btn-warning"  href="{{ route('pub.edit',$pub->id) }}"><i class="fa-regular fa-pen-to-square"></i></a>
   
           {!! Form::open(['method' => 'DELETE','route' => ['pub.destroy', $pub->id],'style'=>'display:inline']) !!}
   
           {{ Form::button('<i class="fa-solid fa-trash"></i>', ['class' => 'btn btn-danger btn-sm', 'type' => 'submit']) }}
   
           {!! Form::close() !!}
   
       </td>
   
     </tr>
   
    @endforeach
   
   </table>
   
   
   <div class="text-right">
     {!! $pubs->render() !!}
   </div>
   
</div>
@endsection

