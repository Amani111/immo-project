@extends('back_end.layouts.app')



@section('content')

<div >

    <div class="row" >

        <div class="col-md-9" >

            <h2>Créer un produit</h2>

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


<form action="{{route('products.store')}}" class="form-horizontal" method="POST" role="form" enctype="multipart/form-data">

{{ csrf_field() }}
<div class="container">

    <div class="row">

        <div class="col-md-6" >
            <strong>Titre *:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Titre','class' => 'form-control')) !!}
        </div>
        <div class="col-md-6" >
            <strong>Prix (DT) :</strong>
            {!! Form::number('prix', null, array('placeholder' => 'nombre image','class' => 'form-control')) !!}
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
            <strong>  Catalogue :</strong>
            {!! Form::file('files[]', array('placeholder' => 'image','class' => 'form-control','accept'=>'image/x-png,image/gif,image/jpeg','multiple')) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-md-12" >
            <strong>Video :</strong>
            {!! Form::file('video', array('placeholder' => 'video','class' => 'form-control','accept'=>'video/mp4,video/x-m4v,video/*'),) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <strong>Choisie categorie * :</strong>
            <select name="category_id" id="category_id" class="form-control">
                <option value="0" disabled selected>--choisie categorie--</option>
                @foreach($categories as $array)
                    <option value="{{$array->id}}">{{$array->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        <strong>Sous Category</strong>
        <select id="subcategoryList" class="form-control" name="subcategory_id"  disabled >
            @foreach ($subcategories as $subcategory)
                <option value="{{ $subcategory->id }}" class='parent-{{ $subcategory->category_id }} subcategory'>{{ $subcategory->name }}</option>
            @endforeach
        </select>
    </div>
    </div>
  
    <div class="row">
        <div class="col-md-12">
            <strong>choisie showroom * :</strong>
            <select name="showroom_id" id="showroom_id" class="form-control">
                <option value="0" disabled selected>--choisie showroom--</option>
                @foreach($showrooms as $array)
                    <option value="{{$array->id}}">{{$array->name}}</option>
                @endforeach
            </select>
        </div>
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
@push('after-scripts')

    <script type="text/javascript">
$('#category_id').on('change', function () {
    $("#subcategoryList").attr('disabled', false); //enable subcategory select
    $("#subcategoryList").val("");
    $(".subcategory").attr('disabled', true); //disable all category option
    $(".subcategory").hide(); //hide all subcategory option
    $(".parent-" + $(this).val()).attr('disabled', false); //enable subcategory of selected category/parent
    $(".parent-" + $(this).val()).show(); 
});
</script>

@endpush