<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>SM CODE</title>
    <link rel="stylesheet" href="css/style_index.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-sass'></i>
      <span class="logo_name">ERP</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="index.php" class="active">
            <i class='bx bxs-dashboard'></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="Profile.php">
            <i class='bx bxs-user-detail' ></i>
            <span class="links_name">Profile</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-calendar-event'></i>
            <span class="links_name">Calender</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-book' ></i>
            <span class="links_name">Assesment</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-time'></i>
            <span class="links_name">Time Table</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-library' ></i>
            <span class="links_name">Library</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bxl-microsoft-teams'></i>
            <span class="links_name">Microsoft Team</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-chat' ></i>
            <span class="links_name">Chat bot</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bxs-building-house' ></i>
            <span class="links_name">Hostel</span>
          </a>
        </li>
        <li>
          <a href="change-password.php">
            <i class='bx bxs-user' ></i>
            <span class="links_name">Change Password</span>
          </a>
        </li>

        <li>
          <a href="#">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Setting</span>
          </a>
        </li>
        <li class="log_out">
          <a href="includes/logout.inc.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="profile-details">
        <ul>
          <li class="admin_name"><?php echo $_SESSION["full_name"]; ?></li><br>
          <li class="admin_name1"><?php echo $_SESSION["email"]; ?></li>
        </ul>
        <img src="<?php echo "../Staff Panel/includes/".$_SESSION['profile_image']; ?>">
        <i class='bx bx-chevron-down'></i>
      </div>
    </nav>

    <?php 

     ?>

  <script>
   let sidebar = document.querySelector(".sidebar");
   let sidebarBtn = document.querySelector(".sidebarBtn");
   sidebarBtn.onclick = function() {
   sidebar.classList.toggle("active");
   if(sidebar.classList.contains("active")){
      sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
   }
   else
      sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
   }
 </script>

</body>
</html>
