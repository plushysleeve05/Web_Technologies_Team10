<?php
include 'config.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

if (empty($email) || empty($username) || empty($password)) {
    die("All fields are required");
}

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$stmt = $conn->prepare("SELECT UserID FROM user WHERE Username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    // Username already exists, reload sign-up page with error message
    echo "<script>window.location.href = '../home/signup.php?error=Username%20already%20exists.%20Please%20choose%20a%20different%20username';</script>";
} else {
    $stmt = $conn->prepare("INSERT INTO user (Username, Email, Password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $hashedPassword);

    if ($stmt->execute()) {
        header('Location: ../home/login.php');
    } else {
        echo "<script>alert('Error: " . $stmt->error . "');</script>";
    }
}

$stmt->close();
$conn->close();
?>
