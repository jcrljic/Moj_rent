<?php
	//include connection to database
	include('db_connection.php');

	$email = $_POST['email'];
	$password = $_POST['password'];

	$query = "SELECT email, lozinka FROM registracija WHERE email='".$email."' AND lozinka='".$password."'";
	$result = @mysqli_query($db, $query);
	
	if(!$result){
		$err = mysqli_error();
		echo "Error type: ".$err;
		exit();
	}else{
	
		$row = mysqli_fetch_row($result);
		
		if($email== $row[0] and $password==$row[1]){
			header("Location: http://localhost/moj_rent/admin/index.php");
			exit(0);
		}else{
			header("Location: http://localhost/moj_rent/login.php");
			exit(0);
			
		}
	}
	mysqli_close();
	
	
	
?>