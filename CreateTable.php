<?php
include('includes/dbconnection.php');
?>

<?php
	
		
		$sql = "create table `Register`(Id INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY, `Name` VARCHAR(50) NOT NULL , `Email` VARCHAR(50) NOT NULL UNIQUE,
		         `MobileNumber` VARCHAR(11) NOT NULL , `Password` VARCHAR(100) NOT NULL, `ConfirmPassword` VARCHAR(100) NOT NULL )";
		
		if($con -> query($sql) === TRUE)
		{
			echo '<script>alert("Table is created")</script>';
		}
		else
		{
			echo '<script>alert("Table is not created")</script>';
		}
		

?>