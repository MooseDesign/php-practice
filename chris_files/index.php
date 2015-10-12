<?php
/*
 * Setting variables for this specific page
 * before they are used in header.php
 */

  // Set the title of this page
  $pageTitle = "Home";
?>


  <!-- Include the header and navigation -->
  <?php include 'header.php'; ?>



  <!-- Our site's hero area -->
  <div class="hero">
    <div class="row">

      <!-- If the user name is not set, display a login link -->
      <?php if( empty($userName) ) : ?>
        <h1>Who are you? Login <a href="login.php">here</a></h1>

      <!-- If there is a user, display their name and a nice message -->
      <?php else : ?>
        <h1>Hello <?php echo $userName; ?>, nice to see you again.</h1>
      <?php endif; ?>

    </div>
  </div>



  <!-- A row of two 1/2 width columns -->
  <div class="row">
    <div class="column one-half">
      <h3>Column Heading</h3>
      <p>Aenean lacinia bibendum nulla sed consectetur. Donec ullamcorper nulla non metus auctor fringilla. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
    </div>

    <div class="column one-half">
      <h3>Column Heading</h3>
      <p>Aenean lacinia bibendum nulla sed consectetur. Donec ullamcorper nulla non metus auctor fringilla. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
    </div>
  </div>




  <!-- Include the footer -->
  <?php include 'footer.php'; ?>
