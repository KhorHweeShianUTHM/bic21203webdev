<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>

<?php
function calculateArea($length, $width) {
    return $length * $width;
}

$length = 4; 
$width = 2;
$area = calculateArea($length, $width);

echo "<p>The area of a rectangle with width of $length and $width is <strong>$area</strong>.</p>";
?>

</body>
</html>