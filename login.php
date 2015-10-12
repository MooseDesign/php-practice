<?php
	$pageTitle = 'Login';
?>

<?php include 'header.php'; ?>

	<!-- Our site's hero area -->
	<div class="hero subpage">
	  <div class="row clearfix">
	      <h1><?php echo $pageTitle; ?></h1>
	  </div>
	</div>

	<!-- A row of one two-thirds column and one one-third column -->
	<div class="row clearfix">

	  <div class="column two-third">
	    <?php if($userName == "Moose") : ?>

						<h3>Welcome Moose!</h3>
						<p>Highly classified aenean lacinia bibendum nulla sed consectetur. Donec ullamcorper nulla non metus auctor fringilla. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

			<?php else : ?>

						<h3>Login</h3>
						<form action="login" method="post">
							<label for="user">Username</label>
							<input type="text" name="user">
							<label for="password">Password</label>
							<input type="password" name="password">
							<button name="submit">Login</button>
						</form>

			<?php endif; ?>
	   </div>

	  <div class="column one-third">
	    <?php
		    if ($userName == "Moose") { echo "<p>You don't need no stinkin' password.</p>"; }
			else { echo "<p>Forgot password?</p>"; }
	    ?>
	  </div>
	</div>

<?php include 'footer.php'; ?>