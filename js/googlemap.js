var map;
var geocoder;

<<<<<<< HEAD



function showPosition(position) {

  var lat = position.coords.latitude;
  var lng = position.coords.longitude;
  map.setCenter(new google.maps.LatLng(lat, lng));


}


=======
>>>>>>> 85864a1b6c1c232de1bd402285a67c126fd94ba3
function loadMap() {
	var pune = {lat: 28.5649, lng: 77.2403};
    map = new google.maps.Map(document.getElementById('map'), {
      zoom: 12,
      center: pune
    });

<<<<<<< HEAD
=======


>>>>>>> 85864a1b6c1c232de1bd402285a67c126fd94ba3
    var cdata = JSON.parse(document.getElementById('data').innerHTML);
    geocoder = new google.maps.Geocoder();  
    codeAddress(cdata);

    var allData = JSON.parse(document.getElementById('allData').innerHTML);
    showAllColleges(allData)
<<<<<<< HEAD

infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Your Location.');
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      
          



function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }
=======
}
>>>>>>> 85864a1b6c1c232de1bd402285a67c126fd94ba3

function showAllColleges(allData) {
	var infoWind = new google.maps.InfoWindow;
	Array.prototype.forEach.call(allData, function(data){
		var content = document.createElement('div');
		var content1 = document.createElement('div');
<<<<<<< HEAD
		var content2 = document.createElement('div');
		var strong = document.createElement('strong');
		var hello = document.createElement('strong');
		var hello2 = document.createElement('strong');
		var br = document.createElement('br');
		var br1 = document.createElement('br');

		strong.textContent = data.name;
		content.appendChild(strong);
		
		hello.textContent = data.description;
		content.appendChild(br);

		hello.textContent = data.description;
		content.appendChild(hello);
		
		hello2.textContent = data.Date;
		content.appendChild(br1);

		hello2.textContent = data.Date;
		content.appendChild(hello2);
		
=======
		var strong = document.createElement('strong');
		var hello = document.createElement('strong');
		var br = document.createElement('br');
		
		strong.textContent = data.name;
		content.appendChild(strong);
	
		hello.textContent = data.description;
		content.appendChild(hello);

		hello.textContent = data.description;
		content.appendElement(br);
>>>>>>> 85864a1b6c1c232de1bd402285a67c126fd94ba3



var icon = {
    url:'https://img.icons8.com/pastel-glyph/2x/dog-footprint.png', // url
    scaledSize: new google.maps.Size(30, 30), // scaled size
    origin: new google.maps.Point(0,0), // origin
    anchor: new google.maps.Point(0, 0) // anchor
};

		var marker = new google.maps.Marker({
	      position: new google.maps.LatLng(data.lat, data.lng),
	      map: map,
	      icon: icon
	    });

	    marker.addListener('click', function(){
	    	infoWind.setContent(content);
	    	infoWind.open(map, marker);
	    })
	})
}

function codeAddress(cdata) {
   Array.prototype.forEach.call(cdata, function(data){
    	var address = data.name + ' ' + data.address;
	    geocoder.geocode( { 'address': address}, function(results, status) {
	      if (status == 'OK') {
	        map.setCenter(results[0].geometry.location);
	        var points = {};
	        points.id = data.id;
	        points.lat = map.getCenter().lat();
	        points.lng = map.getCenter().lng();
	        updateCollegeWithLatLng(points);
	      } else {
	        alert('Geocode was not successful for the following reason: ' + status);
	      }
	    });
	});
}

function updateCollegeWithLatLng(points) {
	$.ajax({
		url:"action.php",
		method:"post",
		data: points,
		success: function(res) {
			console.log(res)
		}
	})
	
<<<<<<< HEAD
}

var geoloccontrol = new klokantech.GeolocationControl(map, mapMaxZoom);
=======
}
>>>>>>> 85864a1b6c1c232de1bd402285a67c126fd94ba3
