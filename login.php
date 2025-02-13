<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
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
        <form class="login-form">
          <div class="mb-4">
            <div>
              <a href="index.php">
                <img
                  src="images/Aledoy-Talent Logo.png"
                  class="img-fluid mb-3"
                />
              </a>
            </div>
            <h1>Welcome</h1>
            <p>
              Join a thriving community of team-centric talent, and lend your
              skills to the best companies the tech world has to offer.
            </p>
          </div>

          <div class="email">
            <input type="text" placeholder="Email" class="form-control" />
          </div>
          <div class="email mt-3">
            <input type="text" placeholder="Password" class="form-control" />
          </div>
          <div class="forgot-password">
            <a href="#">Forgot Password?</a>
          </div>

          <div style="gap: 30px; display: flex; flex-direction: column">
            <div class="button">
              <a href="candidate_dashboard.php">
                <button class="email-button">Login</button>
              </a>
            </div>

            <div class="button1">
              <a href="#">
                <button type="submit" class="email-button1">
                  <img src="images/Google.png" />&nbsp;Google
                </button>
              </a>
            </div>

            <p class="text-center">Have no account yet?</p>

            <div class="button1">
              <a href="signup.php">
                <button class="email-button1">Sign Up</button>
              </a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
