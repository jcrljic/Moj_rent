<?php


//Konkcijski podatci
$server = 'localhost';
$username = 'root';
$database = 'auti';

//variable for simple connection to db
$db = mysqli_connect("localhost","root","","auti") or die("error");

if($db){
	if(mysqli_select_db($database,$db)){
		mysqli_query("SET NAMES utf8");
	}else{
		echo 'Errro on query!';
	}
}else{
	echo 'Database connection ERROR!';
}


?>