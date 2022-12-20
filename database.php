<?php
$databaseHost = 'localhost';
$databaseName = 'crm';
$databaseUsername = 'root';
$databasePassword = '';

$conn =  mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
?>