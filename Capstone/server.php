<?php
$host = 'localhost'; // Replace with your MySQL server host
$database = 'project'; // Replace with your database name
$username = 'root'; // Replace with your database username
$password = ''; // Replace with your database password

// Create a connection
$connection = mysqli_connect($host, $username, $password, $database);

// Check the connection
if (!$connection) {
    die('Connection failed: ' . mysqli_connect_error());
}

// Perform your database operations here

// Close the connection
//mysqli_close($connection);
?>
