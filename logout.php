<?php 

	session_start();
	session_unset();
	session_destroy();
	setcookie("rememberUser", "", time() -3600);
	setcookie("rememberPass", "", time() -3600);

	header("Location: index.php");
	exit();
?>