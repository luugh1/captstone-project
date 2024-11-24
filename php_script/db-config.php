<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$dbName = "branditDB";

try {
    $connection = new PDO("mysql:host=$hostName; dbname=$dbName", $userName, $password);
    $connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $error) {
    echo $error -> getmessage();
}


?>