<?php
// Database configuration
$host = '18.133.105.236'; // database host (usually 'localhost')
$username = 'root'; // database username
$password = 'cs341webtech'; // database password
$database = 'Limbo_music_database'; // database name

// Attempt to connect to the database
$mysqli = new mysqli($host, $username, $password, $database);

// Check the connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// If the connection is successful
echo "Connected successfully!";
?>
