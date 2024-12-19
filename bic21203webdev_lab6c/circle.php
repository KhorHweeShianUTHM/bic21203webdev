<?php
header("Content-Type: image/png");

// Create an image canvas
$image = imagecreate(400, 150);

// Define colors
$white = imagecolorallocate($image, 255, 255, 255); // White background
$green = imagecolorallocate($image, 0, 255, 0); // Green circle
$purple = imagecolorallocate($image, 128, 0, 128); // Purple line

// Draw a green circle
imageellipse($image, 200, 80, 100, 100, $green);

// Draw a purple line
imageline($image, 120, 110, 280, 50, $purple);

// Output the image
imagepng($image);

// Free up memory
imagedestroy($image);
?>