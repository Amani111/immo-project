@extends('back_end.layouts.app')



@section('content')

<div >

    <div class="row" >

        <div class="col-md-9" >

            <h2> Gestion des Magasins</h2>

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
    <thead>
      <tr>
        <th widh="5%">#</th>
        <th  widh="10%">Nom</th>
        <th>Image</th>
        <th widh="55%">Address</th>
        <th widh="10%">Telephone</th>
        <th widh="10%">Ville</th>
        <th width="10">Action</th>
      </tr>
    </thead>
    <tbody>

      @foreach ($data as $key => $showroom)
   
      <tr>
    
        <td>{{ ++$i }}</td>
        <td>{{ $showroom->name }}</td>
        <td><img src="{{asset('/public/showroom/image/'.$showroom->image)}}" alt="" srcset="" width="100px" height="100px"></td>
        <td style="word-wrap: break-word;min-width: 160px;max-width: 160px;white-space:normal;">{{ $showroom->address }}</td>
        <td>{{ $showroom->telephone }}</td>
        <td>{{ $showroom->govlist->name }}</td>
        <td>
    
           {{-- <a class="btn btn-sm btn-info" href="{{ route('showrooms.show',$showroom->id) }}" ><i class="fa-regular fa-eye"></i></a> --}}
    
           <a class="btn btn-sm btn-warning"  href="{{ route('showrooms.edit',$showroom->id) }}"><i class="fa-regular fa-pen-to-square"></i></a>
    
            {!! Form::open(['method' => 'DELETE','route' => ['showrooms.destroy', $showroom->id],'style'=>'display:inline']) !!}
    
            {{ Form::button('<i class="fa-solid fa-trash"></i>', ['class' => 'btn btn-danger btn-sm', 'type' => 'submit']) }}
    
            {!! Form::close() !!}
    
        </td>
    
      </tr>
    
     @endforeach
    </tbody>

   </table>
  
   
   <div class="text-right">
     {!! $data->render() !!}
   </div>
   
</div>






@endsection
