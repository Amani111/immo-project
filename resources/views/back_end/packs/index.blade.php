@extends('back_end.layouts.app')



@section('content')

<div >

    <div class="row" >

        <div class="col-md-9" >

            <h2> Gestion des packs</h2>

        </div>

        <div class="col-md-3">

            <a class="btn btn-success"  href="{{ route('packs.create') }}"> <i class="fa-solid fa-plus"></i> Créer</a>

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

   <th>titre</th>

   <th>image</th>

   <th>description</th>

   <th width="280px">Action</th>

 </tr>

 @foreach ($data as $key => $pack)

  <tr>

    <td>{{ ++$i }}</td>

    <td>{{ $pack->title }}</td>
    <td><img src="/public/image/{{$pack->image}}" alt="" srcset="" width="100px" height="100px"></td>
    <td>{{ $pack->description }}</td>
    <td>

       <a class="btn btn-sm btn-info" href="{{ route('packs.show',$pack->id) }}"  ><i class="fa-regular fa-eye"></i></a>

       <a class="btn btn-sm btn-warning"  href="{{ route('packs.edit',$pack->id) }}"><i class="fa-regular fa-pen-to-square"></i></a>

        {!! Form::open(['method' => 'DELETE','route' => ['packs.destroy', $pack->id],'style'=>'display:inline']) !!}

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
