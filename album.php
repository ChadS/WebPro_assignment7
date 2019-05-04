<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Album info</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <?php
require('db.php');
if (isset($_REQUEST['title'])) {
    $title       = stripslashes($_REQUEST['title']);
    $typeofalbum = stripslashes($_REQUEST['typeofalbum']);
    $material    = stripslashes($_REQUEST['material']);
    $price       = $_REQUEST['price'];
    $query       = "INSERT into `album` (title, typeofalbum, material, price) VALUES ('$title', '$typeofalbum', '$material','$price')";
    $result      = mysqli_query($con, $query);
    if ($result) {
        echo "<div class='container'>

<div><h1>SUCCESS!!!</h1></div>

<div><h3>Your album data inserted successfully.</h3><br/>Click here to <a href='viewalbum.php'>View</a></div></div>

</div>";
    }
} else {
?>
<div>

<div>
    <h1>Main Menu</h1></div>

<div >

<h2>Album Form</h2>

<form name="registration" action="" method="post">

<input type="text" name="title" placeholder="Title" required />

<input type="text" name="typeofalbum" placeholder="Genre" required />

<input type="text" name="material" placeholder="Material eg:CD,DVD..ect" required />

<input type="text" name="price" placeholder="Price" required>

<input type="submit" name="submit" value="Submit" />

</form>

<br /><br />

</div>

<?php
}
?>

</div>
    </body>
</html>