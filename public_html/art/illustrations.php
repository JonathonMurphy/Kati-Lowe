<!-- Header -->
<?php

$Page_Title = "Kati Lowe - Illustrations";
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
      <!-- Name -->
      <div class="row justify-content-center align-items-center">
        <div class="col-12">
          <h1 class="text-center header_text_paintings">KATI LOWE</h1>
          <h4 class="text-center sub_header_text_paintings">ILLUSTRATIONS</h4>
        </div>
      </div>
        <!-- Gallery -->
        <!-- Rows must be in a 3:2 aspect ratio
             and Center Pieces must be a 1:1 aspect ratio
              PNG File Format with a transparent background -->
      <!-- Row One -->
      <div class="row justify-content-center align-items-center">
        <div class="col-12">
          <figure>
            <a href="../imgs/illustrations/opaque/kati-lowe-artemis-opaque.jpg" data-fancybox="gallery" data-caption="Artemis">
            	<img class="painting_gallery_break" src=<?php require("../require/imgtype.php"); echo "../imgs/illustrations/transparent/$imgtype/kati-lowe-artemis-transparent.$imgtype"; ?> alt="Artemis by Kati Lowe">
            </a>
            <figcaption class="text-center">Artemis</figcaption>
          </figure>
        </div>
      </div>
      <!-- Row Two -->
      <div class="row justify-content-center align-items-center">
        <div class="col-sm-4">
          <figure>
            <a href="../imgs/illustrations/opaque/kati-lowe-rainbow-1-opaque.jpg" data-fancybox="gallery" data-caption="Untitled">
              <img class="painting_gallery" src=<?php require("../require/imgtype.php"); echo "../imgs/illustrations/transparent/$imgtype/kati-lowe-rainbow-1-transparent.$imgtype"; ?> alt="Untitled by Kati Lowe">
            </a>
            <figcaption class="text-center">Untitled</figcaption>
          </figure>
        </div>
        <div class="col-sm-4">
          <figure>
            <a href="../imgs/illustrations/opaque/kati-lowe-rainbow-2-opaque.jpg" data-fancybox="gallery" data-caption="Untitled">
              <img class="painting_gallery" src=<?php require("../require/imgtype.php"); echo "../imgs/illustrations/transparent/$imgtype/kati-lowe-rainbow-2-transparent.$imgtype"; ?> alt="Untitled by Kati Lowe">
            </a>
            <figcaption class="text-center">Untitled</figcaption>
          </figure>
        </div>
      </div>
      <!-- Row Three -->
      <div class="row justify-content-center align-items-center">
        <div class="col-sm-4">
          <figure>
            <a href="../imgs/illustrations/opaque/kati-lowe-confined-opaque.jpg" data-fancybox="gallery" data-caption="Confined">
            	<img class="painting_gallery" src=<?php require("../require/imgtype.php"); echo "../imgs/illustrations/transparent/$imgtype/kati-lowe-confined-transparent.$imgtype"; ?> alt="Confined by Kati Lowe">
            </a>
            <figcaption class="text-center">Confined</figcaption>
          </figure>
        </div>
      </div>
      <!-- Row Four -->
      <div class="row justify-content-center align-items-center">
        <div class="col-sm-4">
          <figure>
            <a href="../imgs/illustrations/opaque/kati-lowe-rainbow-3-opaque.jpg" data-fancybox="gallery" data-caption="Untitled">
              <img class="painting_gallery" src=<?php require("../require/imgtype.php"); echo "../imgs/illustrations/transparent/$imgtype/kati-lowe-rainbow-3-transparent.$imgtype"; ?> alt="Untitled by Kati Lowe">
            </a>
            <figcaption class="text-center">Untitled</figcaption>
          </figure>
        </div>
        <div class="col-sm-4">
          <figure>
            <a href="../imgs/illustrations/opaque/kati-lowe-rainbow-4-opaque.jpg" data-fancybox="gallery" data-caption="Untitled">
              <img class="painting_gallery" src=<?php require("../require/imgtype.php"); echo "../imgs/illustrations/transparent/$imgtype/kati-lowe-rainbow-4-transparent.$imgtype"; ?> alt="Untitled by Kati Lowe">
            </a>
            <figcaption class="text-center">Untitled</figcaption>
          </figure>
        </div>
      </div>
      <!-- Row Five -->
      <div class="row justify-content-center align-items-center">
        <div class="col-sm-4">
          <figure>
            <a href="../imgs/illustrations/opaque/kati-lowe-peacock-opaque.jpg" data-fancybox="gallery" data-caption="Peacock">
            	<img class="painting_gallery" src=<?php require("../require/imgtype.php"); echo "../imgs/illustrations/transparent/$imgtype/kati-lowe-peacock-transparent.$imgtype"; ?> alt="Peacock by Kati Lowe">
            </a>
            <figcaption class="text-center">Peacock</figcaption>
          </figure>
        </div>
        <div class="col-sm-4">
          <figure>
            <a href="../imgs/illustrations/opaque/kati-lowe-happiness-opaque.jpg" data-fancybox="gallery" data-caption="Happiness">
            	<img class="painting_gallery" src=<?php require("../require/imgtype.php"); echo "../imgs/illustrations/transparent/$imgtype/kati-lowe-happiness-transparent.$imgtype"; ?> alt="Happiness by Kati Lowe">
            </a>
            <figcaption class="text-center">Happiness</figcaption>
          </figure>
        </div>
      </div>
      <!-- Row Six -->
      <div class="row justify-content-center align-items-center">
        <div class="col-sm-4">
          <figure>
            <a href="../imgs/illustrations/opaque/kati-lowe-the-princess-pig-opaque.jpg" data-fancybox="gallery" data-caption="The Princess Pig">
            	<img class="painting_gallery" src=<?php require("../require/imgtype.php"); echo "../imgs/illustrations/transparent/$imgtype/kati-lowe-the-princess-pig-transparent.$imgtype"; ?> alt="The Princess Pig by Kati Lowe">
            </a>
            <figcaption class="text-center">The Princess Pig - <a href="https://www.amazon.com/Wonder-Princess-Pig-Claire-Baker/dp/1942766092" target="_blank">Buy Here</a></figcaption>
          </figure>
        </div>
      </div>

      <!-- Credits -->
      <?php
      require("../require/credits.html");
      ?>
      <!-- Tag Line -->
      <div class="row justify-content-center align-items-center">
        <div class="col-12 content-container text-center">
          <h1 class="text-center tagline_text_2">ARTIST - CREATOR - OBSERVER</h1>
        </div>
      </div>


    </div>
    <!-- Libraries -->
    <?php
    require("../require/scripts.php");
    ?>
