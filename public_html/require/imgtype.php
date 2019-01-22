<?php
$browser = get_browser(null, true);
$imgtype;
switch ($browser['browser']) {
  case "Chrome":
    $imgtype = 'webp';
    break;
  case "Safari":
    $imgtype = 'jp2';
    break;
  default:
    $imgtype = 'jpg';
    break;
}
?>
