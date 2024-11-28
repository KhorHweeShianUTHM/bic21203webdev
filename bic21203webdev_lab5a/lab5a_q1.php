<!DOCTYPE html>
<html lang="en">
<head>
<title>Lab 5a Q1</title>
</head>
<body>

<?php
$name = "Khor Hwee Shian";
$matricNum = "CI230085";
$course = "BIW";
$yearOfStudy = "Year 2 Semester 1";
$address = "No 22, Taman Bersatu Fasa 4, Jalan Bersatu 20/2, 06600 Kuala Kedah, Kedah.";
?>

<table border="1">
    <tr>
        <td>Name</td>
        <td><?php echo "$name"; ?></td>
    </tr>
    <tr>
        <td>Matric number</td>
        <td><?php echo "$matricNum"; ?></td>
    </tr>
    <tr>
        <td>Course</td>
        <td><?php echo "$course"; ?></td>
    </tr>
    <tr>
        <td>Year of Study</td>
        <td><?php echo "$yearOfStudy"; ?></td>
    </tr>
    <tr>
        <td>Address</td>
        <td><?php echo "$address"; ?></td>
    </tr>
</table>

</body>
</html>