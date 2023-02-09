
<div class="tab-pane active" id="demande" role="tabpanel">
    <div>
        <div class="row" >
            <div class="col-md-9" >
                <h2> Demandes des inscriptions</h2>
            </div>
        </div>
    </div>
    
    @if(Session::has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ Session::get('message') }}
    </div>
    @endif
    
    <div class="row">
      <table class="table table-responsive" >
    
        <tr>
          <th>No</th>
          <th>User</th>
          <th>Pack</th>
          <th>Status</th>
          <th>Nombre des images disponible</th>
          <th>Nombre des images rester</th>
          <th width="280px">Action</th>
        </tr>
       
        @foreach ($data as $key => $inscri)
         <tr id="inscri_id_{{$inscri->id}}">
           <td>{{ ++$i }}</td>
           <td>{{ $inscri->user->name }}</td>
           <td>{{ $inscri->pack->title }}</td>
           <td>  @if($inscri->status == 1)
                <span class="badge badge-sm border border-success text-success bg-success">
                <svg width="9" height="9" viewBox="0 0 10 9" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor" class="me-1">
                    <path d="M1 4.42857L3.28571 6.71429L9 1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                active
                </span>   
                @else
                <span class="badge badge-sm border border-warning text-warning bg-warning">
                    <svg width="12" height="12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="me-1ca">
                    <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 6a.75.75 0 00-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 000-1.5h-3.75V6z" clip-rule="evenodd"></path>
                    </svg>
                    non active
                </span> 
                @endif
          </td>
           <td>{{ $inscri->nb_photo }}</td>
           <td>{{ $inscri->rest_photo }}</td>
           <td>
              {{-- <a class="btn btn-sm btn-info" href="{{ route('inscriptions.show',$inscri->id) }}"  ><i class="fa-regular fa-eye"></i></a> --}}
       
              {{-- <a class="btn btn-sm btn-warning"  href="{{ route('inscriptions.edit',$inscri->id) }}"><i class="fa-regular fa-pen-to-square"></i></a> --}}
               {!! Form::open(['method' => 'DELETE','route' => ['inscriptions.destroy', $inscri->id],'style'=>'display:inline']) !!}
       
               {{ Form::button('<i class="fa-solid fa-trash"></i>', ['class' => 'btn btn-danger btn-sm', 'type' => 'submit']) }}
               {!! Form::close() !!}
               <button title="change"
                    class="change_status btn btn-warning btn-sm"
                    data-attr="{{ route('inscription.change',$inscri->id) }}"
                    data-id="{{$inscri->id}}">
                    <i class="fa-regular fa-pen-to-square"></i>
               </button>
           </td>
         </tr>
    
        @endforeach
       </table>
        </div>
        <div class="text-right">
            {!! $data->render() !!}
        </div>
    
    
    </div>
    
    
    
    
    