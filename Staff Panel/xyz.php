<?php 
session_start();
 if (!isset($_SESSION["email"])) {
   header("location: login.php");
 }
include'includes/dbh.inc.php';

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
    <div class="row">
         <center>
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
                      } else if ($_GET["error"]=="errornone") {
                        echo "<p class='error_msg'>Staff has been added Sucessfully.</p>";
                      }
                    }
                    ?>
                    </center>
      <div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Add Principal Detail</a></li>              </ul>

          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  <form class="form" action="includes/signup-principal.php" enctype="multipart/form-data" onSubmit="return valid();" method="post" id="registrationForm">
                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="first_name"><h4>Full Name:</h4></label>
                              <input type="text" class="form-control" name="full_name" placeholder="Enter full name">
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" placeholder="Enter email id">
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="phone"><h4>Phone Number</h4></label>
                              <input type="text" class="form-control" name="Mobile"  placeholder="Enter mobile no.">
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="phone"><h4>Date Of Birth</h4></label>
                              <input type="date" class="form-control" name="DOB"  placeholder="Enter date of birth">
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="phone"><h4>Gender</h4></label>
                              <select class="form-control" name="Gender">
                                  <option value="">Select</option>
                                  <option value="Male">Male</option>
                                  <option value="Female">Female</option>
                                  <option value="other">Others</option>
                                </select>
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="phone"><h4>Profile</h4></label>
                              <input type="file" class="form-control" name="profile_image"  placeholder="upload profile">
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="phone"><h4>Post</h4></label>
                              <select class="form-control" name="Post">
                                  <option value="">Select</option>
                                  <option value="Principal">Principal</option>
                                  <option value="Vice-Principal">Vice-Principal</option>
                                </select>
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="phone"><h4>Parmenent Address</h4></label>
                              <input type="text" class="form-control" name="paddress"  placeholder="Enter Parmenent Address">
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="phone"><h4>Temporary Address</h4></label>
                              <input type="text" class="form-control" name="taddress"  placeholder="Enter Temporary Address">
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="phone"><h4>Password</h4></label>
                              <input type="password" class="form-control" name="password"  placeholder="Enter Password">
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="phone"><h4> repeat Password</h4></label>
                              <input type="password" class="form-control" name="password1"  placeholder="Enter Password repeat">
                          </div>
                      </div>


                     <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                                <input type="submit" name="Submit" class="btn  btn-success" class="btn btn-primary">
                                <button class="btn " type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
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