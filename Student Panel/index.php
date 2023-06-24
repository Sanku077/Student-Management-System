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
   <title>Dashboard</title>
 </head>
 <body>
 </body>
 </html>
<?php 
  include_once 'header.php';

 ?>
<?php 
include_once 'cards.php';
 ?>
 <?php 

include_once 'announcement.php';
  ?>



