<!-- login.php -->
<?php
session_start();

// Simulated user data from a database
$users = [
    'sqm_user' => ['password' => 'sqm_password', 'role' => 'SQM'],
    'regular_user' => ['password' => 'regular_password', 'role' => 'RegularStaff']
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($users[$username]) && $users[$username]['password'] === $password) {
        $_SESSION['user_role'] = $users[$username]['role'];
        header('Location: dashboard.php'); // Redirect to appropriate page
        exit();
    } else {
        echo 'Invalid credentials';
    }
}
?>
