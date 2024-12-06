<?php
include 'Database.php';
include 'User.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $matric = $_GET['matric'];

    $database = new Database();
    $db = $database->getConnection();

    $user = new User($db);
    
    if ($user->deleteUser($matric)) {
        echo "
        <script>
            alert('User removed successfully.');
            window.location.href = 'display_form.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Failed to remove the user. Please try again.');
            window.location.href = 'display_form.php';
        </script>";
    }

    $db->close();
}
?>