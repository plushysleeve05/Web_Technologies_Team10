<?php
// Include the database configuration file
require_once '../db/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $songName = mysqli_real_escape_string($conn, $_POST['songName']);
    $lyrics_rate = mysqli_real_escape_string($conn, $_POST['lyrics_rate']);
    $vocals_rate = mysqli_real_escape_string($conn, $_POST['vocals_rate']);
    $melody_rate = mysqli_real_escape_string($conn, $_POST['melody_rate']);
    $enjoyment_rate = mysqli_real_escape_string($conn, $_POST['enjoyment_rate']);

    $query = "INSERT INTO ratings (SongName, Lyrics, Vocals, Melody, OverallEnjoyment) 
              VALUES ('$songName', '$lyrics_rate', '$vocals_rate', '$melody_rate', '$enjoyment_rate')";

    if (mysqli_query($conn, $query)) {
        echo "Ratings submitted successfully!";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>
