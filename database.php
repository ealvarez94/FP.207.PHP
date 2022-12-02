<?php

	$username = 'root';
	$password = '123456';
	$database = 'producto2';
    $connection = null;

try {

	$connection = new PDO('mysql:host=localhost;dbname=producto2;',$username,$password);
} catch (PDOException $e) {
	die('Connection Failed: '.$e->getMessage());
}

?>
