<?php 
session_start(); // Start the session

// Check if user is logged in
if (!isset($_SESSION['user'])) {
    header("Location: login.html");
    exit();
}

include 'header.inc'; // Include header

echo "<h2>Welcome, " . $_SESSION['user'] . "!</h2>";
echo "<p>You are logged in.</p>";

include 'footer.inc'; // Include footer
?>
