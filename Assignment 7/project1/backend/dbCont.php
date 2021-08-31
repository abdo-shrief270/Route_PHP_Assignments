<?php

$server = "localhost";
$dbName  = "assginment7";
$userName = "root";
$password = "";

try {
    $cont = new PDO("mysql:host=$server;dbname=$dbName", $userName, $password);
} catch (PDOException $e) {
    echo "error : " . $e->getMessage();
}
