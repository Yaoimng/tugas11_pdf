<?php
$server = "localhost";
$username = "root";  // Replace with your database username
$password = "";      // Replace with your database password
$database = "tutorial";

// Create connection
$connect = mysqli_connect($server, $username, $password, $database);

// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
?>