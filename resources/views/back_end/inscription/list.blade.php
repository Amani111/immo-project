@extends('back_end.layouts.app')

@section('content')

<div class="container">
    <div class="row">
        {{-- <div class="tabbed-content">
            <ul class="nav nav-tabs"  role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" href="#demande">{{ __('Demande D\'inscription') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#index">{{ __('Liste des inscriptions') }}</a>
                </li>
            </ul>
        </div>  --}}
        @if ($message = Session::get('success'))
            <div class="body">
                <div class="alert alert-success">
                    <p id="msg" class="mb-0">{{ $message }}</p>
                </div>
            </div>
        @endif
        @error('error')
            <div class="body">
                <div class="alert alert-error" role="alert">
                    <p id="msg_error" class="mb-0">{{ $message }}</p>
                </div>
            </div>
        @enderror
        <div class="tab-content">
            @include('back_end.inscription.demande')
            {{-- @include('back_end.inscription.index') --}}
        </div>
    </div>
</div>
@endsection
@push('after-scripts')

<script>
            /* Delete team */
            $(document).on('click', '.change_status', function() {
            let href = $(this).attr('data-attr'),
            inscr_id_ = $(this).data("id"),
            token = $("meta[name='csrf-token']").attr("content");
            swal({
                title: "Es-tu sûr?",
                type: "warning",
                showCancelButton: false,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Oui!",
                closeOnConfirm: true
            }, function() {
                $.ajax({
                    type: "GET",
                    url: href,
                    data: {
                        "id": inscr_id_,
                        "_token": token,
                    },
                    success: function(data) {
                        response = JSON.stringify(data)
                        swal("Changer!", data.message, "success");
                        window.location.reload();
                    },
                    error: function(data) {
                        console.log('Error:', data);
                    }
                });

            });

        });
</script>

@endpush