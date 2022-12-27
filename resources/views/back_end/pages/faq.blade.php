@extends('back_end.layouts.app')



@section('content')
<div>

    <div>
        <div>
            <h2>Editer la page FAQ</h2>
        </div>
        <div class="col-md-3">
            <a class="btn btn-success" data-bs-toggle="modal" data-bs-target="#faqModal"> <i class="fa-solid fa-plus"></i> Créer</a>
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
        <th>Question</th>
        <th>Réponse</th>
        <th width="280px">Action</th>
      </tr>
      @foreach ($data as $key => $faq)

  <tr>

    <td>{{++$i}}</td>
    <td>{{$faq->question}}</td>
    <td style="word-wrap: break-word;min-width: 160px;max-width: 160px;white-space:normal;">{{$faq->reponse}}</td>
  
    <td>

       <a class="btn btn-sm btn-warning"  href="{{ route('faq.edit',$faq->id) }}"><i class="fa-regular fa-pen-to-square"></i></a>

        {!! Form::open(['method' => 'DELETE','route' => ['faq.destroy', $faq->id],'style'=>'display:inline']) !!}

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



  @include('back_end.pages.includes.create')
@endsection