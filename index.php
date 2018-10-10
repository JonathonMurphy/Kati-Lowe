<!-- Header -->
<?php

$Page_Title = "Kati Lowe - Home";
$Is_Index = true;

require("require/header.php");

?>
  <body>
    <div class="container-fluid">
      <!-- Splash Page -->
      <div class="row justify-content-center align-items-center">
        <div class="col-12 content-container text-center parallax_img_top">
          <h1 class='text-center splash_text_margin header_text'>KATI</h1>
          <h1 class='text-center header_text'>LOWE</h1>
        </div>
      </div>
      <!-- Linear Gradient -->
      <div class="row justify-content-center align-items-center">
        <div class='col-12 linear_gradient'>
        <!-- Navigation -->
        <?php
        require("require/nav.php");
        ?>
        <!-- About Me -->
          <div class="row justify-content-center align-items-center homepage_section">
            <div class="col-xl-7 content-container">
              <a class='navigation_options' href="html/aboutme.html">
                <h3 class='text-center'>
                  ABOUT ME
                </h3>
              </a>
            </div>
            <div class="col-xl-5 content-container ">
              <a class='navigation_options' href="html/aboutme.html">
                <img class='profile_pic' src='imgs/Profile_Pic.jpg' alt='Photo of Kati Lowe'>
              </a>
            </div>
          </div>
          <!-- Break One -->
          <div class="row justify-content-center align-items-center">
            <div class="col-12 content-container text-center parallax_img_center_1">
            </div>
          </div>
          <!-- Sculpture -->
          <div class="row justify-content-center align-items-center homepage_section content_section">
            <div class="col-xl-5 content-container">
              <a class='navigation_options' href="html/sculptures.html">
                <img class='homepage_pics' src='imgs/sculpture/03_detail_01_edited.png' alt=''>
              </a>
            </div>
            <div class="col-xl-7 content-container">
              <a class='navigation_options' href="html/sculptures.html">
                <h3 class ='text-center'>
                  SCULPTURES
                </h3>
              </a>
            </div>
          </div>
          <!-- Break Two -->
          <div class="row justify-content-center align-items-center">
            <div class="col-12 content-container text-center parallax_img_center_2">
            </div>
          </div>
          <!-- Painting -->
          <div class="row justify-content-center align-items-center homepage_section content_section">
            <div class="col-xl-7 content-container">
              <a class='navigation_options' href="html/paintings.html">
                <h3 class='text-center'>
                  PAINTINGS
                </h3>
              </a>
            </div>
            <div class="col-xl-5 content-container">
              <a class='navigation_options' href="html/paintings.html">
                  <img class='homepage_pics' src='imgs/paintings/lowe_kati_06_edited.png' alt=''>
              </a>
            </div>
          </div>
          <!-- Break Three-->
          <div class="row justify-content-center align-items-center">
            <div class="col-12 content-container text-center parallax_img_center_3">
            </div>
          </div>
          <!-- Illustrations -->
          <div class="row justify-content-center align-items-center homepage_section content_section">
            <div class="col-xl-5 content-container">
              <a class='navigation_options' href="html/illustrations.html">
                  <img class='homepage_pics' src='imgs/books_and_illustration/lowe_kati_23_edited.png' alt=''>
              </a>
            </div>
            <div class="col-xl-7 content-container">
              <a class='navigation_options' href="html/illustrations.html">
                <h3 class='text-center'>
                  ILLUSTRATIONS
                </h3>
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



        </div>
      </div>
      <!-- Tag Line -->
      <div class="row justify-content-center align-items-center">
        <div class="col-12 content-container text-center parallax_img_bottom">
          <h1 class='text-center tagline_text_1'>ARTIST - CREATOR - OBSERVER</h1>
        </div>
      </div>


    </div>
    <!-- Libraries -->
    <?php
    require("require/scripts.php");
    ?>
