<?php
function randomText($length) {
    $pattern = "123456789abcdefghijkmnopqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ";
    for($i = 0; $i < $length; $i++) {
      $key .= $pattern{rand(0,57)};
    }
    return $key;
}
session_start();
$_SESSION['tmptxt'] = randomText(8);
$height = 30;
$width = 100;
$captcha = imagecreatefromgif("bgcaptcha.gif");
$colLinea = imagecolorallocate($captcha, 207, 124, 142);
$colLinea2 = imagecolorallocate($captcha, 255, 255, 255);
$colLinea3 = imagecolorallocate($captcha, 232, 224, 211);
$colLinea4 = imagecolorallocate($captcha, 116, 158, 174);
$colText = imagecolorallocate($captcha, 80, 40, 60);
imagefill($captcha, 0, 0, 0);
imageline($captcha, 0, rand(0,$height), $width, rand(0,$height), $colLinea);
imageline($captcha, 0, rand(0,$height), $width, rand(0,$height), $colLinea2);
imageline($captcha, 0, rand(0,$height), $width, rand(0,$height), $colLinea3);
imageline($captcha, 0, rand(0,$height), $width, rand(0,$height), $colLinea4);
imagestring($captcha, 5, 16, 7, $_SESSION['tmptxt'], $colText);
header("Content-type: image/gif");
imagegif($captcha);
imagedestroy($captcha);

?>