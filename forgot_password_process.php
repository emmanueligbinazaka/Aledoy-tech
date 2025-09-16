<?php
include('dashboard/includes/connect.php');

$email = strtolower(trim($_POST['email'] ?? ''));

if ($email === '') {
    header("Location: forgot_password.php?msg=error&comment=" . urlencode("Please enter your email"));
    exit;
}

$stmt = $conn->prepare("SELECT id FROM signup_db WHERE email = ? LIMIT 1");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    header("Location: forgot_password.php?msg=error&comment=" . urlencode("Email not found"));
    exit;
}

$user = $result->fetch_assoc();
$user_id = $user['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Reset Password</title>
  <link rel="stylesheet" href="dist/css/bootstrap.min.css">
</head>
<body class="container py-5">

  <h2>Reset Your Password</h2>
  <form action="reset_password.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $user_id; ?>">
    <div class="mb-3">
      <label for="password" class="form-label">New Password</label>
      <input type="password" name="password" id="password" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">Update Password</button>
  </form>

</body>
</html>
