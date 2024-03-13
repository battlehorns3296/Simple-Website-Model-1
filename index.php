<?php

/************************************ */
/*          INCLUDES REQUIRED         */
/************************************ */
require './inc/conf.php';
require './inc/func/_db_.php';
include './inc/pg/header.php';

/************************************ */
/*            CONTACT PAGE            */
/************************************ */
if (isset($_GET["p"]) and $_GET["p"] == 'contact-us') {
  // This above line, get the URL used and search if there is a p=contact-us on url example www.google.com/?p=contact-us
?>
  <!-- WEBPAGE CONTENT -->
  <div class="container">

  </div>
  <!-- -->
<?php
} elseif (isset($_GET["p"]) and $_GET["p"] == 'news') {
  // This above line, get the URL used and search if there is a p=news on url example www.google.com/?p=news
?>
  <!-- WEBPAGE CONTENT -->
  <div class="container">

  </div>
  <!-- -->
<?php
  // This next part the else part, just execute if none of the above IFs or ELSEIFs are false
} else {
  /************************************ */
  /*              HOME PAGE             */
  /************************************ */
?>
  <!-- WEBPAGE CONTENT -->
  <div class="container">

  </div>
  <!-- -->
<?php
}

/************************************ */
/*          INCLUDES REQUIRED         */
/************************************ */
include './inc/pg/footer.php';
?>