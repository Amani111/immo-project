@extends('back_end.layouts.app')
@push('before-styles')
<style>
#switch:checked + .toggle-label {
  background: var(--primary-color);
  transition: background ease 0.3s;
}
#switch:checked + .toggle-label::after {
  transform: translate(-10%, -50%);
  transition: ease 0.3s;
}
</style>
@endpush

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
        <div class="col-md-12">
                <strong>choisie showroom * :</strong>
                <select name="showroom_id" id="showroom_id" class="form-control">
                    <option value="0" disabled selected>--choisie showroom--</option>
                    @foreach($showrooms as $array =>$index)
                        <option value="{{$index->id}}">{{$index->name}}</option>
                    @endforeach
                </select>
        </div>
        <div class="col-md-12">
            <div class="toggle">
                <input type="checkbox" name="check" id="someID" class="toggle-input" />
                <label for="someIDlabel" id="someIDlabel"class="toggle-label">par pdf</label>
            </div>
        </div>
        <div class="pdf">
            {!! Form::file('pdf', array('placeholder' => 'pdf','class' => 'form-control','accept'=>"application/pdf,application/vnd.ms-excel")) !!}
        </div>
        <div class="images">
            <div class="col-md-12 hide">
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
        const someCheckbox = document.getElementById('someID');
        $(".pdf").css("display", "none");
        $(".images").css("display", "none");
        someCheckbox.addEventListener('change', e => {
        if(e.target.checked === true) {
            $(".pdf").css("display", "block");
            $(".images").css("display", "none");
            $("#someIDlabel").empty();
            $("#someIDlabel").append("pdf");
        }
        if(e.target.checked === false) {
            $("#someIDlabel").empty();
            $("#someIDlabel").append("images");
            $(".images").css("display", "block");
            $(".pdf").css("display", "none");
            $(".btn-success").click(function(){ 
                var html = $(".clone").html();
                $(".increment").after(html);
            });
            $("body").on("click",".btn-danger",function(){ 
                $(this).parents(".control-group").remove();
            });
        }
        });
      
    });



</script>
 @endpush