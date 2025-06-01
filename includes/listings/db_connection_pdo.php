<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$hostname = 'localhost';
$database = 'myAimBuddyDB';
$username = 'username';
$password = 'password';

function connectDatabase($hostname, $database, $username, $password) {
    try {
        $conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully";
        
        return $conn;
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();

        return null;
    }
}

$db = connectDatabase($hostname, $database, $username, $password);

?>