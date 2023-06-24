<?php 
session_start();
 if (!isset($_SESSION["email"])) {
   header("location: login.php");
 }
include'includes/dbh.inc.php';

if(isset($_GET['id']))
{
$adminid=$_GET['id'];
$msg=mysqli_query($conn,"delete from student_data where id='$adminid'");
if($msg)
{
echo "<script>alert('Data deleted');</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>SM CODE</title>
    <link rel="stylesheet" href="css/style_1.css">
    <link rel="stylesheet" type="text/css" href="css/Bootstrap.css">
    <!-- Boxicons CDN Link -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
      <div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Sort the Data</a></li>              
              </ul>

          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  <form class="form" action="" onSubmit="return valid();" method="post" id="registrationForm">
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
                              <label for="phone"><h4>AYear</h4></label>
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


  <table class="table table-striped">
<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Full Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">AYear</th>
      <th scope="col">Branch</th>
      <th scope="col">Profile</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
<?php 
      if (isset($_POST["Submit"])) {
         $name = $_POST['full_name'];
         $email = $_POST['email'];
         $AYear = $_POST['AYear'];
         $Gender = $_POST['Gender'];

        if($name != "" || $email != "" || $AYear != "" || $Gender != "" ){
          $query = "SELECT * FROM student_data WHERE full_name = '$name' OR AYear = '$AYear' || Gender = '$Gender' OR email = '$email'";
          $data = mysqli_query($conn,$query);
          if (mysqli_num_rows($data) > 0) {
            $cnt=1;
            while($row = mysqli_fetch_assoc($data)){
            ?>
            <tr>
              <th scope="row"><?php echo $cnt;?></th>
              <td><?php echo $row['full_name'];?></td>
              <td><?php echo $row['email'];?></td>
              <td><?php echo $row['Mobile'];?></td>
              <td><?php echo $row['AYear'];?></td>
              <td><?php echo $row['Branch'];?></td>
              <td><img src='<?php echo "includes/".$row["profile_image"]?>' width=50 height=50></td>
              <td>
                <a href="update-profile.php?uid=<?php echo $row['id'];?>">
                <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button></a>
                <a href="Manage-student.php?id=<?php echo $row['id'];?>">
                <button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
              </td>
            </tr>            
            <?php 
            $cnt=$cnt+1;
            }
          }
          else{
             ?>
             <tr>
               <td>Record not Found!!</td>
             </tr>
             <?php 
          }
        }
      } else{
        $ret=mysqli_query($conn,"select * from student_data");
                $cnt=1;
                while($row=mysqli_fetch_array($ret))
                {?>
    <tr>
      <th scope="row"><?php echo $cnt;?></th>
      <td><?php echo $row['full_name'];?></td>
      <td><?php echo $row['email'];?></td>
      <td><?php echo $row['Mobile'];?></td>
      <td><?php echo $row['AYear'];?></td>
      <td><?php echo $row['Branch'];?></td>
      <td><img src='<?php echo "includes/".$row["profile_image"]?>' width=50 height=50></td>
      <td>
        <a href="update-profile.php?uid=<?php echo $row['id'];?>">
        <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button></a>
        <a href="Manage-student.php?id=<?php echo $row['id'];?>">
        <button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
      </td>
      <?php $cnt=$cnt+1; }?>

    </tr>
    <?php
      }
     ?>
  </tbody>

</table>

    <?php 

     ?>

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
