<?php
session_start();
 if (!isset($_SESSION["email"])) {
   header("location: login.php");
 }
$current_Email = $_SESSION['email'];
if(isset($_POST['submit']))
{
  if(isset($_POST['newpass'])) {
    require_once "includes/dbh.inc.php";
    $sql=mysqli_query($conn,"SELECT password FROM admin_data where email='$current_Email'");
    $num=mysqli_fetch_array($sql);
    if($num>0) {
      $newpass=md5($_POST['newpass']);
      $newpass1=md5($_POST['newpass1']);
      if ($newpass === $newpass1) {
        $ret=mysqli_query($conn,"UPDATE admin_data SET password='$newpass' WHERE email='$current_Email'");
        header("location: login.php?error=changed");
      }
      else {
        header("location: login.php?error=notmatch");
      }
    }
    else {
      header("location: login.php?error=usernotfound");
    }
    }
    else {
      $_SESSION['msg'] = "All Field are required!";
    }
}
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
    <div class="title">Change Password</div>
    <?php 
    if (isset($_GET["error"])) {
      if ($_GET["error"]=="emptyfield") {
        echo "<p class='error_m'>fill in all field!</p>";
      } else if ($_GET["error"]=="UserNotFound") {
        echo "<p class='error_m'>Account not Found!</p>";
      }
      else if ($_GET["error"]=="Success") {
        echo "<p class='error_m'>Check mail box to reset password.</p>";
      } else if ($_GET["error"]=="stmtfailed") {
        echo "<p class='error_m'>Somthing get errored</p>";
      } else if($_GET['error'] == "newpass"){
        echo "<p class='error_m'>Create Your new password!</p>";
      }
      }
     ?>
    <form action="" method="post">
      <div class="input_box">
        <input type="password" name="newpass" placeholder="Enter new password" required>
        <div class="icon"><i class="fas fa-user"></i></div>
      </div>
      <div class="input_box">
        <input type="password" name="newpass1" placeholder="Enter password again" required>
        <div class="icon"><i class="fas fa-user"></i></div>
      </div>
      <div class="input_box button">
        <input type="submit" name="submit" value="submit">
      </div>
    </form>
  </div>
  
</body>
</html>