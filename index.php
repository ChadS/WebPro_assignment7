<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Welcome</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>

<div >

<div ><h1>Welcome to Our Site</h1></div>

<div

><p>Welcome <?php
echo $_SESSION['username'];
?>!</p>

<p> To enter new album data <a href="album.php" target="_blank"> Click Here</a></p>
<p>To view entered album data <a href="/Assignment_7/viewalbum.php"> View</a></p>
<p> To enter new artist data <a href="artist.php" target="_blank"> Click Here</a></p>
<p>To view entered artist data <a href="/Assignment_7/viewartist.php"> View</a></p>



<a href="logout.php">Logout</a>

</div>


</div>

</body>

</html>