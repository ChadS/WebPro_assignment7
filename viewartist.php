<?php
require('db.php');
$query  = "SELECT * FROM artist";
$result = mysqli_query($con, $query);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . " | Name: " . $row["artistname"] . " | Email: " . $row["artistemail"] . " | # Number: " . $row["artistphone"] . " | Date: " . $row["date"] . " <br>";
    }
} else {
    echo "0 results";
}
?>

<a href="/Assignment_7/index.php"> Home</a>