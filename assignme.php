<!DOCTYPE html>
<html>
<head>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 12px;
	font:18px arial, sans-serif;
	font-weight: 20%;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #ff9933;
    color: white;
	font:22px arial, sans-serif;
}
h1{
	font:30px arial, sans-serif;
}
input{
	background-color:#ccccb3;
	height:30px;
}
</style>
</head>
<body>

<h1>Assign Worker</h1>

<table>
  <tr>
    <th>Name</th>
    <th>Occupation</th>
    <th>Contact Number</th>
    <th>Assign Worker</th>
  </tr>
  <tr>
    <td>Ram Singh</td>
    <td>Electrician</td>
    <td>9887171260</td>
	<td><form action="ramsingh.php" method="post"><input type="submit" value="Assign Me!"></form></td>
  </tr>
  <tr>
    <td>Shyam lal</td>
    <td>Plumber</td>
    <td>9887171260</td>
	<td><form action="shyamlal.php" method="post"><input type="submit" value="Assign Me!"></form></td>
  </tr>
  <tr>
    <td>Aayush</td>
    <td>Carpenter</td>
    <td>9887171260</td>
	<td><form action="aayush.php" method="post"><input type="submit" value="Assign Me!"></td>
	
  </tr>
  <tr>
    <td>Abhinav</td>
    <td>Cleaner</td>
    <td>9887171260</td>
	<td><form action="abhinav.php" method="post"><input type="submit" value="Assign Me!"></td>
</tr>
<tr>
    <td>Ramesh</td>
    <td>Electrician</td>
    <td>9887171260</td>
	<td><form action="ramesh.php" method="post"><input type="submit" value="Assign Me!"></td>
</tr>
</table>

</body>
</html>