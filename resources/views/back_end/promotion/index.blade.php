@extends('back_end.layouts.app')



@section('content')

<div >

    <div class="row" >

        <div class="col-md-9" >

            <h2> Gestion des Promotions</h2>

        </div>

        <div class="col-md-3">

            <a class="btn btn-success" data-bs-toggle="modal" data-bs-target="#PromotionModal"> <i class="fa-solid fa-plus"></i> Créer</a>

        </div>

    </div>

</div>




@if(Session::has('message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{ Session::get('message') }}
</div>
@endif


@if(Session::has('errors'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
            <li>
                {{ $error }}  
            </li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container">
  <table class="table" >

    <tr>
      <th>#</th>
      <th>Pourcentage</th>
      <th>Date debut</th>
      <th>Date fin</th>
      <th>Nouvelle prix</th>
      <th>Produit</th>
      <th width="280px">Action</th>
    </tr>
   
    @foreach ($data as $key => $pour)
   
     <tr>
   
       <td>{{ ++$i }}</td>
       <td>{{ $pour->pourcentage }} %</td>
       <td>{{ $pour->date_debut }}</td>
       <td>{{ $pour->date_fin}}</td>
       <td>{{ $pour->new_prix}} DT</td>
      <td>{{ $pour->product->name}}</td>
       <td>
   
          {{-- <a class="btn btn-sm btn-info" href="{{ route('showrooms.show',$showroom->id) }}" ><i class="fa-regular fa-eye"></i></a> --}}
   
          <a class="btn btn-sm btn-warning"  href="{{ route('promotions.edit',$pour->id) }}"><i class="fa-regular fa-pen-to-square"></i></a>
   
           {!! Form::open(['method' => 'DELETE','route' => ['promotions.destroy', $pour->id],'style'=>'display:inline']) !!}
   
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




@include('back_end.promotion.includes.modalcreate')

@endsection
