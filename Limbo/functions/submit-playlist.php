<?php
require_once '../db/config.php';

require_once '../functions/session.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    global $conn;
    
    $songLink = mysqli_real_escape_string($conn, $_POST['songLink']);

    $username = $_SESSION['username'];

    $query = "INSERT INTO playlist (Username, LinktoPlaylist) 
              VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ss", $username, $songLink);

    if (mysqli_stmt_execute($stmt)) {
        header('Location: ../Limbo_main_page/blog/Community Page.php');
    } else {
        echo "Error: Unable to submit playlist.";
    }

    // Close statement
    mysqli_stmt_close($stmt);
}
?>
