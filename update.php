<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE iitj SET problem_id='f12' WHERE userId='".$_SESSION["username"]."'";

if (mysqli_query($conn, $sql)) {
    echo "";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}


mysqli_close($conn);

?>