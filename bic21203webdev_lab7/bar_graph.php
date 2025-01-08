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

// Get year or default to 2010
$year = intval($_GET['year'] ?? 2010);

// Fetch data
$query = "SELECT category, value FROM visitors WHERE year = $year";
$result = $conn->query($query) or die("No data found for year $year.");
$data = $result->fetch_all(MYSQLI_ASSOC);

$conn->close();

// Prepare categories and values
$categories = array_column($data, 'category');
$values = array_column($data, 'value');

// Graph settings
$width = 1100; $height = 600; $padding = 60;
$barWidth = 90; $barSpacing = 70; $maxY = 15000;
$graphHeight = $height - $padding * 2;

// Create graph
$image = imagecreate($width, $height);

// Colors
$bg = imagecolorallocate($image, 255, 255, 255);
$barColor = imagecolorallocate($image, 54, 162, 235);
$textColor = imagecolorallocate($image, 0, 0, 0);

// Draw Y-axis scale
$step = $maxY / 5;
for ($i = 0; $i <= 5; $i++) {
    $y = $height - $padding - ($i * $graphHeight / 5);
    imageline($image, $padding - 5, $y, $padding, $y, $textColor);
    imagestring($image, 3, $padding - 40, $y - 7, (string)($i * $step), $textColor);
}

// Draw bars and labels
foreach ($values as $i => $value) {
    $x1 = $padding + $i * ($barWidth + $barSpacing);
    $x2 = $x1 + $barWidth;
    $y1 = $height - $padding;
    $y2 = $y1 - ($value / $maxY) * $graphHeight;

    imagefilledrectangle($image, $x1, $y1, $x2, $y2, $barColor);
    imagestring($image, 3, $x1, $height - $padding + 5, $categories[$i], $textColor);
}

// Draw axes
imageline($image, $padding, $padding, $padding, $height - $padding, $textColor);
imageline($image, $padding, $height - $padding, $width - $padding, $height - $padding, $textColor);

// Output image
imagepng($image);
imagedestroy($image);
?>