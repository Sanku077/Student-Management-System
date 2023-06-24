<?php 
session_start();
 if (!isset($_SESSION["email"])) {
   header("location: login.php");
 }
include'includes/dbh.inc.php';

 // for  password change   
if(isset($_POST['Submit']))
{
  if(isset($_POST['oldpass']) || isset($_POST['newpass']) || isset($_POST['confirmpassword'])) {
    $oldpassword=md5($_POST['oldpass']);
    $sql=mysqli_query($conn,"SELECT password FROM student_data where password='$oldpassword'");
  $num=mysqli_fetch_array($sql);
  if($num>0) {
    $adminid=$_SESSION['id'];
    $newpass=md5($_POST['newpass']);
    $ret=mysqli_query($conn,"update student_data set password='$newpass' where id='$adminid'");
    $_SESSION['msg']="Password Changed Successfully !!";
  }
  else {
    $_SESSION['msg']="Old Password not match !!";
  }
  }
  else {
    $_SESSION['msg'] = "All Field are required!";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <?php
  include_once "header.php"; 
   ?>
<div class="container bootstrap snippet" style="margin-top:100px;">
    <div class="row">
      <div class="col-sm-10"><h1></h1></div>
      
    </div>
    <center>
        <div class="">
<?php 
if (isset($_SESSION['msg'])) {
    echo $_SESSION["msg"];
}
 ?>
 </div>
        
    </center>
    <div class="row">
      <div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Change Password</a></li>               </ul>
 
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  <form class="form" action="##" method="post" id="registrationForm">
                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="first_name"><h4>Old Password</h4></label>
                              <input type="password" class="form-control" name="oldpass" placeholder="Enter old password" required="">
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-xs-6">
                            <label for="last_name"><h4>New Password</h4></label>
                              <input type="password" class="form-control" name="newpass" placeholder="Enter new password" required="">
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="phone"><h4>Repeat new Password</h4></label>
                              <input type="password" class="form-control" name="confirmpassword"  placeholder="Enter confirm password" required="">
                          </div>
                      </div>

                     <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                                <input type="Submit" name="Submit" class="btn  btn-success" class="btn btn-primary">
                            </div>
                      </div>
                </form>
              <hr>
             </div> 
              </div>
          </div>

        </div>
    </div>
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