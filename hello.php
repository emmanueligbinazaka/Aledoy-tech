<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css" />
    <script src="dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="dist/font-awesome/css/font-awesome.min.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />

    <style>
      body {
        background: #f8f9fa;
      }

      .sidebar {
        position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        width: 250px;
        background: #fff;
        padding-top: 20px;
        border-right: 1px solid #eee;
        transition: all 0.3s ease;
        padding: 10px;
        z-index: 1050;
        overflow-x: hidden;
      }

      .wbadge {
        display: flex;
        justify-content: center;
        align-items: center;
        padding-block: 1rem;
      }

      .nav-links {
        text-decoration: none;
        color: #444;
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 10px 15px;
        border-radius: 6px;
        transition: all 0.3s ease;
        white-space: nowrap;
      }

      .nav-links:hover,
      .nav-links.active {
        background-color: #d0d0d04a;
        color: #e24329;
        border-radius: 6px;
        border-left: 6px solid #e24329;
        transition: all 0.1s ease;
      }

      .description {
        font-weight: 540;
        font-size: 18px;
        transition: opacity 0.3s ease;
      }

      .main-content {
        margin-left: 250px;
        padding: 20px;
        transition: all 0.3s ease;
      }

      .icons {
        font-size: 30px;
      }

      .logoo {
        padding-left: 30px;
      }

      .nav {
        display: flex;
        gap: 10px;
      }

      /* Collapsed sidebar (desktop toggle) */
      .sidebar.collapsed {
        width: 90px;
      }
      .sidebar.collapsed .description,
      .sidebar.collapsed .logoo,
      .sidebar.collapsed .wbadge {
        display: none;
      }
      .sidebar.collapsed .icons {
        margin: auto;
      }
      .main-content.collapsed {
        margin-left: 90px;
      }

      /* Toggle button */
      .toggle-btn {
        top: 15px;
        left: 20px;
        z-index: 1100;
        font-size: 24px;
        cursor: pointer;
        color: #e24329;
      }

      .search-container {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 20px;
      }

      .search-container input {
        width: 500px;
      }

      .stats-card p {
        color: #888;
      }
      .stats-card .stat-number {
        font-size: 2.5rem;
        font-weight: bold;
        margin-top: 10px;
      }

      .stats-card {
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0);
        padding: 24px;
        width: 100%;
      }
      .stats-card h4 {
        margin-bottom: 10px;
        font-weight: 600;
      }

      /* Sidebar toggle for mobile */
      @media (max-width: 991px) {
        .sidebar {
          left: -250px;
        }
        .sidebar.active {
          left: 0;
        }
        .main-content {
          margin-left: 0;
        }
        .toggle-btn {
          display: inline-block;
          left: 0px;
        }
        .search-container input {
          width: fit-content;
        }
        /* Overlay */
        .overlay {
          position: fixed;
          top: 0;
          left: 0;
          right: 0;
          bottom: 0;
          background: rgba(0, 0, 0, 0.5);
          z-index: 1049;
          display: none;
        }
        .overlay.active {
          display: block;
        }
      }
    </style>
  </head>
  <body>
    <!-- Sidebar -->
    <div class="sidebar shadow-sm" id="sidebar">
      <a class="navbar-brand logoo" href="index.php">
        <img src="images/Aledoy-Talent Logo.png" class="img-fluid" />
      </a>

      <div class="wbadge">
        <img src="images/wBadge.png" class="img-fluid" />
      </div>

      <div class="nav flex-column mt-4">
        <a class="nav-links active" href="">
          <i class="fa fa-home icons"></i>
          <span class="description">Dashboard</span>
        </a>
        <a class="nav-links" href="">
          <i class="fa fa-user icons"></i>
          <span class="description">Profile</span>
        </a>
        <a class="nav-links" href="">
          <i class="fa fa-cog icons"></i>
          <span class="description">Change Password</span>
        </a>
      </div>
    </div>

    <!-- Overlay for mobile -->
    <div class="overlay" id="overlay"></div>

    <!-- Main Content -->
    <main class="main-content" id="mainContent">
      <div class="container py-3 border-bottom d-flex justify-content-between align-items-center">
        <!-- Toggle Button -->
        <div class="toggle-btn" id="toggleBtn">
          <i class="fa fa-bars"></i>
        </div>

        <form class="d-flex search-container">
          <input
            class="form-control"
            type="search"
            placeholder="Search job title or skill"
            aria-label="Search"
          />
          <i class="fa fa-search search-icon"></i>
        </form>

        <div class="d-flex align-items-center gap-4">
          <div class="position-relative">
            <i class="fa fa-bell fa-lg text-secondary"></i>
            <span class="badge rounded-pill bg-danger position-absolute top-0 start-100 translate-middle">3</span>
          </div>
          <div class="position-relative">
            <i class="fa fa-envelope fa-lg text-secondary"></i>
            <span class="badge rounded-pill bg-danger position-absolute top-0 start-100 translate-middle">5</span>
          </div>
          <img src="images/Avatar.png" class="rounded-circle" width="40" height="40" />
        </div>
      </div>

      <div class="container py-5">
        <div class="row g-4">
          <div class="col-md-7">
            <div class="row g-4">
              <div class="col-md-6">
                <div class="stats-card shadow-lg">
                  <h4>Potential Jobs</h4>
                  <p>(This Month)</p>
                  <div class="stat-number">13</div>  
                </div>
              </div>
              <div class="col-md-6">
                <div class="stats-card shadow-lg">
                  <h4>Matched Jobs</h4>
                  <p>(This Month)</p>
                  <div class="stat-number">9</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="stats-card shadow-lg">
                  <h4>Search Appearance</h4>
                  <p>(This Month)</p>
                  <div class="stat-number">392</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="stats-card shadow-lg">
                  <h4>Applied Jobs</h4>
                  <p>(This Month)</p>
                  <div class="stat-number">8</div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-1"></div>
          <div class="col-md-4"></div>
        </div>
      </div>
    </main>

    <script>
      const toggleBtn = document.getElementById("toggleBtn");
      const sidebar = document.getElementById("sidebar");
      const mainContent = document.getElementById("mainContent");
      const overlay = document.getElementById("overlay");

      toggleBtn.addEventListener("click", () => {
        if (window.innerWidth <= 991) {
          // Mobile toggle
          sidebar.classList.toggle("active");
          overlay.classList.toggle("active");
        } else {
          // Desktop collapse
          sidebar.classList.toggle("collapsed");
          mainContent.classList.toggle("collapsed");
        }
      });

      // Close sidebar when clicking overlay
      overlay.addEventListener("click", () => {
        sidebar.classList.remove("active");
        overlay.classList.remove("active");
      });
    </script>
  </body>
</html>
