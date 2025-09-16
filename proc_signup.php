<?php
require_once 'dashboard/includes/connect.php';

// Initialize message variables
$msg = '';
$comment = '';
$firstname = $lastname = $phone = $email = $password = '';

// Check if form submitted
if (isset($_POST['register'])) {
    // Collect & sanitize
    $firstname = trim($_POST['firstname']);
    $lastname  = trim($_POST['lastname']);
    $phone     = trim($_POST['phone']);
    $email     = trim($_POST['email']);
    $password  = trim($_POST['password']);

    // Validate inputs
    if ($firstname === '' || $lastname === '' || $phone === '' || $email === '' || $password === '') {
        $msg = 'error';
        $comment = 'All fields are required.';
        include('signup.php');
        exit;
    }

    // Check if phone or email already exists
    $stmt = $conn->prepare("SELECT id FROM signup_db WHERE phone = ? OR email = ?");
    $stmt->bind_param("ss", $phone, $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $msg = 'error';
        $comment = 'Email or Phone number already registered.';
        include('signup.php');
        exit;
    }
    $stmt->close();

    // Hash password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert new user
    $stmt = $conn->prepare("INSERT INTO signup_db (firstname, lastname, phone, email, password) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $firstname, $lastname, $phone, $email, $hashedPassword);

    if ($stmt->execute()) {
        $msg = 'success';
        $comment = 'Registration successful! You can now log in.';
    } else {
        $msg = 'error';
        $comment = 'Something went wrong. Please try again later.';
    }

    $stmt->close();
    $conn->close();

    // Return back to signup page with message
    include('signup.php');
    exit;
} else {
        // If page accessed directly
        header("Location: signup.php");
        exit;
}
