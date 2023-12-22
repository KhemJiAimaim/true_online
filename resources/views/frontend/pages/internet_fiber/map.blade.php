@extends('frontend.layouts.main')
@section('style')
{{-- <script async src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDYXs0euMCEZ7Um37NqJfu8r9RkT5qlYk8"></script> --}}
{{-- <script async defer src="https://maps.googleapis.com/maps/api/js?callback=initMap"></script> --}}
<script>
  var map;
  var geocoder;
  var currentMarker; // ประกาศตัวแปร currentMarker เพื่อเก็บ reference ของ Marker ปัจจุบัน

  function initMap() {
    var mapProp = {
      center: new google.maps.LatLng(16.487383, 102.835130),
      zoom: 18,
      mapTypeId: google.maps.MapTypeId.MAP
    };

    map = new google.maps.Map(document.querySelector('#gMap'), mapProp);
    

    google.maps.event.addListener(map, 'click', function (event) {
      // ตรวจสอบว่ามี Marker เก่าอยู่หรือไม่
      if (currentMarker) {
        // ถ้ามี Marker เก่าอยู่, ให้ลบออกจากแผนที่
        currentMarker.setMap(null);
      }

      // สร้าง Marker ใหม่
      currentMarker = new google.maps.Marker({
        position: event.latLng,
        map: map,
      });

      var info = new google.maps.InfoWindow({
        content: "Latitude: " + event.latLng.lat() +
          "<hr>Longitude: " + event.latLng.lng() +
          "<button onclick='selectLo()'>Choose this location</button>"
      });

      info.open(map, currentMarker);
    });

    geocoder = new google.maps.Geocoder();
  }

  function searchLocation() {
    var address = document.getElementById('search').value;

    geocoder.geocode({ 'address': address }, function (results, status) {
      if (status === 'OK') {
        var location = results[0].geometry.location;
        map.setCenter(location);

        // var marker = new google.maps.Marker({
        //   map: map,
        //   position: location
        // });
      } else {
        alert('Geocode was not successful for the following reason: ' + status);
      }
    });
  }

  function selectLo() {
    if (currentMarker) {
      console.log("Latitude: " + currentMarker.getPosition().lat());
      console.log("Longitude: " + currentMarker.getPosition().lng());
    } else {
      console.log("No marker available.");
    }
  }

  window.onload = initMap;
</script>

@endsection

@section('content')
    <div class="mt-[150px] max-xl:mt-[74px]">
      <h2 >Test Google Map</h2>
      <div class="m-4 flex justify-center gap-3 shadow-lg border rounded-md">
        <input id="search" placeholder="Enter a location" type="text"></input>
        <button onclick="searchLocation()">Search</button>
      </div>
      <div id="gMap" style="width: 100%;height:600px"></div>
    </div>
@endsection

@section('scripts')
<script>
</script>
@vite('resources/js/global_js/hide_banner.js')
@endsection
