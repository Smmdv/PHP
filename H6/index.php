<?php


$host = 'localhost';
$db = 'school';
$user = 'root';
$password = '';

$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

try {
    $pdo = new PDO($dsn, $user, $password);

    if ($pdo) {
        echo "Connection tot $db gelukt <br>";

    }
} catch (PDOException $e) {
    echo $e->getMessage();
}

$sql = "SELECT * FROM student";
$statement = $pdo->prepare($sql);
$statement->execute();
$tables = $statement->fetchAll(PDO::FETCH_NUM);
foreach($tables as $table){
    echo $table[1], '<br>';
}
include("C:/wamp64/www/PHP-main/H6/login.php");