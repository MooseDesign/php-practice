<?php 
	$pageID = strtolower($pageTitle); 
	$userName = 'user';
?>

<!DOCTYPE html>
<html>
  <head>
    <!-- Adding the Page Title from the index, about, or contact pages -->
    <title><?php echo $pageTitle; ?> | <?php echo $userName; ?></title>

    <!-- Tell the browser to render the view width correctly -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Link our stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Slabo+13px' rel='stylesheet' type='text/css'>
    <?php if ($pageTitle == "Contact") : ?> 
	    <!-- Google Map Data -->
	    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
		<script>
			var map;
			function initialize() {
			
				var mapOptions = {
					mapTypeId: google.maps.MapTypeId.ROADMAP,
					mapTypeControl: false,
					zoom: 15,
					zoomControl: true,
					zoomControlOptions: {
						style: google.maps.ZoomControlStyle.DEFAULT,
						position: google.maps.ControlPosition.DEFAULT
					},
					panControl: false,
					streetViewControl: false,
					scaleControl: false,
					overviewMapControl: false,
					center: new google.maps.LatLng(39.98119773395249, -105.0833368936585)
				};
				
				map = new google.maps.Map(document.getElementById('map-canvas'),
					mapOptions);
				
				var infoContent = '<div class="window-content"><h3>Home</h3><p>Is where the moose is.</p></div>';
				
				var infowindow = new google.maps.InfoWindow({
					content: infoContent
				});
				
				var icon = {
					path: 'M16.5,51s-16.5-25.119-16.5-34.327c0-9.2082,7.3873-16.673,16.5-16.673,9.113,0,16.5,7.4648,16.5,16.673,0,9.208-16.5,34.327-16.5,34.327zm0-27.462c3.7523,0,6.7941-3.0737,6.7941-6.8654,0-3.7916-3.0418-6.8654-6.7941-6.8654s-6.7941,3.0737-6.7941,6.8654c0,3.7916,3.0418,6.8654,6.7941,6.8654z',
					anchor: new google.maps.Point(16.5, 51),
					fillColor: '#FF7700',
					fillOpacity: 0.5,
					strokeWeight: 0,
					scale: 0.66
				};
				
				var marker = new google.maps.Marker({
					position: new google.maps.LatLng(39.98106619737914, -105.08320814762578),
					map: map,
					icon: icon,
					title: 'marker'
				});
				
				google.maps.event.addListener(marker, 'click', function() {
					infowindow.open(map,marker);
				});
			}
			
			google.maps.event.addDomListener(window, 'load', initialize);
			
			function checkResize(){
			
				var center = map.getCenter();
				google.maps.event.trigger(map, 'resize');
				map.setCenter(center);
			}
			
			window.onresize = checkResize;			
		</script>
	<?php else : ?>	
	<?php endif; ?>
  </head>

  <body id="<?php echo $pageID; ?>">
	  
	  <header>
	  <div class="row clearfix">
	
	    <!-- Our Logo -->
	    <a href="index.php"><img class="logo" src="img/logo.png"/></a>
		    
	    <?php include 'nav.php'; ?>
	
	  </div>
	</header>