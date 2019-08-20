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
  </style>
  
  <div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 23.8103, lng: 90.4125},
          zoom: 8
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBslcV-4T4smUUS-wZjgIDXB0sZbw-DYTs&callback=initMap"
    async defer></script>