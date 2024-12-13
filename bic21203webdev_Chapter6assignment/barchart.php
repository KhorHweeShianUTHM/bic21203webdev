<?php
// Set the correct content type for the response as a JPEG image
header('content-type: image/jpeg');

// Array of data values to be represented in the bar chart
$data = array("3000", "2470", "225", "663", "6666", "3456", "789");

$height = 365; // Height of the image
$width = 520;  // Width of the image

// Create a new blank image with width and height
$image = imagecreate($width, $height);

// Allocate colors for the image
$white = imagecolorallocate($image, 240, 240, 255); // Background color (light white)
$black = imagecolorallocate($image, 0, 0, 0);       // Black color for lines and text
$orange = imagecolorallocate($image, 255,165,0);     // Orange color for the bars

// Draw the Y-axis line
imageline($image, 10, 5, 10, 330, $black); // Vertical line from (10, 5) to (10, 230)

// Draw the X-axis line
imageline($image, 10, 330, 500, 330, $black); // Horizontal line from (10, 230) to (300, 230)

// Write Sentences at the top-right corner of the image
imagestring($image, 4, 380, 20, "Khor Hwee Shian", $black);
imagestring($image, 4, 380, 40, 'CI230085', $black);

$x = 35;           // Starting X-coordinate for the first bar
$y = 329;          // Baseline Y-coordinate for the bars
$x_width = 40;     // Width of each bar
$y_ht = 0;         // Height of the current bar

// Calculate the sum of all data values for normalization
$sum = array_sum($data);

// Loop through each data value and draw a bar for it
for ($i = 0; $i < 7; $i++) {
    // Calculate the height of the bar proportionate to the data value
    $y_ht = ($data[$i] / $sum) * $height;

    // Draw a filled rectangle representing the bar
    imagefilledrectangle($image, $x, $y, $x + $x_width, ($y - $y_ht), $orange);

    // Add the data value as a label below the bar
    imagestring($image, 2, $x + 8, $y + 10, $data[$i], $black);

    // Update the X-coordinate for the next bar
    $x += ($x_width + 20);
}

// Output the image as a JPEG
imagejpeg($image);

// Free up memory associated with the image resource
imagedestroy($image);
?>
