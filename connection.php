<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'bms');
$pdo = null;


$con=new mysqli('localhost', 'root', '', 'bms');

if(!$con){
	die('Connection Failed'.mysqli_connect_error());
	//die(mysqli_error($con));
}


try {
	$pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME. ";charset=utf8mb4", DB_USER, DB_PASSWORD);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	echo 'Connection Failed: ' . $e->getMessage();
	die();
}

?>












<?php
defined('BASEPATH') OR exit('No direct script access allowed'); //prevent direct script access
$host = 'localhost';
$user = 'root'; //replace with your database username
$password = ''; //replace with your database password
$dbname = 'bms'; //replace with your database name
$dsn = '';

try{
    $dsn = 'mysql:host='.$host. ';dbname='.$dbname;

    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo 'connection failed: '.$e->getMessage();
}
?>