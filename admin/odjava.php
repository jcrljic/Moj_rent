<!DOCTYPE HTML>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>O nama_rent_a_car</title>
	<link rel="stylesheet" href="../css/style.css" type="text/css">
</head>
<body>
<?php
	# Stop Hacking attempt
    define('__APP__', TRUE);

	# Start session
	session_start();
	
	unset($_POST);
	unset($_SESSION['user']);

	$_SESSION['user']['valid'] = 'false';
	$_SESSION['message'] = '<p>See you again soon!</p>';
	
	header("Location: ../index.php");
	exit;
?>
</body>	