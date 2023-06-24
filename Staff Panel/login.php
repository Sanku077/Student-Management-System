<?php 
session_start();
session_destroy();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/main2.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
   </head>
<body>
  <div class="main_div">
    <div class="title">Staff Login</div>
    <?php 
    if (isset($_GET["error"])) {
      if ($_GET["error"]=="emptyfield") {
        echo "<p class='error_m'>fill in all field!</p>";
      } else if ($_GET["error"]=="wronginput") {
        echo "<p class='error_m'>Incorrect login information!</p>";
      }
      else if ($_GET["error"]=="sqlError") {
        echo "<p class='error_m'>something went wrong! try again.</p>";
      }
      else if ($_GET["error"]=="noUserfound") {
        echo "<p class='error_m'>Account not Found!</p>";
      }

      }
     ?>
    <form action="includes/login.inc.php" method="post">
      <div class="input_box">
        <input type="text" name="email" placeholder="Email or Phone" required>
        <div class="icon"><i class="fas fa-user"></i></div>
      </div>
      <div class="input_box" id="space">
        <input type="password" name="password" placeholder="Password" required>
        <div class="icon"><i class="fas fa-lock"></i></div>
      </div>
      <div class="option_div">
        <div class="check_box">
          <input type="checkbox">
          <span>Remember me</span>
        </div>
        <div class="forget_div">
          <a href="#">Forgot password?</a>
        </div>
      </div>
      <div class="input_box button">
        <input type="submit" name="submit" value="submit">
      </div>
      <div class="sign_up">
        Admin login? <a href="../Admin Panel/login.php">login now</a><br>
        Hod Login? <a href="../Hod Panel/login.php">login now</a><br>
        Principal Login? <a href="../Principal Panel/login.php">login now</a><br>
        Student login? <a href="../Student Panel/login.php">login now</a><br>
      </div>

    </form>
  </div>
  
</body>
</html>