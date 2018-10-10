<!-- Header -->
<?php
$Page_Title = "Kati Lowe - Home";
$Is_Index = false;
require("../require/header.php");
?>
  <body>
    <div class="container-fluid">
      <!-- Navigation -->
      <?php
      $Is_Index = false;
      require("../require/nav.php");
      ?>
      <div class="row justify-content-center align-items-center">
        <div class='col-12'>
          <h1 class='text-center header_text_paintings'>KATI LOWE</h1>
        </div>
      </div>
        <!-- Gallery -->
        <!-- Rows must be in a 2w:3h aspect ratio
             amd Center Pieces must be a 1:1 aspect ratio
              PNG File Format with a transparent background -->
          <!-- Row One -->
      <div class="row justify-content-center align-items-center">
        <div class='col-sm-4'>
          <figure>
            <img class='painting_gallery' src='../imgs/sculpture/DSC_0119.png' alt=''>
            <figcaption class='text-center'>Details (All My Woes)</figcaption>
          </figure>
        </div>
        <div class='col-sm-4'>
          <figure>
            <img class='painting_gallery' src='../imgs/sculpture/03_detail_01.png' alt=''>
            <figcaption class='text-center'>Details (All My Woes)</figcaption>
          </figure>
        </div>
        <div class='col-sm-4'>
          <figure>
            <img class='painting_gallery' src='../imgs/sculpture/03_detail_02.png' alt=''>
            <figcaption class='text-center'>Details (All My Woes)</figcaption>
          </figure>
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
    <!-- Libraries -->
    <?php
    require("../require/scripts.php");
    ?>
