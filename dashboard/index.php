<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="../dist/css/bootstrap.min.css" />
  <script src="../dist/js/bootstrap.min.js"></script>
  <script src="assets/js/script.js"></script>
  <link rel="stylesheet" href="../dist/font-awesome/css/font-awesome.min.css" />
  <link
    href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
    rel="stylesheet"
  />
</head>
<body>
  <!-- <div class="d-flex">
    <aside id="sidebar">
      <div class="sidebar-logo">
        <a href="#">LOGO</a>
      </div>
      <ul class="sidebar-nav p-0">
       <li class="sidebar-header">
        Tools and components
       </li>
        <li class="sidebar-item">
          <a href="#" class="sidebar-link">
            <i class="fa fa-user"></i>
            <span>Profile</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="#" class="sidebar-link">
            <i class="fa fa-facebook"></i>
            <span>Task</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="#" class="sidebar-link">
            <i class="fa fa-facebook"></i>
            <span>Notification</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="#" class="sidebar-link">
            <i class="fa fa-cog"></i>
            <span>Settings</span>
          </a>
        </li>
      </ul>

      <div class="sidebar-footer">
        <a href="#" class="sidebar-link">
          <i class="fa fa-cog"></i>
          <span>Settings</span>
        </a>
      </div>
    </aside>

    <div class="main">
      <nav class="navbar navbar-expand border-bottom">
        <button class="toggle-btn" type="button">
        <span class="navbar-toggler-icon"></span>
        </button>
      </nav>
      <main class="p-3">
        <div class="container-fluid">
          <div class="mb-3 text-center">
            <h1>Hello World</h1>
          </div>
        </div>
      </main>
    </div>
  </div> -->

   <!--start sidebar -->
 <aside class="sidebar-wrapper" data-simplebar="true">
   <div class="sidebar-header">
     <div>
       <img src="../images/logo_black.png" class="img-fluid" width="100" alt="logo icon">
     </div>


     <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
     </div>
   </div>
   <!--navigation-->
   <ul class="metismenu" id="menu">
     <li>
       <a href="./dashboard">
         <div class="parent-icon"><i class="bi bi-grid"></i>
         </div>
         <div class="menu-title">Dashboard</div>
       </a>

     </li>
     
     <li>
       <a href="javascript:;" class="has-arrow">
         <div class="parent-icon"><i class="bi bi-receipt"></i>
         </div>
         <div class="menu-title">Blogs</div>
       </a>
       <ul>
         <li> <a href="blog2.php"><i class="bi bi-circle"></i>Blogs</a>
         </li>

       </ul>
     </li>

     <!-- <li>
       <a href="./change_password">
         <div class="parent-icon"><i class="bi bi-briefcase"></i>
         </div>
         <div class="menu-title">Change Password</div>
       </a>
     </li> -->

     <li>
       <a href="./contact">
         <div class="parent-icon"><i class="bi bi-phone"></i>
         </div>
         <div class="menu-title">Contact</div>
       </a>
     </li>

     <!-- <li>
       <a href="./bookatrip">
         <div class="parent-icon"><i class="bi bi-book"></i>
         </div>
         <div class="menu-title">Book a trip</div>
       </a>
     </li>
     <li>
       <a href="./change_password">
         <div class="parent-icon"><i class="bi bi-briefcase"></i>
         </div>
         <div class="menu-title">Change Password</div>
       </a>
     </li> -->
     
     <li>
       <a href="logout">
         <div class="parent-icon"><i class="bi bi-cloud-arrow-down"></i>
         </div>
         <div class="menu-title">Logout</div>
       </a>

     <li>



 </aside>
 <!--end sidebar -->
</body>
</html>