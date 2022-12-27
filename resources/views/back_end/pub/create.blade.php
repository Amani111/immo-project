@extends('back_end.layouts.app')



@section('content')

<div >

    <div >

        <div >

            <h2>Créer une publicité</h2>

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

<form action="{{route('pub.store')}}" class="form-horizontal" method="POST" role="form" enctype="multipart/form-data">

    {{ csrf_field() }}
    <div class="container">

        <div class="row">
    
            <div class="col-md-12" >
                <strong>titre *:</strong>
                {!! Form::text('titre', null, array('placeholder' => 'Titre','class' => 'form-control')) !!}
            </div>
        
        </div>
        <div class="row">
            <div class="col-md-12">
                <strong>Image *:</strong>
                {!! Form::file('image', array('placeholder' => 'image','class' => 'form-control','accept'=>'image/x-png,image/gif,image/jpeg')) !!}
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
    
    </form>

@endsection