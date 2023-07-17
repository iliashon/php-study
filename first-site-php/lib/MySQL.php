<?php
$user = 'root';
$pass = 'root';
$host = 'localhost';
$db_name = 'first-site-php';
$port = 3306;

$dsn = 'mysql:host=' . $host . ';dbname=' . $db_name . ';port=' . $port;
$pdo = new PDO($dsn, $user, $pass);
