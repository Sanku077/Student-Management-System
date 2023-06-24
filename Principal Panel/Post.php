<?php 
session_start();
 if (!isset($_SESSION["email"])) {
   header("location: login.php");
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
      } else if ($_GET["error"] == "notupload") {
        echo "<p class='error_msg'>not uploaded</p>";
      }
    }
     ?> 
    </div>
    <div class="row">
      <div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Create Post</a></li>               
            </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  <form class="form" action="includes/Announce.inc.php" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="first_name"><h4>Heading</h4></label>
                              <textarea type="text" class="form-control" name="heading" placeholder="e.g: Technoblitz Event" required="" rows="6"></textarea>
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Main Content</h4></label>
                            <textarea type="text" class="form-control" name="content" placeholder="e.g: All student of First , Second, Third and Final Year B. Tech(All Branches) and Second Year M.Tech(All) who wish....." rows="6" required=""></textarea>
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="phone"><h4>Upload File</h4></label>
                              <input type="file" class="form-control" name="image"  placeholder="Upload Pdf/jpg">
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