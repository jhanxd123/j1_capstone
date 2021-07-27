<?php

require "./vendor/autoload.php";

use Zxing\QrReader;

$name = false;

$qrcode = new QrReader('index.png');

$text = $qrcode -> text();

$t = json_decode($text);

// if($t->password == "villaslangmalakas"){
//   echo "<h3>$t->fname</h3>";
//   echo "<h3>$t->lname</h3>";
// }
//
// else{
//   echo "We don't scan this QR.";
// }

try {
  if(isset($t->password)) throw "it is set";
} catch (Exception $e) {
    echo "error";
}

?>
