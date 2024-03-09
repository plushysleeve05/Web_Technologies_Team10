<?php
// Database configuration
$host = 'localhost'; // database host (usually 'localhost')
$username = 'root'; // database username
$password = 'ayobalima'; // database password
$database = 'Limbo_music_database'; // database name

// Attempt to connect to the database
$mysqli = new mysqli($host, $username, $password, $database);

// Check the connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>
