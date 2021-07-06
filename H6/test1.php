<?php
$host = 'localhost';
$db = 'school';
$user = 'root';
$password = '';

$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

try {$dbConnection = new PDO("mysql:host=$host;dbname=$db", $user, $password);
    $dbConnection->exec("set names utf8");
    $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $dbConnection;
}
catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}