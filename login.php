<?php  
include('dashboard/includes/connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="dist/css/bootstrap.min.css" />
  <script src="dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="dist/font-awesome/css/font-awesome.min.css" />
</head>

<body>
  <div class="login-container">
    <div class="left-section">
      <img src="images/test.png" class="img-fluid" />
      <h3>Welcome aboard my friend</h3>
      <p>Just a couple of clicks and we start</p>
      <div class="carousel-circles">
        <div class="circle active"></div>
        <div class="circle"></div>
        <div class="circle"></div>
      </div>
    </div>

    <div class="right-section">
      <form class="login-form" action="proc-login.php" method="post">
        <div class="mb-4">
          <div>
            <a href="index.php">
              <img src="images/Aledoy-Talent Logo.png" class="img-fluid mb-3" />
            </a>
          </div>
          <h1>Welcome</h1>
          <p>
            Join a thriving community of team-centric talent, and lend your
            skills to the best companies the tech world has to offer.
          </p>
        </div>

        <?php if ($msg == 'success') { ?>
          <div class="alert alert-success"><?php echo $comment; ?></div>
        <?php } ?>

        <?php if ($msg == 'error') { ?>
          <div class="alert alert-danger"><?php echo $comment; ?></div>
        <?php } ?>

        <div class="email">
          <input type="text" value="<?php echo $email ?>" placeholder="Email" name="email" class="form-control" />
        </div>
        <div class="email mt-3">
          <input type="password" value="<?php echo $password ?>" placeholder="Password" name="password" class="form-control" />
        </div>
        <div class="forgot-password">
          <a href="forgot_password.php">Forgot Password?</a>
        </div>

        <div style="gap: 30px; display: flex; flex-direction: column">
          <!-- <div class="button">
              <a href="candidate_dashboard.php" class="email-button">
                Login
              </a>
            </div> -->
            <div class="button">
  <button type="submit" class="email-button">Login</button>
</div>


          <div class="button1">
            <a href="https://google.com" class="email-button1">
              <img src="images/Google.png" />&nbsp;Google
            </a>
          </div>

          <p class="text-center">Have no account yet?</p>

          <div class="button1">
            <a href="signup.php" class="email-button1">
              Sign Up
            </a>
          </div>
        </div>
      </form>
    </div>
  </div>
</body>

</html>