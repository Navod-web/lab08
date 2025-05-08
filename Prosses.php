<?php
// process.php
session_start(); // Start the session

// Capture POST data
$username = $_POST['username'];
$password = $_POST['password'];
$user_token = $_POST['user_token'];

// Validate login credentials (for example purposes)
if ($username == "YourName" && $password == "YourStudentID") {
    // Set session variable
    $_SESSION['user'] = $username;

    // Redirect to welcome page
    header("Location: welcome.php");
    exit();
} else {
    // Redirect to login page with error
    header("Location: login.html?error=invalid");
    exit();
}
?>
