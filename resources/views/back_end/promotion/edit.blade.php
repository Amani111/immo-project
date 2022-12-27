@extends('back_end.layouts.app')



@section('content')

<div >

    <div >

        <div >

            <h2>Editer une promotion</h2>

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

 {!! Form::model($promotion, ['method' => 'PATCH','route' => ['promotions.update', $promotion->id],'files' => true]) !!}
{{ csrf_field() }}
<div class="container">

    <div class="row">
        <div class="col-md-12" >
            <strong>Pourcentage *:</strong>
            {!! Form::number('pourcentage', null, array('placeholder' => 'pourcentage %','class' => 'form-control')) !!}
        </div>      
    </div>
    <div class="row">
      
        <div class="col-md-6">
            <strong>date debut *:</strong>
            {!! Form::date('date_debut', null ,array('placeholder' => 'date debut..','class' => 'form-control')) !!}
        </div>
        <div class="col-md-6">
            <strong>date fin *:</strong>
            {!! Form::date('date_fin', null ,array('placeholder' => 'date fin..','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <strong>choisie un produit * :</strong>
            <select name="product_id" id="product_id" class="form-control">
              
                @foreach($products as $array)
                @if($promotion->product_id == $array->id)
                    <option value="{{$array->id}}" selected>{{$array->name}}</option>
                @else
                <option value="{{$array->id}}" selected>{{$array->name}}</option>
                @endif
                @endforeach
            </select>
        </div>
    </div>


    <hr>
    <div class="row">

        <div class="col-md-6">
            <button class="btn btn-primary" type="submit" >modifier</button>
        </div>
    </div>
    
</div>

{!! Form::close() !!}





@endsection
