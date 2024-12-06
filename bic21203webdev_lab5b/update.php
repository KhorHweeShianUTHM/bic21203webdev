<?php
include 'Database.php';
include 'User.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $matric = $_POST['matric'];
    $name = $_POST['name'];
    $role = $_POST['role'];

    $database = new Database();
    $db = $database->getConnection();

    $user = new User($db);
    if ($user->updateUser($matric, $name, $role)) {
    echo "<script>alert('Update successful'); window.location.href = 'display_form.php';</script>";
} else {
    echo "<script>alert('Update failed'); window.location.href = 'update_form.php?matric=$matric';</script>";
}

    $db->close();
}
?>