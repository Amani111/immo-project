@extends('back_end.layouts.app')

@push('before-styles')
<style>
    #description {
  font-family: Roboto;
  font-size: 15px;
  font-weight: 300;
}

#infowindow-content .title {
  font-weight: bold;
}

#infowindow-content {
  display: none;
}

#map #infowindow-content {
  display: inline;
}

.pac-card {
  background-color: #fff;
  border: 0;
  border-radius: 2px;
  box-shadow: 0 1px 4px -1px rgba(0, 0, 0, 0.3);
  margin: 10px;
  padding: 0 0.5em;
  font: 400 18px Roboto, Arial, sans-serif;
  overflow: hidden;
  font-family: Roboto;
  padding: 0;
}

#pac-container {
  padding-bottom: 12px;
  margin-right: 12px;
}

.pac-controls {
  display: inline-block;
  padding: 5px 11px;
}

.pac-controls label {
  font-family: Roboto;
  font-size: 13px;
  font-weight: 300;
}

#pac-input {
  background-color: #fff;
  font-family: Roboto;
  font-size: 15px;
  font-weight: 300;
  margin-left: 12px;
  padding: 0 11px 0 13px;
  text-overflow: ellipsis;
  width: 400px;
}

#pac-input:focus {
  border-color: #4d90fe;
}

#title {
  color: #fff;
  background-color: #4d90fe;
  font-size: 25px;
  font-weight: 500;
  padding: 6px 12px;
}
</style>
@endpush
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
    <input type="text" class="form-control" id="address-input" name="address" placeholder="Enter an address" autocomplete="off">
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
<!-- <div class="container">
    <div class="row">
        <div class="col-lg-12">
            <p><h1>Google Maps JavaScript API with Places Library Autocomplete Address Field</h1></p>
   <div class="form-group">
    <label>Location:</label>
    <input type="text" class="form-control" id="search_input" placeholder="Type address..." />
   </div>
     </div>
   </div>
</div> -->


<div class="pac-card" id="pac-card">
      <div>
        <div id="title">Autocomplete search</div>
        <div id="type-selector" class="pac-controls">
          <input
            type="radio"
            name="type"
            id="changetype-all"
            checked="checked"
          />
          <label for="changetype-all">All</label>

          <input type="radio" name="type" id="changetype-establishment" />
          <label for="changetype-establishment">establishment</label>

          <input type="radio" name="type" id="changetype-address" />
          <label for="changetype-address">address</label>

          <input type="radio" name="type" id="changetype-geocode" />
          <label for="changetype-geocode">geocode</label>

          <input type="radio" name="type" id="changetype-cities" />
          <label for="changetype-cities">(cities)</label>

          <input type="radio" name="type" id="changetype-regions" />
          <label for="changetype-regions">(regions)</label>
        </div>
        <br />
        <div id="strict-bounds-selector" class="pac-controls">
          <input type="checkbox" id="use-location-bias" value="" checked />
          <label for="use-location-bias">Bias to map viewport</label>

          <input type="checkbox" id="use-strict-bounds" value="" />
          <label for="use-strict-bounds">Strict bounds</label>
        </div>
      </div>
      <div id="pac-container">
        <input id="pac-input" type="text" placeholder="Enter a location" />
      </div>
    </div>
    <div id="map"></div>
    <div id="infowindow-content">
      <span id="place-name" class="title"></span><br />
      <span id="place-address"></span>
    </div>


{!! Form::close() !!}

@endsection
@push('after-scripts')
    <!-- <script>
    var searchInput = 'search_input';
    
    $(document).ready(function () {
    var autocomplete;
    autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
    types: ['geocode'],
    /*componentRestrictions: {
    country: "USA"
    }*/
    });
    
    google.maps.event.addListener(autocomplete, 'place_changed', function () {
    var near_place = autocomplete.getPlace();
    });
    });
    </script> -->
    <script type="text/javascript">
 
    //     let map;
    // function initMap() {
    //     map = new google.maps.Map(document.getElementById("map"), {
    //         center: { lat: 36.806389, lng: 10.181667},
    //         zoom: 8,
    //         scrollwheel: true,
    //     });
    //     const uluru = { lat: 36.806389, lng: 10.181667};
    //     let marker = new google.maps.Marker({
    //         position: uluru,
    //         map: map,
    //         draggable: true
    //     });
    //     google.maps.event.addListener(marker,'position_changed',
    //         function (){
    //             let lat = marker.position.lat()
    //             let lng = marker.position.lng()
    //             $('#lng').val(lat)
    //             $('#lat').val(lng)
             
    //         })
    //     google.maps.event.addListener(map,'click',
    //     function (event){
    //         pos = event.latLng
    //         marker.setPosition(pos)
    //     })
    // }
    // function initMap() {
    //     var map = new google.maps.Map(document.getElementById('map'), {
    //         center: { lat: 0, lng: 0 }, // Set initial center point
    //         zoom: 12 // Set initial zoom level
    //     });

    //     var input = document.getElementById('address-input');
    //     var autocomplete = new google.maps.places.Autocomplete(input);

    //     autocomplete.addListener('place_changed', function() {
    //         var place = autocomplete.getPlace();
    //         if (place.geometry && place.geometry.location) {
    //             map.setCenter(place.geometry.location);
    //             var marker = new google.maps.Marker({
    //                 map: map,
    //                 position: place.geometry.location
    //             });
    //         } else {
    //             console.log('No location found for the input address.');
    //         }
    //     });
    // }
</script>
<!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtljmy6SMq1eG-oe77ZQYtd5uwdGOZ0FA&callback=initMap"
type="text/javascript"></script> -->


<!-- <script src="https://maps.googleapis.com/maps/api/js?v=3.5&key=AIzaSyBtljmy6SMq1eG-oe77ZQYtd5uwdGOZ0FA&libraries=places" async defer></script> -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDIzuWeVLhWJmiax1xSyWQs_57CS64WZfA&callback=initMap&libraries=places&v=weekly"
      defer
    ></script>
    <script>
      /**
       * @license
       * Copyright 2019 Google LLC. All Rights Reserved.
       * SPDX-License-Identifier: Apache-2.0
       */
      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
      function initMap() {
        const map = new google.maps.Map(document.getElementById("map"), {
          center: { lat: 40.749933, lng: -73.98633 },
          zoom: 13,
          mapTypeControl: false,
        });
        const card = document.getElementById("pac-card");
        const input = document.getElementById("pac-input");
        const biasInputElement = document.getElementById("use-location-bias");
        const strictBoundsInputElement =
          document.getElementById("use-strict-bounds");
        const options = {
          fields: ["formatted_address", "geometry", "name"],
          strictBounds: false,
          types: ["establishment"],
        };

        map.controls[google.maps.ControlPosition.TOP_LEFT].push(card);

        const autocomplete = new google.maps.places.Autocomplete(
          input,
          options
        );

        // Bind the map's bounds (viewport) property to the autocomplete object,
        // so that the autocomplete requests use the current map bounds for the
        // bounds option in the request.
        autocomplete.bindTo("bounds", map);

        const infowindow = new google.maps.InfoWindow();
        const infowindowContent = document.getElementById("infowindow-content");

        infowindow.setContent(infowindowContent);

        const marker = new google.maps.Marker({
          map,
          anchorPoint: new google.maps.Point(0, -29),
        });

        autocomplete.addListener("place_changed", () => {
          infowindow.close();
          marker.setVisible(false);

          const place = autocomplete.getPlace();

          if (!place.geometry || !place.geometry.location) {
            // User entered the name of a Place that was not suggested and
            // pressed the Enter key, or the Place Details request failed.
            window.alert(
              "No details available for input: '" + place.name + "'"
            );
            return;
          }

          // If the place has a geometry, then present it on a map.
          if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
          } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);
          }

          marker.setPosition(place.geometry.location);
          marker.setVisible(true);
          infowindowContent.children["place-name"].textContent = place.name;
          infowindowContent.children["place-address"].textContent =
            place.formatted_address;
          infowindow.open(map, marker);
        });

        // Sets a listener on a radio button to change the filter type on Places
        // Autocomplete.
        function setupClickListener(id, types) {
          const radioButton = document.getElementById(id);

          radioButton.addEventListener("click", () => {
            autocomplete.setTypes(types);
            input.value = "";
          });
        }

        setupClickListener("changetype-all", []);
        setupClickListener("changetype-address", ["address"]);
        setupClickListener("changetype-establishment", ["establishment"]);
        setupClickListener("changetype-geocode", ["geocode"]);
        setupClickListener("changetype-cities", ["(cities)"]);
        setupClickListener("changetype-regions", ["(regions)"]);
        biasInputElement.addEventListener("change", () => {
          if (biasInputElement.checked) {
            autocomplete.bindTo("bounds", map);
          } else {
            // User wants to turn off location bias, so three things need to happen:
            // 1. Unbind from map
            // 2. Reset the bounds to whole world
            // 3. Uncheck the strict bounds checkbox UI (which also disables strict bounds)
            autocomplete.unbind("bounds");
            autocomplete.setBounds({
              east: 180,
              west: -180,
              north: 90,
              south: -90,
            });
            strictBoundsInputElement.checked = biasInputElement.checked;
          }

          input.value = "";
        });
        strictBoundsInputElement.addEventListener("change", () => {
          autocomplete.setOptions({
            strictBounds: strictBoundsInputElement.checked,
          });
          if (strictBoundsInputElement.checked) {
            biasInputElement.checked = strictBoundsInputElement.checked;
            autocomplete.bindTo("bounds", map);
          }

          input.value = "";
        });
      }

      window.initMap = initMap;
    </script>

@endpush
