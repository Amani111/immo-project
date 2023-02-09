@extends('back_end.layouts.app')

@section('content')
<div class="container">
    <div class="row" >
        <div class="col-md-9" >
            <h2> liste des packs </h2>
        </div >
        <div class="col-md-3">
        </div>
    </div>
    
@if(Session::has('message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{ Session::get('message') }}
</div>
@endif
    <div class="row">
        <table class="table table-responsive">
            <tr>
              <th>#</th>
              <th>Pack</th>
              <th>prix</th>
              <th>Nombre des images disponible</th>
              <th>Action</th>
            </tr>
            @foreach ($data as $key => $pack)
             <tr id="pack_id_{{$pack->id}}">
               <td>{{ ++$i }}</td>
               <td>{{ $pack->title }}</td>
               <td>{{ $pack->prix }}</td>
               <td>{{ $pack->nb_picture }}</td>
               <td> <a class="btn btn-sm btn-primary" href="{{route('userinscri.userdemande',$pack->id)}}">Demande</a> </td>
             </tr>
        
            @endforeach
           </table>
    </div>
</div>
<div class="border-top py-3 px-3 d-flex align-items-center">
    <button class="btn btn-sm btn-white d-sm-block d-none mb-0">Previous</button>
    {!! $data->render() !!}
    <button class="btn btn-sm btn-white d-sm-block d-none mb-0 ms-auto">Next</button>
  </div>

@endsection