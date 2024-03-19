<?php
// Include the database configuration file
require_once '../db/config.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize inputs
    $songName = mysqli_real_escape_string($conn, $_POST['songName']);
    $lyrics = mysqli_real_escape_string($conn, $_POST['lyrics']);
    $vocals = mysqli_real_escape_string($conn, $_POST['vocals']);
    $melody = mysqli_real_escape_string($conn, $_POST['melody']);
    $overallEnjoyment = mysqli_real_escape_string($conn, $_POST['overallEnjoyment']);

    // Insert data into the database
    $query = "INSERT INTO Ratings (SongName, Lyrics, Vocals, Melody, OverallEnjoyment) 
              VALUES ('$songName', '$lyrics', '$vocals', '$melody', '$overallEnjoyment')";

    // Execute query
    if (mysqli_query($conn, $query)) {
        echo "Ratings submitted successfully!";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>
