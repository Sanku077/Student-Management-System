<?php 
session_start();
 if (!isset($_SESSION["email"])) {
   header("location: login.php");
 }
include'includes/dbh.inc.php';

if(isset($_POST['Submit']))
{
  $Cname=$_POST['full_name'];
  $Cmobile=$_POST['Mobile'];
  $CGender=$_POST['Gender'];
  $Cemail = $_POST['email'];
  $CDOB=$_POST['DOB'];
  $uid=$_SESSION['id'];
  $query=mysqli_query($conn,"update Principal_data set full_name='$Cname' ,Mobile='$Cmobile',email = '$Cemail' , Gender='$CGender',DOB='$CDOB' where id='$uid'");
      $_SESSION['full_name'] = $Cname;
      $_SESSION['Mobile']=$Cmobile;
      $_SESSION['Gender']=$CGender;
      $_SESSION['DOB']=$CDOB;
      $_SESSION['msg']="Profile Updated successfully";
      header("Refresh:0");

    
  }

if(isset($_POST['Submit1']))
{
  $Cpaddress=$_POST['paddress'];
  $Ctaddress=$_POST['taddress'];
  $uid=$_SESSION['id'];
$query=mysqli_query($conn,"update Principal_data set paddress='$Cpaddress' ,taddress='$Ctaddress' where id='$uid'");
  $_SESSION['paddress'] = $Cpaddress;
  $_SESSION['taddress']=$Ctaddress;
$_SESSION['msg']="Profile Updated successfully";
header("Refresh:0");
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
      <div class="col-sm-3">
      <div class="text-center">
        <img src="<?php echo "includes/".$_SESSION['profile_image']; ?>" class="avatar  img-thumbnail" alt="avatar" width = "100" height="100">
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
                              <input type="text" class="form-control" name="full_name" placeholder="first name" value="<?php echo $_SESSION['full_name']; ?>">
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Email</h4></label>
                              <input type="text" class="form-control" name="email" placeholder="last name" value="<?php echo $_SESSION['email']; ?>">
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="phone"><h4>Date of Birth</h4></label>
                              <input type="date" class="form-control" name="DOB"  placeholder="Enter date of birth" value="<?php echo $_SESSION['DOB'];?>">
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Mobile</h4></label>
                              <input type="phone" class="form-control" name="Mobile" id="Mobile" placeholder="enter mobile number" value="<?php echo $_SESSION['Mobile']; ?>" >
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="Post"><h4>Post</h4></label>
                              <input type="Post" class="form-control" name="Post" id="Post" value="<?php echo $_SESSION['Post']; ?>" readonly>
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="email"><h4>Gender</h4></label>
                              <select type="text" class="form-control" name="Gender" id="Gender">
                                <option value="<?php echo $_SESSION['Gender']; ?>">Male</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Others</option>
                              </select>
                          </div>
                      </div>

                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                                <input type="submit" name="Submit" class="btn  btn-success" class="btn btn-primary">
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
                              <input type="text" class="form-control" name="paddress" placeholder="Enter Permanent Address" value="<?php echo $_SESSION['paddress'] ?>">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Temporary Address</h4></label>
                              <input type="text" class="form-control" name="taddress" placeholder="Enter Temporary Address" value="<?php echo $_SESSION['taddress'] ?>">
                          </div>
                      </div>
          
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                                <input type="submit" name="Submit1" class="btn  btn-success" class="btn btn-primary">
                            </div>
                      </div>
                </form>
               
             </div>
             <div class="tab-pane" id="settings">
                
                
                  <hr>
                  <form class="form" action="##" method="post" id="registrationForm">
                      <div class="form-group"> 
                          <div class="col-xs-6">
                              <label for="password"><h4>Old Password</h4></label>
                              <input type="password" class="form-control" name="oldpass" id="password" placeholder="Enter Old Password" readonly="">
                          </div>
                      </div>

                      <div class="form-group"> 
                          <div class="col-xs-6">
                              <label for="password"><h4>Password</h4></label>
                              <input type="password" class="form-control" name="newpass" id="password" placeholder="Enter new Password" readonly>
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                            <label for="password2"><h4>Verify</h4></label>
                              <input type="password" class="form-control" name="confirmpassword" id="password2" placeholder="Enter Password repeat" readonly >
                          </div>
                      </div>

                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                                <input type="submit" name="Submit1" class="btn  btn-success" class="btn btn-primary">
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