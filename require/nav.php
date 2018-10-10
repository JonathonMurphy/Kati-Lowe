<div class="row justify-content-center align-items-center navigation_section_index">
  <div class="col-12 content-container">
    <?php
    if($Is_Index == true){
      echo '
      <p class="text-center">
        <a class="navigation_options" href="index.php"  >
          Home</a>
          <span> - </span>
        <a class="navigation_options" href="php/sculptures.php">
          Sculptures</a>
          <span> - </span>
        <a class="navigation_options" href="php/paintings.php">
          Paintings</a>
          <span> - </span>
          <a class="navigation_options" href="php/illustrations.php">
          Illustrations</a>
          <span> - </span>
          <a class="navigation_options" href="https://www.instagram.com/katiannlowe/" target="_blank">
          Instagram</a>
          <span> - </span>
        <a class="navigation_options" href="php/aboutme.php">
          About Me</a>
      </p>
      ';
    }else{
      echo '
      <p class="text-center">
        <a class="navigation_options" href="../index.php"  >
          Home</a>
          <span> - </span>
        <a class="navigation_options" href="sculptures.php">
          Sculptures</a>
          <span> - </span>
        <a class="navigation_options" href="paintings.php">
          Paintings</a>
          <span> - </span>
          <a class="navigation_options" href="illustrations.php">
          Illustrations</a>
          <span> - </span>
          <a class="navigation_options" href="https://www.instagram.com/katiannlowe/" target="_blank">
          Instagram</a>
          <span> - </span>
        <a class="navigation_options" href="aboutme.php">
          About Me</a>
      </p>
      ';
    }
    ?>
  <hr>
  </div>
</div>
