<?php 
session_start();
if (isset($_POST["Submit"])) {
	$fullname = $_SESSION['full_name'];
	$email=$_SESSION['email'];
	$content = $_POST['content'];
	$heading= $_POST['heading'];
	$profile=$_FILES['image'];
	$post = $_SESSION['Post'];


	require_once "dbh.inc.php";
	require_once "function-post.php";

/* For profile Image*/	
	$profileName = $_FILES['image']['name'];
	$profileTempName = $_FILES['image']['tmp_name'];
	$profileSize = $_FILES['image']['size'];
	$profileError = $_FILES['image']['error'];
	$profileType = $_FILES['image']['type'];

	$profile_ext = explode('.', $profileName);
	$profileActualExt = strtolower(end($profile_ext));

	$allowArr = array('jpg','jpeg','png','pdf');
		if (in_array($profileActualExt, $allowArr)) {
			if ($profileError === 0 ) {
				if ($profileSize < 5000000) {
					$profile_destination = 'announce/'.$profileName;
					move_uploaded_file($profileTempName, $profile_destination);
				} else{
					header("location: ../Post.php?error=profilesize");
					exit();
				}
			} else {
				header("location: ../Post.php?error=profileerror");
				exit();
			}
		} else {
			header("location: ../Post.php?error=profiletype");
			exit();
		}
		
	

	if (emptyInputPost($fullname,$heading,$content,$profile_destination,$post) !== false) {
		header("location: ../Post.php?error=emptyinput");
		exit();
	}
	createPost($conn,$fullname,$heading,$content,$profile_destination,$post);

}
else{
	header("location: ../Post.php");
	exit();
}



