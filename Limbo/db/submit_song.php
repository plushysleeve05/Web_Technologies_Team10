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
    $rate = intval($_POST["rate"]); // Convert rating to integer

    // Insert data into the database
    $query = "INSERT INTO song (Title, ReleaseDate, Genre, Album, ArtistName, GeneralThoughts, LinkToSong, Rating)
              VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare($query);

    if ($stmt) {
        $stmt->bind_param("sssssssi", $title, $releaseDate, $genre, $album, $artistName, $generalThoughts, $songLink, $rate);

        // Execute the statement
        if ($stmt->execute()) {
            header("Location: ../Limbo_main_page/blog/Community Page.php#myTable");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Error: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    // Redirect to the form page if accessed directly
    header("Location: ../carousel.main.html#add-song-form");
    exit();
}
?>
