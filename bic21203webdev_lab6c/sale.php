<?php
// PHP script to generate the "Sale" image
header("Content-Type: image/png");

// Create an image canvas with a width of 300px and a height of 150px
$image = imagecreate(400, 150);

// Define colors
$white = imagecolorallocate($image, 255, 255, 255); // White background
$red = imagecolorallocate($image, 255, 0, 0);       // Red rectangle
$black = imagecolorallocate($image, 0, 0, 0);       // Black text

// Fill the background with white
imagefill($image, 0, 0, $white);

// Draw a red rectangle
imagefilledrectangle($image, 50, 50, 350, 95, $red);

// Add label to the rectangle
imagestring($image, 5, 180, 65, "Sale!", $black);

// Output the image
imagepng($image);

// Free up memory
imagedestroy($image);
?>