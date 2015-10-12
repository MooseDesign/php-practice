<?php
/*
 * Setting variables for this specific page
 * before they are used in header.php
 */

  // Set the title of this page
  $pageTitle = "About";

?>

  <!-- Include the header and navigation -->
  <?php include 'header.php'; ?>

    <div class="row">

      <!-- Content area that is a two third column -->
      <div class="column two-third">
        <h3>Column Heading</h3>
        <p>Aenean lacinia bibendum nulla sed consectetur. Donec ullamcorper nulla non metus auctor fringilla. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        <p>Aenean lacinia bibendum nulla sed consectetur. Donec ullamcorper nulla non metus auctor fringilla. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
      </div>

      <!-- Include the Sidebar -->
      <?php include 'sidebar.php'; ?>
    </div>



  <!-- Include the footer -->
  <?php include 'footer.php'; ?>
