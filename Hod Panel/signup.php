<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/main.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="container">
    <div class="title">Registration</div>
    <?php 
    if (isset($_GET["error"])) {
      if ($_GET["error"]=="emptyinput") {
        echo "<p class='error_msg'>fill in all field!</p>";
      } else if ($_GET["error"]=="invalidName") {
        echo "<p class='error_msg'>Choose a proper name!</p>";
      } else if ($_GET["error"]=="invalidEmail") {
        echo "<p class='error_msg'>Choose a proper Email!</p>";
      } else if ($_GET["error"]=="passwordNotMatch") {
        echo "<p class='error_msg'>password not match!</p>";
      } else if ($_GET["error"]=="emailTakan") {
        echo "<p class='error_msg'>Email is already taken!</p>";
      } else if ($_GET["error"]=="MobileTakan") {
        echo "<p class='error_msg'>Mobile No. is already taken!</p>";
      } else if ($_GET["error"]=="stmtfailed") {
        echo "<p class='error_msg'>something went wrong, try again!</p>";
      } else if ($_GET["error"]=="profilesize") {
        echo "<p class='error_msg'>Image have not proper size!</p>";
      } else if ($_GET["error"]=="profileerror") {
        echo "<p class='error_msg'>Somethings went wrong in profile uploading!</p>";
      } else if ($_GET["error"]=="profiletype") {
        echo "<p class='error_msg'>Please upload the image in jpg/jpeg/png.</p>";
      }
    }
     ?>
    <div class="content">
      <form action="includes/signup.inc.php" method="post" enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="full_name" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="Mobile" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="password" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" name="password1" placeholder="Confirm your password" required>
          </div>
        
        </div>
        <div class="button">
          <input type="submit" name="submit" id="submit" value="Register">
        </div>
    </div>
    <center>
      <div class="login_Register">
        Already have an account? <a href="login.php">Signin now</a>
      </div>
    </center>
    </form>
  </div>
  </div>
</body>
<script language="Javascript" src="js/jquery.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
      $("#submit").click(function(){
        var temp = $('.select_check');
        if (temp.val()=='') {
          alert("Select the proper option");
          $('.select_check').focus();
          return false;
        } else return true;
      });
  });
</script>
<script language="JavaScript" type="text/JavaScript" src='js/state1.js'></script>

</html>