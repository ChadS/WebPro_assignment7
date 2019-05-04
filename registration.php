<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])) {
    $username = stripslashes($_REQUEST['username']); // removes backslashes
    $username = mysqli_real_escape_string($con, $username); //escapes special characters in a string
    $email    = stripslashes($_REQUEST['email']);
    $email    = mysqli_real_escape_string($con, $email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password);
    $query    = "INSERT into `users` (username, password, email) VALUES ('$username', '" . md5($password) . "', '$email')";
    $result   = mysqli_query($con, $query);
    if ($result) {
        echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
    }
} else {
?><div>

<div><h1>Register to gain access to knowledge</h1></div>

<div >

<h2>Registration Form</h2>

<form name="registration" action="" method="post">

<input type="text" name="username" placeholder="Username" required />

<input type="email" name="email" placeholder="Email" required />

<input type="password" name="password" placeholder="Password" required />

<input type="submit" name="submit" value="Register" />

</form>

<br /><br />

</div>

<?php
}
?>

</div>
    </body>
</html>