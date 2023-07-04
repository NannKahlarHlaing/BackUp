<?php 

$host = "localhost";

$db_user = "root";

$db_password = "";

$db_name = "my_store";

try{
	$conn = new PDO("mysql:host=$host;dbname=$db_name", $db_user, $db_password);

	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
} catch(Exception $e) {

	echo $e->getMessage();
}


include 'functions.php';

$obj = new MyDBOperations($conn);


?>