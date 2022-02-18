<?php

$dbHost = "localhost:3308";
$dbUsername = "root";
$dbPassword = "";
$dbName = "arbinds_login_system";

$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

if(!$conn) {
    die("Database Connection Error:".mysqli_connect_error());

}