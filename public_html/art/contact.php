<!-- Header -->
<?php
$Page_Title = "Kati Lowe - About me";
$Is_Index = false;
$About_Me = true;
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
        <div class="row justify-content-center align-items-center aboutme_section">
          <div class="col-sm-6 content-container">
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
          <div class="col-sm-4 content-container ">
            <a class='navigation_options' href="html/aboutme.html">
              <img class='aboutme_pic' src='../imgs/homepage/Profile_Pic.png' alt='Photo of Kati Lowe'>
            </a>
          </div>
        </div>
      <!-- Contact Me -->
        <div class="row justify-content-center align-items-center contact_section">
          <div class="col-sm-6 content-container">
            <h4 class='text-left'>
              Contact me
            </h4><br>
            <form action="" target="_self" method="post">



              <fieldset>
                <input type="text" name="name" placeholder="Name" class="form-control name"><br><br>
                <input type="text" name="email" placeholder="Email" class="form-control email"><br><br>
                <div class="form-group">
                  <textarea placeholder="What's up?" class="form-control message" rows="4"></textarea>
                </div><br><br>
                <input class="submitButton" type="button" value="Send">
              </fieldset>




            </form>
          </div>
            <div class="col-sm-4 content-container ">
          </div>
        </div>

      <!-- Credits -->
      <?php
      require("../require/credits.html");
      ?>

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
