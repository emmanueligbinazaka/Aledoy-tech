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
    <div class="container-fluid">
      <div class="sidebar">
        <a class="navbar-brand logoo" href="index.html">
          <img src="images/Aledoy-Talent Logo.png" class="" />
        </a>

        <div class="wbadge">
          <img src="images/wBadge.png" class="wbadge" />
        </div>

        <div class="nav flex-column">
          <div>
            <a class="nav-links" href="candidate_dashboard.html">
              <span class="icon">
                <img src="images/grid.png" />
              </span>
              <span class="description">Dasboard</span>
            </a>
          </div>

          <div>
            <a class="nav-links" href="profile.html">
              <span class="icon">
                <img src="images/frame.png" />
              </span>
              <span class="description">Profile</span>
            </a>
          </div>

          <div>
            <a class="nav-links active" href="change_password.html">
              <span class="icon">
                <img src="images/setting-3.png" />
              </span>
              <span class="description">Change Password</span>
            </a>
          </div>
        </div>
      </div>
    </div>

    <main class="main-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <form class="d-flex">
              <input
                class="form-control"
                type="search"
                placeholder="Search job title or skill"
                aria-label="Search"
              />
            </form>
          </div>
          <div class="col-md-3"></div>
          <div class="col-md-3 gap">
            <div>
              <i class="fa fa-bell icons"></i>
              <div class="red"></div>
            </div>
            <div>
              <i class="fa fa-envelope icons"></i>
              <div class="red"></div>
            </div>
            <div></div>
          </div>
        </div>
      </div>

      <div class="container change">
        <p>Create Your Password</p>
        <p>Change Password</p>
        <div class="row change1">
          <div class="col-md-3">
            <form>
              <p>Current Password</p>
              <input type="text" placeholder="Password" class="form-control" />
            </form>
          </div>
          &nbsp;
          <div class="col-md-3">
            <form>
              <p>Change Password</p>
              <input type="text" placeholder="Password" class="form-control" />
            </form>
          </div>
          &nbsp;
          <div class="col-md-3">
            <form>
              <p>Comfirm Password</p>
              <input type="text" placeholder="Password" class="form-control" />
            </form>
          </div>

          <div class="emma">
            <a href="#">
              <button>Change Password</button>
            </a>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
