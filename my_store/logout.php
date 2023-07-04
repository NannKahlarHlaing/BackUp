<?php 
	session_start();

	unset($_SESSION['loginStatus']);
	unset($_SESSION['loginUser']);

	header('location: index.php');
	
 ?>