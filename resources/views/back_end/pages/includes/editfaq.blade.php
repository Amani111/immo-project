@extends('back_end.layouts.app')



@section('content')

<div>

    <div>

        <div>

            <h2>Editer une FAQ</h2>

        </div>

    </div>

</div>



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



{!! Form::model($faq, ['method' => 'PATCH','route' => ['faq.update', $faq->id],'files' => true]) !!}


<div class="container" >

    <div class="row" >

        <div class="col-md-9" >

            <h5>Question:</h5>

            {!! Form::textarea('question', null, array('class' => 'form-control')) !!}

        </div>
     

    </div>

    <div class="row" >

        <div class="col-md-9" >

            <h5>Reponse:</h5>

            {!! Form::textarea('reponse', null, array('class' => 'form-control')) !!}

        </div>
     

    </div>

  
<hr>

    <div class="row" >
        <div class="col-md-6">
            <button class="btn btn-primary" type="submit" >Modifier</button>
        </div>
    </div>

</div>

{!! Form::close() !!}





@endsection
