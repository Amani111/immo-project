<!-- Modal -->
<div class="modal fade modal-lg" id="PromotionModal" tabindex="-1" aria-labelledby="PromotionModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="PromotionModal">nouvelle categorie</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{route('promotions.store')}}" class="form-horizontal" method="POST" role="form">
            <input type="hidden" name="_token" value="{{csrf_token()}}" hidden>
            
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
                    <option value="0" disabled selected>--choisie un produit--</option>
                    @foreach($products as $array)
                        <option value="{{$array->id}}">{{$array->name}}</option>
                    @endforeach
                </select>
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