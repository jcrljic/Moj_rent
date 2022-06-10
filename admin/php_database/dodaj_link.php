<?php
	//include connection to database
	include('db_connection.php');
	
	
	$naziv = $_POST['naziv'];
	$datum = date('Y-m-d H:I:S');
	
	$query = "INSERT INTO link (naziv, datum) VALUES ('$naziv','$datum')";
	$result  = @mysqli_query($db, $query);
	
		if(!$result)
		{
			$err = @mysqli_error;
			echo "Error type: ".$err;
			exit();
		}
		else
		{
			header('Location: ../dodaj_link.php');
			//echo' Unjeli ste zapis u bazu!';
			exit(0);
		}

mysqli_close();
?>