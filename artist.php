<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Artist Form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['artistname'])) {
    $artistname  = stripslashes($_REQUEST['artistname']); // removes backslashes
    $artistemail = stripslashes($_REQUEST['artistemail']);
    $artistphone = stripslashes($_REQUEST['artistphone']);
    $date        = date("Y-m-d H:i:s");
    $query       = "INSERT into `artist` (artistname, artistemail, artistphone, date) VALUES ('$artistname', '$artistemail', '$artistphone', '$date')";
    $result      = mysqli_query($con, $query);
    if ($result) {
        echo "<div class='form'><h3>Your are artist details submited successfully.</h3><br/>Click here to <a href='index.php'> Home</a></div>";
    }
} else {
?><div>

<div ><h1>Welcome to Our Site</h1></div>

<div >

<h2>Artist Form</h2>

<form name="registration" action="" method="post">

<input type="text" name="artistname" placeholder="Artist Name" required />

<input type="email" name="artistemail" placeholder="Artist Email" required />

<input type="text" name="artistphone" placeholder="Artist Phone" required />

<input type="submit" name="submit" value="Submit" />

</form>

<br /><br />

</div>

<?php
}
?>
</body>
</html>