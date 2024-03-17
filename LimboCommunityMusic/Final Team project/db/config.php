
<?php
// Database configuration
$host = '18.133.105.236/'; // database host (usually 'localhost')
$username = 'root'; // database username
$password = 'cs341webtech'; // database password
$database = 'Limbo_music_database'; // database name

// Attempt to connect to the database
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
