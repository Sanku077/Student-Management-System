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
                <li class="active"><a data-toggle="tab" href="#home">Add Hod Detail</a></li>              </ul>

          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  <form class="form" action="includes/signup-student.php" enctype="multipart/form-data" onSubmit="return valid();" method="post" id="registrationForm">
                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="first_name"><h4>Full Name:</h4></label>
                              <input type="text" class="form-control" name="full_name" placeholder="Enter full name">
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-xs-6">
                            <label for="DOB"><h4>Date of Birth</h4></label>
                              <input type="date" class="form-control" name="DOB" placeholder="Enter Date of birth">
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
                              <label for="phone"><h4>Gender</h4></label>
                              <select class="form-control" name="gender">
                                  <option value="">Select</option>
                                  <option value="Male">Male</option>
                                  <option value="Female">Female</option>
                                  <option value="other">Others</option>
                                </select>
                          </div>
                      </div>

                     <div class="form-group">
                          <div class="col-xs-6">
                              <label for="phone"><h4>Branch</h4></label>
                              <select class="form-control" name="Branch">
                                  <option value="">Select</option>
                                  <option value="Computer Science & Engineering">Computer Science & Engineering</option>
                                  <option value="Electrical Engineering">Electrical Engineering</option>
                                  <option value="Mechanical Engineering">Mechanical Engineering</option>
                                  <option value="Civil Engineering">Civil Engineering</option>
                              </select>
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="phone"><h4>Academic Year</h4></label>
                              <select class="form-control" name="AYear">
                                  <option value="">Select</option>
                                  <option value="First Year">First Year</option>
                                  <option value="Direct Second Year">Direct Second Year</option>
                                  <option value="Second Year">Second Year</option>
                                  <option value="Third Year">Third Year</option>
                                  <option value="Fourth Year">Fourth Year</option>
                              </select>
                          </div>
                      </div>


                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="mother_tongue"><h4>Mother Tongue</h4></label>
                              <select class="form-control" name="mother_tongue">
                                  <option value="">Select</option>
                                  <option value="Marathi">Marathi</option>
                                  <option value="English">English</option>
                                  <option value="Hindi">Hindi</option>
                                </select>
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="religion"><h4>Religion</h4></label>
                              <select class="form-control" name="religion">
                                  <option value="">Select</option>
                                  <option value="Buddhist">Buddhist</option>
                                  <option value="Christian">Christian</option>
                                  <option value="Hindu">Hindu</option>
                                  <option value="Islam">Islam</option>
                                  <option value="Jain">Jain</option>
                                  <option value="Sikh">Sikh</option>
                                  <option value="Zoroastrian">Zoroastrian</option>                    
                              </select>
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="religion"><h4>Caste</h4></label>
                              <select class="form-control" name="caste">
                                  <option value="">Select</option>
                                  <option value="EBC">EBC</option>
                                  <option value="">NT</option>
                                  <option value="NT">Economically Weaker Section(EWS)</option>
                                  <option value="EWS">Social and Educationally Backward Classes(SEBC)</option>
                                  <option value="NT-DT">NT-DT</option>
                                  <option value="VJ">VJ</option>
                                  <option value="VJ/NT">VJ/NT</option>
                                  <option value="NRI">NRI</option>
                                  <option value="PIO">PIO</option>
                                  <option value="MS">Management Sponsered</option>
                                  <option value="Special">Special</option>
                                  <option value="PH">PH</option>
                                  <option value="Ex">Ex-ser</option>
                                  <option value="EBC">Open-EBC</option>
                                  <option value="SBC">SBC</option>
                                  <option value="OBC">OBC</option>
                                  <option value="NT-D">NT-D</option>
                                  <option value="NT-C">NT-C</option>
                                  <option value="NT-B">NT-B</option>
                                  <option value="DT">DT (A)</option>
                                  <option value="ST">ST</option>
                                  <option value="SC">SC</option>
                                  <option value="Open">Open</option>                    
                              </select>
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="sub_caste"><h4>Sub Caste</h4></label>
                              <input type="text" class="form-control" name="sub_caste"  placeholder="Enter your sub caste">
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
                              <label for="phone"><h4>Country</h4></label>
                              <select id="listBox1" class="form-control" class="select_check" name="country" onchange='selct_country(this.value)'></select>
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="phone"><h4>State</h4></label>
                              <select id="listBox" name="state" class="form-control" class="select_check" onchange='selct_state(this.value)'>
                              <option value="">Select</option>
                              </select>
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="phone"><h4>District</h4></label>
                              <select id='secondlist' class="form-control" class="select_check" name="district">
                              <option value="">Select</option>
                              </select>                          
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="phone"><h4>Pin</h4></label>
                              <input type="pin" class="form-control" maxlength="6" minlength="6" name="pin"  placeholder="Enter Password">
                          </div>
                      </div>


                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="phone"><h4>Profile Image</h4></label>
                              <input type="file" class="form-control" name="profile_image"  placeholder="upload profile">
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="phone"><h4>Sign Image</h4></label>
                              <input type="file" class="form-control" name="profile_sign"  placeholder="upload Sign">
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