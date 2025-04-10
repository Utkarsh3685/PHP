<?php
$servername = "localhost";
$username = "root";   // Default username for localhost
$password = "";       // Default password for localhost (empty)

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE car_selection";
if ($conn->query($sql) === TRUE) {
    echo "Database 'car_selection' created successfully!";
} else {
    echo "Error creating database: " . $conn->error;
}

// Close connection
$conn->close();
 echo "<br/>This program is written by Utkarsh";

?>
