<?php

include "config.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input data
    $title = htmlspecialchars(trim($_POST["title"]));
    $releaseDate = htmlspecialchars(trim($_POST["releaseDate"]));
    $genre = htmlspecialchars(trim($_POST["genre"]));
    $album = htmlspecialchars(trim($_POST["album"]));
    $artistName = htmlspecialchars(trim($_POST["artistName"]));
    $generalThoughts = htmlspecialchars(trim($_POST["generalThoughts"]));
    $songLink = htmlspecialchars(trim($_POST["songLink"]));

    // Insert data into the database
    $query = "INSERT INTO Song (Title, ReleaseDate, Genre, Album, ArtistName, `General Thoughts About Song`, `Link to Song (Spotify, Apple music, etc..)`)
              VALUES (?, ?, ?, ?, ?, ?, ?)";

    // Use prepared statement to prevent SQL injection
    $stmt = $mysqli->prepare($query);

    if ($stmt) {
        $stmt->bind_param("sssssss", $title, $releaseDate, $genre, $album, $artistName, $generalThoughts, $songLink);

        // Execute the statement
        if ($stmt->execute()) {
            echo "Song submitted successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Error: " . $mysqli->error;
    }

    // Close the database connection
    $mysqli->close();
} else {
    // Redirect to the form page if accessed directly
    header("Location: ../carousel.main.html#add-song-form");
    exit();
}
?>
