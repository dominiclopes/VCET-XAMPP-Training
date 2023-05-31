<?php
if(isset($_POST['submit']))
{
	require 'Connect.php';
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$birthdate = $_POST['birthdate'];

	$insertsql = "INSERT INTO birthday_data(`first_name`,`last_name`,`birthdate`) VALUES ('$fname','$lname','$birthdate')";
	mysqli_query($conn, $insertsql);
	echo "Your friend's birthday has been saved";
	}
else
{
	echo "Incorrect way of using this page";
}
header('refresh:3;url=SavetheBirthDate.html');
?>