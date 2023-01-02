

<?php

$con=mysqli_connect("localhost","root","");
/*	if($con == fALSE)
	{
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}*/
	
$sql = "create database simplepages";

	if(mysqli_query($con,$sql))
	{
		echo '<script>alert("Database created successfully")</script>';
	} 
	
?>