<?php
# Connection information
$servername='localhost';
$username='root';
$password='';
$dbname='testdb';

# Connecting the database
$conn=new mysqli($servername, $username, $password, $dbname);
if(!$conn)
	echo "Cant establish connection";
?>
