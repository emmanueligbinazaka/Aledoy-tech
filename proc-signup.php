<?php
include('dashboard/includes/connect.php');

$name     = trim($_POST['firstname'] ?? '');
$lastname = trim($_POST['lastname'] ?? '');
$phone    = trim($_POST['phone'] ?? '');
$email    = strtolower(trim($_POST['email'] ?? ''));
$password = $_POST['password'] ?? '';

// 1. Validation
if ($name === '' || $lastname === '' || $phone === '' || $email === '' || $password === '') {
    $msg = 'error';
    $comment = 'All fields are required';
    include('signup.php');
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $msg = 'error';
    $comment = 'Please enter a valid email';
    include('signup.php');
    exit;
}

if (strlen($phone) != 11) {
    $msg = 'error';
    $comment = 'Please enter a valid phone number';
    include('signup.php');
    exit;
}

// 2. Check for duplicates
$stmt = $conn->prepare("SELECT id FROM signup_db WHERE email = ? OR phone = ? LIMIT 1");
$stmt->bind_param("ss", $email, $phone);
$stmt->execute();
$dup = $stmt->get_result();

if ($dup->num_rows > 0) {
    $msg = 'error';
    $phone = '';
    $email = '';
    $comment = 'Email or phone number already registered';
    include('signup.php');
    exit;
}

// 3. Hash password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// 4. Insert into DB
$stmt = $conn->prepare("
    INSERT INTO signup_db (firstname, lastname, email, phone, password, date_created) 
    VALUES (?, ?, ?, ?, ?, NOW())
");
$stmt->bind_param("sssss", $name, $lastname, $email, $phone, $hashed_password);

if ($stmt->execute()) {
    header("Location: login.php?signup=success");
    exit;
} else {
    $msg = 'error';
    $comment = 'Something went wrong. Please try again.';
    include('signup.php');
}
?>
