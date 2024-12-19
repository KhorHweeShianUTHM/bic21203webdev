<?php
header("Content-Type: image/png");

// Create an image canvas
$image = imagecreate(400, 150);

// Define colors
$lightGray = imagecolorallocate($image, 211, 211, 211); // Light gray background
$black = imagecolorallocate($image, 0, 0, 0); // Black text

// Path to the custom font file (TrueType font)
$fontPath = "C:/Windows/Fonts/arial.ttf"; // Replace with the correct path to a .ttf font

// Check if the font file exists
if (!file_exists($fontPath)) {
    die("Font file not found: $fontPath");
}

// Personalized greeting text
$greetingText = "Hello, User!";

// Add the greeting text to the image using TrueType font
imagettftext($image, 20, 0, 120, 80, $black, $fontPath, $greetingText);

// Output the image
imagepng($image);

// Free up memory
imagedestroy($image);
?>