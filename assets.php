<html>
<head>
<title>Assets Table</title>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: center;
    padding: 8px;
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
	    <h1>Assets Table</h1>
        <table>
        <thead>
            <tr>
                <th>id</th>
                <th>username</th>
				<th>userId</th>
				<th>room number</th>
				<th>room type</th>
				<th>hostel number</th>
				<th>chair</th>
				<th>table</th>
				<th>fan</th>
				<th>tubelight</th>
				<th>switch board</th>
				<th>cleaning</th>
				<th>paint</th>
				<th>mosquito repellant</th>
				
            </tr>
        </thead>
        <tbody>
        <?php
            $connect = @mysql_connect("localhost","root", "");
            
            if (!$connect) {
                die(mysql_error());
            }
            mysql_select_db("demo");
            $results = mysql_query("SELECT * FROM assets ");
            while($row = mysql_fetch_array($results)) {
            ?>
                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['username']?></td>
					<td><?php echo $row['userId']?></td>
					<td><?php echo $row['roomNumber']?></td>
					<td><?php echo $row['roomType']?></td>
					<td><?php echo $row['hostelNumber']?></td>
					<td><?php echo $row['chair']?></td>
					<td><?php echo $row['table']?></td>
					<td><?php echo $row['fan']?></td>
					<td><?php echo $row['tubelight']?></td>
				    <td><?php echo $row['swicth Board']?></td>
				    <td><?php echo $row['cleaning']?></td>
					<td><?php echo $row['paint']?></td>
					<td><?php echo $row['Mosquito Repellant']?></td>
					
				</tr>

            <?php
            }
            ?>
            </tbody>
            </table>
    </body>
</html>