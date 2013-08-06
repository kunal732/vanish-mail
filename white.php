<?php

$file = $_POST["filename"];




$im = imagecreatetruecolor(55, 30);
$white = imagecolorallocate($im, 255, 255, 255);
imagefilledrectangle($im,0,0,55,30,$white);
imagepng($im, 'img/'.$file);
imagedestroy($im);

?>
