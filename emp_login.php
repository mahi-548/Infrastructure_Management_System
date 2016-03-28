
<?php

$username = $_POST['username'];
$password = $_POST['password'];

if($username && $password)
{
	$connect=@mysql_connect("localhost","root","") or die("Couldn't connect to the database");
	mysql_select_db("demo") or die("Couldn't find the database");
	$query = mysql_query("SELECT * FROM employee WHERE username='$username'");
	$numrows = mysql_num_rows($query);
	if($numrows!==0)
	{
		while($row = mysql_fetch_assoc($query))
		{
			$dbusername = $row['username'];
			$dbpassword = $row['password'];
		}
		if($username == $dbusername && $password == $dbpassword)
		{
			
			header("location:admin_login.php");
			@$_SESSION['username'] = $username;
		}
		else
			echo "Your Password is incorrect!";
	}
	else
		die("That user doesn't exist");
}   
   
else
	die("Please enter a username and password");

?>
 