
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>SM CODE</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-sass'></i>
      <span class="logo_name">SM CODE</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="Manage-student.php" class="active">
            <i class="fa fa-users"></i>
            <span class="links_name">Manage Student</span>
          </a>
        </li>
        <li>
          <a href="Add-student.php">
            <i class="fa fa-user-plus" aria-hidden="true"></i>
            <span class="links_name">Add Student</span>
          </a>
        </li>
        <li>
          <a href="Profile.php">
            <i class='bx bxs-user-account' ></i>
            <span class="links_name">Profile</span>
          </a>
        </li>

        <li>
          <a href="change-password.php">
            <i class='bx bx-book' ></i>
            <span class="links_name">Change Password</span>
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
        <img src="<?php echo "../Hod Panel/includes/".$_SESSION['profile_image']; ?>">
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
