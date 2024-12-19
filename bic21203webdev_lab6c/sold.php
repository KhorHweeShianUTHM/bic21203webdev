<?php
header("Content-Type: image/png");

// Create an image canvas
$image = imagecreate(400, 150);

// Define colors
$yellow = imagecolorallocate($image, 255, 255, 0); // Yellow background
$black = imagecolorallocate($image, 0, 0, 0); // Black text

// Dynamic text for items sold
$itemsSold = 100; 
$text = "$itemsSold Items Sold";

// Add text to the image
imagestring($image, 5, 120, 65, $text, $black);

// Output the image
imagepng($image);

// Free up memory
imagedestroy($image);
?>