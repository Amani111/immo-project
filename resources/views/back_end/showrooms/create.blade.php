@extends('back_end.layouts.app')



@section('content')

<div >
    <div >
        <div >
            <h4>Créer un Magasin</h4>
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

{!! Form::open(array('route' => 'showrooms.store','method'=>'POST','files' => true)) !!}

<div class="container">

    <div class="row">
        <div class="col-md-6" >
            <h5>Nom * :</h5>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
        <div class="col-md-6" >
            <h5>code postal *:</h5>
            {!! Form::number('code_postal', null, array('placeholder' => 'code postal','class' => 'form-control')) !!}
        </div>
       
    </div>
    <div class="row">
        <div class="col-md-6" >
            <h5>adresse *:</h5>
            {!! Form::text('address', null, array('placeholder' => 'adresse complete','class' => 'form-control')) !!}
        </div>
        <div class="col-md-6">
            <h5>Ville * :</h5>
            <select name="govliste_id" id="govliste_id" class="form-control">
                <option value="0" disabled selected>--choisie ville--</option>
                @foreach($city as $array)
                
                    <option value="{{$array->id}}">{{$array->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h5>Num télephone * :</h5>
            {!! Form::tel('telephone', null, array('placeholder' => 'num telephone','class' => 'form-control')) !!}
        </div>
        <div class="col-md-6" >
            <h5>Video :</h5>
            {!! Form::file('video', array('placeholder' => 'video','class' => 'form-control','accept'=>'video/mp4,video/x-m4v,video/*'),) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-md-6" >
            <h5>lien facebook:</h5>
            {!! Form::text('facebook', null, array('placeholder' => 'lien facebook ..','class' => 'form-control')) !!}
        </div>
        <div class="col-md-6" >

            <h5>lien instagram:</h5>

            {!! Form::text('instagram', null, array('placeholder' => 'lien instagram ..','class' => 'form-control')) !!}

        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h5>Image *:</h5>
            {!! Form::file('image', array('placeholder' => 'image','class' => 'form-control','accept'=>'image/x-png,image/gif,image/jpeg')) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-md-12" >
            <h5>description *:</h5>
            {!! Form::textarea('description', null, array('placeholder' => 'description','class' => 'form-control')) !!}
        </div>
    </div>

    <div class=" row mapform" >
            <div class="col-md-12">
                <h5> choisie votre emplacement</h5>
                <input type="text" class="form-control" placeholder="lat" name="lat" id="lat" hidden>
                <input type="text" class="form-control" placeholder="lng" name="lng" id="lng" hidden>
                <div id="map" style="height:700px; width: 1100px;" class="my-3"></div>
            </div>
        
    </div>

    <hr>
    <div class="row">
        <div class="col-md-6">
            <button class="btn btn-primary" type="submit" >Créer</button>
        </div>
    </div>
    
</div>

{!! Form::close() !!}

@endsection
@push('after-scripts')

    <script type="text/javascript">
 
        let map;
    function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
            center: { lat: 36.806389, lng: 10.181667},
            zoom: 8,
            scrollwheel: true,
        });
        const uluru = { lat: 36.806389, lng: 10.181667};
        let marker = new google.maps.Marker({
            position: uluru,
            map: map,
            draggable: true
        });
        google.maps.event.addListener(marker,'position_changed',
            function (){
                let lat = marker.position.lat()
                let lng = marker.position.lng()
                $('#lng').val(lat)
                $('#lat').val(lng)
             
            })
        google.maps.event.addListener(map,'click',
        function (event){
            pos = event.latLng
            marker.setPosition(pos)
        })
    }
  
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtljmy6SMq1eG-oe77ZQYtd5uwdGOZ0FA&callback=initMap"
type="text/javascript"></script>


@endpush
