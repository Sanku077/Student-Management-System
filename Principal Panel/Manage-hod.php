<?php 
session_start();
 if (!isset($_SESSION["email"])) {
   header("location: login.php");
 }
include'includes/dbh.inc.php';

if(isset($_GET['id']))
{
$adminid=$_GET['id'];
$msg=mysqli_query($conn,"delete from hod_data where id='$adminid'");
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
   </head>
<body>
<?php 
  include_once "header.php";
 ?>
  <table class="table table-striped">
<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Full Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Post</th>
      <th scope="col">Gender</th>
      <th scope="col">Profile</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $ret=mysqli_query($conn,"select * from hod_data");
                $cnt=1;
                while($row=mysqli_fetch_array($ret))
                {?>
    <tr>
      <th scope="row"><?php echo $cnt;?></th>
      <td><?php echo $row['full_name'];?></td>
      <td><?php echo $row['email'];?></td>
      <td><?php echo $row['Mobile'];?></td>
      <td><?php echo $row['Post'];?></td>
      <td><?php echo $row['Branch'];?></td>
      <td><img src='<?php echo "includes/".$row["profile_image"]?>' width=50 height=50></td>
      <td>
        <a href="update-profile.php?uid=<?php echo $row['id'];?>">
        <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button></a>
        <a href="Manage-hod.php?id=<?php echo $row['id'];?>">
        <button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
      </td>
      <?php $cnt=$cnt+1; }?>

    </tr>

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
