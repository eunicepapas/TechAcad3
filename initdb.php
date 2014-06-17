<?php

//create table
$query = 'CREATE TABLE IF NOT EXISTS upload (
id tinyint(3) unsigned NOT NULL auto_increment,
image blob NOT NULL,
PRIMARY KEY(id)
)';

$result = mysql_query($query);

//close db 
mysql_close($conn);
?>