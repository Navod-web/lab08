<?php
// Process the login request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $username = $_POST['admin'];
    $password = $_POST['kavindu'];
    $user_token = $_POST['user_token'];

    // Expected login credentials
    $expected_username = 'admin';
    $expected_password = 'kavindu';

    // Check if the credentials are correct
    if ($username === $expected_username && $password === $expected_password) {
        // Successful login
        echo "Welcome, $username! You have logged in successfully.";
    } else {
        // Invalid login
        echo "Invalid username or password.";
    }
}
?>

