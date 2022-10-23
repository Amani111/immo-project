@extends('back_end.layouts.app')



@section('content')

<div>
    <div class="row">
        <div class="col-md-9">
            <h2>Editer une categorie</h2>
        </div>
        <div class="col-md-3">

            <a class="btn btn-success"   data-bs-toggle="modal" data-bs-target="#AddSouscategotyModal"> <i class="fa-solid fa-plus"></i> Créer une sous category</a>
        </div>
    </div>
</div>

@if(Session::has('message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{ Session::get('message') }}
</div>
@endif
@if (count($errors) > 0)
  <div class="row">
    <ul>
       @foreach ($errors->all() as $error)
         <li><span class="alert alert-danger alert-dismissible fade show">{{ $error }}</span></li>
       @endforeach
    </ul>
  </div>
@endif



{!! Form::model($category, ['method' => 'PATCH','route' => ['categories.update', $category->id]]) !!}


<div class="container" >
    <div class="row" >
        <div class="col-md-9" >
            <h5>nom de categorie:</h5>
            {!! Form::text('name', null, array('placeholder' => 'nom de categorie','class' => 'form-control')) !!}
        </div>
        <div class="col-md-9" >
            <h5>slug  de categorie:</h5>

            {!! Form::text('slug', null, array('placeholder' => 'slug unique du categorie','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="row">
     
        <div class="col-md-9">
            <h5>liste des sous categorie :</h5>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <td>Nom sous categorie</td>
                        <td>Slug sous categorie</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($souscategory as $array)
                        <tr>
                            <td>
                                {{$array->name}}
                            </td>
                            <td>
                                {{$array->slug}}
                            </td>
                            <td>
                                <a class="btn btn-sm btn-warning"  href="{{ route('souscategory.edit',$array->id) }}"><i class="fa-regular fa-pen-to-square"></i></a>
{{-- 
                                <a class="btn btn-sm btn-danger"  href="{{ route('souscategory.destroy',$array->id) }}"><i class="fa-solid fa-trash"></i></i></a> --}}

                         
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


<hr>
    <div class="row" >
        <div class="col-md-6">
            <button class="btn btn-primary" type="submit" >Submit</button>
        </div>
    </div>
</div>

{!! Form::close() !!}


<!-- Modal -->
<div class="modal fade" id="AddSouscategotyModal" tabindex="-1" aria-labelledby="AddSouscategotyModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">nouvelle sous categorie</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{route('souscategory.store')}}" class="form-horizontal" method="POST" role="form">
            <input type="hidden" name="_token" value="{{csrf_token()}}" hidden>
            <input type="hidden" name="category_id" id="category_id" value="{{$category->id}}" hidden>
            <div class="row">
              <div class="col-md-6" >
                  <strong>Nom sous categorie:</strong>
                  {!! Form::text('sousname', null, array('placeholder' => 'nom de categorie','class' => 'form-control')) !!}
              </div>
              <div class="col-md-6">
                  <strong>Slug:</strong>
                  {!! Form::text('sousslug', null ,array('placeholder' => 'slug','class' => 'form-control')) !!}
              </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">fermer</button>
          <button   type="submit" class="btn btn-primary">Enregistrer</button>
        </div>
      </form>
      </div>
    </div>
  </div>
 


@endsection

