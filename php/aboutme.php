<!-- Header -->
<?php

$Page_Title = "Kati Lowe - Home";
$Is_Index = false;

require("../require/header.php");

?>
  <body>
    <div class="container-fluid">
      <div class="row justify-content-center align-items-center">
        <div class='col-12 linear_gradient'>
      <!-- Navigation -->
      <?php
      $Is_Index = false;
      require("../require/nav.php");
      ?>
      <!-- About Me -->
        <div class="row justify-content-center align-items-center homepage_section">
          <div class="col-xl-7 content-container">
            <h3 class='text-right'>
              About me
            </h3>
            <p class='text-right'>
              Kati Lowe is an American artist born in the Southeast
              and based in the Atlanta area. She studies art at the
              University of West Georgia and will receive a BFA in
              Sculpture and Painting. Kati works in a variety of mediums,
              including sculpture, painting, ceramics, and printmaking.
              Her work revolves around human condition, self-identity,
              and mentality.
            </p>
          </div>
          <div class="col-xl-5 content-container ">
            <a class='navigation_options' href="html/aboutme.html">
              <img class='profile_pic' src='../imgs/Profile_Pic.jpg' alt='Photo of Kati Lowe'>
            </a>
          </div>
        </div>

      <!-- Footer -->
      <div class="row justify-content-center align-items-center footer_section">
        <div class="col-12 content-container">
          <hr>
        </div>
        <div class="col-6 content-container">
          <p class='text-left footer_text'>
            © 2018 Kati Lowe
          </p>
        </div>
        <div class="col-6 content-container">
            <p class='text-right footer_text'>
              Website Design by <a class='' href="http://jsmurphy.info" target="_blank"> Jonathon Murphy </a>
            </p>
        </div>
      </div>
      <!-- Tag Line -->
      <div class="row justify-content-center align-items-center">
        <div class="col-12 content-container text-center">
          <h1 class='text-center tagline_text_2'>ARTIST - CREATOR - OBSERVER</h1>
        </div>
      </div>
      
    </div>
  </div>



    </div>
    <!-- Libraries -->
    <?php
    require("../require/scripts.php");
    ?>
