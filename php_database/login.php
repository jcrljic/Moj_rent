<?php
	//include connection to database
	include('db_connection.php');

	$email = $_POST['email'];
	$password = $_POST['password'];
	echo $email;
	$query = "SELECT email, lozinka from registracija where email='".$email."' AND lozinka='".$password."'";
	$result = mysqli_query($query);
	
	if(!$result){
		$err = mysqli_error();
		echo "Error type: ".$err;
		exit();
	}
	
		$row = mysqli_fetch_row($result);
		printf($row);
		

	
	
	
?>