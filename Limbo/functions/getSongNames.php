<?php
// Function to fetch song names from the database
require_once __DIR__ . '/../db/config.php';

function getSongNames() {
    global $conn; 

    // Check if the connection is established
    if (!$conn) {
        echo "Error: Could not connect to the database.";
        return array(); // Return an empty array in case of connection failure
    } 

    // Prepare SQL query to select only the song titles
    $query = "SELECT Title FROM song";

    // Execute the query
    $result = mysqli_query($conn, $query);

    // Check for errors
    if (!$result) {
        echo "Error: " . mysqli_error($conn);
        return array(); // Return an empty array in case of query execution failure
    }

    // Fetch all song titles
    $songTitles = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $songTitles[] = $row['Title'];
    }

    // Free result set
    mysqli_free_result($result);

    // Close the connection (optional)
    // mysqli_close($conn);

    // Output the contents of $songTitles for debugging
    // echo "<pre>";
    // print_r($songTitles);
    // echo "</pre>";

    return $songTitles;
}

$songTitles = getSongNames();
// Example usage:
// foreach ($songNames as $songName) {
//     echo $songName . "<br>";
// }
?>