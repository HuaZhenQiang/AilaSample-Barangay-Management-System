<?php
define('host', 'localhost');
define('user', 'root');
define('password', '');
define('dbname', 'bms');
$pdo = null;

$con = new mysqli('localhost', 'root', '', 'bms');

if (!$con) {
    die('Connection Failed' . mysqli_connect_error());
}

try {
    $pdo = new PDO('mysql:host=' . constant('host') . ';dbname=' . constant('dbname') . ';charset=utf8mb4', constant('user'), constant('password'));
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection Failed: ' . $e->getMessage();
    die();
}
?>
