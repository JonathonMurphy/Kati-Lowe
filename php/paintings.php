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
        <!-- Rows must be in a 3w:2h aspect ratio
             amd Center Pieces must be a 1:1 aspect ratio
              PNG File Format with a transparent background -->
          <!-- Row One -->
      <div class="row justify-content-center align-items-center">
        <div class='col-sm-4'>
          <figure>
            <img class='painting_gallery' src='../imgs/paintings/lowe_kati_01.png' alt=''>
            <figcaption class='text-center'>Conversations</figcaption>
          </figure>
        </div>
        <div class='col-sm-4'>
          <figure>
            <img class='painting_gallery' src='../imgs/paintings/lowe_kati_02.png' alt=''>
            <figcaption class='text-center'>Hiding</figcaption>
          </figure>
        </div>
        <div class='col-sm-4'>
          <figure>
            <img class='painting_gallery' src='../imgs/paintings/lowe_kati_03.png' alt=''>
            <figcaption class='text-center'>Identity</figcaption>
          </figure>
        </div>
      </div>
          <!-- Row Two -->
      <div class="row justify-content-center align-items-center">
        <div class='col-sm-4'>
          <figure>
            <img class='painting_gallery' src='../imgs/paintings/DSC_0261.png' alt=''>
            <figcaption class='text-center'>Pry</figcaption>
          </figure>
        </div>
        <div class='col-sm-4'>
          <figure>
            <img class='painting_gallery' src='../imgs/paintings/lowe_kati_05.png' alt=''>
            <figcaption class='text-center'>Frustration</figcaption>
          </figure>
        </div>
        <div class='col-sm-4'>
          <figure>
            <img class='painting_gallery' src='../imgs/paintings/lowe_kati_06_edited.png' alt=''>
            <figcaption class='text-center'>Dopamine</figcaption>
          </figure>
        </div>
      </div>
      <!-- Center Piece Row -->
      <div class="row justify-content-center align-items-center">
        <div class='col-12'>
          <figure>
            <img class='painting_gallery_break' src='../imgs/paintings/Lowe_kati_07.png' alt=''>
            <figcaption class='text-center'>Oppressed</figcaption>
          </figure>
        </div>
      </div>
          <!-- Row Three -->
      <div class="row justify-content-center align-items-center">
        <div class='col-sm-4'>
          <figure>
            <img class='painting_gallery' src='../imgs/paintings/DSC_0265.png' alt=''>
            <figcaption class='text-center'>Searching</figcaption>
          </figure>
        </div>
        <div class='col-sm-4'>
          <figure>
            <img class='painting_gallery' src='../imgs/paintings/l.png' alt=''>
            <figcaption class='text-center'>Feeling Down</figcaption>
          </figure>
        </div>
        <div class='col-sm-4'>
          <figure>
            <img class='painting_gallery' src='../imgs/paintings/lowe_kati_08.png' alt=''>
            <figcaption class='text-center'>Angst</figcaption>
          </figure>
        </div>
      </div>
          <!-- Row Four -->
      <div class="row justify-content-center align-items-center">
        <div class='col-sm-4'>
          <figure>
            <img class='painting_gallery' src='../imgs/paintings/lowe_k.png' alt=''>
            <figcaption class='text-center'>Trapped</figcaption>
          </figure>
        </div>
        <div class='col-sm-4'>
          <figure>
            <img class='painting_gallery' src='../imgs/paintings/lowe.png' alt=''>
            <figcaption class='text-center'>Pain</figcaption>
          </figure>
        </div>
        <div class='col-sm-4'>
          <figure>
            <img class='painting_gallery' src='../imgs/paintings/IMG_1756 (2).png' alt=''>
            <figcaption class='text-center'>Reflection</figcaption>
          </figure>
        </div>
      </div>
      <div class="row justify-content-center align-items-center">
        <div class='col-12'>
          <h1 class='text-center header_text_paintings past_works_text_paintings'>PAST WORKS</h1>
        </div>
      </div>
      <!-- Bottom Piece Row -->
      <div class="row justify-content-center align-items-center">
        <div class='col-12'>
          <figure>
            <img class='painting_gallery_break' src='../imgs/paintings/DSC_0224.png' alt=''>
            <figcaption class='text-center'>Waiting</figcaption>
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
