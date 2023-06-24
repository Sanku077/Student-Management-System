<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/main2.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
   </head>
<body>
  <div class="main_div">
    <div class="title">Forgotton Password</div>
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
      }
     ?>
    <form action="includes/forget.inc.php" method="post">
      <div class="input_box">
        <input type="text" name="email" placeholder="Email or Phone" required>
        <div class="icon"><i class="fas fa-user"></i></div>
      </div>
      <div class="input_box button">
        <input type="submit" name="submit" value="submit">
      </div>
    </form>
  </div>
  
</body>
</html>