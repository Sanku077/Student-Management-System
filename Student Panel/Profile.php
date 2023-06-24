<?php 
session_start();
 if (!isset($_SESSION["email"])) {
   header("location: login.php");
 }
include'includes/dbh.inc.php';

if(isset($_POST['Submit']))
{
  $fname=$_POST['full_name'];
  $lname=$_POST['Mobile'];
  $contact=$_POST['email'];
  $DOB=$_POST['DOB'];
  $uid=intval($_GET['id']);
$query=mysqli_query($conn,"update student_data set full_name='$fname' ,Mobile='$lname' , email='$email',DOB='$DOB' where id='$uid'");
$_SESSION['msg']="Profile Updated successfully";
}
?>

<!DOCTYPE html>
<html>


<head>
  <title>Student Profile</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<?php 
include_once 'header.php';

 ?>
<hr>
<div class="container bootstrap snippet" style="margin-top:50px;">
    <div class="row">
      <div class="col-sm-10"><h1></h1></div>
      
    </div>
    <div class="row">
      <div class="col-sm-3">
      <div class="text-center">
        <img src="<?php echo "../Staff Panel/includes/".$_SESSION['profile_image']; ?>" class="avatar  img-thumbnail" alt="avatar" width = "100" height="100">
        <h6>Upload a different photo...</h6>
        <input type="file" class="text-center center-block file-upload" disabled="">
      </div></hr><br>
        </div>
      <div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Personal Details</a></li>
                <li><a data-toggle="tab" href="#messages">Address Details</a></li>
                <li><a data-toggle="tab" href="#settings">Security</a></li>
              </ul>
 
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  <form class="form" action="##" method="post" id="registrationForm">
                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="first_name"><h4>First name</h4></label>
                              <input type="text" class="form-control" name="full_name" placeholder="first name" value="<?php echo $_SESSION['full_name']; ?>" readonly>
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Email</h4></label>
                              <input type="text" class="form-control" name="email" placeholder="last name" value="<?php echo $_SESSION['email']; ?>" readonly>
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="phone"><h4>Date of Birth</h4></label>
                              <input type="date" class="form-control" name="DOB"  placeholder="Enter date of birth" value="<?php echo $_SESSION['DOB'];?>" readonly>
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Mobile</h4></label>
                              <input type="phone" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" value="<?php echo $_SESSION['Mobile']; ?>" readonly>
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="Post"><h4>Academic Year</h4></label>
                              <input type="Post" class="form-control" name="AYear" id="Post" value="<?php echo $_SESSION['AYear']; ?>" readonly>
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="Post"><h4>Branch</h4></label>
                              <input type="Post" class="form-control" name="Branch" id="Post" value="<?php echo $_SESSION['Branch']; ?>" readonly>
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="email"><h4>Gender</h4></label>
                              <input type="text" class="form-control" name="gender"  value="<?php echo $_SESSION['gender']; ?>" readonly>
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="email"><h4>Mother Tongue</h4></label>
                              <input type="text" class="form-control" name="mother_tongue" id="email" value="<?php echo $_SESSION['mother_tongue']; ?>" readonly>
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="email"><h4>Religion</h4></label>
                              <input type="text" class="form-control" name="religion" id="email" value="<?php echo $_SESSION['religion']; ?>" readonly>
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="email"><h4>Caste</h4></label>
                              <input type="text" class="form-control" name="caste" id="email" value="<?php echo $_SESSION['caste']; ?>" readonly>
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="email"><h4>Sub Caste</h4></label>
                              <input type="text" class="form-control" name="sub_caste" id="email" value="<?php echo $_SESSION['sub_caste']; ?>" readonly>
                          </div>
                      </div>



                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                                <button class="btn  btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                <button class="btn " type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
                </form>
              
              <hr>
              
             </div>
             <div class="tab-pane" id="messages">
               <h2></h2>
               
               <hr>
                  <form class="form" action="##" method="post" id="registrationForm">
                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="first_name"><h4>Permanent Address</h4></label>
                              <input type="text" class="form-control" name="paddress" placeholder="first name" value="<?php echo $_SESSION['paddress'] ?>" readonly>
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Temporary Address</h4></label>
                              <input type="text" class="form-control" name="taddress" placeholder="last name" value="<?php echo $_SESSION['paddress'] ?>" readonly>
                          </div>
                      </div>

                      <div class="form-group"> 
                          <div class="col-xs-6">
                            <label for="last_name"><h4>District</h4></label>
                              <input type="text" class="form-control" name="district" placeholder="last name" value="<?php echo $_SESSION['district'] ?>" readonly>
                          </div>
                      </div>

                      <div class="form-group"> 
                          <div class="col-xs-6">
                            <label for="last_name"><h4>State</h4></label>
                              <input type="text" class="form-control" name="state" placeholder="last name" value="<?php echo $_SESSION['state'] ?>" readonly>
                          </div>
                      </div>

                      <div class="form-group"> 
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Country</h4></label>
                              <input type="text" class="form-control" name="State" placeholder="last name" value="<?php echo $_SESSION['country'] ?>" readonly>
                          </div>
                      </div>

                      <div class="form-group"> 
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Pin</h4></label>
                              <input type="text" class="form-control" name="pin" placeholder="last name" value="<?php echo $_SESSION['pin'] ?>" readonly>
                          </div>
                      </div>
          
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                                <button class="btn  btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                <button class="btn " type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
                </form>
               
             </div>
             <div class="tab-pane" id="settings">
                
                
                  <hr>
                  <form class="form" action="##" method="post" id="registrationForm">
                      <div class="form-group"> 
                          <div class="col-xs-6">
                              <label for="password"><h4>Password</h4></label>
                              <input type="password" class="form-control" name="password" id="password" placeholder="Enter new Password" readonly="">
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                            <label for="password2"><h4>Verify</h4></label>
                              <input type="password" class="form-control" name="password2" id="password2" placeholder="Enter Password repeat" readonly="">
                          </div>
                      </div>

                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                                <button class="btn  btn-success pull-right" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                <!--<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>-->
                            </div>
                      </div>
                </form>
              </div>
               
              </div>
          </div>

        </div>
    </div>
</body>
</html>