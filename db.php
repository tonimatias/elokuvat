<?php

require 'myconf.php';
$dsn = "mysql:host=$host;dbname=$database;charset=UTF8";
try {
	$pdo = new PDO($dsn, $user, $password);
    echo "Connected!";
} catch (PDOException $e) {
	echo $e->getMessage();
} 