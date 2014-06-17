<html>
<head>

<link rel="stylesheet" type="text/css" href="style.css"/>
<title> Life as I know it. </title>
</head>

<body>

<?php 

$dbhost = $_SERVER['RDS_HOSTNAME'];
$dbuser = $_SERVER['RDS_USERNAME'];
$dbpass = $_SERVER['RDS_PASSWORD'];
$dbname = $_SERVER['RDS_DB_NAME'];
	
$accessPWD = $_SERVER['RDS_PASSWORD'];
	
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error connecting to mysql');
mysql_select_db($dbname);

include 'initdb.php'; 

mysql_close($conn);

?>

<div id="wrapper">
	<div id="header">
		<h2> Life as I know it.</h2>
	</div>
	<!-- end #header -->
	
	<div id="nav">
		<a href="index.php">Home</a>
		<a href="about.php">About</a>
		<a href="upload.php">New Stuff</a>
		<a href="contact.php">Contacts</a>
	</div>
	<!-- end #nav -->
	
	<div id="content">
	<p> adfasdfdfasd
	
	asdfadsfsdfa
	d
	asdfasdfasdfadsf
	asdfadf </p>
	
	<?php include 'displayfiles.php'; ?>

	</div> <!-- end #content -->
	
	<div id="footer">
	<p>Copyright &copy 2014 <u>Technical Academy</u></p>
	
	</div> <!-- end #footer -->
</div> <!-- End #wrapper -->

</body>

</html>