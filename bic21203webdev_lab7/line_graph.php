<?php
header("Content-Type: image/png");

// Database connection
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'lab7_graph';

$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get year from URL or default to 2010
$year = intval($_GET['year'] ?? 2010);

// Fetch data for the year
$query = "SELECT category, value FROM tourists WHERE year = $year";
$result = $conn->query($query) or die("No data found for year $year.");
$data = $result->fetch_all(MYSQLI_ASSOC);

$conn->close();

// Prepare categories and values
$categories = array_column($data, 'category');
$values = array_column($data, 'value');
$maxValue = max($values);
$numPoints = count($values);

// Create graph
$width = 1000; $height = 600; $padding = 60;
$image = imagecreate($width, $height);

// Colors
$background = imagecolorallocate($image, 255, 255, 255);
$lineColor = imagecolorallocate($image, 54, 162, 235);
$textColor = imagecolorallocate($image, 0, 0, 0);
$pointColor = imagecolorallocate($image, 255, 0, 0);

// Draw axes
imageline($image, $padding, $padding, $padding, $height - $padding, $textColor);
imageline($image, $padding, $height - $padding, $width - $padding, $height - $padding, $textColor);

// Draw line graph
$graphWidth = $width - $padding * 2;
$graphHeight = $height - $padding * 2;

for ($i = 0; $i < $numPoints - 1; $i++) {
    $x1 = $padding + $i * ($graphWidth / ($numPoints - 1));
    $y1 = $height - $padding - ($values[$i] / $maxValue) * $graphHeight;
    $x2 = $padding + ($i + 1) * ($graphWidth / ($numPoints - 1));
    $y2 = $height - $padding - ($values[$i + 1] / $maxValue) * $graphHeight;

    imageline($image, $x1, $y1, $x2, $y2, $lineColor);
    imagefilledellipse($image, $x1, $y1, 8, 8, $pointColor);
}
imagefilledellipse($image, $x2, $y2, 8, 8, $pointColor);

// Add labels
foreach ($categories as $i => $category) {
    $x = $padding + $i * ($graphWidth / ($numPoints - 1)) - 20;
    $y = $height - $padding + 20;
    imagestring($image, 3, $x, $y, $category, $textColor);
}

// Output image
imagepng($image);
imagedestroy($image);
?>