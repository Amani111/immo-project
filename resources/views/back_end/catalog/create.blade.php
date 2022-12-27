@extends('back_end.layouts.app')



@section('content')

<div >
    <div class="row" >
        <div class="col-md-9" >

            <h2>Créer un catalogue des images</h2>

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
<form action="{{route('catelogues.store')}}" class="form-horizontal" method="POST" role="form" enctype="multipart/form-data">

    {{ csrf_field() }}
    <div class="container">
        <div class="row">
                <strong>choisie showroom * :</strong>
                <select name="showroom_id" id="showroom_id" class="form-control">
                    <option value="0" disabled selected>--choisie showroom--</option>
                    @foreach($showrooms as $array =>$index)
                        <option value="{{$index->id}}">{{$index->name}}</option>
                    @endforeach
                </select>
        </div>
        <div class="row">
            <div class="input-group control-group increment" style="margin-top: 15px;" >
                <input type="file" name="filename[]" class="form-control">
                <div class="input-group-btn"> 
                  <button class="btn btn-success btn-sm" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                </div>
              </div>
        </div>
        <div class="clone hide">
            <div class="control-group input-group" style="margin-top:10px">
              <input type="file" name="filename[]" class="form-control">
              <div class="input-group-btn"> 
                <button class="btn btn-sm btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
              </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <button class="btn btn-primary btnsubmit" type="submit" >Créer</button>
            </div>
        </div>
        
    </div>
    
    </form>  

@endsection
@push('after-scripts')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script type="text/javascript">

    $(document).ready(function() {
      $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });
      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").remove();
      });

    });

</script>
 @endpush