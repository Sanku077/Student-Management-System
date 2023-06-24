<?php 
session_start();
require_once "includes/dbh.inc.php";
if(isset($_POST['submit']))
{
  $new_otp = $_POST['otp'];
  if(isset($_POST['otp'])) {
    $Old_otp=$_POST['otp'];
    $sql=mysqli_query($conn,"SELECT otp FROM hod_data where otp='$new_otp'");
    $num=mysqli_fetch_array($sql);
    if($num>0) {
      session_start();
      header("location: new_password.php?error=newpass");
    }
    else {
      header("location: otp_verify.php?error=notmatchotp");    
    }
    }
    else {
      header("location: otp_verify.php?error=emptyfield");
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
    <div class="title">Otp Verify</div>
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
      }
      else if ($_GET['error'] == "notmatchotp"){
       echo "<p class='error_m'>Otp didn't Match</p>"; 
      }
      }
     ?>
    <form action="" method="post">
      <div class="input_box">
        <input type="text" name="otp" placeholder="Enter OTP Here" required>
        <div class="icon"><i class="fas fa-user"></i></div>
      </div>
      <div class="input_box button">
        <input type="submit" name="submit" value="submit">
      </div>
    </form>
  </div>
  
</body>
</html>