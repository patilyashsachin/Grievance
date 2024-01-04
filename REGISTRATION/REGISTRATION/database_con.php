<?php
$servername = "localhost"; // Change this to your database server name if it's not localhost
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$database = "yash"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
