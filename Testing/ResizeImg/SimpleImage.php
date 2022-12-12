<?php
$filename = 'jidlo_deti.jpg';
  
// Maximum width and height
$width = 1000;
$height = 1000;
  
// File type
header('Content-Type: image/jpg');
  
// Get new dimensions
list($width_orig, $height_orig) = getimagesize($filename);
  
$ratio_orig = $width_orig/$height_orig;
  
if ($width/$height > $ratio_orig) {
    $width = $height*$ratio_orig;
} else {
    $height = $width/$ratio_orig;
}
  
// Resampling the image 
$image_p = imagecreatetruecolor($width, $height);
$image = imagecreatefromjpeg($filename);
  
imagecopyresampled($image_p, $image, 0, 0, 0, 0,
        $width, $height, $width_orig, $height_orig);
  
// Display of output image
imagejpeg($image_p, 'C:/wamp64/www/stranky/Ostatní/Zkoušky/Ostatní/size img/result.jpg');
?>