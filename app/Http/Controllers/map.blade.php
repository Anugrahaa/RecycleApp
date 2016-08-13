<!DOCTYPE html>
<html>
<style type="text/css">
html, body {
  height: 80%;
  margin: 0;
  padding: 0;
}
#map {
  height: 100%;
}
</style>
<body>
<div id="map"></div>
<form>
<input id = "yourinputlat" type= "text" value="0">
<input id = "yourinputlng" type= "text" value ="0">
</form>
<!-- Replace the value of the key parameter with your own API key. -->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRoF20UcsDJVruk5fU0KTzsQzHVW5GXkI&callback=initMap">
</script>
<script>
function initMap() {
  var latlon;
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 4,
    center: {lat: 21.262437, lng:72.345234}
  });

  for(var i=0; i<{!! $values !!}.length; i++){
    latlon = {
      lat: {!! $values[i]['lat'] !!},
      lng : {!! $values[i]['long'] !!}
    };
  var marker + '.' + i = new google.maps.Marker({
      map: map,
      draggable: false,
      animation: google.maps.Animation.DROP,
      position: latlon
  });
}
  
}
</script>
</body>
</html>