<html>
<head>
<title>Complain Table</title>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align:center;
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
	    <h1>Complain Table</h1>
        <table>
        <thead>
            <tr>
                
                <th>date</th>
				<th>userId</th>
				<th>userName</th>
				<th>hostelNumber</th>
				<th>roomNumber</th>
				<th>roomType</th>
				<th>problemDescription</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $connect = @mysql_connect("localhost","root", "");
            
            if (!$connect) {
                die(mysql_error());
            }
            mysql_select_db("demo");
            $results = mysql_query("SELECT * FROM complainregister ");
            while($row = mysql_fetch_array($results)) {
            ?>
                <tr>
                    <td><?php echo $row['Date']?></td>
                    <td><?php echo $row['userId']?></td>
					<td><?php echo $row['userName']?></td>
					<td><?php echo $row['hostelNumber']?></td>
					<td><?php echo $row['roomNumber']?></td>
					<td><?php echo $row['roomType']?></td>
					<td><?php echo $row['problemDescription']?></td>
                </tr>

            <?php
            }
            ?>
            </tbody>
            </table>
    </body>
</html>