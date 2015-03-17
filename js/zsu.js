(function($, google) {
	var Zsu = {
    initializeMap: function() {	
      var myLatlng = new google.maps.LatLng(47.681615,22.464500);
      var mapOptions = {
        zoom: 16,
        center: myLatlng
      }
      var map = new google.maps.Map(document.getElementById('google-maps'), mapOptions);

      var marker = new google.maps.Marker({
          position: myLatlng,
          map: map,
          title: 'You can find me here :)'
      });

      var infoWindow = new google.maps.InfoWindow();
      infoWindow.setOptions({
      	content: '(RO) 445100, Carei, Bulevardul 25 Decembrie',
      	position: myLatlng, 
      	map: map
      })
      infoWindow.open(map, marker)

			google.maps.event.addListener(marker, 'click', function() {
		    infoWindow.open(map,marker);
		  });

    }
	}
  google.maps.event.addDomListener(window, 'load', Zsu.initializeMap);
})(jQuery, google)