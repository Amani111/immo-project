<!-- Modal -->
<div class="modal fade" id="faqModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">nouvelle FAQ</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{route('faq.store')}}" class="form-horizontal" method="POST" role="form">
            <input type="hidden" name="_token" value="{{csrf_token()}}" hidden>
            
            <div class="row">
              <div class="col-md-12" >
                  <strong>Question *:</strong>
                  {!! Form::text('question', null, array('placeholder' => 'question..','class' => 'form-control')) !!}
              </div>           
          </div>
          <div class="row">
            <div class="col-md-12">
                <strong>Reponse *:</strong>
                {!! Form::text('reponse', null ,array('placeholder' => 'reponse..','class' => 'form-control')) !!}
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