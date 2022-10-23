@extends('back_end.layouts.app')



@section('content')

<div >

    <div class="row" >

        <div class="col-md-9" >

            <h2> Gestion des categories</h2>

        </div>

        <div class="col-md-3">

            <a class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal"> <i class="fa-solid fa-plus"></i> Créer</a>

        </div>

    </div>

</div>



  @if(Session::has('message'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ Session::get('message') }}
  </div>
  @endif
  @if(Session::has('error'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ Session::get('error') }}      
  
  </div>
  @endif



<table class="table" >

 <tr>
   <th>#</th>
   <th>nom de categorie</th>
   <th>slug</th>
   <th width="280px">Action</th>
 </tr>

 @foreach ($data as $key => $pack)

  <tr>

    <td>{{ ++$i }}</td>
    <td>{{ $pack->name }}</td>
    <td>{{$pack->slug}}</td>
  
    <td>

       <a class="btn btn-sm btn-warning"  href="{{ route('categories.edit',$pack->id) }}"><i class="fa-regular fa-pen-to-square"></i></a>

        {!! Form::open(['method' => 'DELETE','route' => ['categories.destroy', $pack->id],'style'=>'display:inline']) !!}

        {{ Form::button('<i class="fa-solid fa-trash"></i>', ['class' => 'btn btn-danger btn-sm', 'type' => 'submit']) }}

        {!! Form::close() !!}

    </td>

  </tr>

 @endforeach

</table>


<div class="text-right">
  {!! $data->render() !!}
</div>



@include('back_end.categories.includes.modalcreate')


@endsection


