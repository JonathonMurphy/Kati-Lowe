<?php
$browser = get_browser(null, true);
$imgtype;
switch ($browser['browser']) {
  case "Chrome":
    $imgtype = 'webp';
    echo ($browser['browser']);
    echo $imgtype;
    break;
  case "Safari":
    $imgtype = 'jp2';
    echo ($browser['browser']);
    echo $imgtype;
    break;
  default:
    $imgtype = 'jpg';
    echo ($browser['browser']);
    echo $imgtype;
    break;
}
//
// if ($browser['browser'] == 'Chrome' || 'Opera') {
//     $imgtype = 'webp';
//     echo ($browser['browser']);
//     echo $imgtype;
// } elseif ($browser['browser'] == 'Safari') {
//     $imgtype = 'jp2';
//     echo ($browser['browser']);
//     echo $imgtype;
// } else {
//     $imgtype = 'jpg';
//     echo ($browser['browser']);
//     echo $imgtype;
// }


?>
