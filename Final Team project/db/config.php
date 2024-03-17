<?php
// Database configuration
$host = 'localhost'; // database host (usually 'localhost')
$username = 'root'; // database username
$password = 'ayobalima'; // database password
$database = 'Limbo_music_database'; // database name

// Attempt to connect to the database
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// If the connection is successful
echo "Connected successfully!";
?>
