<?php
$browser = get_browser(null, true);
$imgtype;
if ($browser['browser'] == 'Chrome' || 'Opera') {
    $imgtype = 'webp';
} elseif ($browser['browser'] == 'Safari') {
    $imgtype = 'jp2';
} else {
    $imgtype = 'jpg';
}
?>
