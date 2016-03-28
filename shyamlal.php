
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
//$name = $_POST['name'];

$sql = "UPDATE worker SET history=history+1 WHERE name='Shyam lal'";

if (mysqli_query($conn, $sql)) {
    echo "Worker Assigned Successfully.";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}


mysqli_close($conn);

?>
 