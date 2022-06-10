<?php
	//include connection to database
	include('db_connection.php');
	
	
	$name  = $_POST['name'];
	$surname = $_POST['surname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$date = date('Y-m-d H:I:S');
	
	$query = "insert into registracija (ime, prezime, email, lozinka, datum) values ('$name','$surname','$email','$password','$date')";
	$result  = @mysqli_query($query);
	
	if(!result){
		$err = mysql_error;
		echo "Error type: ".$err;
		exit();
	}else{
		header('Location: ../login.php');
		exit(0);
	}
mysqli_close();
?>*