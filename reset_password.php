<?php
include('dashboard/includes/connect.php');

$user_id = intval($_POST['id'] ?? 0);
$new_pass = $_POST['password'] ?? '';

if ($user_id <= 0 || $new_pass === '') {
    header("Location: forgot_password.php?msg=error&comment=" . urlencode("Invalid request"));
    exit;
}

$hashed = password_hash($new_pass, PASSWORD_DEFAULT);

$stmt = $conn->prepare("UPDATE signup_db SET password = ? WHERE id = ?");
$stmt->bind_param("si", $hashed, $user_id);

if ($stmt->execute()) {
    header("Location: login.php?msg=success&comment=" . urlencode("Password updated successfully. Please log in."));
    exit;
} else {
    header("Location: forgot_password.php?msg=error&comment=" . urlencode("Something went wrong. Try again."));
    exit;
}
?>
