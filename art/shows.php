<!-- Header -->
<?php
$Page_Title = "Kati Lowe - Paintings";
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
      <div class='col-12'>
        <h1 class='text-center header_text_paintings'>KATI LOWE</h1>
        <h4 class='text-center sub_header_text_paintings'>SHOWS</h4>
      </div>
    </div>
    <!-- Show Card -->
    <div class="row justify-content-center align-items-center">
      <div class='col-12'>
        <figure>
          <a href="../imgs/shows/kati-lowe-senior-show.png" data-fancybox="gallery" data-caption="Senoir Show">
            <img class='painting_gallery_break' src='../imgs/shows/kati-lowe-senior-show.png' alt='Senior Show - Show Card'>
          </a>
        </figure>
      </div>
    </div>
    <!-- Credits -->
    <?php
    require("../require/credits.php");
    ?>
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
