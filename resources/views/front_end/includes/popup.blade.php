

@if($pub != null)
<div class="modal fade " id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" style="padding-right: 17px; display: block;" aria-modal="true">
     <div class="modal-dialog modal-dialog-centered" role="document">
     <div class="modal-content">
     <div class="modal-header">
          <button type="reset" class="close" id="close" data-dismiss="modal">
               <span class="button" data-dissmiss="modal" aria-label="Close">×</span>
           </button>
     </div>
     <div class="row no-gutters">
     <div class="col-md-6 d-flex">
     <div class="modal-body p-5 img d-flex" style="background-image: url(public/popup/image/{{$pub->image}});">
     </div>
     </div>
     <div class="col-md-6 d-flex">
     <div class="modal-body p-5 d-flex align-items-center">
     <div class="text w-100 text-center py-5">
     <h2 class="mb-0">{{$pub->titre}}</h2>
     <h4 class="mb-4">{{$pub->description}}</h4>
     <input type="hidden" value="{{$pub->active}}" name="active" id="active">
     <a href="{{route('pack')}}" class="parteunaire-btn">Commander</a>
     </div>
     </div>
     </div>
     </div>
     </div>
     </div>
     </div>

     @endif