<?php
require('db.php');
// If form submitted, insert values into the database.

if (isset($_REQUEST['username'])){
    $username = stripslashes($_REQUEST['username']); // removes backslashes
    $username = mysqli_real_escape_string($con,$username); //escapes special characters in a string

    $email = stripslashes($_REQUEST['email']); // removes backslashes
    $email = mysqli_real_escape_string($con,$email); //escapes special characters in a string

    $password = stripslashes($_REQUEST['password']); // removes backslashes
    $password = mysqli_real_escape_string($con,$password); //escapes special characters in a string

    $trn_date = date("Y-m-d H:i:s");

    $query = "INSERT into `users` (username, password, email, trn_date) VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";

    $result = mysqli_query($con,$query);

    if($result){
        echo "<div class='form'>
        <h3>You are registered successfully.</h3>
        <br/>Click here to <a href='login.php'>Login</a></div>";
    }
}else{
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Registration</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>

<div class="form">
    <h1>Registration</h1>
    <form name="registration" action="" method="post">
        <input type="text" name="username" placeholder="Username" required />
        <input type="email" name="email" placeholder="Email" required />
        <input type="password" name="password" placeholder="Password" required />
        <input type="submit" name="submit" value="Register" />
    </form>
</div>

<?php } ?>

</body>
</html>