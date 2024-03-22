<?php
require_once __DIR__ . '/../db/config.php';

/**
 * Function to fetch playlist records from the database
 * Returns an array of playlist records
 */
function getPlaylist() {
    global $conn;

    // Check if the connection is established
    if (!$conn) {
        echo "Error: Could not connect to the database.";
        return array();
    
    }

    $query = "SELECT PlaylistID, Username, LinktoPlaylist FROM playlist";

    $result = mysqli_query($conn, $query);

    if (!$result) {
        echo "Error: " . mysqli_error($conn);
        return array(); // Return an empty array in case of query execution failure
    }

    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_free_result($result);



    // Output the contents of $rows for debugging
    // echo "<pre>";
    // print_r($rows);
    // echo "</pre>";

    return $rows;
}


?>
