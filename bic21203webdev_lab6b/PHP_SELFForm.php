<!DOCTYPE html>
<html>
<head>
    <title>PHP_SELF Form</title>
</head>
<body>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    echo "Enter name: <b> $name </b>";
    echo "<br><br><br>Enter new name.";
}
?>

<!-- The action attribute dynamically refers to the same script where the form is written --> 
<!-- 
Benefit 1) No need to hardcode the form's action URL.
Benefit 2) Easier for reuse, even if the script's location changes.
Benefit 3) Safer when combined with htmlspecialchars() to prevent XSS attacks.
-->

<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <input type="text" name="name">
    <input type="submit" name="submit" value="Submit Form"><br>
</form>

</body>
</html>