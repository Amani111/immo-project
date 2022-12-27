@extends('back_end.layouts.app')



@section('content')

<div >

    <div class="row" >

        <div class="col-md-9" >

            <h2> Gestion des actualité</h2>

        </div>

        <div class="col-md-3">

            <a class="btn btn-success"  href="{{ route('Actualite.create') }}"> <i class="fa-solid fa-plus"></i> Créer</a>

        </div>

    </div>

</div>
@if(Session::has('message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{ Session::get('message') }}
</div>
@endif

<div class="row">
  <table class="table table-responsive" >

    <tr>
   
      <th>No</th>
   
      <th>titre</th>
      <th>image</th>
      <th>description</th>
   
      <th width="280px">Action</th>
   
    </tr>
   
    @foreach ($data as $key => $act)
   
     <tr>
   
       <td>{{ ++$i }}</td>
       <td>{{ $act->titre }}</td>
       <td><img src="{{asset('public/actualite/'.$act->image)}}" alt="" srcset="" width="100px" height="100px"></td>
       <td style="word-wrap: break-word;min-width: 160px;max-width: 160px;white-space:normal;">{{ $act->description }}</td>
       <td>

          <a class="btn btn-sm btn-warning"  href="{{ route('Actualite.edit',$act->id) }}"><i class="fa-regular fa-pen-to-square"></i></a>
   
           {!! Form::open(['method' => 'DELETE','route' => ['Actualite.destroy', $act->id],'style'=>'display:inline']) !!}
   
           {{ Form::button('<i class="fa-solid fa-trash"></i>', ['class' => 'btn btn-danger btn-sm', 'type' => 'submit']) }}
   
           {!! Form::close() !!}
   
       </td>
   
     </tr>
   
    @endforeach
   
   </table>
   

</div>



<div class="text-right">
  {!! $data->render() !!}
</div>





@endsection

