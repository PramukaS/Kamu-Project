<?php
//main connection file for both admin & front end
$host = "localhost";
$username = "root";
$password = "";
$db = "kamu";

// Create connection
$con = new mysqli($host, $username, $password, $db);

// Check connection
if (!$con)
{       //checking connection to DB
    die("Connection failed: " . mysqli_connect_error());
}

?>