<?php
// Database credentials
$servername = "localhost"; // Change if using a remote database
$username = "root"; // Change to your MySQL username
$password = ""; // Change to your MySQL password
$database = "CeylonExplorer"; // Ensure this matches your created database

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set charset to UTF-8
$conn->set_charset("utf8");

// Uncomment for debugging
// echo "Connected successfully";

?>
