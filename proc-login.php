<?php
session_start();
include('dashboard/includes/connect.php');

// 1) Get inputs safely (no escaping on password!)
$email = strtolower(trim($_POST['email'] ?? ''));
$password = $_POST['password'] ?? '';

// 2) Basic validation
if ($email === '' || $password === '') {
    $msg = 'error';
    $comment = 'Please enter your email and password';
    include('login.php');
    exit;
}

// 3) Lookup user by email (prepared statement)
$stmt = $conn->prepare("SELECT id, email, password FROM signup_db WHERE LOWER(email) = ? LIMIT 1");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($user = $result->fetch_assoc()) {
    $hash = $user['password'];

    // 4) If you have old rows saved in plaintext, detect & fix them
    $info = password_get_info($hash); // ['algo' => 0] means "not a hash"
    if ($info['algo'] === 0) {
        // Old plaintext row: hash it now so login keeps working
        $newHash = password_hash($hash, PASSWORD_DEFAULT);
        $fix = $conn->prepare("UPDATE signup_db SET password = ? WHERE id = ?");
        $fix->bind_param("si", $newHash, $user['id']);
        $fix->execute();
        $hash = $newHash;
    }

    // 5) Verify password
    if (password_verify($password, $hash)) {
        // Optional: upgrade hash if PHP recommends it
        if (password_needs_rehash($hash, PASSWORD_DEFAULT)) {
            $newHash = password_hash($password, PASSWORD_DEFAULT);
            $rehash = $conn->prepare("UPDATE signup_db SET password = ? WHERE id = ?");
            $rehash->bind_param("si", $newHash, $user['id']);
            $rehash->execute();
        }

        // 6) Success: set session and redirect
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_email'] = $user['email'];
        header("Location: candidate_dashboard.php");
        exit;
    }
}

// Anything else → generic error
$msg = 'error';
$comment = 'Invalid email or password';
include('login.php');
exit;
