<?php
// Check if a file has been uploaded
if(isset($_FILES['image'])) {
    // Make sure the file was sent without errors
    if($_FILES['image']['error'] == 0) {
        // Connect to the database
        
			$dbhost = $_SERVER['RDS_HOSTNAME'];
			$dbuser = $_SERVER['RDS_USERNAME'];
			$dbpass = $_SERVER['RDS_PASSWORD'];
			$dbname = $_SERVER['RDS_DB_NAME'];
			
			$accessPWD = $_SERVER['RDS_PASSWORD'];
			
			$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error connecting to mysql');
			mysql_select_db($dbname);
			        
			if (isset($_FILES['image']) && $_FILES['image']['size'] > 0) {
			
				// Temporary file name stored on the server
				$tmpName  = $_FILES['image']['tmp_name'];
			
				// Read the file
				$fp      = fopen($tmpName, 'r');
				$data = fread($fp, filesize($tmpName));
				$data = addslashes($data);
				fclose($fp);
			
			
				// Create the query and insert
				// into our database.
				$query = "INSERT INTO upload ";
				$query .= "(image) VALUES ('$data')";
				$results = mysql_query($query, $conn) or die(mysql_error());
			
				// Print results
				print "Thank you, your file has been uploaded.";
			
			}
			else {
				print "No image selected/uploaded";
			}
    }

    // Close the mysql connection
    mysql_close($conn);
}
?>