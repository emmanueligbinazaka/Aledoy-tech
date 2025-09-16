<?php
// forgot_password.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Forgot Password</title>
  <link rel="stylesheet" href="dist/css/bootstrap.min.css">
</head>
<body class="container py-5">

  <h2>Forgot Password</h2>
  <?php if (isset($_GET['msg'])): ?>
    <div class="alert alert-<?php echo $_GET['msg'] === 'success' ? 'success' : 'danger'; ?>">
      <?php echo htmlspecialchars($_GET['comment']); ?>
    </div>
  <?php endif; ?>

  <form action="forgot_password_process.php" method="POST" class="mt-4">
    <div class="mb-3">
      <label for="email" class="form-label">Enter your registered email</label>
      <input type="email" name="email" id="email" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Reset Password</button>
  </form>

</body>
</html>
