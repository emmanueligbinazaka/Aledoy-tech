<?php
session_start();
require_once 'dashboard/includes/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="dist/css/bootstrap.min.css" />
    <script src="dist/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="images/Aledoy-Talent Logo.png" class="logo" />
      </a>
    </div>

    <div>
      <div class="right-section">
        <form action="proc-signup.php" method="post" class="login-form">
          <div class="mb-4">
            <h1>Welcome</h1>
            <p>
              Join a thriving community of team-centric talent, and lend your
              skills to the best companies the tech world has to offer.
            </p>
          </div>

          <?php if($msg == 'success') { ?>
          <div class="alert alert-success">Message Sent</div>
          <?php } ?>

          <?php if($msg == 'error') { ?>
          <div class="alert alert-danger"><?php echo $comment; ?></div>
          <?php } ?>

          <div class="email">
            <input type="text" name="firstname" placeholder="First Name" value="<?php echo $name; ?>" class="form-control"/>
          </div>
          <div class="email mt-3">
            <input type="text" name="lastname" placeholder="Last Name" value="<?php echo $lastname; ?>" class="form-control" />
          </div>
          <div class="email mt-3">
            <input type="number" name="phone" placeholder="Phone" value="<?php echo $phone; ?>" class="form-control" />
          </div>
          <div class="email mt-3">
            <input type="text" name="email" placeholder="Email" value="<?php echo $email; ?>" class="form-control" />
          </div>
          <div class="email mt-3">
            <input type="password" name="password" placeholder="Password" value="<?php echo $password; ?>" class="form-control" />
          </div>
          <div class="forgot-password">
            <a href="#">Forgot Password?</a>
          </div>

          <div style="gap: 30px; display: flex; flex-direction: column">
          <div class="button">
              <button type="submit" name="register" class="email-button">Sign Up</button>
            </div>

            <div class="button1">
              <a href="https://google.com" class="email-button1">
                  <img src="images/Google.png" />&nbsp;Google
              </a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
