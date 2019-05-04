<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
<?php
require('db.php');
session_start();
if (isset($_POST['username'])) {
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($con, $username);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password);
    $query    = "SELECT * FROM `users` WHERE username='$username' and password='" . md5($password) . "'";
    $result = mysqli_query($con, $query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
    if ($rows == 1) {
        $_SESSION['username'] = $username;
        header("Location: index.php"); // Redirect user to index.php
    } else {
        echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
    }
} else {
?>

<div>

<div><h1>Album & Artist Database</h1></div>

<div>

<h2>Login Form </h2>

<form action="" method="post" name="login">

<input type="text" name="username" placeholder="Username" required />

<input type="password" name="password" placeholder="Password" required />

<input name="submit" type="submit" value="Login" />

</form>

<p>Not registered yet? <a href='registration.php'>Register Here</a></p>

</div>

<?php
}
?>

</div>

</body>

</html>