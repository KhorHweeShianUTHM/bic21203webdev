<?php
include 'Database.php';
include 'User.php';

$database = new Database();
$db = $database->getConnection();

$user = new User($db);

if (isset($_POST['matric'], $_POST['name'], $_POST['password'], $_POST['role'])) {

    if ($user->createUser($_POST['matric'], $_POST['name'], $_POST['password'], $_POST['role'])) {
        echo "
        <script>
            alert('Registration successful!');
            window.location.href = 'login_form.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Registration failed. Please try again.');
            window.history.back();
        </script>";
    }
}

$db->close();
?>