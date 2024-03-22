<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include 'config.php';


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve username and password from the form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate form fields
    if (empty($email) || empty($password)) {
        die("Username and password are required");
    }

    // Prepare SQL statement to retrieve user data
    $stmt = $conn->prepare("SELECT * FROM user WHERE Email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if (!$result) {
        die("Error executing query: " . $conn->error);
    }
    

    // Check if the user exists
    if ($result->num_rows > 0) {
    // Fetch user data
    $row = $result->fetch_assoc();
    // Verify password
    if (password_verify($password, $row['Password'])) {
        // Password is correct, redirect to success page
        header("Location: ../Limbo_main_page/blog/Community Page.php");
        $_SESSION['username'] = $email; 
        exit;
    } else {
        // Password is incorrect
        echo '<script>alert("Incorrect password");</script>';
    }
} else {
    // User does not exist
    echo '<script>alert("User does not exist");</script>';
}


    // Close statement and database connection
    $stmt->close();
    $conn->close();
}
?>