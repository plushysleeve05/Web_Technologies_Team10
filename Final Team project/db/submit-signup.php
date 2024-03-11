<?php
$servername = ""; 
$username = ""; 
$password = ""; 
$dbname = "Limbo_music_database"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$UserID = $_POST['UserID'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];


if ($password !== $confirmPassword) {
    die("Passwords do not match");
}

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);


$sql = "INSERT INTO users (UserID, email, username, password) VALUES ('$UserID', '$email', '$username', '$hashedPassword')";

if ($conn->query($sql) === TRUE) {
    echo "Sign up successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
