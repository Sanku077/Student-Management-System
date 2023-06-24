<?php 

if (isset($_POST["Submit"])) {
	$fullname=$_POST["full_name"];
	$email=$_POST["email"];
	$Mobile=$_POST["Mobile"];
	$DOB=$_POST["DOB"];
	$Gender = $_POST['Gender'];
	$paddress = $_POST['paddress'];
	$taddress = $_POST['taddress'];
	$password=$_POST["password"];
	$password1=$_POST["password1"];
	$Post = $_POST['Post'];
	$profile=$_FILES["profile_image"];

	require_once "dbh.inc.php";
	require_once "function-principal.php";

/* For profile Image */
	$profileName = $_FILES['profile_image']['name'];
	$profileTempName = $_FILES['profile_image']['tmp_name'];
	$profileSize = $_FILES['profile_image']['size'];
	$profileError = $_FILES['profile_image']['error'];
	$profileType = $_FILES['profile_image']['type'];

	$profile_ext = explode('.', $profileName);
	$profileActualExt = strtolower(end($profile_ext));

	$allowArr = array('jpg','jpeg','png');
	if (in_array($profileActualExt, $allowArr)) {
		if ($profileError === 0 ) {
			if ($profileSize < 500000) {
				$profile_destination = 'Profile/'.$profileName;
				move_uploaded_file($profileTempName, $profile_destination);
			} else{
				header("location: ../Add-Principal.php?error=profilesize");
				exit();
			}
		} else{
			header("location: ../Add-Principal.php?error=profileerror");
			exit();
		}
	} else {
		header("location: ../Add-Principal.php?error=profiletype");
		exit();
	}




	if (emptyInputSignup($fullname,$email,$Mobile,$DOB,$Gender,$paddress,$taddress,$password,$password1,$Post,$profile_destination) !== false) {
		header("location: ../Add-Principal.php?error=emptyinput");
		exit();
	}
	if (invalidName($fullname) !== false) 
	{
		header("location: ../Add-Principal.php?error=invalidName");
		exit();
	}
	if (invalidEmail($email) !== false) 
	{
		header("location: ../Add-Principal.php?error=invalidEmail");
		exit();
	}
	if (pwdMatch($password,$password1) !== false) 
	{
		header("location: ../Add-Principal.php?error=passwordNotMatch");
		exit();
	}
	/*Already exist checking*/
	if (emailExist($conn,$email) !== false) 
	{
		header("location: ../Add-Principal.php?error=emailTakan");
		exit();
	}
	if (mobileExist($conn,$Mobile) !== false) 
	{
		header("location: ../Add-Principal.php?error=MobileTakan");
		exit();
	}

	createUser($conn,$fullname,$email,$Mobile,$DOB,$Gender,$paddress,$taddress,$password,$password1,$Post,$profile_destination);

}
else{
	header("location: ../Add-Principal.php");
	exit();
}



