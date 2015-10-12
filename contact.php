<?php
	$pageTitle = 'Contact';
?>

<?php include 'header.php'; ?>
	
	<!-- Our site's hero area -->
	<div class="hero subpage">
	  <div class="row clearfix">
	      <h1><?php echo $pageTitle; ?> <?php echo $userName; ?></h1>
	  </div>
	</div>

	<!-- A row of two 1/2 width columns -->
	<div class="row clearfix">
	  <div class="column one-half">
	    <h3>Column Heading</h3>
	    <p>Aenean lacinia bibendum nulla sed consectetur. Donec ullamcorper nulla non metus auctor fringilla. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
	  </div>
	
	  <div class="column one-half">
	    <div id="map-canvas"></div>
	  </div>
	</div>
	
<?php include 'footer.php'; ?>