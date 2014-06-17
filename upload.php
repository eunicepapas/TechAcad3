<html>
<head>

<link rel="stylesheet" type="text/css" href="style.css"/>
<title> Life as I know it. </title>
</head>

<body>

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
	 Keep this page updated. Go ahead and share new stuff! 
	 <br>
	 <br>
<form action="addfile.php" method="post" enctype="multipart/form-data">
<label for="file">Filename:</label>
<input name="MAX_FILE_SIZE" value="102400" type="hidden">
<input name="image" accept="image/jpeg" type="file">
<input value="Submit" type="submit">
</form>
	</div> <!-- end #content -->

	
	<div id="footer">
	
	</div> <!-- end #footer -->
</div> <!-- End #wrapper -->

</body>

</html>
