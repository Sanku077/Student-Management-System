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
    <div class="title">Admin Login</div>
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
      else if ($_GET["error"]=="Success") {
        echo "<p class='error_m'>Check mail box to reset password.</p>";
      }
      else if ($_GET["error"]=="changed") {
        echo "<p class='error_m'>Password Change Successfully</p>";
      }
      else if ($_GET["error"]=="notmatch") {
        echo "<p class='error_m'>Password didn't Match</p>";
      } else if ($_GET['error'] == "usernotfound"){
        echo "<p class='error_m'>User not Found!</p>";
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
          <a href="Forget.php">Forgot password?</a>
        </div>
      </div>
      <div class="input_box button">
        <input type="submit" name="submit" value="submit">
      </div>
      <div class="sign_up">
        Principal login? <a href="../Principal panel/login.php">login now</a><br>
        Hod login? <a href="../Hod panel/login.php">login now</a><br>
        Staff login? <a href="../Staff panel/login.php">login now</a><br>
        Student login? <a href="../Student Panel/login.php">login now</a><br>
      </div>

    </form>
  </div>
  
</body>
</html>