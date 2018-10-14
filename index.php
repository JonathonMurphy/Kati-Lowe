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
              <a class='navigation_options' href="art/aboutme.php">
                <h3 class='text-center'>
                  ABOUT ME
                </h3>
              </a>
            </div>
            <div class="col-xl-5 content-container ">
              <a class='navigation_options' href="art/aboutme.php">
                <img class='profile_pic' src='imgs/homepage/Profile_Pic.jpg' alt='Photo of Kati Lowe'>
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
              <a class='navigation_options' href="art/sculptures.php">
                <img class='homepage_pics' src='imgs/homepage/sculpture.png' alt=''>
              </a>
            </div>
            <div class="col-xl-7 content-container">
              <a class='navigation_options' href="art/sculptures.php">
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
              <a class='navigation_options' href="art/paintings.php">
                <h3 class='text-center'>
                  PAINTINGS
                </h3>
              </a>
            </div>
            <div class="col-xl-5 content-container">
              <a class='navigation_options' href="art/paintings.php">
                  <img class='homepage_pics' src='imgs/homepage/paintings.png' alt=''>
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
              <a class='navigation_options' href="art/illustrations.php">
                  <img class='homepage_pics' src='imgs/homepage/illustrations.png' alt=''>
              </a>
            </div>
            <div class="col-xl-7 content-container">
              <a class='navigation_options' href="art/illustrations.php">
                <h3 class='text-center'>
                  ILLUSTRATIONS
                </h3>
              </a>
            </div>
          </div>
          <!-- Credits -->
          <?php
          require("require/credits.php");
          ?>
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
    $Is_Index = true;
    require("require/scripts.php");
    ?>
