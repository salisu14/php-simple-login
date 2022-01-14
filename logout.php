<?php
	include_once('connection_db.php');
	session_start();
	session_destroy();
	#session_unset($_SESSION['username']);
	#session_unset($_SESSION['first_name']);
    #session_unset($_SESSION['last_name']);
	session_unset();

	header("Location:login_form.php");
?>

