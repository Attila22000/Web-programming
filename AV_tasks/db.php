<?php

$servername = "localhost";
$username   = "attila22000";
$password   = "kWPHW3QA";
$dbname     = "wp_attila22000";

//create database connection

$conn = new mysqli($servername, $username, $password, $dbname);

//check connection

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

?>