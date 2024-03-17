<?php
$servername ='' ;
$username ='';
$password = '';
$database = "Limbo_music_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userID = $conn->real_escape_string($_POST['UserID']);
    $username = $conn->real_escape_string($_POST['Username']);
    $password = $conn->real_escape_string($_POST['Password']);
    $email = $conn->real_escape_string($_POST['Email']);

    // Insert user data into the database
    $sql = "INSERT INTO users (UserID, Username, Password, Email) VALUES ('$userID','$username', '$password', '$email')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
