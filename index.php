<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
  <title>Peta Wisata</title> 
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="js/gmaps.js"></script>
  <link rel="stylesheet" href="http://twitter.github.com/bootstrap/1.3.0/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="css/examples.css" />
  <script type="text/javascript">
    var map;
    $(document).ready(function(){
      map = new GMaps({
        el: '#map',
        lat: -7.797224,
        lng: 110.368797,
        zoomControl : true,
        zoom: 11,
        zoomControlOpt: {
            style : 'LARGE',
            position: 'TOP_LEFT'
        },
        panControl : false,
        streetViewControl : false,
        mapTypeControl: false,
        overviewMapControl: false
      });
    });

    $.getJSON("landmarks.php", function(data) {
		$.each(data, function(i) {
        		map.addMarker({
				  lat: data[i]['latitude'],
				  lng: data[i]['longitude'],
				  infoWindow: {
			        content: ''+data[i]['name']+''
			      }
				});
        	});
    	});
   
  </script>
</head>
<body>
	<div id="map"></div>
  <div id="bottom">
    <div id="menu-container">
      <ul class="bottom-menu">
        <li>
          <img src="map.png" />
        </li>
        <li>
          <img src="photo.png" />
        </li>
      </ul>
    </div>
  </div>
</body>
</html>