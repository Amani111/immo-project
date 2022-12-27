@extends('back_end.layouts.app')



@section('content')

<div >

    <div class="row" >

        <div class="col-md-9" >

            <h2> Gestion des produits</h2>

        </div>

        <div class="col-md-3">

            <a class="btn btn-success"  href="{{ route('products.create') }}"> <i class="fa-solid fa-plus"></i> Créer</a>
            
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
      <th>image</th>
      <th>prix</th>
      <th>categorie</th>
      <th width="280px">Action</th>
    </tr>
   
    @foreach ($data as $key => $product)
   
     <tr>
   
       <td>{{ ++$i }}</td>
       <td>{{ $product->name }}</td>
       <td><img src="{{asset('/public/products/image/'.$product->image)}}" alt="" srcset="" width="100px" height="100px"></td>
       <td>{{ $product->prix }} DT</td>
      
      <td>{{ $product->category->name}}</td>
       <td>
          <a class="btn btn-sm btn-warning"  href="{{ route('products.edit',$product->id) }}"><i class="fa-regular fa-pen-to-square"></i></a>
   
           {!! Form::open(['method' => 'DELETE','route' => ['products.destroy', $product->id],'style'=>'display:inline']) !!}
   
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
