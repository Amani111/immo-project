<!-- Modal -->
<div class="modal fade" id="AddSouscategotyModal" tabindex="-1" aria-labelledby="AddSouscategotyModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">nouvelle categorie</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{route('souscategory.store')}}" class="form-horizontal" method="POST" role="form">
            <input type="hidden" name="_token" value="{{csrf_token()}}" hidden>
            <input type="hidden" name="category_id" value="" hidden>
            <div class="row">
              <div class="col-md-6" >
                  <strong>Nom sous categorie:</strong>
                  {!! Form::text('name', null, array('placeholder' => 'nom de categorie','class' => 'form-control')) !!}
              </div>
              <div class="col-md-6">
                  <strong>Slug:</strong>
                  {!! Form::text('slug', null ,array('placeholder' => 'slug','class' => 'form-control')) !!}
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