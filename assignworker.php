<html>
<head>
<title>Worker Table</title>
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
	    <h1>Worker Table</h1>
        <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Occupation</th>
				<th>History</th>
				
            </tr>
        </thead>
        <tbody>
        <?php
            $connect = @mysql_connect("localhost","root", "");
            
            if (!$connect) {
                die(mysql_error());
            }
            mysql_select_db("demo");
            $results = mysql_query("SELECT * FROM worker ");
            while($row = mysql_fetch_array($results)) {
            ?>
                <tr>
                    <td><?php echo $row['Name']?></td>
                    <td><?php echo $row['Occupation']?></td>
					<td><?php echo $row['History']?></td>
					
                </tr>

            <?php
            }
            ?>
            </tbody>
            </table>
    </body>
</html>