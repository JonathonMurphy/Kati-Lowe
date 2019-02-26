<?php
if($Is_Index == true){
  echo'
  <script src="js/jquery-3.3.1.js></script>
  <script src="js/jquery.fancybox.js"></script
  <script src="js/safari.js"></script>
  ';
}else{
  echo'
  <script src="../js/jquery-3.3.1.js"></script>
  <script src="../js/jquery.fancybox.js"></script>
  ';
}
if($About_Me == true){
  echo'
  <script src="../js/jquery-3.3.1.js"></script>
  <script src="../js/jquery.fancybox.js"></script>
  <script src="../js/contactMeFormHandler.js"></script>
  ';
}
if($instagram == true){
  echo'<script src="../js/instagram.js"></script>';
}
?>
  </body>
</html>
