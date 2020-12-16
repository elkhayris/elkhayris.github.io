<?php

// Params to connect to a database
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "phptutorial";

// Connect to database
$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$conn){
    die("Database Connection Failed!");
}
?>