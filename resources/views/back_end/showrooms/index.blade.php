@extends('back_end.layouts.app')



@section('content')

<div >

    <div class="row" >

        <div class="col-md-9" >

            <h2> Gestion des showrooms</h2>

        </div>

        <div class="col-md-3">

            <a class="btn btn-success"  href="{{ route('showrooms.create') }}"> <i class="fa-solid fa-plus"></i> Créer</a>

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
      <th>Nom</th>
      <th>address</th>
      <th>telephone</th>
      <th>ville</th>
      <th width="280px">Action</th>
    </tr>
   
    @foreach ($data as $key => $showroom)
   
     <tr>
   
       <td>{{ ++$i }}</td>
       <td>{{ $showroom->name }}</td>
       <td>{{ $showroom->address }}</td>
       <td>{{ $showroom->telephone }}</td>
       <td>{{ $showroom->govliste_id }}</td>
       <td>
   
          {{-- <a class="btn btn-sm btn-info" href="{{ route('showrooms.show',$showroom->id) }}" ><i class="fa-regular fa-eye"></i></a> --}}
   
          <a class="btn btn-sm btn-warning"  href="{{ route('showrooms.edit',$showroom->id) }}"><i class="fa-regular fa-pen-to-square"></i></a>
   
           {!! Form::open(['method' => 'DELETE','route' => ['showrooms.destroy', $showroom->id],'style'=>'display:inline']) !!}
   
           {{ Form::button('<i class="fa-solid fa-trash"></i>', ['class' => 'btn btn-danger btn-sm', 'type' => 'submit']) }}
   
           {!! Form::close() !!}
   
       </td>
   
     </tr>
   
    @endforeach
   
   </table>
   
   
   <div class="text-right">
     {!! $data->render() !!}
   </div>
   
</div>






@endsection
