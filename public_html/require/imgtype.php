<?php
$browser = get_browser(null, true);
$imgtype;
switch ($browser['browser']) {
  case Chrome:
      $imgtype = 'webp';
      break;
  case Safari:
      $imgtype = 'jp2';
      break;
  case FireFox:
      $imgtype = 'jpg';
      break;
  case MSIE:
      #needs to be jxr after we find an exporter for that 
      $imgtype = 'jpg';
      break;
}
?>
