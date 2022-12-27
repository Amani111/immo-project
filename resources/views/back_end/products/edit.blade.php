@extends('back_end.layouts.app')



@section('content')

<div >

    <div >

        <div >

            <h2>Editer un produit</h2>

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

 {!! Form::model($product, ['method' => 'PATCH','route' => ['products.update', $product->id],'files' => true]) !!}
{{ csrf_field() }}
<div class="container">

    <div class="row">

        <div class="col-md-6" >
            <strong>titre *:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Titre','class' => 'form-control')) !!}
        </div>
        <div class="col-md-6" >
            <strong>prix (DT) *:</strong>
            {!! Form::number('prix', null, array('placeholder' => 'nombre image','class' => 'form-control')) !!}
        </div>
      
    </div>
    <div class="row">
      
        <div class="col-md-8" >

            <h5>Image:</h5>

            <img src="{{asset('/public/products/image/'.$product->image)}}" alt="" srcset="" width="700px" height="300px">

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
            <strong>  Catalogue :</strong>
            {!! Form::file('files[]', array('placeholder' => 'image','class' => 'form-control','accept'=>'image/x-png,image/gif,image/jpeg','multiple')) !!}
        </div>
    </div>
    @if($product->video != null)
    <div class="row">
      
        <div class="col-md-8" >

            <strong>Video:</strong>
            <iframe width="900" height="300" allow="autoplay" src="{{asset('/public/products/video/'.$product->video)}}"></iframe>

        </div>
    </div>
    @endif
    <div class="row">
        <div class="col-md-12" >
            <strong>Editer Video :</strong>
            {!! Form::file('video', array('placeholder' => 'video','class' => 'form-control','accept'=>'video/mp4,video/x-m4v,video/*'),) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <strong>choisie categorie * :</strong>
            <select name="category_id" id="category_id" class="form-control">
                @foreach($categories as $array)
                    @if($product->category_id == $array->id)
                     <option value="{{$array->id}}" selected>{{$array->name}}</option>
                    @else
                    <option value="{{$array->id}}" selected>{{$array->name}}</option>
                    @endif
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
                @foreach($showrooms as $array)
                @if($product->showroom_id == $array->id)
                <option value="{{$array->id}}" selected>{{$array->name}}</option>
              @else
               <option value="{{$array->id}}">{{$array->name}}</option>
               @endif
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
            <button class="btn btn-primary" type="submit" >modifier</button>
        </div>
    </div>
    
</div>

{!! Form::close() !!}





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
