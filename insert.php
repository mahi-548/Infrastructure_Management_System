
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//$userid = "SELECT username FROM users"

$sql = "INSERT INTO iitj (id,userId,date,username,hostel_number,room_number,room_type,problem_id)
VALUES ('3', 'ug201310011', '2016-03-05','Bharti Gothwal','1','124','inside','f11');";


if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 