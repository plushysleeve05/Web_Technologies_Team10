<?php
// Function to fetch rows from the database
require_once __DIR__ . '/../db/config.php';

function fetchRowsFromDatabase() {
    global $conn; 

    // Check if the connection is established
    if (!$conn) {
        echo "Error: Could not connect to the database.";
        return array(); // Return an empty array in case of connection failure
    } 

    // Prepare SQL query
    $query = "SELECT SongID, Title, ReleaseDate, Genre, Album, ArtistName, GeneralThoughts, LinkToSong, Rating FROM song";

    // Execute the query
    $result = mysqli_query($conn, $query);

    // Check for errors
    if (!$result) {
        echo "Error: " . mysqli_error($conn);
        return array(); // Return an empty array in case of query execution failure
    }

    // Fetch all rows
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // Free result set
    mysqli_free_result($result);

    // Close the connection (optional)
    // mysqli_close($conn);

    // Output the contents of $rows for debugging
    // echo "<pre>";
    // print_r($rows);
    // echo "</pre>";

    return $rows;
}

$rows = fetchRowsFromDatabase();

// Function to generate HTML table row
function generateTableRow($rowData) {
    // Convert the rating to stars representation using HTML entities

    return "<tr>" .
        "<td>{$rowData['SongID']}</td>" .
        "<td>{$rowData['Title']}</td>" .
        "<td>{$rowData['ReleaseDate']}</td>" .
        "<td>{$rowData['Genre']}</td>" .
        "<td>{$rowData['Album']}</td>" .
        "<td>{$rowData['ArtistName']}</td>" .
        "<td>{$rowData['GeneralThoughts']}</td>" .
        "<td><a href='{$rowData['LinkToSong']}' >Listen</a></td>" .
        "<td>{$rowData['Rating']} / 5</td>" .  // Display stars representing the rating
        "</tr>";
}

?>
