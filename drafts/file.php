<?php
$destination = $_GET['destination'];
$file = "images/" . $_GET['name'] . "_" . $destination . ".png";
$img = imagecreatefrompng('images/' . $_GET['file']);
$white = imagecolorallocate($img, 0, 0, 0);
$txt = $destination;
$font = "/opt/lampp/htdocs/drafts/font/ostrich-regular.ttf";
imagettftext($img, 24, 0, 48, 24, $white, $font, $txt);
imagepng($img);
imagedestroy($img);
header("Location: index.php?file=" . $file );
imagepng($img, $file);
// OR SAVE TO A FILE
// THE LAST PARAMETER IS THE QUALITY FROM 0 to 100
