<?php
include 'config.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

// Validate form fields
if (empty($email) || empty($username) || empty($password)) {
    die("All fields are required");
}

// Hash the password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Check if the user already exists
$stmt = $conn->prepare("SELECT UserID FROM user WHERE Email = ? OR Username = ?");
$stmt->bind_param("ss", $email, $username);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    // User already exists, redirect to login page
    header("Location: ../home/login.html");
    exit;
}

$stmt->close();

// Insert the new user
$stmt = $conn->prepare("INSERT INTO user (Username, Email, Password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $username, $email, $hashedPassword);

if ($stmt->execute()) {
    echo "Sign up successful!";
    // Redirect to the Community Page
    header("Location: ../Limbo_main_page/blog/Community Page.php");
    exit;
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
