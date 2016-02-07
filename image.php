<?php

//创建画布
$image=  imagecreatetruecolor(800, 800);
$red=  imagecolorallocate($image, 255, 0, 0);
$white=imagecolorallocate($image,255,255,255);
imagefill($image,0, 0, $red);
imageline($image, 0, 0, 200, 200, $white);
imagerectangle($image, 0, 0, 60, 60, $white);
//imagefilledrectangle($image, $x1, $y1, $x2, $y2, $color)
header('Content-type:image/png');
imagepng($image);
imagedestroy($image);


