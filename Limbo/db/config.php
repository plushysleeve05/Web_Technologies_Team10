
<?php
// Database configuration
$host = 'localhost'; 
$username = 'root'; // database username
$password = 'cs341webtech'; // database password
$database = 'Limbo_music_database'; // database name

// Attempt to connect to the database
$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
