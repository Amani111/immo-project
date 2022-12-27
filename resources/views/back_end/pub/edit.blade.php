@extends('back_end.layouts.app')



@section('content')

<div >

    <div >

        <div >

            <h2>Editer une publicité</h2>

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
{!! Form::model($pub, ['method' => 'PATCH','route' => ['pub.update', $pub->id],'files' => true]) !!}
{{ csrf_field() }}
    <div class="container">

        <div class="row">
    
            <div class="col-md-12" >
                <strong>titre *:</strong>
                {!! Form::text('titre', null, array('placeholder' => 'Titre','class' => 'form-control')) !!}
            </div>
        
        </div>
        <div class="row">
      
            <div class="col-md-8" >
    
                <h5>Image:</h5>
    
                <img src="{{asset('/public/popup/image/'.$pub->image)}}" alt="" srcset="" width="700px" height="300px">
    
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <strong>Editer Image *:</strong>
                {!! Form::file('image', array('placeholder' => 'image','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            <strong>Choisie une pack</strong>
            <select id="pack_id" class="form-control" name="pack_id" required>
                @foreach ($packs as $pack)
                    <option value="{{ $pack->id }}">{{ $pack->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="row">
            <div class="col-md-12">
            <strong>Status</strong>
            <select id="active" class="form-control" name="active" required>
                    <option value="1">active</option>
                    <option value="0">désactivé</option>           
            </select>
        </div>
        <div class="row">
            <div class="col-md-12" >
                <strong>description *:</strong>
                {!! Form::textarea('description', null, array('placeholder' => 'description','class' => 'form-control')) !!}
            </div>
          
        </div>
        </div>
        <hr>
        <div class="row">
    
            <div class="col-md-6">
                <button class="btn btn-primary" type="submit" >Créer</button>
            </div>
        </div>
        
    </div>
    
    {!! Form::close() !!}

@endsection



