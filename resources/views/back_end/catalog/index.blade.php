@extends('back_end.layouts.app')



@section('content')

<div >

    <div class="row" >

        <div class="col-md-9" >

            <h2> Gestion des catalogues</h2>

        </div>

        <div class="col-md-3">

            <a class="btn btn-success"  href="{{ route('catelogues.create') }}"> <i class="fa-solid fa-plus"></i> Créer</a>
           
        </div>

    </div>

</div>

@if(Session::has('message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{ Session::get('message') }}
</div>
@endif


<div class="container">
  <div class="row">
    @foreach($catalogues as $catalog)
    <div class="col-md-4">
      <div class="card shadow-sm mb-4">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <a href="{{route('catelogues.edit',$catalog->url)}}">
          <img width="366" height="300"  style="object-fit: contain" src="{{ asset('../backend/assets/img/mise.jpg') }}">
        </a>
        </div>
        <div class="card-body">
          {{-- <a class="btn btn-primary" href="{{route('catelogues.edit',$catalog->url)}}"></a> --}}
          {!! Form::open(['method' => 'DELETE','route' => ['catelogues.destroy', $catalog->id],'style'=>'display:inline']) !!}
   
          {{ Form::button('<i class="fa-solid fa-trash"></i>', ['class' => 'btn btn-danger btn-sm', 'type' => 'submit']) }}
  
          {!! Form::close() !!}
        </div>
      </div>
  </div>
  
    @endforeach
  </div>

</div>






@endsection
