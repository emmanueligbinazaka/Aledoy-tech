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
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
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
            <a class="nav-links active" href="candidate_dashboard.html">
              <span class="icon">
                <img src="images/element-3.png" />
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
            <a class="nav-links" href="change_password.html">
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

      <div class="bro">
        <div class="container-fluid py-5">
          <div class="row">
            <div class="col-md-8 guy d-flex flex-wrap">
              <!-- Potential Jobs -->
              <div class="col-md-12  col-lg-5">
                <div class="stats-card">
                  <h4>Potential Jobs</h4>
                  <p>(This Month)</p>
                  <div class="stat-number">13</div>
                </div>
              </div>
              <!-- Matched Jobs -->
              <div class="col-md-12 col-lg-5">
                <div class="stats-card">
                  <h4>Matched Jobs</h4>
                  <p>(This Month)</p>
                  <div class="stat-number">9</div>
                </div>
              </div>
              <!-- Potential Jobs -->
              <div class="col-md-12 col-lg-5">
                <div class="stats-card">
                  <h4>Search Appearance</h4>
                  <p>(This Month)</p>
                  <div class="stat-number">392</div>
                </div>
              </div>
              <!-- Matched Jobs -->
              <div class="col-md-12 col-lg-5">
                <div class="stats-card">
                  <h4>Applied Jobs</h4>
                  <p>(This Month)</p>
                  <div class="stat-number">8</div>
                </div>
              </div>

              <section class="col-md-12">
                <div class="container py-5">
                  <div class="section-header">
                    <h3>Profile Viewer</h3>
                    <a href="#">All Profile</a>
                  </div>
                  <div class="row g-4">
                    <!-- Profile 1 -->
                    <div class="col-md-6">
                      <div class="profile-card">
                        <img src="images/Avatar.png" alt="Olabode Olajide" />
                        <div class="profile-info">
                          <h6>Olabode Olajide</h6>
                          <p>HR Manager</p>
                          <a href="#">View Profile</a>
                        </div>
                      </div>
                    </div>
                    <!-- Profile 2 -->
                    <div class="col-md-6">
                      <div class="profile-card">
                        <img src="images/Avatar1.png" alt="Iyanu Arishafe" />
                        <div class="profile-info">
                          <h6>Iyanu Arishafe</h6>
                          <p>HR Manager</p>
                          <a href="#">View Profile</a>
                        </div>
                      </div>
                    </div>
                    <!-- Profile 3 -->
                    <div class="col-md-6">
                      <div class="profile-card">
                        <img src="images/Avatar2.png" alt="Jordan Koledowo" />
                        <div class="profile-info">
                          <h6>Jordan Koledowo</h6>
                          <p>Product Manager</p>
                          <a href="#">View Profile</a>
                        </div>
                      </div>
                    </div>
                    <!-- Profile 4 -->
                    <div class="col-md-6">
                      <div class="profile-card">
                        <img src="images/Avatar3.png" alt="Michel Ogbonna" />
                        <div class="profile-info">
                          <h6>Michel Ogbonna</h6>
                          <p>Web Developer</p>
                          <a href="#">View Profile</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>

            <div class="col-md-4 back bro">
              <div class="py-5 p4">
                <div class="section-header1">
                  <h1>Jobs for your</h1>
                  <a href="#">All Jobs</a>
                </div>
                <div class="row">
                  <div class="job-card d-flex align-items-center">
                    <img
                      src="images/1.png"
                      alt="Banglalink Logo"
                      class="job-logo"
                    />
                    <div class="job-info ms-3">
                      <h6 class="job-title mb-1">Product Designer</h6>
                      <p class="job-location mb-1 text-muted">
                        Airbnb - Lagos, Lekki - Epe
                      </p>
                      <a href="#" class="job-link text-danger">View Jobs</a>
                    </div>
                  </div>
                  <div class="job-card d-flex align-items-center">
                    <img
                      src="images/2.png"
                      alt="Banglalink Logo"
                      class="job-logo"
                    />
                    <div class="job-info ms-3">
                      <h6 class="job-title mb-1">Product Designer</h6>
                      <p class="job-location mb-1 text-muted">
                        Airbnb - Lagos, Lekki - Epe
                      </p>
                      <a href="#" class="job-link text-danger">View Jobs</a>
                    </div>
                  </div>
                  <div class="job-card d-flex align-items-center">
                    <img
                      src="images/3.png"
                      alt="Banglalink Logo"
                      class="job-logo"
                    />
                    <div class="job-info ms-3">
                      <h6 class="job-title mb-1">Product Designer</h6>
                      <p class="job-location mb-1 text-muted">
                        Airbnb - Lagos, Lekki - Epe
                      </p>
                      <a href="#" class="job-link text-danger">View Jobs</a>
                    </div>
                  </div>
                  <div class="job-card d-flex align-items-center">
                    <img
                      src="images/4.png"
                      alt="Banglalink Logo"
                      class="job-logo"
                    />
                    <div class="job-info ms-3">
                      <h6 class="job-title mb-1">Product Designer</h6>
                      <p class="job-location mb-1 text-muted">
                        Airbnb - Lagos, Lekki - Epe
                      </p>
                      <a href="#" class="job-link text-danger">View Jobs</a>
                    </div>
                  </div>
                  <div class="job-card d-flex align-items-center">
                    <img
                      src="images/2.png"
                      alt="Banglalink Logo"
                      class="job-logo"
                    />
                    <div class="job-info ms-3">
                      <h6 class="job-title mb-1">Product Designer</h6>
                      <p class="job-location mb-1 text-muted">
                        Airbnb - Lagos, Lekki - Epe
                      </p>
                      <a href="#" class="job-link text-danger">View Jobs</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-8"></div>
            <div class="col-md-4 back bro" style="margin-top: 15px">
              <div class="py-5">
                <div class="section-header1">
                  <h1>Applied Jobs</h1>
                  <a href="#">All Jobs</a>
                </div>
                <div class="row">
                  <div class="job-card d-flex align-items-center">
                    <img
                      src="images/5.png"
                      alt="Banglalink Logo"
                      class="job-logo"
                    />
                    <div class="job-info ms-3">
                      <h6 class="job-title mb-1">Product Designer</h6>
                      <p class="job-location mb-1 text-muted">
                        Airbnb - Lagos, Lekki - Epe
                      </p>
                      <img src="images/tick-circle.png"> Applied on 23, May 2024
                    </div>
                  </div>
                  <div class="job-card d-flex align-items-center">
                    <img
                      src="images/2.png"
                      alt="Banglalink Logo"
                      class="job-logo"
                    />
                    <div class="job-info ms-3">
                      <h6 class="job-title mb-1">Product Designer</h6>
                      <p class="job-location mb-1 text-muted">
                        Airbnb - Lagos, Lekki - Epe
                      </p>
                      <img src="images/tick-circle.png"> Applied on 23, May 2024
                    </div>
                  </div>
                  <div class="job-card d-flex align-items-center">
                    <img
                      src="images/6.png"
                      alt="Banglalink Logo"
                      class="job-logo"
                    />
                    <div class="job-info ms-3">
                      <h6 class="job-title mb-1">Product Designer</h6>
                      <p class="job-location mb-1 text-muted">
                        Airbnb - Lagos, Lekki - Epe
                      </p>
                      <img src="images/tick-circle.png"> Applied on 23, May 2024
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
