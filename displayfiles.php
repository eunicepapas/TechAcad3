<?php

// Connect to the database
$dbhost = $_SERVER['RDS_HOSTNAME'];
			$dbuser = $_SERVER['RDS_USERNAME'];
			$dbpass = $_SERVER['RDS_PASSWORD'];
			$dbname = $_SERVER['RDS_DB_NAME'];
			
			$accessPWD = $_SERVER['RDS_PASSWORD'];
			
			$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error connecting to mysql');
			mysql_select_db($dbname);

// Query for a list of all existing files
$sql = 'SELECT `id`, `image` FROM `upload`';
$result = $conn->query($sql);

// Check if it was successfull
if($result) {
	// Make sure there are some files in there
	if($result->num_rows == 0) {
		echo '<p>There are no files in the database</p>';
	}
	else {
		// Print each file
		while($row = $result->fetch_assoc()) {
			echo "
				<tr>
				<td>{$row['image']}</td>
				</tr>";
		}

		// Close table
		echo '</table>';
		}

		// Free the result
		$result->free();
		}
		else
		{
		echo 'Error! SQL query failed:';
				echo "<pre>{$conn->error}</pre>";
}

// Close the mysql connection
mysql_close($conn);
	?>