<?php include "../inc/header.php";


//echo "Welcome " . $_SESSION['username'];
?>




<div class="main_bodybg">
		<!-- title -->
		<h1>...</h1>
		<!-- //title -->
		<!-- content -->
		<div class="sub-main-w3">
			<div class="bg-content-w3pvt">
				<div class="top-content-style">

          <p style="font-size:50px; color:white ; border color: maroon;">Welcome To FooD  RaveN</p>

          <div class="card text-center">
    <div class="card-header">
      Featured by Food Raven
    </div>
    <div class="p-3 mb-2 bg-warning text-dark">

      <div class="card-body " style="border color: limegreen; background color:light orange;">
        <h5 class="card-title ">Exclusive Reviewst</h5>
        <p class="card-text">With supporting taste checkers. The quality of food is juf=dged and rated.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>

    </div>
    <div class="card-footer text-muted">
      Taste of Food
    </div>

  </div>

        ]
			</div>
		</div>
		<!-- //content -->
		<!-- copyright -->

		<!-- //copyright -->
	</div>

  <div class="card-group">

    <div class="card">
      <img src="img/f5.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Food Safety</h5>
        <p class="card-text">Food safety is a major issue for each indivuals. They must ensure the afety of food.</p>
      </div>


      <div class="card-footer">
        <small class="text-muted">Last updated 4  days  ago</small>
      </div>
    </div>
    <div class="card">
      <img src="img/f1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Shawarma</h5>
        <p class="card-text">This is the best shawarma in town.  ShawarmaPalace has the best shawarma with cheese and bbq chicken.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 5 Days  ago</small>
      </div>
    </div>
    <div class="card">
      <img src="img/f3.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Oven Cooked Pasta</h5>
        <p class="card-text">Arabians restaurant has a delicious ovencooked pasta. You must try it.  </p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 2 Days   ago</small>
      </div>
    </div>
  </div>


  <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
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
        margin: 10px 10px 0 0;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        background-color: #fff;
        font-family: Roboto;
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



<div class="pac-card" id="pac-card">
      <div>
        <div id="title">
          Autocomplete search
        </div>
        <div id="type-selector" class="pac-controls">
          <input type="radio" name="type" id="changetype-all" checked="checked">
          <label for="changetype-all">All</label>

          <input type="radio" name="type" id="changetype-establishment">
          <label for="changetype-establishment">Establishments</label>

          <input type="radio" name="type" id="changetype-address">
          <label for="changetype-address">Addresses</label>

          <input type="radio" name="type" id="changetype-geocode">
          <label for="changetype-geocode">Geocodes</label>
        </div>
        <div id="strict-bounds-selector" class="pac-controls">
          <input type="checkbox" id="use-strict-bounds" value="">
          <label for="use-strict-bounds">Strict Bounds</label>
        </div>
      </div>
      <div id="pac-container">
        <input id="pac-input" type="text"
            placeholder="Enter a location">
      </div>
    </div>
    <div id="map"></div>
    <div id="infowindow-content">
      <img src="" width="16" height="16" id="place-icon">
      <span id="place-name"  class="title"></span><br>
      <span id="place-address"></span>
    </div>

    <script>
      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 23.8103, lng: 90.4125},
          zoom: 13
        });
        var card = document.getElementById('pac-card');
        var input = document.getElementById('pac-input');
        var types = document.getElementById('type-selector');
        var strictBounds = document.getElementById('strict-bounds-selector');

        map.controls[google.maps.ControlPosition.TOP_RIGHT].push(card);

        var autocomplete = new google.maps.places.Autocomplete(input);

        // Bind the map's bounds (viewport) property to the autocomplete object,
        // so that the autocomplete requests use the current map bounds for the
        // bounds option in the request.
        autocomplete.bindTo('bounds', map);

        // Set the data fields to return when the user selects a place.
        autocomplete.setFields(
            ['address_components', 'geometry', 'icon', 'name']);

        var infowindow = new google.maps.InfoWindow();
        var infowindowContent = document.getElementById('infowindow-content');
        infowindow.setContent(infowindowContent);
        var marker = new google.maps.Marker({
          map: map,
          anchorPoint: new google.maps.Point(0, -29)
        });

        autocomplete.addListener('place_changed', function() {
          infowindow.close();
          marker.setVisible(false);
          var place = autocomplete.getPlace();
          if (!place.geometry) {
            // User entered the name of a Place that was not suggested and
            // pressed the Enter key, or the Place Details request failed.
            window.alert("No details available for input: '" + place.name + "'");
            return;
          }

          // If the place has a geometry, then present it on a map.
          if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
          } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);  // Why 17? Because it looks good.
          }
          marker.setPosition(place.geometry.location);
          marker.setVisible(true);

          var address = '';
          if (place.address_components) {
            address = [
              (place.address_components[0] && place.address_components[0].short_name || ''),
              (place.address_components[1] && place.address_components[1].short_name || ''),
              (place.address_components[2] && place.address_components[2].short_name || '')
            ].join(' ');
          }

          infowindowContent.children['place-icon'].src = place.icon;
          infowindowContent.children['place-name'].textContent = place.name;
          infowindowContent.children['place-address'].textContent = address;
          infowindow.open(map, marker);
        });

        // Sets a listener on a radio button to change the filter type on Places
        // Autocomplete.
        function setupClickListener(id, types) {
          var radioButton = document.getElementById(id);
          radioButton.addEventListener('click', function() {
            autocomplete.setTypes(types);
          });
        }

        setupClickListener('changetype-all', []);
        setupClickListener('changetype-address', ['address']);
        setupClickListener('changetype-establishment', ['establishment']);
        setupClickListener('changetype-geocode', ['geocode']);

        document.getElementById('use-strict-bounds')
            .addEventListener('click', function() {
              console.log('Checkbox clicked! New state=' + this.checked);
              autocomplete.setOptions({strictBounds: this.checked});
            });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBslcV-4T4smUUS-wZjgIDXB0sZbw-DYTs&libraries=places&callback=initMap"
        async defer></script>


        <!-- API ENDSSSSSSSSSSSS -->


        

        <?php
          if(!isset($_COOKIE[$cookie_name])) {
              echo "Cookie named '" . $cookie_name . "' is not set!";
          } else {
              echo "Cookie '" . $cookie_name . "' is set!<br>";
              echo "Value is: " . $_COOKIE[$cookie_name];
          }
        ?>