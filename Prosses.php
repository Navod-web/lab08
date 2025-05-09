<?php
// process.php
session_start(); // Start the session

// Capture POST data
$username = $_POST['admin'];
$password = $_POST['kavindu'];
$user_token = $_POST['user_token'];

// Validate login credentials (for example purposes)
if ($username == "admin" && $password == "kavindu") {
    // Set session variable
    $_SESSION['admin'] = $username;

    // Redirect to welcome page
    header("Location: welcome.php");
    exit();
} else {
    // Redirect to login page with error
    header("Location: login.html?error=invalid");
    exit();
}
?>
