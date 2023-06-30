<?php
// Start the session
session_start();

// Check if the logout button was clicked
if (isset($_POST['logout'])) {
    // Unset the session variables
    unset($_SESSION['username']);
    unset($_SESSION['email']);
    // Add any other session variables that you want to unset

    // Destroy the session
    session_destroy();

    // Redirect to the login page or any other page you desire
    header("Location: sign_up.php");
    exit();
}
?>
