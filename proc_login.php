<?php
session_start();
require_once 'dashboard/includes/connect.php';

// 1) Get inputs safely
$email = strtolower(trim($_POST['email'] ?? ''));
$password = $_POST['password'] ?? '';

// 2) Basic validation
if ($email === '' || $password === '') {
    $_SESSION['msg'] = "Please enter your email and password.";
    header("Location: login.php");
    exit();
}

// 3) Check if user exists
$stmt = $conn->prepare("SELECT id, firstname, lastname, phone, email, password FROM signup_db WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();

    // 4) Verify password
    if (password_verify($password, $user['password'])) {
        // Success → store user info in session
        $_SESSION['user_id']   = $user['id'];
        $_SESSION['firstname'] = $user['firstname'];
        $_SESSION['lastname']  = $user['lastname'];
        $_SESSION['phone']     = $user['phone'];
        $_SESSION['email']     = $user['email'];

        $_SESSION['msg'] = "Welcome back, " . htmlspecialchars($user['firstname']) . "!";
        header("Location: dashboard.php");
        exit();
    } else {
        $_SESSION['msg'] = "Invalid password.";
        header("Location: login.php");
        exit();
    }
} else {
    $_SESSION['msg'] = "No account found with that email.";
    header("Location: login.php");
    exit();
}

$stmt->close();
$conn->close();
?>
