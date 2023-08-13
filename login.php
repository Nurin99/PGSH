<?php
// Start session
session_start();

// Simulated SQM staff credentials
$sqmUsername = 'sqm_user';
$sqmPassword = 'sqm1234*';

// Retrieve form data
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username'], $_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Authenticate SQM staff
    if ($username === $sqmUsername && $password === $sqmPassword) {
        // Authentication successful
        $_SESSION['username'] = $username; // Store username in session if needed
        header("Location: HOME.php"); // Redirect to a protected SQM staff page
        exit();
    } else {
        // Authentication failed
        header("Location: login.html?error=1"); // Redirect back to login with an error flag
        exit();
    }
}
?>
