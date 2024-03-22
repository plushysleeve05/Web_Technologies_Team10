<?php
// Function to fetch rows from the database
require_once __DIR__ . '/../db/config.php';

function fetchRowsFromDatabasep() {
    global $conn; 

    // Check if the connection is established
    if (!$conn) {
        echo "Error: Could not connect to the database.";
        return array(); // Return an empty array in case of connection failure
    } 

    // Prepare SQL query
    $query = "SELECT RatingID, SongName, Lyrics, Melody, Vocals, OverallEnjoyment FROM Ratings";

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

$rows = fetchRowsFromDatabasep();

// Function to generate HTML table row
function generateTableRowp($rowData) {
    return "<tr>" .
        "<td>{$rowData['RatingID']}</td>" .
        "<td>{$rowData['SongName']}</td>" .
        "<td>{$rowData['Lyrics']} / 5</td>" .
        "<td>{$rowData['Melody']} / 5</td>" .
        "<td>{$rowData['Vocals']} / 5</td>" .
        "<td>{$rowData['OverallEnjoyment']} / 5</td>" .
       
        "</tr>";
}

?>
