<?php
session_start();

session_unset();

session_destroy();
echo "
        <script>
            alert('Logout successful!');
            window.location.href = 'register_form.php';
        </script>";
exit();
?>