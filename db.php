<?php
// Connect to MySQL server, select database
	$servername = "mysql.eecs.ku.edu";
	$username = "c747b428";
	$password = "ni9Theem";
	$dbname = "c747b428";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully";

// Send SQL query
	$query = 'SELECT * FROM CRUISE';
	$result = mysqli_query($conn, $query) or die('Query failed: ' . mysql_error());

// Print results in HTML
	echo "<table>\n";
	while ($line = mysqli_fetch_array($result, MYSQL_ASSOC)) {
    		echo "\t<tr>\n";
    		foreach ($line as $col_value) {
        		echo "\t\t<td>$col_value</td>\n";
    		}
    		echo "\t</tr>\n";
	}
	echo "</table>\n";

	echo "Number of fields: ".mysql_num_fields($result)."<br>";
	echo "Number of records: ".mysql_num_rows($result)."<br>";

// Free resultset
	mysql_free_result($result);

// Close connection
	mysql_close($link);
?> 
