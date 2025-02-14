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
        <a class="navbar-brand logoo" href="index.php">
          <img src="images/Aledoy-Talent Logo.png" class="" />
        </a>

        <div class="wbadge">
          <img src="images/wBadge.png" class="wbadge" />
        </div>

        <div class="nav flex-column">
          <div>
            <a class="nav-links" href="candidate_dashboard.php">
              <span class="icon">
                <img src="images/grid.png" />
              </span>
              <span class="description">Dasboard</span>
            </a>
          </div>

          <div>
            <a class="nav-links active" href="profile.php">
              <span class="icon">
                <img src="images/frame1.png" />
              </span>
              <span class="description">Profile</span>
            </a>
          </div>

          <div>
            <a class="nav-links" href="change_password.php">
              <span class="icon">
                <img src="images/setting-2.png" />
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

      <div class="py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-3 card">
              <div class="nav flex-column">
                <div>&nbsp;
                  <a class="nav-links active" href="candidate_dashboard.html">
                    <span class="icon">
                      <img src="images/frame1.png" />
                    </span>
                    <span class="description">information</span>
                  </a>
                </div>

                <div>
                  <a class="nav-links" href="profile.html">
                    <span class="icon">
                      <img src="images/briefcase.png" />
                    </span>
                    <span class="description">Experiences</span>
                  </a>
                </div>

                <div>
                  <a class="nav-links" href="change_password.html">
                    <span class="icon">
                      <img src="images/award.png" />
                    </span>
                    <span class="description">Education</span>
                  </a>
                </div>

                <div>
                  <a class="nav-links" href="change_password.html">
                    <span class="icon">
                      <img src="images/crown.png" />
                    </span>
                    <span class="description">Stacks</span>
                  </a>
                </div>
              </div>
            </div>

            <div class="col-md-9">
              <div class="profile-header">
                <button class="btn btn-outline-danger" style="float: right">
                  Edit
                </button>
                <div style="gap: 20px; display: flex">
                  <img src="images/user.png" class="img" />
                  <div class="mt-1">
                    <h5>Basic Information</h5>
                    <p>Update profile information</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <p>
                      <strong>Email:</strong><br />
                      jamesadeyemi@gmail.com
                    </p>
                  </div>
                  <div class="col-md-6">
                    <p>
                      <strong>Gender:</strong> <br />
                      -
                    </p>
                  </div>
                  <div class="col-md-6">
                    <p>
                      <strong>Phone Number:</strong> <br />
                      -
                    </p>
                  </div>
                  <div class="col-md-6">
                    <p>
                      <strong>Location:</strong> <br />
                      -
                    </p>
                  </div>
                  <div class="col-md-6">
                    <p>
                      <strong>Website:</strong> <br />
                      -
                    </p>
                  </div>
                </div>
              </div>
              <div class="card p-3">
                <div class="card-body">
                  <button class="btn btn-outline-primary add-btn">
                    Add Experience
                  </button>
                  <div style="gap: 20px; display: flex">
                    <img src="images/Rectangle.png" class="img" />
                    <div class="mt-1">
                      <h5>Experience</h5>
                      <p>Add experience to increase the chance of hiring</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card p-3">
                <div class="card-body">
                  <button class="btn btn-outline-primary add-btn">
                    Add Education
                  </button>
                  <div style="gap: 20px; display: flex">
                    <img src="images/Graduation hat.png" class="img" />
                    <div class="mt-1">
                      <h5>Education & Certifications</h5>
                      <p>Add experience to increase the chance of hiring</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card p-3">
                <div class="card-body">
                  <button class="btn btn-outline-primary add-btn">
                    Add Skacks
                  </button>
                  <div style="gap: 20px; display: flex">
                    <img src="images/Rectangle1.png" class="img" />
                    <div class="mt-1">
                      <h5>Skacks</h5>
                      <p>Add experience to increase the chance of hiring</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card p-3">
                <div class="card-body">
                  <button class="btn btn-outline-primary add-btn">
                    Attachments
                  </button>
                  <div style="gap: 20px; display: flex">
                    <img src="images/Rectangle2.png" class="img" />
                    <div class="mt-1">
                      <h5>Education & Certifications</h5>
                      <p>Upload your resume, and others documents. Size limit 25MB. Supported format docx, pdf</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
