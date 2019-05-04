
<?php
require('db.php');
$query  = "SELECT * FROM album";
$result = mysqli_query($con, $query);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . " | Title: " . $row["title"] . " | Type: " . $row["typeofalbum"] . " | Material: " . $row["material"] . " | Price: " . $row["price"] . " <br>";
    }
} else {
    echo "0 results";
}
?>

<a href="/Assignment_7/index.php"> Home</a>

